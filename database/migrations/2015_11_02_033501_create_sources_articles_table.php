<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSourcesArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sources_articles', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('source_id')->unsigned();
          $table->foreign('source_id')->references('id')->on('sources');
          $table->integer('article_id')->unsigned();
          $table->foreign('article_id')->references('id')->on('articles');
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sources_articles');
    }
}
