<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Shop;

class DetailsController extends Controller
{
    public function getDetailProduct($id)
    {
        $producto = Product::findOrFail($id);
        return view('vistas.detailProduct', array('producto' => $producto
        ));
    }

    public function getDetailShop($id)
    {
        $shop = Shop::findOrFail($id);
        return view('vistas.detailShop', array('shop' => $shop
        ));
    }
}
