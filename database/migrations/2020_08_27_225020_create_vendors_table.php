<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_company')->unsigned();
            $table->string('title');
            $table->string('description');
            $table->string('cuit');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_company')->references('id')->on('companies');
        });
    }

    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}
