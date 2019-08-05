<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //Controlador de la vista Productos
    public function getProduct($id)
    {
      $arrayProducts = Product::all(); 
      return view('vistas.products', compact('arrayProducts'));
    }
}
