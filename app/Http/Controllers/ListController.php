<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Reserve;

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

    public function getendList($id)
    { 
      $arrayLists = DB::table('products')
      ->join('lists', 'products.id', '=', 'lists.product_id')
      ->where('user_id', $id)
      ->get();

      return view('vistas.endlist', compact('arrayLists'));
    }

    public function changeStatus($id)
    {
        $reserve = Reserve::findOrFail($id);
        $reserve->status = !$reserve->status;
        $reserve->save();
        return back();
    }

    public function postList($id, $user)

      {
        DB::table('lists')->insert([
            'user_id' => $user,
            'product_id' => $id,
            'quantity' => '1'
        ]);
        
        return back();
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

    public function editList(Request $request, $user)
    { 
      $arrayList = DB::table('lists')
      ->select('id')
      ->where('user_id', $user)
      ->get();

      var_dump($arrayList); ;

      for($i=13; $i<=14; $i++){
        DB::table('lists')
        ->where('id', $i)
        ->update(['quantity' => $request->quantity]);
      }
      return redirect('/reserve');
      
    }
}
