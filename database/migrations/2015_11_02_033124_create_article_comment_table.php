<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('article_comment', function (Blueprint $table) {
          $table->integer('article_id')->unsigned();
          $table->foreign('article_id')->references('id')
          ->on('articles')->onDelete('cascade');

          $table->integer('comment_id')->unsigned();
          $table->foreign('comment_id')->references('id')
          ->on('comments')->onDelete('cascade');

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
        Schema::drop('article_comment');
    }
}
