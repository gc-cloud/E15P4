<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleSourceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('article_source', function (Blueprint $table) {
          $table->integer('article_id')->unsigned();
          $table->foreign('article_id')->references('id')
          ->on('articles')->onDelete('cascade');

          $table->integer('source_id')->unsigned();
          $table->foreign('source_id')->references('id')
          ->on('sources')->onDelete('cascade');

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
        Schema::drop('article_source');
    }
}
