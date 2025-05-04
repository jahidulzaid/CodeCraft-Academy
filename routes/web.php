<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Dashboard\StudentController;
use App\Http\Controllers\Auth\SocialController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CompilerController;
use App\Http\Controllers\AIController;

// Route::get('/', function () {
//     return view('welcome');
// });








// front end


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/course-list', [CourseController::class, 'index'])->name('course-list');
Route::get('/course-details', [CourseController::class, 'details'])->name('course-details');



Route::get('/compiler', [CompilerController::class, 'index'])->name('compiler.index');
Route::post('/compiler/run', [CompilerController::class, 'run'])->name('compiler.run');

//blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog-details',[BlogController::class,'details'])->name('blog-detail');

//Shop
Route::get('/shop', [ShopController::class, 'index'])->name('shop');

//login
Route::get('/signin', [LoginController::class, 'index'])->name('signin');
Route::post('/signin/custom', [LoginController::class, 'signin'])->name('signin.custom');


//registration
Route::post('/register', [RegisterController::class, 'register'])->name('register');

//google auth
Route::get('/auth/google', [SocialController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [SocialController::class, 'handleGoogleCallback']);


// AI



Route::post('/ask-ai', [AIController::class, 'ask'])->name('ai.ask');
Route::get('/ask-ai', function () {
    return view('website.ai.ask-ai');
})->name('ai.view');



// backend
//student
Route::get('/student-dashboard',[StudentController::class,'index'])->name('student.dashboard');
Route::get('/student-profile',[StudentController::class,'profile'])->name('student.profile');
Route::get('/student-enrolled-courses',[StudentController::class,'enrolledCourses'])->name('student.enrolled-courses');
Route::get('/student-reviews',[StudentController::class,'reviews'])->name('student.reviews');
Route::get('/student-my-quiz-attempts',[StudentController::class,'myQuizAttempts'])->name('student.my-quiz-attempts');
Route::get('/student-assignments',[StudentController::class,'assignments'])->name('student.assignments');
Route::get('/student-settings',[StudentController::class,'settings'])->name('student.settings');

//instructor
Route::get('/instructor-dashboard', [InstructorController::class,'index'])->name('instructor.dashboard');



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    //main
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');

    //mine



});

