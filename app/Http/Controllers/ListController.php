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
}
