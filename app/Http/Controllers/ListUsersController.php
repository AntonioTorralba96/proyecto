<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListUsersController extends Controller
{
    public function getListUsers()
    {
      $arrayUsers = DB::table('users')->select('name','role_id')->get();

      return view('vistas.listUsers', ['arrayUsers' => $arrayUsers]);
    }
}
