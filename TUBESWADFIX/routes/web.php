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
Route::get('/', function () {
    return view('index');
});
 
Route::get('/dashboard', function () {
    return view('index');
})->name('dashboard');

Route::get('/registration', [\App\Http\Controllers\AuthController::class, 'registration'])->name('registration');
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'index'])->name('login');
Route::post('/login-process', [\App\Http\Controllers\AuthController::class, 'login'])->name('login.process');

Route::get('/donor/about', [\App\Http\Controllers\PMIController::class, 'aboutDonor'])->name('donor.about');
Route::get('/blood-stock', [\App\Http\Controllers\PMIController::class, 'bloodStock'])->name('blood-stock');
Route::get('/contact', [\App\Http\Controllers\PMIController::class, 'contact'])->name('contact');