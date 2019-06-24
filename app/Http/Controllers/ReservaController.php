<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservaController extends Controller
{
    //Controlador de la vista Reserva
    public function getReserva()
    {
        return view('vistas.reserva');
    }
}
