<?php

use Illuminate\Database\Seeder;

class ArticlesCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('articles_categories')->insert([
        'article_id' => 1,
        'category_id' => 1,
      ]);
      DB::table('articles_categories')->insert([
        'article_id' => 2,
        'category_id' => 1,
      ]);
      DB::table('articles_categories')->insert([
        'article_id' => 3,
        'category_id' => 2,
      ]);
      DB::table('articles_categories')->insert([
        'article_id' => 4,
        'category_id' => 3,
      ]);
    }
}
