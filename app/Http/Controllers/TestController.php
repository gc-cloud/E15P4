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
      'author_id' => 2,
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
      $article->author_id = 3;
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

   /**
    * Associate a new author with a new article
    */
    function getTest7() {
       echo '<h1>Test 7: New user with new article </h1>';
       $author = new \App\User; # authors are stored in the users table
       $author->name = 'Mark MD';
       $author->email = 'mark8@bingmail2.com';
       $author->password = 'DifficultP2s!';
       $author->role_id = '1';
       $author->save();
       dump($author->toArray());


       $article = new \App\Article;
       $article->title = "Cellphones";
       $article->bottomline = 'Cellphones are low microwave emmitters, avoid using them all day long';
       $article->body = 'Must people would agree that a few minutes in the sun are nice, while several hours a day would damage your skin.  Cellphones are very similar,
       they emit a type of "light" that differes from sun light only on the frequency.  ';
       echo 'article text ok';
       $article->author()->associate($author); # <--- Associate the author with this article
       $article->save();
       dump($article->toArray());
       return;
     }

  /**
  * Get a single article with its author
  */
  function getTest8() {
    echo '<h1>Test 8: Retrieved first article and related author </h1>';
      $article = \App\Article::first();
      # Get the author for  this article using the "user" dynamic property
      # "user" corresponds to the the relationship method defined in the Article model
      $author = $article->author;

      # Output
      echo $article->title.' was written by '.$author->name.'.';
      dump($article->toArray());
      dump($author->toArray());
      return ;
  }


  /**
  * Get all the articles with their authors
  */
  function getTest9() {
      echo '<h1> Test 9: Eager loading of articles with authors</h1>';
       # Eager load the authors with the articles
       $articles = \App\Article::with('author')->get();
       foreach($articles as $article) {
           echo $article->author->name.' wrote "'.$article->title.'"<br>';
       }
       dump($articles->toArray());
       return;
  }

  /**
  * Get a single article with its categories
  */
  function getTest10() {
      echo '<h1> Test 10: Get a single article with all its categories</h1>';
      $article = \App\Article::where('title','=','Wine?')->first();
      echo 'Article "'.$article->title.'" has the following categories: ';
      foreach($article->categories as $category) {
          echo $category->name.' ';
      }
      return ;
  }


    /**
    * Get all the articles , eagerly loading the categories
    */
    function getTest11() {
        echo '<h1> Test 11: Get all the articles, eagerloading all the categories</h1>';
        $articles = \App\Article::with('categories')->get();
        foreach($articles as $article) {
            echo '<br> Article "'.$article->title.'" has the following categories: ';
            $result=$article->categories;
            foreach($article->categories as $category) {
                echo $category->name.' ';
            }
        }
        dump($articles);
        }



    /**
    * Demonstrating working with users
    */
    function getTest12() {
    # Get the current logged in user
    $user = \Auth::user();
        if($user) {
            echo 'Hi logged in user '.$user->name.'<br>';
        }
        # Get a user from the database
        $user = \App\User::where('name','like','Jamal')->first();
        echo 'Hi '.$user->name.'<br>';
    }



}
