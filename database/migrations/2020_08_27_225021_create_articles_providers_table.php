<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_providers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_article')->unsigned();
            $table->integer('id_provider')->unsigned();
            $table->integer('id_company')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_company')->references('id')->on('companies');
            $table->foreign('id_article')->references('id')->on('articles');
            $table->foreign('id_provider')->references('id')->on('vendors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles_providers');
    }
}
