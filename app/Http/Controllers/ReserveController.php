<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ReserveController extends Controller
{
    //Controlador de la vista Reserva
    public function getReserve()
    {
        return view('vistas.reserve');
    }

    public function postReserve(Request $request)
    {
        DB::table('reserves')->insert([
            'name' => $request->name,
            'number' => $request->telefono,
            'direction' => $request->direccion,
            'town/city' => $request->poblacion,
            'postal_code' => $request->codigoPostal,
            'pick' => $request->vehicle1
        ]);
        
        return redirect('/shop');
    }
}
