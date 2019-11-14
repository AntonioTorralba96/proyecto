<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class EditUserController extends Controller
{
    public function getEditUser($id)
    {
        $arrayUsers= User::findOrFail($id);
        return view('vistas.editUsers', array('user'=>$arrayUsers));
    }

    public function putEditUsers(Request $request, $id)
    {
        //var_dump($request);
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->role_id = $request->role;
        $user->email = $request->email;
        $user->save();
        return redirect('listUsers');
    //     echo("funciono");
    }

}
