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

Route::get('/', 'HomeController@getHome');

Route::get('/shop', 'ShopController@getShop');

Route::get('/products/{id}', 'ProductController@getProduct');

Route::get('/list', 'ListController@getList');

Route::get('/reserve', 'ReserveController@getReserve');

Route::get('/createProduct', 'CreateProductController@getCreate');

Route::post('/createProduct', 'CreateProductController@postCreate');

Route::get('/createShop', 'CreateShopController@getCreate');

Route::post('/createShop', 'CreateShopController@postCreate');

Route::get('/edit/{id}', 'EditController@getEdit');