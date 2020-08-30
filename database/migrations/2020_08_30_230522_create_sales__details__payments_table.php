<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesDetailsPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales__details__payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_sale')->unsigned();
            $table->integer('id_post_payment_account')->unsigned();
            $table->integer('total');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_sale')->references('id')->on('sales');
            $table->foreign('id_post_payment_account')->references('id')->on('posts__payments__accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales__details__payments');
    }
}
