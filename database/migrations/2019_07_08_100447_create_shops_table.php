<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 64);
            $table->string('category', 128);
            $table->string('location')->nullable();
            $table->string('telephone')->nullable();
            $table->string('website')->nullable();
            $table->string('poster')->nullable()->default("https://img.freepik.com/vector-gratis/tienda-dibujos-animados-compras_18591-42797.jpg?size=338&ext=jpg");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
