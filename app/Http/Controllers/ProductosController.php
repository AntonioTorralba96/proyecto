<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    //Controlador de la vista Productos
    public function getProducto($id)
    {
        return view('vistas.productos', array('arrayProductos'=>$this->arrayProductos));
    }

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
