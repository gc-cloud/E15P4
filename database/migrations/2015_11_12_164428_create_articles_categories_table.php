<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('articles_categories', function (Blueprint $table) {
          $table->integer('article_id')->unsigned();
          $table->foreign('article_id')->references('id')
          ->on('articles')->onDelete('cascade');

          $table->integer('category_id')->unsigned();
          $table->foreign('category_id')->references('id')
          ->on('categories')->onDelete('cascade');

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
        Schema::drop('articles_categories');
    }
}
