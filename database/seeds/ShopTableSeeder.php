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
            'location' => 'San Javier',
            'telephone' => '999666555',
            'website' => 'www.deliciasdelmirador.com',
            'poster' => 'https://media-cdn.tripadvisor.com/media/photo-s/0d/a6/60/cd/logo.jpg'
        ]);

        DB::table('shops')->insert([
            'name' => 'Alma Jato',
            'category' => 'Moda',
            'location' => 'San Pedro del Pinatar',
            'telephone' => '999775544',
            'website' => 'www.almajatomoda.com',
            'poster' => 'https://factoryfy.es/wp-content/uploads/logotipo-tienda-ropa-complementos-mujer.jpg'
        ]);

        DB::table('shops')->insert([
            'name' => 'Ferreteria Gómez',
            'category' => 'Servicios',
            'location' => 'Murcia',
            'telephone' => '998833432',
            'website' => 'www.ferreteriagomez.com',
            'poster' => 'http://ferrebuentrato.mx/wp-content/uploads/2016/10/cropped-logo-ferrebuentrato.png'
        ]);

        DB::table('shops')->insert([
            'name' => 'Carniceria González',
            'category' => 'Alimentación',
            'location' => 'San Pedro del Pinatar',
            'telephone' => '945882321',
            'website' => 'www.carniceriagonzalez.com',
            'poster' => 'https://directorioelregional.com/media/images/galeria/carniceria-gonzalez-2097-aa7ui3e4u7.png'
        ]);
    }
}

