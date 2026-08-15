<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\StudentController;
use App\Models\teacher;
use Illuminate\Support\Facades\Route;

// Route::inertia('/', 'welcome')->name('home');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login');

Route::get('/me', [AuthController::class, 'me'])
    ->middleware('auth');

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth');

Route::post('/students', [StudentController::class, 'addStudent']);
Route::view('/student-form', 'addStudent');

Route::get('/classes', [ClassesController::class, 'getAllClasses']);

Route::post('/teachers', [teacher::class, 'store']);
Route::get('/teachers', [teacher::class, 'index']);
Route::get('/teachers/{id}', [teacher::class, 'show']);
Route::put('/teachers/{id}', [teacher::class, 'update']);
Route::delete('/teachers/{id}', [teacher::class, 'destroy']);

    