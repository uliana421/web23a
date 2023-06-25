<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('home');
})->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticating'])->middleware('guest');

Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register')->middleware('guest');
    
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/tutors', [TutorController::class, 'index'])->middleware('auth');
Route::get('/tutor/{id}', [TutorController::class, 'show'])->middleware('auth');
Route::get('/tutor-add', [TutorController::class, 'create'])->middleware('auth');
Route::post('/tutors', [TutorController::class, 'store'])->middleware('auth');
Route::get('/tutor-edit/{id}', [TutorController::class, 'edit'])->middleware('auth');
Route::put('/tutor/{id}', [TutorController::class, 'update'])->middleware('auth');

Route::get('/tutor-delete/{id}',[TutorController::class, 'delete'])->middleware('auth');
Route::delete('/tutor-destroy/{id}',[TutorController::class, 'destroy'])->middleware('auth');


