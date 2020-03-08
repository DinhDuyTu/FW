<?php

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['auth']], function () {
    Route::get('', [
        'as' => 'admin.dashboard.index',
        'uses' => 'DashboardController@index'
    ]);
    Route::group(['as' => 'admin.'], function () {
        Route::resource('categories', 'CategoryController', [
            'parameters' => ['categories' => 'id']
        ]);
    });
    Route::group(['as' => 'admin.'], function () {
        Route::resource('products', 'ProductController', [
            'parameters' => ['products' => 'id']
        ]);
    });
    Route::group(['as' => 'admin.'], function () {
        Route::resource('users', 'UserController', [
            'parameters' => ['users' => 'id']
        ]);
    });
    Route::group(['as' => 'admin.'], function () {
        Route::resource('sizes', 'SizeController', [
            'parameters' => ['sizes' => 'id']
        ]);
    });
    Route::group(['as' => 'admin.'], function () {
        Route::resource('colors', 'ColorController', [
            'parameters' => ['colors' => 'id']
        ]);
    });
    Route::group(['as' => 'admin.'], function () {
        Route::resource('orders', 'OrderController', [
            'parameters' => ['orders' => 'id']
        ]);
    });

    Route::post('orders/change_status', "OrderController@change_status")->name('admin.orders.change_status');
});
