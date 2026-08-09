<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

Route::post('/students', [StudentController::class, 'addStudent']);
Route::get('/student/{id}' , [StudentController::class , 'getStudent']);
Route::get('/student/class/{id}',[StudentController::class , 'getAllStudentFromClass']);


Route::post('/teachers', [TeacherController::class, 'createTeacher']);
Route::get('/teachers', [TeacherController::class, 'getAllTeachers']);
Route::get('/teachers/{id}', [TeacherController::class, 'getTeacher']);
Route::put('/teachers/{id}', [TeacherController::class, 'updateTeacher']);
Route::delete('/teachers/{id}', [TeacherController::class, 'deleteTeacher']);

    