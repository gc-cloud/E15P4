<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sources', function (Blueprint $table) {
          $table->increments('id');

          $table->string('source');

          $table->string('url');

          $table->integer('article_id')->unsigned();
          $table->foreign('article_id')->references('id')
          ->on('articles')->onDelete('cascade');

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
        Schema::drop('sources');
    }
}
