<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('comments')->insert([
        'comment' => 'wow, impressive!',
        'user_id' => 1,
        'article_id' =>1,
      ]);
      DB::table('comments')->insert([
        'comment' => 'not surprised',
        'user_id' => 1,
        'article_id' =>2,
      ]);
      DB::table('comments')->insert([
        'comment' => 'yeah, this makes sense',
        'user_id' => 1,
        'article_id' =>3,
      ]);
      DB::table('comments')->insert([
        'comment' => 'thank you for sharing',
        'user_id' => 1,
        'article_id' =>4,
      ]);
      DB::table('comments')->insert([
        'comment' => 'great site, keep up the good work!',
        'user_id' => 1,
        'article_id' =>1,
      ]);
      DB::table('comments')->insert([
        'comment' => 'I feel much better after following this',
        'user_id' => 1,
        'article_id' =>2,
      ]);
      DB::table('comments')->insert([
        'comment' => 'science rocks',
        'user_id' => 1,
        'article_id' =>3,
      ]);
    }
}
