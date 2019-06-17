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
    return view('index');
});

Route::get('/tiendas', function () {
    return view('vistas/tiendas');
});

Route::get('/productos/{id}', function ($id) {
    return view('vistas/productos', array('id'=>$id));
});

Route::get('/reserva', function () {
    return view('vistas/reserva');
});

Route::get('/añadir', function () {
    return view('vistas/añadir');
});

Route::get('/editar/{id}', function ($id) {
    return view('vistas/editar', array('id'=>$id));
});