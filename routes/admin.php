<?php
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;




// Group Route
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth','is_admin']], function () {
    //------------------------ Dashboard -----------------------//
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [DashboardController::class, 'dashboard'])->name('index');
    });
});
