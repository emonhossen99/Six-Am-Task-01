<?php
use App\Http\Controllers\User\DashboardController;
use Illuminate\Support\Facades\Route;




// Group Route
Route::group(['prefix' => 'user', 'as' => 'user.', 'middleware' => ['auth','is_user']], function () {
    //------------------------ Dashboard -----------------------//
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [DashboardController::class, 'dashboard'])->name('index');
    });
});