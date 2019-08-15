<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->insert([
            'name' => 'Tarta',
            'price' => '3,90€',
            'shop_id' => '1'
      ]);

      DB::table('products')->insert([
            'name' => 'Vestido Azul',
            'price' => '5€',
            'shop_id' => '2'
      ]);

      DB::table('products')->insert([
            'name' => 'Bombilla',
            'price' => '1,50€',
            'shop_id' => '3'
      ]);

      DB::table('products')->insert([
            'name' => 'Arroz en Bolsa',
            'price' => '1€',
            'shop_id' => '4'
      ]);

    }
}
