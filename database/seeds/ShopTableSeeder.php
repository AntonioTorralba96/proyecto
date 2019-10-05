<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            'name' => 'Delicias del Mirador',
            'category' => 'Confitería',
            'poster' => 'https://media-cdn.tripadvisor.com/media/photo-s/0d/a6/60/cd/logo.jpg'
        ]);

        DB::table('shops')->insert([
            'name' => 'Alma Jato',
            'category' => 'Moda',
            'poster' => 'https://factoryfy.es/wp-content/uploads/logotipo-tienda-ropa-complementos-mujer.jpg'
        ]);

        DB::table('shops')->insert([
            'name' => 'Ferreteria El Crucero',
            'category' => 'Servicios',
            'poster' => 'http://ahoramibarrio.com/wp-content/uploads/Logotipo-foto-1.jpg'
        ]);

        DB::table('shops')->insert([
            'name' => 'Carniceria González',
            'category' => 'Alimentación',
            'poster' => 'https://directorioelregional.com/media/images/galeria/carniceria-gonzalez-2097-aa7ui3e4u7.png'
        ]);
    }
}

