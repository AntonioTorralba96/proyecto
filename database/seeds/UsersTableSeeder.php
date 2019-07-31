<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 29)->create();

        DB::table('users')->insert([
            'name' => 'Usuario1',
            'email' => 'usuario1@gmail.com',
            'password' => bcrypt('alumno'),
            'type'=> 'admin'
        ]);
    }
}
