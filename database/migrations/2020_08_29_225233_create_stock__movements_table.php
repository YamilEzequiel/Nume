<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockMovementsTable extends Migration
{

    public function up()
    {
        Schema::create('stock__movements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_stock')->unsigned();
            $table->string('description');
            $table->integer('stock');
            $table->integer('date');
            $table->integer('action');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_stock')->references('id')->on('stocks');
        });
    }


    public function down()
    {
        Schema::dropIfExists('stock__movements');
    }
}
