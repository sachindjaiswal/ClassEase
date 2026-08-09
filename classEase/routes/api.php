<?php

use App\Http\Controllers\ClassesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;


// Class Routes 
Route::get('/classes', [ClassesController::class, 'getAllClasses']);
Route::get('/classes/{id}', [ClassesController::class, 'getClass']);
Route::post('/classes', [ClassesController::class, 'createClass']);
Route::put('/classes/{id}', [ClassesController::class, 'updateClass']);
Route::delete('/classes/{id}', [ClassesController::class, 'deleteClass']);


// Student Routes
Route::post('/students', [StudentController::class, 'addStudent']);
Route::get('/student/{id}' , [StudentController::class , 'getStudent']);
Route::get('/student/class/{id}',[StudentController::class , 'getAllStudentFromClass']);



// Teacher Routes
Route::post('/teachers', [TeacherController::class, 'createTeacher']);
Route::get('/teachers', [TeacherController::class, 'getAllTeachers']);
Route::get('/teachers/{id}', [TeacherController::class, 'getTeacher']);
Route::put('/teachers/{id}', [TeacherController::class, 'updateTeacher']);
Route::delete('/teachers/{id}', [TeacherController::class, 'deleteTeacher']);

    