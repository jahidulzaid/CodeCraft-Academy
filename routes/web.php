<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SocialController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CompilerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\StudentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashboard\InstructorController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Website Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/course-list', [CourseController::class, 'index'])->name('course-list');
Route::get('/course-details', [CourseController::class, 'details'])->name('course-details');

Route::get('/compiler', [CompilerController::class, 'index'])->name('compiler.index');
Route::post('/compiler/run', [CompilerController::class, 'run'])->name('compiler.run');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog-details', [BlogController::class, 'details'])->name('blog-detail');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::view('/about', 'website.about.index')->name('about');
Route::view('/contact', 'website.contact.index')->name('contact');

Route::post('/ask-ai', function () {
    return redirect()->away('https://agent-chat-bot.vercel.app/');
})->name('ai.ask');
Route::get('/ask-ai', function () {
    return redirect()->away('https://agent-chat-bot.vercel.app/');
})->name('ai.view');

/*
|--------------------------------------------------------------------------
| Guest Authentication Routes
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    Route::get('/signin', [LoginController::class, 'index'])->name('signin');
    Route::post('/signin/custom', [LoginController::class, 'signin'])
        ->middleware('throttle:login')
        ->name('signin.custom');

    Route::post('/register', [RegisterController::class, 'register'])
        ->name('register');

    Route::get('/auth/google', [SocialController::class, 'redirectToGoogle'])->name('google.login');
    Route::get('/auth/google/callback', [SocialController::class, 'handleGoogleCallback'])->name('google.callback');
});

/*
|--------------------------------------------------------------------------
| Protected Routes
|--------------------------------------------------------------------------
*/
Route::middleware(['auth:sanctum', config('jetstream.auth_session')])->group(function () {
    Route::get('/dashboard', function () {
        $user = request()->user();

        return match ($user->role) {
            'student' => redirect()->route('student.dashboard'),
            'instructor' => redirect()->route('instructor.dashboard'),
            'admin' => redirect()->route('admin.dashboard'),
            default => view('dashboard'),
        };
    })->name('dashboard');

    Route::middleware('role:student')->group(function () {
        Route::get('/student-dashboard', [StudentController::class, 'index'])->name('student.dashboard');
        Route::get('/student-profile', [StudentController::class, 'profile'])->name('student.profile');
        Route::get('/student-enrolled-courses', [StudentController::class, 'enrolledCourses'])->name('student.enrolled-courses');
        Route::get('/student-reviews', [StudentController::class, 'reviews'])->name('student.reviews');
        Route::get('/student-my-quiz-attempts', [StudentController::class, 'myQuizAttempts'])->name('student.my-quiz-attempts');
        Route::get('/student-assignments', [StudentController::class, 'assignments'])->name('student.assignments');
        Route::get('/student-settings', [StudentController::class, 'settings'])->name('student.settings');

        Route::post('/student-enrollments', [StudentController::class, 'enroll'])->name('student.enrollments.store');
        Route::post('/student-enrollments/{enrollment}/progress', [StudentController::class, 'updateLessonProgress'])
            ->name('student.enrollments.progress');

        Route::post('/student-reviews', [StudentController::class, 'submitReview'])->name('student.reviews.store');
        Route::delete('/student-reviews/{review}', [StudentController::class, 'destroyReview'])->name('student.reviews.destroy');

        Route::post('/student-assignments/{assignment}/submit', [StudentController::class, 'submitAssignment'])
            ->name('student.assignments.submit');

        Route::put('/student-settings/profile', [StudentController::class, 'updateProfile'])
            ->name('student.settings.profile.update');
        Route::put('/student-settings/password', [StudentController::class, 'updatePassword'])
            ->name('student.settings.password.update');
    });

    Route::middleware('role:instructor')->group(function () {
        Route::get('/instructor-dashboard', [InstructorController::class, 'index'])->name('instructor.dashboard');
        Route::get('/instructor-profile', [InstructorController::class, 'profile'])->name('instructor.profile');
        Route::get('/instructor-reviews', [InstructorController::class, 'reviews'])->name('instructor.reviews');
        Route::get('/instructor-my_course', [InstructorController::class, 'my_course'])->name('instructor.my_course');
        Route::get('/instructor-announcments', [InstructorController::class, 'announcments'])->name('instructor.announcments');
        Route::get('/instructor-quiz_attempt', [InstructorController::class, 'quiz_attempt'])->name('instructor.quiz_attempt');
        Route::get('/instructor-assignments', [InstructorController::class, 'assignments'])->name('instructor.assignments');
        Route::get('/instructor-settings', [InstructorController::class, 'settings'])->name('instructor.settings');
    });

    Route::middleware('role:admin')->group(function () {
        Route::get('/admin-dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    });
});

