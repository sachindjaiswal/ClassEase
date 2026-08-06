<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

Route::post('/students', [StudentController::class, 'addStudent']);



Route::post('/teachers', [TeacherController::class, 'store']);
Route::get('/teachers', [TeacherController::class, 'index']);
Route::get('/teachers/{id}', [TeacherController::class, 'show']);
Route::put('/teachers/{id}', [TeacherController::class, 'update']);
Route::delete('/teachers/{id}', [TeacherController::class, 'destroy']);

    