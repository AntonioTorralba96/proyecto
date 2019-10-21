<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'description' => 'Administrador de la aplicación'
        ]);
        DB::table('roles')->insert([
            'name' => 'owner',
            'description' => 'Propietario de una tienda de la aplicación'
        ]);
        DB::table('roles')->insert([
            'name' => 'member',
            'description' => 'Usuario de la aplicación'
        ]);
    }
}
