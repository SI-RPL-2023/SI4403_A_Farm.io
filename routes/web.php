<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RegistController;

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



Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);



Route::get('/register', [RegistController::class, 'index']);
Route::post('/register', [RegistController::class, 'store']);




Route::get('/', [HomeController::class, 'index']);

Route::get('/guruternak/login', [GuruController::class, 'loginGuru']);
Route::post('/guruternak/login', [LoginController::class, 'authenticate']);

Route::get('/guruternak/addclass', [GuruController::class, 'addclass']);
Route::post('/guruternak/addclass', [CourseController::class, 'store']);

Route::get('/guruternak/inbox', [GuruController::class, 'myinbox']);
Route::put('/guruternak/inbox/{order}', [GuruController::class, 'update_status']);

Route::get('/guruternak/setting', [GuruController::class, 'setting']);
Route::put('/guruternak/setting/{user}', [GuruController::class, 'update']);

Route::get('/guruternak/myclass', [CourseController::class, 'displayclass']);
Route::delete('/guruternak/myclass/{course}', [CourseController::class, 'destroy']);

Route::get('/guruternak/editclass', [CourseController::class, 'editclass']);
Route::put('/guruternak/editclass/{course}', [CourseController::class, 'update']);

Route::post('/logout', [LoginController::class, 'logout']);

