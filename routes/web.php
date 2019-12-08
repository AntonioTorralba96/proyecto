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

Route::group(['middleware' => 'auth'],function (){

    Route::get('/createShop', function () {
        $user = Auth::user()->role_id;
        //var_dump($user);
        if($user == 1){
            return view('vistas/createShop');
        }else{
            return view('vistas/error');
        }
    });
    
    Route::post('/createShop', 'CreateShopController@postCreate');

    Route::get('/deleteShop/{id}', 'CreateShopController@deleteShop');

    Route::get('/editShop/{id}', 'EditShopController@getEditShop');

    Route::post('/editShop/{id}', 'EditShopController@postEditShop');
    
    Route::get('/createProduct', function () {
        $user = Auth::user()->role_id;
        $shop = Auth::user()->shop_id;
        //var_dump($user);
        if($user == 1 || $user == 2){
            return view('vistas/createProduct');
        }else{
            return view('vistas/error');
        }
    });
    
    Route::post('/createProduct', 'CreateProductController@postCreate');

    Route::get('/deleteProduct/{id}', 'CreateProductController@deleteProduct');
    
    Route::get('/editProduct/{id}', 'EditProductController@getEditProduct');

    Route::post('/editProduct/{id}', 'EditProductController@postEditProduct');

    Route::get('/listUsers', 'ListUsersController@getListUsers');

    Route::get('/editUser/{id}', 'EditUserController@getEditUser');

    Route::put('/editUsers/{id}', 'EditUserController@putEditUsers');

    Route::get('/list/{id}', 'ListController@getList');

    Route::get('/anadir/{id}/user/{user}', 'ListController@postList');

    Route::get('/deleteList/{id}/{user}', 'ListController@deleteList');

    Route::post('/editList/{user}', 'ListController@editList');

    Route::get('/reserve', 'ReserveController@getReserve');

    Route::post('/reserves', 'ReserveController@postReserve');

    Route::get('/deleteReserve/{id}', 'ReserveController@deleteReserve');

    Route::get('/allReserve', 'ReserveController@getallReserve');

    Route::get('/allReserveUser/{user}', 'ReserveController@getallReserveUser');

    Route::get('/endlist/{id}', 'ListController@getendList');

    Route::put('changeStatus/{id}', 'ListController@changeStatus');

});

Route::get('/', 'HomeController@getHome');

Route::get('/shop', 'ShopController@getShop');

Route::get('/products/{id}', 'ProductController@getProduct');

Route::get('/detailsProduct/{id}', 'DetailsController@getDetailProduct');

Route::get('/detailsShop/{id}', 'DetailsController@getDetailShop');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
