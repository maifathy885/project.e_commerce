<?php

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
})->name('home');

Route::get('/admin_page', "TestController@Admin")->name('admin_page');

Route::get('/cart', "TestController@Cart")->name('cart');

Route::get('/category',"TestController@Category")->name('category');

Route::get('/electrics_product',"TestController@Electric")->name('electrics_product');

Route::get('/login',"TestController@Login")->name('login');

Route::get('/phones_product',"TestController@Phone")->name('phones_product');

Route::get('/products',"TestController@Product")->name('products');

Route::get('/user_page',"TestController@User")->name('user_page');

Route::get('/user_buy_product',"TestController@UserProuct")->name('user_buy_product');




