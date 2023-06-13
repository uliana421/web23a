<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\TypeClassController;


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

Route::get('/', function () {
    return view('home');
});


Route::get('/tutors', [TutorController::class, 'index']);
Route::get('/tutor/{id}', [TutorController::class, 'show']);
Route::get('/tutor-add', [TutorController::class, 'create']);
Route::post('/tutors', [TutorController::class, 'store']);
Route::get('/tutor-edit/{id}', [TutorController::class, 'edit']);
Route::put('/tutor/{id}', [TutorController::class, 'update']);

Route::get('/tutor-delete/{id}',[TutorController::class, 'delete']);
Route::delete('/tutor-destroy/{id}',[TutorController::class, 'destroy']);


