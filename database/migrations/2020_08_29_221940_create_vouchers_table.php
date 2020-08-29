<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVouchersTable extends Migration
{

    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_voucher_creation_reason')->unsigned();
            $table->integer('id_associated')->unsigned();
            $table->integer('total');
            $table->integer('original');
            $table->integer('number_copy');
            $table->integer('date');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_voucher_creation_reason')->references('id')->on('voucher__creation__reasons');
        });
    }


    public function down()
    {
        Schema::dropIfExists('vouchers');
    }
}
