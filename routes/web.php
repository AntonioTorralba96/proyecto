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

Route::get('/tiendas', 'TiendaController@getTienda');

Route::get('/productos/{id}', 'TiendaController@getProducto');

Route::get('/reserva', function () {
    return view('vistas/reserva');
});

Route::get('/create', 'TiendaController@getCreate');

Route::get('/editar/{id}', 'TiendaController@getEdit');