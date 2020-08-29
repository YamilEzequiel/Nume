<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoucherDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voucher__details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_voucher')->unsigned();
            $table->integer('id_article')->unsigned();
            $table->integer('quantity');
            $table->integer('subtotal');
            $table->integer('iva');
            $table->integer('discount');
            $table->integer('total');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_voucher')->references('id')->on('vouchers');
            $table->foreign('id_article')->references('id')->on('articles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voucher__details');
    }
}
