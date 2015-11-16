<?php

use Illuminate\Database\Seeder;

class ArticleCommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('article_comment')->insert([
        'article_id' => 1,
        'comment_id' => 1,
      ]);

      DB::table('article_comment')->insert([
        'article_id' => 1,
        'comment_id' => 2,
      ]);

      DB::table('article_comment')->insert([
        'article_id' => 2,
        'comment_id' => 3,
      ]);
      DB::table('article_comment')->insert([
        'article_id' => 2,
        'comment_id' => 4,
      ]);
      DB::table('article_comment')->insert([
        'article_id' => 2,
        'comment_id' => 5,
      ]);
      DB::table('article_comment')->insert([
        'article_id' => 3,
        'comment_id' => 6,
      ]);
      DB::table('article_comment')->insert([
        'article_id' => 3,
        'comment_id' => 7,
      ]);
    }
}
