<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CreateProductController extends Controller
{
    //Controlador de la vista Create
    public function getCreate()
    {
        return view('vistas.createProduct');
    }

    public function postCreate(Request $request)
    {
        DB::table('products')->insert([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'shop_id' => $request->idShop,
            'poster' => $request->poster
        ]);
        
        return redirect('/shop');
    }

    public function deleteProduct($id)
    {
        DB::table('products')->where('id', $id)->delete();
        
        return back();
    }
}
