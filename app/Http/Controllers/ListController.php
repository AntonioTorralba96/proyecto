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
        $precio=DB::table('products')->where([
          ['id', '=', $id]])->first();
         
        $producto = DB::table('lists')->where([
          ['product_id', '=', $id],
          ['user_id', '=', $user]])->first();
          
      
      if($producto!=null){
        DB::table('lists')->where([
          ['product_id', '=', $id],
          ['user_id', '=', $user]])->update([
          'quantity'=>($producto->quantity+1) 
          ,'price'=>$producto->price+$precio->price]);
      }
      else{
        DB::table('lists')->insert([
            'user_id' => $user,
            'product_id' => $id,
            'quantity' => '1',
            'price'=>$precio->price
        ]);
      }
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

      var_dump($arrayList); 

      foreach($arrayList as $list){
        DB::table('lists')
        ->where('id', $list->id)
        ->update(['quantity' => $request->quantity[$list->id]]);
      }
      return redirect('/reserve');
      
    }
}
