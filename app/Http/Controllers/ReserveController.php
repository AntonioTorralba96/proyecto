<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReserveController extends Controller
{
    //Controlador de la vista Reserva
    public function getReserve()
    {
        return view('vistas.reserve');
    }
}
