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
});

Route::group(['prefix'=> 'admin','namespace'=>'Admin','middleware' => 'auth'],function(){
	Route::get('/','AdminController@index')->name('admin');
	require 'admin.php';
	require 'category.php';
	require 'product.php';
	require 'customer.php';
	require 'order.php';
});

Route::get('admin/login','Admin\AuthController@login')->name('login');
Route::post('admin/login','Admin\AuthController@post_login')->name('login');

Route::get('admin/register','Admin\AuthController@register')->name('register');
Route::post('admin/register','Admin\AuthController@post_register')->name('register');

Route::get('admin/logout','Admin\AuthController@logout')->name('logout');

Route::get('admin/change','Admin\AuthController@change')->name('change');
Route::post('admin/change','Admin\AuthController@post_change')->name('change');

Route::group(['prefix' => 'user','namespace' => 'User'],function(){
	Route::get('/index','UserController@index')->name('user');
	Route::get('/login','AuthController@login')->name('user_login');
	Route::post('/login','AuthController@post_login')->name('user_login');
	Route::get('/register','AuthController@register')->name('user_register');
	Route::post('/register','AuthController@post_register')->name('user_register');
	Route::get('/logout','AuthController@logout')->name('user_logout');
	Route::get('/category/{id}','UserController@category')->name('user_category');
	Route::get('/product_detail/{id}','UserController@product_detail')->name('user_product_detail');
	Route::get('/product_search','UserController@product_search')->name('user_product_search');
	Route::get('/cart/view-cart','UserController@view_cart')->name('view-cart');
	Route::get('/cart/add-cart/{id}','UserController@add_cart')->name('add-cart');
	Route::get('/cart/delete-cart/{id}','UserController@delete_cart')->name('delete-cart');
	Route::get('/cart/update-cart','UserController@update_cart')->name('update-cart');
	Route::get('/check-out','UserController@order')->name('check-out');
	Route::post('/check-out','UserController@post_order')->name('check-out');
	Route::get('/my-account','UserController@my_account')->name('my-account');
	Route::get('/order-detail/{id}','UserController@order_detail')->name('order-detail');

});


