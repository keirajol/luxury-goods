<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryController;

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

Route::get('/product', [QueryController::class, 'getCategory']);
Route::get('/product', [ProductController::class, 'index']);

Route::get('/cart', [QueryController::class, 'getCategory']);
Route::get('/cart', [CartController::class, 'index']);

Route::get('/', [QueryController::class, 'getCategory']);
Route::get('/', [HomeController::class, 'index']);

Route::get('/category', [QueryController::class, 'getCategory']);
Route::get('/category', [CategoryController::class, 'index']);

Route::get('/contact', [QueryController::class, 'getCategory']);
Route::get('/contact', [ContactController::class, 'index']);

Route::get('/about', [QueryController::class, 'getCategory']);
Route::get('/about', [AboutController::class, 'index']);

Route::get('/checkout', [QueryController::class, 'getCategory']);
Route::get('/checkout', [CheckoutController::class, 'index']);
