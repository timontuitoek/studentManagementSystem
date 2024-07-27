<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\TeacherController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('students', StudentController::class)->only(['index', 'store']);
    Route::resource('teachers', TeacherController::class)->only(['index', 'store']);
    Route::resource('courses', CourseController::class)->only(['index', 'store']);
    Route::resource('enrollments', EnrollmentController::class)->only(['index', 'store']);
    Route::resource('grades', GradeController::class)->only(['index', 'store']);
});

require __DIR__.'/auth.php';
