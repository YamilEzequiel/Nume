<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContacInformationTable extends Migration
{

    public function up()
    {
        Schema::create('contac_information', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('value');
            $table->string('table_rel');
            $table->integer('id_rel')->unsigned(); //A RELACIONAR
            $table->timestamps();
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::dropIfExists('contac_information');
    }
}
