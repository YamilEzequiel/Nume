<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyUserRolsTable extends Migration
{

    public function up()
    {
        Schema::create('company__user__rols', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_company')->unsigned();
            $table->integer('id_rol')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_company')->references('id')->on('companies');
            $table->foreign('id_rol')->references('id')->on('roles');
        });
    }


    public function down()
    {
        Schema::dropIfExists('company__user__rols');
    }
}
