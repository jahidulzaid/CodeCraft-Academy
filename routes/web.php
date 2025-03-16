<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
