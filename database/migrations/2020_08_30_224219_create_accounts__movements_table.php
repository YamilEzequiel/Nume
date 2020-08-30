<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts__movements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_voucher')->unsigned();
            $table->integer('id_account')->unsigned();
            $table->integer('active');
            $table->integer('passive');
            $table->integer('balance');
            $table->date('date');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_voucher')->references('id')->on('vouchers');
            $table->foreign('id_account')->references('id')->on('accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts__movements');
    }
}
