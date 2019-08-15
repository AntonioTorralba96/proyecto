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
            'name' => 'Admin1',
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('admin'),
            'type'=> 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'Owner1',
            'email' => 'owner1@gmail.com',
            'password' => bcrypt('owner'),
            'type'=> 'owner'
        ]);
    }
}
