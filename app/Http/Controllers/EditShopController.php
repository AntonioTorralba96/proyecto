<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;

class EditShopController extends Controller
{
    public function getEditShop($id)
    {
        $arrayShops= Shop::findOrFail($id);
        return view('vistas.editShop', array('shop'=>$arrayShops));
    }

    public function postEditShop(Request $request, $id)
    {
        $shop = Shop::findOrFail($id);
        $shop->name = $request->name;
        $shop->category = $request->category;
        $shop->location = $request->location;
        $shop->telephone = $request->telephone;
        $shop->website = $request->website;
        $shop->poster = $request->poster;
        $shop->save();
        return redirect('detailsShop/' . $shop->id);

    }
}
