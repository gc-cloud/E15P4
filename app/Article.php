<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  /**
       * The attributes that are mass assignable.
       *
       * @var array
       */
      protected $fillable = ['title','bottomline','body','author_id'];



  /**
   * The categories that belong to the article.
   */
  public function categories()
  {
      return $this->belongsToMany('App\Category')->withTimestamps();
  }

  /**
     * Get the references for the article.
     */
    public function sources()
    {
        return $this->hasMany('App\Source');
    }


  /**
     * Get the comments for the article.
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    /* Article belongs to on user. */
    public function author() {
     return $this->belongsTo('\App\User');
    }

    /* Select Articles for a given category. This function is used to
    select articles to be displayed in the Welcome, Body, Mind and
    Spirit pages.  We frist get a collection and then filter it
    to get selected articles with a call in function*/
    public function filterArticles($articles, $main_category) {
      $selected_articles = [];
      foreach($articles as $article) {
        foreach($article->categories as $category) {
          if($category->name==$main_category){
            global $selected_articles; // Refer to previously defined variable
            $selected_articles[] = $article->id;
          }
        }
      }
      $articles = $articles->filter(function ($article) {
         global $selected_articles;
         return in_array($article->id, $selected_articles);
      });
      return $articles;
     }
}
