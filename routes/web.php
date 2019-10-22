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

    Route::get('/reserve', 'ReserveController@getReserve');

    Route::get('/createProduct', function () {
        $user = Auth::user()->role_id;
        //var_dump($user);
        if($user == 1 || $user == 2 ){
            return view('vistas/createProduct');
        }else{
            return view('vistas/error');
        }
    }
    
    );
    
    Route::post('/createProduct', 'CreateProductController@postCreate');
    
    Route::get('/createShop', function () {
        $user = Auth::user()->role_id;
        //var_dump($user);
        if($user == 1 || $user == 2){
            return view('vistas/createShop');
        }else{
            return view('vistas/error');
        }
    }
    
    );
    
    Route::post('/createShop', 'CreateShopController@postCreate');
    
    Route::get('/edit/{id}', 'EditController@getEdit');

    Route::get('/list', 'ListController@getList');

});

Route::get('/', 'HomeController@getHome');

// Route::get('/user', function () {
//     $user = Auth::user()->role_id;
//     var_dump($user);
//     return 'hello';
// });
Route::get('/shop', 'ShopController@getShop');

Route::get('/products/{id}', 'ProductController@getProduct');

Route::get('/details/{id}', 'DetailsController@getDetail');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
