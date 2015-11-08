<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('comments_users', function (Blueprint $table) {
          $table->integer('comment_id')->unsigned();
          $table->foreign('comment_id')->references('id')
          ->on('comments')->onDelete('cascade');

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
        Schema::drop('comments_users');
    }
}
