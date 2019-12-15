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
      //Lista de productos de la tienda 1
      DB::table('products')->insert([
            'name' => 'Tarta de Chocolate',
            'price' => '3.90',
            'description' => 'Masa sablée con una finísima lámina crujiente de chocolate con leche, rellena de un cremoso intenso de chocolate y recubierta con glaseado de chocolate y nata.',
            'quantity' => '7',
            'shop_id' => '1',
            'poster' => 'https://content-recetas.lecturas.com/medio/2018/07/19/pastel-de-chocolate-y-nueces_16303313_800x800.jpg'
      ]);

      DB::table('products')->insert([
            'name' => 'Croissant',
            'price' => '1',
            'description' => 'Es un bollo dulce con forma de media luna, elaborado con masa de pan o pasta de hojaldre',
            'quantity' => '4',
            'shop_id' => '1',
            'poster' => 'https://www.artesaniacongelada.com/wp-content/uploads/2017/08/B101-Croissant-Cocido.jpg'
      ]);

      DB::table('products')->insert([
            'name' => 'Napolitana de Chocolate',
            'price' => '1.50',
            'description' => 'Se trata de un relleno de crema envuelto en una masa de hojaldre, lo que le da su forma rectangular y aplastada.',
            'quantity' => '9',
            'shop_id' => '1',
            'poster' => 'https://www.angellinares.es/shop/126858-large_default/napolitana-90g-chocolate.jpg'
      ]);

      //Lista de productos de la tienda 2

      DB::table('products')->insert([
            'name' => 'Vestido Azul',
            'price' => '5',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque commodo purus sit amet dui pharetra, nec ornare justo accumsan. Nam pharetra elit vitae venenatis pretium. Etiam eu massa ut ligula egestas volutpat vitae non mi. Vestibulum ut elit eu nunc pharetra ultrices nec sed enim. Pellentesque tellus orci, dapibus ac.',
            'quantity' => '2',
            'shop_id' => '2',
            'poster' => 'https://mlmirror.com/220-large_default/vestido-azul-largo.jpg'
      ]);

      DB::table('products')->insert([
            'name' => 'Vestido Negro',
            'price' => '5',
            'description' => 'Vestido negro de seda de alta calidad',
            'quantity' => '2',
            'shop_id' => '2',
            'poster' => 'https://cdn.palbin.com/users/1279/images/vestido_ajustado_negro_moderno_dn5659_04-1489834097.jpg'
      ]);

      DB::table('products')->insert([
            'name' => 'Blusa Negra',
            'price' => '5',
            'description' => 'Blusa negra de alta calidad',
            'quantity' => '2',
            'shop_id' => '2',
            'poster' => 'https://ae01.alicdn.com/kf/HTB1jkNvXZfrK1Rjy0Fmq6xhEXXaB.jpg'
      ]);

      //Lista de productos de la tienda 3
      DB::table('products')->insert([
            'name' => 'Bombilla',
            'price' => '1.50',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque commodo purus sit amet dui pharetra, nec ornare justo accumsan. Nam pharetra elit vitae venenatis pretium. Etiam eu massa ut ligula egestas volutpat vitae non mi. Vestibulum ut elit eu nunc pharetra ultrices nec sed enim. Pellentesque tellus orci, dapibus ac.',
            'quantity' => '10',
            'shop_id' => '3',
            'poster' => 'https://www.creative-cables.co/47053-thickbox_default/bombilla-dorada-led-globo-g125-filamento-largo-6w-decorativa-vintage-2200k.jpg'
      ]);

      //Lista de productos de la tienda 4
      DB::table('products')->insert([
            'name' => 'Pechuga de Pollo',
            'price' => '5',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque commodo purus sit amet dui pharetra, nec ornare justo accumsan. Nam pharetra elit vitae venenatis pretium. Etiam eu massa ut ligula egestas volutpat vitae non mi. Vestibulum ut elit eu nunc pharetra ultrices nec sed enim. Pellentesque tellus orci, dapibus ac.',
            'quantity' => '4',
            'shop_id' => '4',
            'poster' => 'https://www.lavanguardia.com/r/GODO/LV/p5/WebSite/2018/03/13/img_cperezg_20180313-130600_imagenes_lv_terceros_istock-865342632-kDnD-U441494954925yuE-992x558@LaVanguardia-Web.jpg'
      ]);

    }
}
