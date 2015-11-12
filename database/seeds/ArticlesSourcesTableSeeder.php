<?php

use Illuminate\Database\Seeder;

class ArticlesSourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles_sources')->insert([
          'article_id' => 1,
          'source_id' => 1,
        ]);

        DB::table('articles_sources')->insert([
          'article_id' => 2,
          'source_id' => 2,
        ]);

        DB::table('articles_sources')->insert([
          'article_id' => 2,
          'source_id' => 3,
        ]);

        DB::table('articles_sources')->insert([
          'article_id' => 3,
          'source_id' => 4,
        ]);

        DB::table('articles_sources')->insert([
          'article_id' => 4,
          'source_id' => 5,
        ]);
    }
}
