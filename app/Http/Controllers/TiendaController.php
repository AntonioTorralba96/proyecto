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

    //Controlador de la vista Productos
    public function getProducto($id)
    {
        return view('vistas.productos', array('arrayProductos'=>$this->arrayProductos));
    }

    //Controlador de la vista Lista
    public function getLista()
    {
        return view('vistas.lista');
    }

    //Controlador de la vista Reserva
    public function getReserva()
    {
        return view('vistas.reserva');
    }

    //Controlador de la vista Create
    public function getCreate()
    {
        return view('vistas.create');
    }

    //Controlador de la vista Edit
    public function getEdit($id)
    {
        return view('vistas.editar', array('id'=>$id));
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
    
    //Base de datos provisional de la vista Productos
    private $arrayProductos= array(
		array(
            'nombre' => 'Tarda',
            'precio' => '3,90€'
		),
		array(
            'nombre' => 'Vestido Azul',
            'precio' => '5€'
		),
		array(
            'nombre' => 'Arroz en Bolsa',
            'precio' => '1€'
		),
		array(
            'nombre' => 'Bombilla',
            'precio' => '1,50€'
		)
	);

}
