<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    public function getList($id)
    { 
      $arrayLists = DB::table('products')
      ->join('lists', 'products.id', '=', 'lists.product_id')
      ->where('user_id', $id)
      ->get();

      return view('vistas.list', compact('arrayLists'));
    }

    public function postList($id, $user)

      {
        DB::table('lists')->insert([
            'user_id' => $user,
            'product_id' => $id
        ]);
        
        return redirect('/shop');
    }

    public function deleteList($id, $user)
    { 
      DB::table('lists')->where('id', $id)->delete();

      $arrayLists = DB::table('products')
      ->join('lists', 'products.id', '=', 'lists.product_id')
      ->where('user_id', $user)
      ->get();
      
      return view('vistas.list', compact('arrayLists'));
    }
}
