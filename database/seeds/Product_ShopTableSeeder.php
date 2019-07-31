<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product_ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_shop')->insert([
            'product_id' => '1',
            'shop_id' => '2'
        ]);

        DB::table('product_shop')->insert([
            'product_id' => '2',
            'shop_id' => '2'
        ]);

        DB::table('product_shop')->insert([
            'product_id' => '3',
            'shop_id' => '1'
        ]);

        DB::table('product_shop')->insert([
            'product_id' => '4',
            'shop_id' => '4'
        ]);
    }
}
