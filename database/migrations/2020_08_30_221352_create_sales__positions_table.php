<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesPositionsTable extends Migration
{

    public function up()
    {
        Schema::create('sales__positions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_point__of__sale__and__warehouses')->unsigned();
            $table->string('title');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_point__of__sale__and__warehouses')->references('id')->on('point__of__sale__and__warehouses');
        });
    }


    public function down()
    {
        Schema::dropIfExists('sales__positions');
    }
}
