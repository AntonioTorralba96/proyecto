<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaController extends Controller
{
    //Controlador de la vista Lista
    public function getLista()
    {
        return view('vistas.lista');
    }
}
