<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::view('/', 'welcome');

Route::view('cursos', 'cursos')
    ->middleware(['auth'])
    ->name('cursos');

Route::view('tareas', 'tareas')
    ->middleware(['auth'])
    ->name('tareas');

Route::view('calificaciones', 'calificaciones')
    ->middleware(['auth'])
    ->name('calificaciones');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::resource('students', StudentController::class);
    
require __DIR__.'/auth.php';    