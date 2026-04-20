<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Course;
use App\Models\CourseAssignment;
use App\Models\CourseModule;
use App\Models\Enrollment;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StudentBackendTest extends TestCase
{
    use RefreshDatabase;

    public function test_student_dashboard_loads_backend_data(): void
    {
        $student = User::factory()->create(['role' => 'student']);
        $course = $this->createPublishedCourse();

        Enrollment::create([
            'user_id' => $student->id,
            'course_id' => $course->id,
            'status' => 'active',
            'enrolled_at' => now(),
            'progress_percentage' => 40,
        ]);

        $response = $this->actingAs($student)->get(route('student.dashboard'));

        $response->assertOk();
        $response->assertViewHas('stats', function (array $stats) {
            return $stats['total_enrolled'] === 1
                && $stats['active_courses'] === 1;
        });
    }

    public function test_student_can_enroll_a_course_only_once(): void
    {
        $student = User::factory()->create(['role' => 'student']);
        $course = $this->createPublishedCourse();

        $this->actingAs($student)->post(route('student.enrollments.store'), [
            'course_id' => $course->id,
        ])->assertRedirect();

        $this->actingAs($student)->post(route('student.enrollments.store'), [
            'course_id' => $course->id,
        ])->assertRedirect();

        $this->assertDatabaseCount('enrollments', 1);
    }

    public function test_student_can_submit_review_for_enrolled_course(): void
    {
        $student = User::factory()->create(['role' => 'student']);
        $course = $this->createPublishedCourse();

        Enrollment::create([
            'user_id' => $student->id,
            'course_id' => $course->id,
            'status' => 'active',
            'enrolled_at' => now(),
            'progress_percentage' => 10,
        ]);

        $this->actingAs($student)->post(route('student.reviews.store'), [
            'course_id' => $course->id,
            'rating' => 5,
            'review' => 'Very practical and useful.',
        ])->assertRedirect();

        $this->assertDatabaseHas('student_reviews', [
            'user_id' => $student->id,
            'course_id' => $course->id,
            'rating' => 5,
        ]);
    }

    public function test_student_can_submit_assignment_when_enrolled(): void
    {
        $student = User::factory()->create(['role' => 'student']);
        $course = $this->createPublishedCourse();

        Enrollment::create([
            'user_id' => $student->id,
            'course_id' => $course->id,
            'status' => 'active',
            'enrolled_at' => now(),
            'progress_percentage' => 20,
        ]);

        $assignment = CourseAssignment::create([
            'course_id' => $course->id,
            'title' => 'Build course project',
            'description' => 'Submit your implementation notes.',
            'total_marks' => 100,
            'due_at' => now()->addDays(7),
        ]);

        $this->actingAs($student)->post(route('student.assignments.submit', $assignment), [
            'submission_text' => 'Completed with API + UI integration.',
        ])->assertRedirect();

        $this->assertDatabaseHas('assignment_submissions', [
            'course_assignment_id' => $assignment->id,
            'user_id' => $student->id,
            'status' => 'submitted',
        ]);
    }

    public function test_student_can_update_lesson_progress_and_complete_course(): void
    {
        $student = User::factory()->create(['role' => 'student']);
        $course = $this->createPublishedCourse();

        $module = CourseModule::create([
            'course_id' => $course->id,
            'title' => 'Module A',
            'sort_order' => 1,
        ]);

        $lesson = Lesson::create([
            'course_module_id' => $module->id,
            'title' => 'Lesson 1',
            'slug' => 'lesson-1',
            'duration_minutes' => 10,
            'sort_order' => 1,
        ]);

        $enrollment = Enrollment::create([
            'user_id' => $student->id,
            'course_id' => $course->id,
            'status' => 'active',
            'enrolled_at' => now(),
            'progress_percentage' => 0,
        ]);

        $this->actingAs($student)->post(route('student.enrollments.progress', $enrollment), [
            'lesson_id' => $lesson->id,
            'is_completed' => true,
            'last_watched_second' => 600,
        ])->assertRedirect();

        $this->assertDatabaseHas('lesson_progress', [
            'enrollment_id' => $enrollment->id,
            'lesson_id' => $lesson->id,
            'is_completed' => true,
        ]);

        $enrollment->refresh();

        $this->assertSame('completed', $enrollment->status);
        $this->assertSame(100, $enrollment->progress_percentage);
    }

    private function createPublishedCourse(): Course
    {
        $category = Category::create([
            'name' => 'Backend',
            'slug' => 'backend',
            'description' => 'Backend track',
            'is_active' => true,
            'sort_order' => 1,
        ]);

        return Course::create([
            'category_id' => $category->id,
            'title' => 'Laravel Mastery',
            'slug' => 'laravel-mastery',
            'short_description' => 'Learn production Laravel',
            'level' => 'beginner',
            'language' => 'English',
            'duration_hours' => 5,
            'price' => 0,
            'is_published' => true,
            'published_at' => now(),
        ]);
    }
}
