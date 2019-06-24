<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiendaController extends Controller
{
    //Controlador de la vista Tiendas
    public function getTienda()
    {
        return view('vistas.tiendas', array('arrayTiendas'=>$this->arrayTiendas));
    }

    //Base de datos provisional de la vista Tiendas
    private $arrayTiendas = array(
		array(
			'nombre' => 'Confiteria Lopez',
			'tipo' => 'Restauración'
		),
		array(
			'nombre' => 'Modas Mati',
			'tipo' => 'Moda'
		),
		array(
			'nombre' => 'Ferreteria Martinez',
			'tipo' => 'Servicios'
		),
		array(
			'nombre' => 'Alimentación Loli',
			'tipo' => 'Alimentación'
		)
    );
    
}
