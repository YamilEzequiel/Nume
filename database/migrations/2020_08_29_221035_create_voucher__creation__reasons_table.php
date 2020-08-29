<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoucherCreationReasonsTable extends Migration
{

    public function up()
    {
        Schema::create('voucher__creation__reasons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('active_account');
            $table->integer('active_stock');
            $table->integer('flow');
            $table->integer('voucher_lyrics');
            $table->integer('voucher_title');
            $table->timestamps();
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::dropIfExists('voucher__creation__reasons');
    }
}
