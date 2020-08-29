<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointOfSaleAndWarehousesTable extends Migration
{

    public function up()
    {
        Schema::create('point__of__sale__and__warehouses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_company')->unsigned();
            $table->string('type');
            $table->string('title');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_company')->references('id')->on('companies');
        });
    }


    public function down()
    {
        Schema::dropIfExists('point__of__sale__and__warehouses');
    }
}
