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

Route::group(['namespace' => 'Client'], function () {
    Route::get('/', "HomeController@index")->name('home'); 

    Route::get('/list_products', "ProductController@index")->name('list_product');
    Route::get('/single_product/{id}', "ProductController@show")->name('single_product');

    Route::post('cart/add_to_cart', "CartController@addToCart")->name('add_to_cart');
    Route::get('cart/show_mini_cart', "CartController@showMiniCart")->name('show_mini_cart');
    Route::get('cart', "CartController@index")->name('cart.index');
    Route::post('cart/update', "CartController@update")->name('cart.update');
    Route::post('cart/delete', "CartController@delete")->name('cart.delete');
});

Auth::routes();
