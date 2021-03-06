<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('articles', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title');
          $table->string('bottomline');
          $table->string('imagePath');
          $table->string('thumbPath');
          $table->text('body');
          $table->integer('author_id')->unsigned();
          $table->foreign('author_id')->references('id')
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
        Schema::drop('articles');
    }
}
