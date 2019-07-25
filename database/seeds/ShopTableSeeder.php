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
            'name' => 'Confiteria Lopez',
            'category' => 'Restauración'
        ]);

        DB::table('shops')->insert([
            'name' => 'Modas Mati',
            'category' => 'Moda'
        ]);

        DB::table('shops')->insert([
            'name' => 'Ferreteria Martinez',
            'category' => 'Servicios'
        ]);

        DB::table('shops')->insert([
            'name' => 'Alimentación Loli',
            'category' => 'Alimentación'
        ]);
    }
}

