<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFunctionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('functiones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_module')->unsigned();
            $table->integer('api');
            $table->integer('method');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_module')->references('id')->on('modules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('functiones');
    }
}
