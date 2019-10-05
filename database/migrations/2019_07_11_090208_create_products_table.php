<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');//->unique();
            $table->string('price');
            $table->text('description')->nullable();
            $table->boolean('available')->default(true);
            $table->integer('quantity')->nullable();
            $table->string('poster')->default("https://cdn.shopify.com/s/files/1/0229/0839/files/Untitled_design__1.png?2393");
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
        Schema::dropIfExists('products');
    }
}
