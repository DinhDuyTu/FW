<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigInteger('category_id')->nullable();
            $table->string('name')->nullable();
            $table->string('product_code')->nullable();
            $table->integer('price')->unsigned()->nullable();
            $table->integer('price_sale')->unsigned()->nullable();
            $table->integer('quantity')->unsigned()->nullable();
            $table->boolean('is_highlight')->nullable()->default(false);
            $table->text('detail')->nullable();
            $table->text('description')->nullable();
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
