<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    //Controlador de la vista Create
    public function getCreate()
    {
        return view('vistas.create');
    }
}
