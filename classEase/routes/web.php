<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'welcome')->name('home');


Route::post('/students', [StudentController::class, 'addStudent']);
Route::view('/student-form', 'addStudent');
