<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


// User Login Actions
Route::middleware(['web'])->group(function () {
    Route::get('/', [LoginController::class,'login'])->name('login');
    Route::post('/login', [LoginController::class,'loginStore'])->name('login.store');
    Route::post('/logout', [LoginController::class,'logout'])->name('logout');
});




// User Register Actions
Route::get('/register', [RegisterController::class,'index'])->name('register');
Route::post('/register', [RegisterController::class,'registerStore'])->name('register.store');

// Product Geting Actions
Route::get('/without-optimization', [ProductController::class, 'withoutOptimization'])->name('products.withoutOptimization');
Route::get('/with-eager-loading', [ProductController::class, 'withEagerLoading'])->name('products.withEagerLoading');
Route::get('/with-query-caching', [ProductController::class, 'withQueryCaching'])->name('products.withQueryCaching');

