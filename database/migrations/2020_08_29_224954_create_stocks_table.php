<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{

    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_article')->unsigned();
            $table->integer('id_stock_ubication')->unsigned();
            $table->integer('stock');
            $table->integer('stock_min');
            $table->integer('stock_max');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_article')->references('id')->on('articles');
            $table->foreign('id_stock_ubication')->references('id')->on('stock__ubications');
        });
    }


    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
