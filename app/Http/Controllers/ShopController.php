<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;

class ShopController extends Controller
{
    //Controlador de la vista Tiendas
    public function getShop()
    {
        $arrayShop = Shop::all();
		return view('vistas.shop', array('arrayShop'=>$arrayShop));
    }    
}
