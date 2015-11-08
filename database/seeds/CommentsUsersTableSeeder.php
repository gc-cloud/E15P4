<?php

use Illuminate\Database\Seeder;

class CommentsUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('comments_users')->insert([
        'comment_id' => 1,
        'user_id' => 1,
      ]);
      DB::table('comments_users')->insert([
        'comment_id' => 2,
        'user_id' => 3,
      ]);
      DB::table('comments_users')->insert([
        'comment_id' => 3,
        'user_id' => 1,
      ]);
      DB::table('comments_users')->insert([
        'comment_id' => 4,
        'user_id' => 2,
      ]);
      DB::table('comments_users')->insert([
        'comment_id' => 5,
        'user_id' => 2,
      ]);
      DB::table('comments_users')->insert([
        'comment_id' => 6,
        'user_id' => 2,
      ]);
      DB::table('comments_users')->insert([
        'comment_id' => 7,
        'user_id' => 1,
      ]);


    }
}
