<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniversityController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/show/students/all', [UniversityController::class, 'showAllStudents']);
Route::get('/show/student/{id}', [App\Http\Controllers\UniversityController::class, 'showStudent'])->name('student.show');
// Route::get('/show/colleges', [UniversityController::class, 'showAllColleges']);
Route::get('/show/colleges', [App\Http\Controllers\UniversityController::class, 'showAllColleges'])->name('colleges.index');
// Route::get('/show/college/{id}', [UniversityController::class, 'showCollege']);
Route::get('/show/college/{id}', [App\Http\Controllers\UniversityController::class, 'showCollege'])->name('colleges.show');
Route::get('/show/departments', [UniversityController::class, 'showAllDepartments']);
Route::get('/show/programs', [UniversityController::class, 'showPrograms']);
Route::get('/show/program/{id}', [UniversityController::class, 'showProgram']);