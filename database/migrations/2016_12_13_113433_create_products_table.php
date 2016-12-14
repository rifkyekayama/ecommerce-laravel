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
            $table->string('name');
            $table->string('sub_text');
            $table->enum('status', ['published', 'draft']);
            $table->text('desc');
            $table->integer('stock');
            $table->integer('original_price');
            $table->integer('price');
            $table->integer('discount');
            $table->string('meta_title');
            $table->string('meta_keyword');
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
