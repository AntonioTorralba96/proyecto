<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CreateShopController extends Controller
{
    //
    public function getCreate()
    {
        return view('vistas.createShop');
    }

    public function postCreate(Request $request)
    {
        DB::table('shops')->insert([
            'name' => $request->name,
            'category' => $request->category,
            'location' => $request->location,
            'telephone' => $request->telephone,
            'website' => $request->website,
            'poster' => $request->poster
        ]);
        
        return redirect('/shop');
    }
}
