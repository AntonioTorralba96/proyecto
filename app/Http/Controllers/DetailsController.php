<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class DetailsController extends Controller
{
    public function getDetail($id)
    {
        $producto = Product::findOrFail($id);
        return view('vistas.detail', array('producto' => $producto
        ));
    }
}
