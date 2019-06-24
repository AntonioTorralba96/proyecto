<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
    //Controlador de la vista Edit
    public function getEdit($id)
    {
        return view('vistas.editar', array('id'=>$id));
    }
}
