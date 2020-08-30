<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsPaymentsAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts__payments__accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_sale_position')->unsigned();
            $table->integer('id_type_payment')->unsigned();
            $table->integer('id_accounts')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_sale_position')->references('id')->on('sales__positions');
            $table->foreign('id_type_payment')->references('id')->on('types__payments');
            $table->foreign('id_accounts')->references('id')->on('accounts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts__payments__accounts');
    }
}
