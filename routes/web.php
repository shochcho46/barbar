<?php

use App\Http\Controllers\FrontendController;
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

// Route::prefix('/')->group(function () {

Route::name('home.')->group(function () {
    Route::controller(FrontendController::class)->group(function () {
        Route::get('/', 'home')->name('frontend');
        Route::get('get/time/slot', 'timeSlot')->name('timeSlot');
        Route::post('book/slot', 'bookSlot')->name('bookSlot');

    });

});

// });
