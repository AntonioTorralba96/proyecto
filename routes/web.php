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

Route::get('/shop', 'TiendaController@getShop');

Route::get('/products/{id}', 'ProductosController@getProduct');

Route::get('/list', 'ListaController@getList');

Route::get('/reserve', 'ReservaController@getReserve');

Route::get('/create', 'CreateController@getCreate');

Route::get('/edit/{id}', 'EditController@getEdit');