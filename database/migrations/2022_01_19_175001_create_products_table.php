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
            $table->increments('id')->nullable();;
            $table->string('title');
            $table->string('category_id')->nullable();;
            $table->integer('brand_id')->nullable();
            $table->text('description')->nullable();;
            $table->string('image')->nullable();
            $table->string('slug')->nullable();;
            $table->integer('quantity')->default(1);
            $table->integer('price')->nullable();;
            $table->integer('status')->default(0);
            $table->integer('offer_price')->nullable();
            $table->integer('admin_id')->unsigned();
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
