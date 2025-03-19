<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CompilerController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/course-list', [CourseController::class, 'index'])->name('course-list');
Route::get('/course-details', [CourseController::class, 'details'])->name('course-details');



Route::get('/compiler', [CompilerController::class, 'index'])->name('compiler.index');
Route::post('/compiler/run', [CompilerController::class, 'run'])->name('compiler.run');

//blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog');

//Shop
Route::get('/shop', [ShopController::class, 'index'])->name('shop');

//login
Route::get('/signin', [LoginController::class, 'index'])->name('signin');


//registration
Route::post('/register', [RegisterController::class, 'register'])->name('register');


//google auth
use App\Http\Controllers\Auth\SocialController;

Route::get('/auth/google', [SocialController::class, 'redirectToGoogle'])->middleware('guest')->name('google.login');
Route::get('/auth/google/callback', [SocialController::class, 'handleGoogleCallback'])->middleware('guest');




Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    //main
    Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');

    //mine


});

