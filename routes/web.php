<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MailController;
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

Route::get('/',[AuthController::class,'index']);
Route::post('/register',[AuthController::class,'register']);
Route::get('/logout',[AuthController::class,'logout']);

Route::get('/home',[ProductController::class,'index']);

Route::get('/{product}/{user}/addtocart',[CartController::class,'addToCart'])->name('add_to_cart');
Route::patch('/update-cart', [CartController::class, 'updateCart'])->name('update_cart');//OK
Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove_from_cart');//OK
Route::get('/cart',[CartController::class,'index']);
Route::post('/checkout',[CartController::class,'checkout']);

Route::post('/order',[OrderController::class,'order']);

Route::get('/send',[MailController::class,'index']);

Route::get('/create',[ProductController::class,'create']);
Route::post('/store',[ProductController::class,'store']);
Route::get('/{id}/show',[ProductController::class,'show']);
Route::get('/{id}/edit',[ProductController::class,'edit']);
Route::put('/{id}/update',[ProductController::class,'update']);
Route::get('/{id}/delete',[ProductController::class,'destroy']);