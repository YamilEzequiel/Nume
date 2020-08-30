<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesDetailsProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales__details__products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_sale')->unsigned();
            $table->integer('id_article')->unsigned();
            $table->integer('quantity');
            $table->integer('subtotal');
            $table->integer('discount');
            $table->integer('total');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_sale')->references('id')->on('sales');
            $table->foreign('id_article')->references('id')->on('articles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales__details__products');
    }
}
