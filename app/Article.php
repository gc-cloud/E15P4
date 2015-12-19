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


    /**
         * Get all of the users commenting on the Article.
         */
        public function users()
        {
            return $this->hasManyThrough('App\User', 'App\Comment');
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


     /* Handle file upload for images .  Set defaults if no images are provided */
     public function uploadImages($request){
       if($request->file('imageName')){
         $imageName = 'article_'.$this->id.'_pic.'.$request->file('imageName')->getClientOriginalExtension();
         $request->file('imageName')->move(base_path().'/public/images/articles/', $imageName);
         $imagePath = '/images/articles/'.$imageName;
       } elseif (!$this->imagePath){
         $imagePath = '/images/articles/zudbu.jpg';
       } else {
         $imagePath = $this->imagePath;
       }
       if($request->file('thumbName')){
         $thumbName = 'article_'.$this->id.'_thumb.'.$request->file('thumbName')->getClientOriginalExtension();
         $request->file('thumbName')->move(base_path().'/public/images/articles/', $thumbName);
         $thumbPath = '/images/articles/'.$thumbName;
       } elseif (!$this->thumbPath){
         $thumbPath = '/images/articles/zudbu_thumb.jpg';
       } else{
          $thumbPath = $this->thumbPath;
       }
       $this->imagePath = $imagePath;
       $this->thumbPath = $thumbPath;
       $this->update();
     }

}
