<?php

use App\Models\Order;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Models\User;
// use App\Models\Product;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/client', function () {
//     $clients=User::get();
//     return view('client',['clients'=>$clients]);
// });

Route::resource('/client','App\http\Controllers\UserController');
Route::resource('/product','App\http\Controllers\ProductController');
Route::resource('/order','App\http\Controllers\OrderController');
Route::resource('/order_product','App\http\Controllers\Order_ProductController');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/order_product/{idp}/total/{ido}', [App\Http\Controllers\Order_ProductController::class, 'getProduct'])->name('total');