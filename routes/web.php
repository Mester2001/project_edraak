<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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

Route::get('/',[HomeController::class,'index']);

Route::middleware(['auth:sanctum','verified'])->get('/dashboard',function(){
  return view('dashboard');
})->name('dashboard');


Route::get('/redirect',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::get('/view_catagorey',[AdminController::class,'view_catagorey']);

Route::post('/add_catagorey',[AdminController::class,'add_catagorey']);

Route::get('/delete_catagorey/{id}',[AdminController::class,'delete_catagorey']);

Route::get('/view_product',[AdminController::class,'view_product']);

Route::post('/add_product',[AdminController::class,'add_product']);

Route::get('/show_product',[AdminController::class,'show_product']);

Route::get('/delete_product/{id}',[AdminController::class,'delete_product']);

Route::get('/update_product/{id}',[AdminController::class,'update_product']);

Route::post('/update_product_confirm/{id}',[AdminController::class,'update_product_confirm']);

Route::get('/product_details/{id}',[HomeController::class,'product_details']);

Route::post('/add_cart/{id}',[HomeController::class,'add_cart']);

Route::get('/show_cart',[HomeController::class,'show_cart']);

Route::get('/remove_cart/{id}',[HomeController::class,'remove_cart']);

Route::get('/cash_order',[HomeController::class,'cash_order']);

Route::get('/stripe/{totalprice}',[HomeController::class,'stripe']);

Route::post('stripe/{totalprice}',[HomeController::class, 'stripePost'])->name('stripe.post');

Route::get('/show_order',[HomeController::class,'show_order']);

Route::get('/order',[AdminController::class,'order']);

Route::get('/delivered/{id}',[AdminController::class,'delivered']);

Route::get('/cancel_order/{id}',[HomeController::class,'cancel_order']);

Route::get('/product_search',[HomeController::class,'product_search']);

