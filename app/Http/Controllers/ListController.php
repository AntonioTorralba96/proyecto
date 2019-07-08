<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    //Controlador de la vista Lista
    public function getList()
    {
        return view('vistas.list');
    }
}
