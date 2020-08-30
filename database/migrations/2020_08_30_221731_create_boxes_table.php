<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boxes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->integer('id_sale_position')->unsigned();
            $table->integer('date_opening');
            $table->integer('date_closed');
            $table->integer('status');
            $table->integer('pile_initial');
            $table->integer('pile_initial_system');
            $table->integer('pile_final_user');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_sale_position')->references('id')->on('sales__positions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boxes');
    }
}
