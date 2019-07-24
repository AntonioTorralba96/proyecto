<?php

use Illuminate\Database\Seeder;
use App\Shop;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        self::seedShops();
          $this->command->info('Tabla habitaciones inicializada con datos!');
        
    }

    private static function seedShops()
    {
        Shop::truncate();

        foreach( self::$arrayShops as $shop ) {
            $s = new Shop;
            $s->name = $shop['nombre'];
            $s->category= $shop['tipo'];
            $s->save();

        }
    }
    
    private static $arrayShops = array(
        array(
            'nombre' => 'Confiteria Lopez',
            'tipo' => 'Restauración'
        ),
        array(
            'nombre' => 'Modas Mati',
            'tipo' => 'Moda'
        ),
        array(
            'nombre' => 'Ferreteria Martinez',
            'tipo' => 'Servicios'
        ),
        array(
            'nombre' => 'Alimentación Loli',
            'tipo' => 'Alimentación'
        )
    );
}
