<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/registration', [\App\Http\Controllers\AuthController::class, 'registration'])->name('registration');
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'index'])->name('login');
Route::post('/login-process', [\App\Http\Controllers\AuthController::class, 'login'])->name('login.process');
