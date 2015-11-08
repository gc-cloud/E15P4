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
      ]);
      DB::table('comments')->insert([
        'comment' => 'not surprised',
      ]);
      DB::table('comments')->insert([
        'comment' => 'yeah, this makes sense',
      ]);
      DB::table('comments')->insert([
        'comment' => 'thank you for sharing',
      ]);
      DB::table('comments')->insert([
        'comment' => 'great site, keep up the good work!',
      ]);
      DB::table('comments')->insert([
        'comment' => 'I feel much better after following this',
      ]);
      DB::table('comments')->insert([
        'comment' => 'science rocks',
      ]);
    }
}
