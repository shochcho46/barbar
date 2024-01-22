<?php

use Illuminate\Support\Facades\Route;
use Modules\User\Http\Controllers\UserController;

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



Route::prefix('admin')->group(function () {

    Route::middleware(['auth'])->group(function () {

        Route::name('dashboard.')->group(function () {

            Route::controller(UserController::class)->group(function () {
                Route::get('dashboard', 'dashboardHome')->name('home');
            });

        });
    });

});
