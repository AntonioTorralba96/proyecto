<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class EditController extends Controller
{
    //Controlador de la vista Edit
    public function getEdit($id)
    {
        $arrayProductos= Product::findOrFail($id);
        return view('vistas.edit', array('producto'=>$arrayProductos));
    }

    public function postEdit(Request $request, $id)
    {
        $producto = Product::findOrFail($id);
        $producto->name = $request->name;
        $producto->price = $request->price;
        $producto->description = $request->description;
        $producto->save();
        return redirect('details/' . $producto->id);

    }
}
