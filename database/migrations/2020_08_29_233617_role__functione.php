<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RoleFunctione extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_functione', function (Blueprint $table) {
            $table->integer('id_rol')->unsigned();
            $table->integer('id_function')->unsigned();

            $table->foreign('id_rol')->references('id')->on('roles');
            $table->foreign('id_function')->references('id')->on('functiones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_functione');
    }
}
