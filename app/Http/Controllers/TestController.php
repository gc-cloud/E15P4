<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Seeder;

class TestController extends Controller
{
  /**
 * Insert using the Query Builder
 */
  function getTest1() {

      echo '<h1>Test1 - insert article </h1>';

      \DB::table('articles')->insert([
      'title' => 'Wine?',
      'bottomline' => 'Three drinks spread over each week minimize risk of heart attack. More
                    can be dangerous to your health.',
      'body' => 'Studies show that moderate drinking that is spread over time can reduce risk of CHI.
                Drinking more alcohol can increase risk of multiple cancers, liver failure and obesity  ',
      'user_id' => 2,
      ]);
      return;

  }

  /**
  * Query for all articles using the Query Builder
  */
  function getTest2() {
      echo '<h1>Test 2: show all articles </h1>';

      // Equivalent to: SELECT * FROM articles
      $articles = \DB::table('articles')->get();
      foreach($articles as $article) {
          echo $article->title.'<br>';
      }
      return;
  }

  /**
  * Query for all articles using the Article model
  */
  function getTest3() {
      echo '<h1>Test 3: show all articles </h1>';
      $articles = \App\Article::all();
      foreach($articles as $article) {
          echo $article->title.'<br>';
      }
      return;
  }

  /**
  * Insert using Eloquent
  */
  function getTest4() {
      echo '<h1>Test 4: add article with Eloquent </h1>';
      $article = new \App\Article();
      $article->title = 'Obesity';
      $article->bottomline = 'Excess fat makes you want to pee';
      $article->body = 'Studies show that excess fat increases the risk of enlarged prostate';
      $article->user_id = 3;
      $article->save(); // Something is buggy here. Adding more than one
      return;
  }

  /**
  * Delete using Eloquent
  */
  function getTest5() {
      echo '<h1>Test 5: delete article with Eloquent </h1>';
      $articles = \App\Article::all();
      $last = $articles->last(); // Something is buggy here , deleting more than one
      $last->delete();
      return;
  }


  /**
   * Querying on the Model vs. the Collection
   */
    function getTest6() {
        // Query Responsibility
        echo '<h1>Test 6: query responsibility </h1>';
        $articles = \App\Article::orderBy('id','DESC')->get();
        $first = $articles->first();
        $last  = $articles->last();
        dump($articles);
        dump($first);
        dump($last);
        return;
   }

}
