<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypesPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types__payments', function (Blueprint $table) {
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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('types__payments');
    }
}
