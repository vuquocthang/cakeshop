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
    return redirect('home');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    //admin authentication
    Route::get('/', function () {
		return redirect('loginForm');
	});
	
	Route::get('loginForm', 'LoginController@showLoginForm');
    Route::post('login', 'LoginController@login');
    Route::get('logout', 'LoginController@logout');

    Route::get('home', 'HomeController@index');

    //order
    Route::get('order/index', 'OrderController@index');
    Route::get('order/status/{id}', 'OrderController@status');


    //catalog
    Route::get('catalog/index', 'CatalogController@index');
    Route::get('catalog/addForm', 'CatalogController@showAddForm');
    Route::post('catalog/add', 'CatalogController@add');
    Route::get('catalog/editForm/{id}', 'CatalogController@showEditForm');
    Route::post('catalog/edit/{id}', 'CatalogController@edit');
    Route::get('catalog/status/{id}', 'CatalogController@status');

    //product
    Route::get('product/index', 'ProductController@index');
    Route::get('product/addForm', 'ProductController@showAddForm');
    Route::post('product/add', 'ProductController@add');
    Route::get('product/editForm/{id}', 'ProductController@showEditForm');
    Route::post('product/edit/{id}', 'ProductController@edit');
    Route::get('product/status/{id}', 'ProductController@status');


});

Route::group(['namespace' => 'Site', 'prefix' => ''], function () {
    //home
    Route::get('home', 'HomeController@index');

    //catalog
    Route::get('catalog/{id}', 'CatalogController@index');

    //product
    Route::get('product/{id}', 'ProductController@index');

    Route::post('product/addToCart/{id}', 'ProductController@addToCart');

    //cart
    Route::get('cart', 'CartController@index');

    Route::get('cart/del/{id}', 'CartController@del');

    Route::post('cart/update', 'CartController@update');


    //register
    Route::get('registerForm', 'User\Auth\RegisterController@showRegisterForm');

    Route::post('register', 'User\Auth\RegisterController@register');

    //login
    Route::get('loginForm', 'User\Auth\LoginController@showLoginForm');

    Route::post('login', 'User\Auth\LoginController@login');

    //logout
    Route::get('logout', 'User\Auth\LoginController@logout');

    //profile
    Route::get('profile', 'User\HomeController@profile');

    //checkout
    Route::get('checkout', 'CheckoutController@index');

    //order
    Route::get('order', 'CheckoutController@order');

    //finish order
    Route::get('finish', 'CheckoutController@finish');



});