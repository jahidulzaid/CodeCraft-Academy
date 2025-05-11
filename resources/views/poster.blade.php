<?php
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::middleware(['auth'])->group(function () {
    Route::get('/student-dashboard', [InstructorController::class, 'index'])->name('student.dashboard');
});


Route::get('/auth/google', [SocialController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [SocialController::class, 'handleGoogleCallback']);

