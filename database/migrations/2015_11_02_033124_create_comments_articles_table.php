<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('comments_articles', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('comment_id')->unsigned();
          $table->foreign('comment_id')->references('id')->on('comments');
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
        Schema::drop('comments_articles');
    }
}
