<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CartController;

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

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/categories', [MainController::class, 'categories'])->name('categories');

Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/cart/place', [CartController::class, 'cartPlace'])->name('cart-place');
Route::post('cart/add/{id}', [CartController::class, 'cartAdd'])->name('cart-add');
Route::post('cart/remove/{id}', [CartController::class, 'cartRemove'])->name('cart-remove');

Route::get('/{category}', [MainController::class, 'category'])->name('category');
Route::get('/{category}/{product?}', [MainController::class, 'product'])->name('product');



