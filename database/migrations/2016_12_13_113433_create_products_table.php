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
            $table->increments('id');
            $table->unsignedInteger('brands_id');
            $table->unsignedInteger('category_id');
            $table->string('photo');
            $table->string('name');
            $table->string('sub-text');
            $table->enum('status', ['publshed', 'draft']);
            $table->text('desc');
            $table->integer('stock');
            $table->integer('original-price');
            $table->integer('price');
            $table->integer('discount');
            $table->string('meta-title');
            $table->string('meta-keyword');
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
