<?php

use App\Http\Controllers\Web\Admin\ContactController;
use App\Http\Controllers\Web\Admin\EventController;
use App\Http\Controllers\Web\Admin\HomeController;
use App\Http\Controllers\Web\Admin\OrderController;
use App\Http\Controllers\Web\Admin\VenueController;
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

Route::get('/dashboard', [HomeController::class, 'index'])->name('index');

Route::resource('events', EventController::class);
Route::resource('venues', VenueController::class);

Route::get('/contacts', ContactController::class)->name('contacts.index');

Route::controller(OrderController::class)->prefix('/orders')->as('orders.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/show/{order}', 'show')->name('show');
});
