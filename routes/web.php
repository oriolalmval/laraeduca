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

Route::view('geografia', 'geografia')
    ->middleware(['auth'])
    ->name('geografia');

Route::view('simondice', 'simondice')
    ->middleware(['auth'])
    ->name('simondice');

Route::view('piano', 'piano')
    ->middleware(['auth'])
    ->name('piano');

Route::view('italia-quiz', 'italia-quiz')
    ->middleware(['auth'])
    ->name('italia-quiz');

Route::resource('students', StudentController::class);

require __DIR__ . '/auth.php';
