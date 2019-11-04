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
            'price' => '3,90',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque commodo purus sit amet dui pharetra, nec ornare justo accumsan. Nam pharetra elit vitae venenatis pretium. Etiam eu massa ut ligula egestas volutpat vitae non mi. Vestibulum ut elit eu nunc pharetra ultrices nec sed enim. Pellentesque tellus orci, dapibus ac.',
            'shop_id' => '1',
            'poster' => 'https://canalcocina.es/medias/_cache/zoom-a5352c6b3b7e0845a2476ef5d6088a1e-920-518.jpg'
      ]);

      DB::table('products')->insert([
            'name' => 'Vestido Azul',
            'price' => '5',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque commodo purus sit amet dui pharetra, nec ornare justo accumsan. Nam pharetra elit vitae venenatis pretium. Etiam eu massa ut ligula egestas volutpat vitae non mi. Vestibulum ut elit eu nunc pharetra ultrices nec sed enim. Pellentesque tellus orci, dapibus ac.',
            'shop_id' => '2',
            'poster' => 'https://mlmirror.com/220-large_default/vestido-azul-largo.jpg'
      ]);

      DB::table('products')->insert([
            'name' => 'Bombilla',
            'price' => '1,50',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque commodo purus sit amet dui pharetra, nec ornare justo accumsan. Nam pharetra elit vitae venenatis pretium. Etiam eu massa ut ligula egestas volutpat vitae non mi. Vestibulum ut elit eu nunc pharetra ultrices nec sed enim. Pellentesque tellus orci, dapibus ac.',
            'shop_id' => '3',
            'poster' => 'https://www.creative-cables.co/47053-thickbox_default/bombilla-dorada-led-globo-g125-filamento-largo-6w-decorativa-vintage-2200k.jpg'
      ]);

      DB::table('products')->insert([
            'name' => 'Pechuga de Pollo',
            'price' => '5',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque commodo purus sit amet dui pharetra, nec ornare justo accumsan. Nam pharetra elit vitae venenatis pretium. Etiam eu massa ut ligula egestas volutpat vitae non mi. Vestibulum ut elit eu nunc pharetra ultrices nec sed enim. Pellentesque tellus orci, dapibus ac.',
            'shop_id' => '4',
            'poster' => 'https://www.lavanguardia.com/r/GODO/LV/p5/WebSite/2018/03/13/img_cperezg_20180313-130600_imagenes_lv_terceros_istock-865342632-kDnD-U441494954925yuE-992x558@LaVanguardia-Web.jpg'
      ]);

    }
}
