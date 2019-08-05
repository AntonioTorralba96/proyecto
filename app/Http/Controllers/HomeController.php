<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;
use App\Product;

class HomeController extends Controller
{
    public function getHome()
    {
        //$product= Shop::find(2)->products;
        //$shop= Product::find(1)->shops;
        //return $product;
        return view('index');
    }
}
