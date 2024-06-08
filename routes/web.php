<?php

use App\Http\Controllers\Web\Auth\LoginController;
use App\Http\Controllers\Web\Site\AboutUsController;
use App\Http\Controllers\Web\Site\CartController;
use App\Http\Controllers\Web\Site\ContactController;
use App\Http\Controllers\Web\Site\EventController;
use App\Http\Controllers\Web\Site\HomeController;
use App\Http\Controllers\Web\Site\OrderController;
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

Route::get('/', HomeController::class)->name('index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/about', AboutUsController::class)->name('about.index');
Route::get('/event/{event}', [EventController::class, 'show'])->name('event.show');

Route::middleware('guest')->group(function () {
    Route::controller(LoginController::class)->prefix('/login')->as('login.')->group(function () {
        Route::get('/', 'login')->name('index');
        Route::post('/store', 'store')->name('store');
        Route::post('/register', 'register')->name('register');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::controller(CartController::class)->prefix('/cart')->as('cart.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/add-to-cart', 'addToCart')->name('add_to_cart');
        Route::delete('/delete-from-cart', 'removeItem')->name('delete_item');
    });

    Route::controller(OrderController::class)->prefix('/orders')->as('order.')->group(function () {
        Route::get('/checkout', 'checkout')->name('checkout');
        Route::get('/order-success/{order}', 'orderSuccess')->name('order_success');
        Route::post('/store', 'store')->name('store');
        Route::get('/', 'allOrders')->name('all_orders');
    });
});
