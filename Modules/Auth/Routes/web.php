<?php
use Illuminate\Support\Facades\Route;
use Modules\Auth\Http\Controllers\AuthController;

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

Route::prefix('auth')->group(function () {

    Route::name('auth.')->group(function () {
        Route::controller(AuthController::class)->group(function () {
            Route::get('sign-up', 'signup')->name('signup');
            Route::get('sign-in', 'signin')->name('signin');
            Route::post('valid/login', 'validLogin')->name('logincheck');

            Route::get('logout', 'logout')->name('logout');
        });

    });

});
