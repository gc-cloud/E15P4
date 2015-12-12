<?php

use Illuminate\Database\Seeder;

class ArticleCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('article_category')->insert([
        'article_id' => 1,
        'category_id' => 1,
      ]);

      DB::table('article_category')->insert([
        'article_id' => 1,
        'category_id' => 2,
      ]);

      DB::table('article_category')->insert([
        'article_id' => 2,
        'category_id' => 1,
      ]);

      DB::table('article_category')->insert([
        'article_id' => 3,
        'category_id' =>1,
      ]);

      DB::table('article_category')->insert([
        'article_id' => 4,
        'category_id' =>1,
      ]);

      DB::table('article_category')->insert([
        'article_id' => 4,
        'category_id' =>2,
      ]);


      DB::table('article_category')->insert([
        'article_id' => 5,
        'category_id' =>2,
      ]);

      DB::table('article_category')->insert([
        'article_id' => 5,
        'category_id' =>3,
      ]);


      DB::table('article_category')->insert([
        'article_id' => 6,
        'category_id' => 1,
      ]);

      DB::table('article_category')->insert([
        'article_id' => 6,
        'category_id' => 2,
      ]);

      DB::table('article_category')->insert([
        'article_id' => 6,
        'category_id' => 3,
      ]);

      DB::table('article_category')->insert([
        'article_id' => 6,
        'category_id' => 2,
      ]);


      DB::table('article_category')->insert([
        'article_id' => 7,
        'category_id' => 3,
      ]);


      DB::table('article_category')->insert([
        'article_id' => 8,
        'category_id' => 3,
      ]);



      /* For the comments seeder we use an alternate approach with loops. First,
      we create an array or the articles we want to associate postings,

      categories with 
        # The *key* will be the article title, and the *value* will be an array of categories.
        $articles =[
          'Exercise: How much?' => ['body', 'mind','spirit','exercise','stress'],
          'Wine?' => ['body', 'mind','spirit','nutrition',
          'pesticides','organic','alcohol'],
          'Find purpose' => ['mind','spirit'],
          'Is sleeping really necessary?' => ['body', 'mind','spirit','stress']
          'Is sleeping really necessary?' => ['body', 'mind','spirit','stress']
          'Is sleeping really necessary?' => ['body', 'mind','spirit','stress']
        ];

        # Now loop through the above array, creating a new pivot for each book to tag
        foreach($articles as $title => $categories) {

          # First get the article
          $article = \App\Article::where('title','like',$title)->first();

          # Now loop through each category for this article, adding the pivot
          foreach($categories as $categoryName) {
              $category = \App\Category::where('name','LIKE',$categoryName)->first();

              # Connect category  to this article
              $article->categories()->save($category);
          }

        }*/



    }
}
