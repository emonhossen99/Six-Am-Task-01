<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

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

// User Login Actions
Route::get('/', [LoginController::class,'login'])->name('login');
Route::post('/login', [LoginController::class,'loginStore'])->name('login.store');
Route::post('/logout', [LoginController::class,'logout'])->name('logout');


// User Register Actions
Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/register', [RegisterController::class,'registerStore'])->name('register.store');

