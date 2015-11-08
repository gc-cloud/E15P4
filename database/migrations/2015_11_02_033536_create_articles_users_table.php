<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('articles_users', function (Blueprint $table) {
          $table->integer('article_id')->unsigned();
          $table->foreign('article_id')->references('id')
          ->on('articles')->onDelete('cascade');

          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')->references('id')
          ->on('users')->onDelete('cascade');
          
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
        Schema::drop('articles_users');
    }
}
