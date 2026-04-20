<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\AssignmentSubmission;
use App\Models\Course;
use App\Models\CourseAssignment;
use App\Models\Enrollment;
use App\Models\Lesson;
use App\Models\LessonProgress;
use App\Models\QuizAttempt;
use App\Models\StudentReview;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class StudentController extends Controller
{
    public function index()
    {
        $student = request()->user();

        $stats = $this->buildStats($student);
        $recentReviews = $student->studentReviews()
            ->with('course:id,title,slug')
            ->latest()
            ->take(5)
            ->get();

        $recentEnrollments = $student->enrollments()
            ->with('course:id,title,slug,thumbnail')
            ->latest('enrolled_at')
            ->take(6)
            ->get();

        return view('dashboard.student.index', compact('stats', 'recentReviews', 'recentEnrollments'));
    }

    public function profile(Request $request)
    {
        $student = $request->user();
        $stats = $this->buildStats($student);

        return view('dashboard.student.profile', compact('student', 'stats'));
    }

    public function enrolledCourses(Request $request)
    {
        $student = $request->user();

        $enrollments = $student->enrollments()
            ->with(['course.category', 'course.instructor', 'lastLesson'])
            ->latest('enrolled_at')
            ->paginate(12);

        $summary = [
            'all' => $student->enrollments()->count(),
            'active' => $student->enrollments()->where('status', 'active')->count(),
            'completed' => $student->enrollments()->where('status', 'completed')->count(),
        ];

        return view('dashboard.student.enrolled-courses', compact('enrollments', 'summary'));
    }

    public function reviews(Request $request)
    {
        $student = $request->user();

        $givenReviews = $student->studentReviews()
            ->with('course:id,title,slug')
            ->latest()
            ->paginate(10);

        $averageRating = round((float) $student->studentReviews()->avg('rating'), 2);

        $enrolledCourses = Course::query()
            ->select('courses.id', 'courses.title')
            ->join('enrollments', 'enrollments.course_id', '=', 'courses.id')
            ->where('enrollments.user_id', $student->id)
            ->orderBy('courses.title')
            ->get();

        return view('dashboard.student.reviews', compact('givenReviews', 'averageRating', 'enrolledCourses'));
    }

    public function myQuizAttempts(Request $request)
    {
        $student = $request->user();

        $quizAttempts = $student->quizAttempts()
            ->with('course:id,title,slug')
            ->latest('attempted_at')
            ->latest()
            ->paginate(15);

        $quizSummary = [
            'total' => $student->quizAttempts()->count(),
            'passed' => $student->quizAttempts()->where('status', 'passed')->count(),
            'failed' => $student->quizAttempts()->where('status', 'failed')->count(),
        ];

        return view('dashboard.student.my-quiz-attempts', compact('quizAttempts', 'quizSummary'));
    }

    public function assignments(Request $request)
    {
        $student = $request->user();

        $submissions = $student->assignmentSubmissions()
            ->with(['assignment.course:id,title,slug'])
            ->latest('submitted_at')
            ->latest()
            ->paginate(15);

        $pendingAssignments = CourseAssignment::query()
            ->with('course:id,title,slug')
            ->whereHas('course.enrollments', fn ($query) => $query->where('user_id', $student->id))
            ->whereDoesntHave('submissions', function ($query) use ($student) {
                $query->where('user_id', $student->id)
                    ->whereIn('status', ['submitted', 'graded']);
            })
            ->latest()
            ->take(10)
            ->get();

        return view('dashboard.student.assignments', compact('submissions', 'pendingAssignments'));
    }

    public function settings(Request $request)
    {
        return view('dashboard.student.settings', ['student' => $request->user()]);
    }

    public function updateProfile(Request $request)
    {
        $student = $request->user();

        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', Rule::unique('users', 'username')->ignore($student->id)],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($student->id)],
            'phone' => ['nullable', 'string', 'max:30'],
            'occupation' => ['nullable', 'string', 'max:255'],
            'bio' => ['nullable', 'string', 'max:2000'],
            'avatar' => ['nullable', 'url', 'max:2048'],
        ]);

        $student->fill([
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'],
            'name' => trim($validated['first_name'].' '.$validated['last_name']),
            'username' => $validated['username'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'occupation' => $validated['occupation'] ?? null,
            'bio' => $validated['bio'] ?? null,
            'avatar' => $validated['avatar'] ?? $student->avatar,
        ])->save();

        return back()->with('status', 'Profile updated successfully.');
    }

    public function updatePassword(Request $request)
    {
        $student = $request->user();

        $validated = $request->validate([
            'current_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if (! Hash::check($validated['current_password'], $student->password)) {
            throw ValidationException::withMessages([
                'current_password' => 'The current password is incorrect.',
            ]);
        }

        $student->update(['password' => $validated['password']]);

        return back()->with('status', 'Password updated successfully.');
    }

    public function enroll(Request $request)
    {
        $student = $request->user();

        $validated = $request->validate([
            'course_id' => [
                'required',
                Rule::exists('courses', 'id')->where(fn ($query) => $query->where('is_published', true)),
            ],
        ]);

        $enrollment = Enrollment::firstOrCreate(
            [
                'user_id' => $student->id,
                'course_id' => $validated['course_id'],
            ],
            [
                'status' => 'active',
                'enrolled_at' => now(),
                'progress_percentage' => 0,
            ]
        );

        $status = $enrollment->wasRecentlyCreated
            ? 'Course enrolled successfully.'
            : 'You are already enrolled in this course.';

        return back()->with('status', $status);
    }

    public function updateLessonProgress(Request $request, Enrollment $enrollment)
    {
        $student = $request->user();

        if ($enrollment->user_id !== $student->id) {
            abort(403);
        }

        $validated = $request->validate([
            'lesson_id' => ['required', 'integer', 'exists:lessons,id'],
            'is_completed' => ['required', 'boolean'],
            'last_watched_second' => ['nullable', 'integer', 'min:0'],
        ]);

        $lesson = Lesson::query()
            ->whereKey($validated['lesson_id'])
            ->whereHas('module', fn ($query) => $query->where('course_id', $enrollment->course_id))
            ->firstOrFail();

        $isCompleted = (bool) $validated['is_completed'];

        LessonProgress::updateOrCreate(
            [
                'enrollment_id' => $enrollment->id,
                'lesson_id' => $lesson->id,
            ],
            [
                'is_completed' => $isCompleted,
                'last_watched_second' => $validated['last_watched_second'] ?? 0,
                'completed_at' => $isCompleted ? now() : null,
            ]
        );

        $totalLessons = Lesson::query()
            ->whereHas('module', fn ($query) => $query->where('course_id', $enrollment->course_id))
            ->count();

        $completedLessons = $enrollment->lessonProgress()->where('is_completed', true)->count();
        $progressPercentage = $totalLessons > 0
            ? (int) round(($completedLessons / $totalLessons) * 100)
            : 0;

        $enrollment->update([
            'progress_percentage' => $progressPercentage,
            'status' => $progressPercentage >= 100 ? 'completed' : 'active',
            'completed_at' => $progressPercentage >= 100 ? now() : null,
            'last_lesson_id' => $lesson->id,
        ]);

        return back()->with('status', 'Lesson progress updated.');
    }

    public function submitReview(Request $request)
    {
        $student = $request->user();

        $validated = $request->validate([
            'course_id' => ['required', 'integer', 'exists:courses,id'],
            'rating' => ['required', 'integer', 'min:1', 'max:5'],
            'review' => ['nullable', 'string', 'max:2000'],
        ]);

        $isEnrolled = Enrollment::query()
            ->where('user_id', $student->id)
            ->where('course_id', $validated['course_id'])
            ->exists();

        if (! $isEnrolled) {
            throw ValidationException::withMessages([
                'course_id' => 'You must be enrolled in this course to submit a review.',
            ]);
        }

        $review = StudentReview::updateOrCreate(
            [
                'user_id' => $student->id,
                'course_id' => $validated['course_id'],
            ],
            [
                'rating' => $validated['rating'],
                'review' => $validated['review'] ?? null,
                'is_published' => true,
            ]
        );

        $status = $review->wasRecentlyCreated
            ? 'Review submitted successfully.'
            : 'Review updated successfully.';

        return back()->with('status', $status);
    }

    public function destroyReview(Request $request, StudentReview $review)
    {
        if ($review->user_id !== $request->user()->id) {
            abort(403);
        }

        $review->delete();

        return back()->with('status', 'Review deleted successfully.');
    }

    public function submitAssignment(Request $request, CourseAssignment $assignment)
    {
        $student = $request->user();

        $isEnrolled = Enrollment::query()
            ->where('user_id', $student->id)
            ->where('course_id', $assignment->course_id)
            ->exists();

        if (! $isEnrolled) {
            throw ValidationException::withMessages([
                'assignment' => 'You must be enrolled in this course to submit this assignment.',
            ]);
        }

        $validated = $request->validate([
            'submission_text' => ['nullable', 'string', 'max:10000', 'required_without:attachment_url'],
            'attachment_url' => ['nullable', 'url', 'max:2048', 'required_without:submission_text'],
        ]);

        AssignmentSubmission::updateOrCreate(
            [
                'course_assignment_id' => $assignment->id,
                'user_id' => $student->id,
            ],
            [
                'submission_text' => $validated['submission_text'] ?? null,
                'attachment_url' => $validated['attachment_url'] ?? null,
                'status' => 'submitted',
                'submitted_at' => now(),
            ]
        );

        return back()->with('status', 'Assignment submitted successfully.');
    }

    private function buildStats(User $student): array
    {
        $enrollmentsQuery = $student->enrollments();

        return [
            'total_enrolled' => (clone $enrollmentsQuery)->count(),
            'active_courses' => (clone $enrollmentsQuery)->where('status', 'active')->count(),
            'completed_courses' => (clone $enrollmentsQuery)
                ->where(function ($query) {
                    $query->where('status', 'completed')
                        ->orWhere('progress_percentage', '>=', 100);
                })
                ->count(),
            'average_progress' => (int) round((clone $enrollmentsQuery)->avg('progress_percentage') ?? 0),
        ];
    }
}
