<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use App\Models\CourseAssignment;
use App\Models\Category;
use App\Models\Course;
use App\Models\CourseModule;
use App\Models\Enrollment;
use App\Models\Faq;
use App\Models\HomepageSection;
use App\Models\AssignmentSubmission;
use App\Models\Lesson;
use App\Models\LessonProgress;
use App\Models\PricingPlan;
use App\Models\QuizAttempt;
use App\Models\StudentReview;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PlatformContentSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::firstOrCreate(
            ['email' => 'admin@codecraft.test'],
            [
                'name' => 'CodeCraft Admin',
                'first_name' => 'CodeCraft',
                'last_name' => 'Admin',
                'username' => 'codecraft_admin',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'email_verified_at' => now(),
            ]
        );

        $instructor = User::firstOrCreate(
            ['email' => 'instructor@codecraft.test'],
            [
                'name' => 'Aisha Rahman',
                'first_name' => 'Aisha',
                'last_name' => 'Rahman',
                'username' => 'aisha_mentor',
                'password' => Hash::make('password'),
                'role' => 'instructor',
                'email_verified_at' => now(),
            ]
        );

        $student = User::firstOrCreate(
            ['email' => 'student@codecraft.test'],
            [
                'name' => 'Rafi Ahmed',
                'first_name' => 'Rafi',
                'last_name' => 'Ahmed',
                'username' => 'rafi_student',
                'password' => Hash::make('password'),
                'role' => 'student',
                'email_verified_at' => now(),
            ]
        );

        $categories = collect([
            ['name' => 'Web Development', 'description' => 'Frontend, backend, and full-stack engineering tracks.'],
            ['name' => 'Data Science & AI', 'description' => 'Machine learning, analytics, and AI engineering.'],
            ['name' => 'DevOps & Cloud', 'description' => 'Deployment pipelines, containers, and cloud architecture.'],
        ])->map(function (array $category, int $index) {
            return Category::updateOrCreate(
                ['slug' => Str::slug($category['name'])],
                [
                    'name' => $category['name'],
                    'description' => $category['description'],
                    'is_active' => true,
                    'sort_order' => $index + 1,
                ]
            );
        });

        $courses = [
            [
                'title' => 'Modern Laravel from Zero to Deployment',
                'category' => 'web-development',
                'level' => 'intermediate',
                'duration_hours' => 24.5,
                'price' => 79,
                'discounted_price' => 49,
                'short_description' => 'Build and ship a production Laravel platform with authentication, APIs, and queues.',
            ],
            [
                'title' => 'Practical Python for Data and Automation',
                'category' => 'data-science-ai',
                'level' => 'beginner',
                'duration_hours' => 18,
                'price' => 59,
                'discounted_price' => 39,
                'short_description' => 'Master Python by building automation scripts and data workflows from real-world tasks.',
            ],
            [
                'title' => 'Docker, CI/CD, and Cloud Foundations',
                'category' => 'devops-cloud',
                'level' => 'intermediate',
                'duration_hours' => 16,
                'price' => 69,
                'discounted_price' => 45,
                'short_description' => 'Deploy resilient applications with containerized workflows and automated pipelines.',
            ],
        ];

        $createdCourses = [];

        foreach ($courses as $courseData) {
            $category = $categories->firstWhere('slug', $courseData['category']);

            $course = Course::updateOrCreate(
                ['slug' => Str::slug($courseData['title'])],
                [
                    'category_id' => $category?->id,
                    'instructor_id' => $instructor->id,
                    'title' => $courseData['title'],
                    'short_description' => $courseData['short_description'],
                    'description' => $courseData['short_description'].' This course combines guided lessons, coding labs, and capstone projects tailored to industry-ready outcomes.',
                    'level' => $courseData['level'],
                    'language' => 'English',
                    'duration_hours' => $courseData['duration_hours'],
                    'price' => $courseData['price'],
                    'discounted_price' => $courseData['discounted_price'],
                    'is_published' => true,
                    'published_at' => now(),
                ]
            );

            $module = CourseModule::updateOrCreate(
                [
                    'course_id' => $course->id,
                    'title' => 'Kickoff and Fundamentals',
                ],
                [
                    'description' => 'Core concepts and setup workflow for this learning path.',
                    'sort_order' => 1,
                ]
            );

            Lesson::updateOrCreate(
                ['slug' => $course->slug.'-intro-lesson'],
                [
                    'course_module_id' => $module->id,
                    'title' => 'Welcome and Roadmap',
                    'summary' => 'Understand the course structure, outcomes, and project milestones.',
                    'content' => 'You will learn how to navigate this course and prepare your project workspace.',
                    'duration_minutes' => 12,
                    'is_free_preview' => true,
                    'sort_order' => 1,
                ]
            );

            $createdCourses[] = $course;
        }

        foreach ($createdCourses as $index => $course) {
            $isCompleted = $index === 0;

            $enrollment = Enrollment::updateOrCreate(
                [
                    'user_id' => $student->id,
                    'course_id' => $course->id,
                ],
                [
                    'status' => $isCompleted ? 'completed' : 'active',
                    'enrolled_at' => now()->subDays(30 - ($index * 7)),
                    'completed_at' => $isCompleted ? now()->subDays(5) : null,
                    'progress_percentage' => $isCompleted ? 100 : 35,
                ]
            );

            $courseLessons = Lesson::query()
                ->whereHas('module', fn ($query) => $query->where('course_id', $course->id))
                ->orderBy('sort_order')
                ->get();

            foreach ($courseLessons as $lessonIndex => $lesson) {
                $completed = $isCompleted || $lessonIndex === 0;

                LessonProgress::updateOrCreate(
                    [
                        'enrollment_id' => $enrollment->id,
                        'lesson_id' => $lesson->id,
                    ],
                    [
                        'is_completed' => $completed,
                        'last_watched_second' => $completed ? max(60, ($lesson->duration_minutes ?? 1) * 60) : 120,
                        'completed_at' => $completed ? now()->subDays(3) : null,
                    ]
                );
            }

            if ($courseLessons->isNotEmpty()) {
                $enrollment->update(['last_lesson_id' => $courseLessons->last()->id]);
            }
        }

        if (! empty($createdCourses)) {
            StudentReview::updateOrCreate(
                [
                    'user_id' => $student->id,
                    'course_id' => $createdCourses[0]->id,
                ],
                [
                    'rating' => 5,
                    'review' => 'Excellent structure and real-world project guidance.',
                    'is_published' => true,
                ]
            );

            QuizAttempt::updateOrCreate(
                [
                    'user_id' => $student->id,
                    'title' => 'Laravel Fundamentals Quiz',
                ],
                [
                    'course_id' => $createdCourses[0]->id,
                    'total_questions' => 10,
                    'answered_questions' => 10,
                    'correct_answers' => 8,
                    'status' => 'passed',
                    'score_percentage' => 80,
                    'attempted_at' => now()->subDays(4),
                ]
            );
        }

        foreach (array_slice($createdCourses, 0, 2) as $course) {
            $assignment = CourseAssignment::updateOrCreate(
                [
                    'course_id' => $course->id,
                    'title' => 'Capstone Task: '.$course->title,
                ],
                [
                    'description' => 'Submit a practical project artifact and a short implementation summary.',
                    'total_marks' => 100,
                    'due_at' => now()->addDays(14),
                ]
            );

            AssignmentSubmission::updateOrCreate(
                [
                    'course_assignment_id' => $assignment->id,
                    'user_id' => $student->id,
                ],
                [
                    'submission_text' => 'Implemented project requirements with clean routing and modular architecture.',
                    'status' => 'submitted',
                    'submitted_at' => now()->subDays(1),
                ]
            );
        }

        BlogPost::updateOrCreate(
            ['slug' => 'how-to-build-consistent-coding-habits'],
            [
                'user_id' => $admin->id,
                'title' => 'How to Build Consistent Coding Habits in 30 Days',
                'excerpt' => 'A practical system to stay consistent and ship projects even with a busy schedule.',
                'content' => 'Consistency in coding is less about motivation and more about systems. In this article, we break down a weekly operating rhythm that helps learners stay on track.',
                'is_published' => true,
                'published_at' => now(),
                'seo_title' => 'Consistent Coding Habits for Career Growth',
                'seo_description' => 'Learn practical routines to build coding consistency and accelerate your software career.',
            ]
        );

        $faqItems = [
            [
                'question' => 'Do I need prior coding experience?',
                'answer' => 'No. Beginner tracks start from fundamentals and include guided projects.',
            ],
            [
                'question' => 'Will I get certificates after completion?',
                'answer' => 'Yes. Certificates are issued after meeting project and assessment requirements.',
            ],
            [
                'question' => 'Can I switch learning tracks later?',
                'answer' => 'Yes. Your dashboard lets you enroll in additional tracks at any time.',
            ],
        ];

        foreach ($faqItems as $index => $faq) {
            Faq::updateOrCreate(
                ['question' => $faq['question']],
                [
                    'answer' => $faq['answer'],
                    'is_published' => true,
                    'sort_order' => $index + 1,
                ]
            );
        }

        Testimonial::updateOrCreate(
            ['name' => 'Nusrat Jahan'],
            [
                'role' => 'Junior Backend Developer',
                'company' => 'Techline Labs',
                'quote' => 'CodeCraft Academy helped me move from tutorial fatigue to job-ready projects in less than four months.',
                'rating' => 5,
                'is_published' => true,
                'sort_order' => 1,
            ]
        );

        HomepageSection::updateOrCreate(
            ['key' => 'hero'],
            [
                'title' => 'Launch Your Software Career with Real Projects',
                'subtitle' => 'Learn coding, AI, and product engineering through structured, mentor-led pathways.',
                'content' => [
                    'primary_cta' => 'Explore Courses',
                    'secondary_cta' => 'View Learning Paths',
                    'stats' => [
                        'active_learners' => '12,000+',
                        'career_tracks' => '18',
                    ],
                ],
                'is_active' => true,
                'sort_order' => 1,
            ]
        );

        PricingPlan::updateOrCreate(
            ['slug' => 'pro-monthly'],
            [
                'name' => 'Pro Monthly',
                'description' => 'Best for active learners building portfolio-ready projects.',
                'price' => 29,
                'billing_cycle' => 'monthly',
                'features' => [
                    'Unlimited course access',
                    'Project feedback',
                    'Career roadmap sessions',
                ],
                'is_popular' => true,
                'is_active' => true,
                'sort_order' => 1,
            ]
        );
    }
}
