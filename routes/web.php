<?php

use App\Http\Controllers\Web\Auth\LoginController;
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

Route::get('/', function () {
    return view('site.index');
})->name('index');

Route::middleware('guest')->group(function () {
    Route::controller(LoginController::class)->prefix('/login')->as('login.')->group(function () {
        Route::get('/', 'login')->name('index');
        Route::post('/store', 'store')->name('store');
        Route::post('/register', 'register')->name('register');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
