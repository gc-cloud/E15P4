<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
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

}
