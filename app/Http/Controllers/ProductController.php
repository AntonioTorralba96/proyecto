<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //Controlador de la vista Productos
    public function getProduct($id)
    {
      $arrayProducts = DB::table('products')
        ->where('shop_id', $id)
        ->get();
      
      return view('vistas.products', compact('arrayProducts'));
    }
}
