<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class EditProductController extends Controller
{
    //Controlador de la vista Edit
    public function getEditProduct($id)
    {
        $arrayProductos= Product::findOrFail($id);
        return view('vistas.editProduct', array('producto'=>$arrayProductos));
    }

    public function postEditProduct(Request $request, $id)
    {
        $producto = Product::findOrFail($id);
        $producto->name = $request->name;
        $producto->price = $request->price;
        $producto->description = $request->description;
        $producto->quantity = $request->quantity;
        $producto->poster = $request->poster;
        $producto->save();
        return redirect('detailsProduct/' . $producto->id);

    }
}
