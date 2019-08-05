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
            'description' => $request->description
        ]);
        
        return redirect('/shop');
    }
}
