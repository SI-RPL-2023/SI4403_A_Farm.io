<?php

use App\Http\Controllers\KonfirController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RegistController;
use App\Http\Controllers\ComunityController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CoController;
use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\SuksesController;




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

Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegistController::class, 'index']);
Route::post('/register', [RegistController::class, 'store']);

// Route::resource('/course', CourseController::class);
Route::get('/course', [CourseController::class, 'index']);
Route::get('/courses', [CourseController::class, 'searchCourse']);
Route::get('/course/{id}', [CourseController::class, 'show']);
// Route::get('/checkout', [CheckoutController::class, 'checkout1']);
// Route::get('/checkout2', [CoController::class, 'checkout2']);
// Route::get('/konfirmasi', [KonfirController::class, 'konfirmasi']);
Route::get('/sukses', [SuksesController::class, 'suksess']);
Route::get('/barcode', [BarcodeController::class, 'barco']);


// Route::get('/checkout', [CheckoutController::class, 'checkout1']);
Route::get('/checkout/{id}', [CoController::class, 'checkout']);
Route::get('/konfirmasi/{id}', [KonfirController::class, 'konfirmasi'])->name('konfirmasi');
Route::post('/konfirmasi/{id}', [CourseController::class, 'Pembayaran'])->name('pembayaran');

Route::get('/', [HomeController::class, 'index']);

Route::get('/event', [EventController::class, 'displayEvent']);
Route::get('/event-detail/{id}', [EventController::class, 'eventDetail']);
Route::get('/comunity', [ComunityController::class, 'comun']);

Route::get('/guruternak/login', [GuruController::class, 'loginGuru']);
Route::post('/guruternak/login', [LoginController::class, 'authenticate']);

Route::get('/guruternak/addclass', [GuruController::class, 'addclass']);
Route::post('/guruternak/addclass', [CourseController::class, 'store'])->name('course.store');

Route::get('/guruternak/inbox', [GuruController::class, 'myinbox']);
Route::put('/guruternak/inbox/{order}', [GuruController::class, 'update_status']);

Route::get('/guruternak/setting', [GuruController::class, 'setting']);
Route::put('/guruternak/setting/{user}', [GuruController::class, 'update']);

Route::get('/guruternak/myclass', [CourseController::class, 'displayclass']);
Route::delete('/guruternak/myclass/{id}', [CourseController::class, 'destroy']);

Route::get('/guruternak/editclass/{id}', [CourseController::class, 'editclass']);
Route::put('/guruternak/editclass/{course}', [CourseController::class, 'update']);

// route for user pelajar

Route::put('/user/{user}', [UserController::class, 'update']);

Route::get('/user/order', [UserController::class, 'myorder']);

Route::get('/user/class', [UserController::class, 'myclass']);

Route::get('/user/class/{id}', [UserController::class, 'accessVideoTesting']);

Route::get('/user/setting', [UserController::class, 'setting']);
Route::get('/user/setting/{user}', [UserController::class, 'update']);
Route::put('/user/setting/{user}', [UserController::class, 'update']);


