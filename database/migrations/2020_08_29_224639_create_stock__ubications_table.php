<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockUbicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock__ubications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_point__of__sale__and__warehouses')->unsigned();
            $table->string('descriptions');
            $table->integer('id_father');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_point__of__sale__and__warehouses')->references('id')->on('point__of__sale__and__warehouses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock__ubications');
    }
}
