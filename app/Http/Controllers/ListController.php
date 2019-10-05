<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function getList()
    { 
      return view('vistas.list');
    }
}
