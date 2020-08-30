<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{

    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_box')->unsigned();
            $table->integer('total_sale');
            $table->integer('status');
            $table->date('date_and_time_opening');
            $table->date('date_and_time_closed');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_box')->references('id')->on('boxes');
        });
    }


    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
