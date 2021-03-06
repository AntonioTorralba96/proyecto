<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lists')->insert([
            'user_id' => '1',
            'product_id' => '1',
            'quantity' => '5'
        ]);

        DB::table('lists')->insert([
            'user_id' => '3',
            'product_id' => '2',
            'quantity' => '5'
        ]);

        DB::table('lists')->insert([
            'user_id' => '2',
            'product_id' => '4',
            'quantity' => '5'
        ]);

        DB::table('lists')->insert([
            'user_id' => '1',
            'product_id' => '2',
            'quantity' => '5'
        ]);
    }
}
