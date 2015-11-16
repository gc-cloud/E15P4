<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  /**
     * Get the comments for the blog post.
     */
    public function comments()
    {
        return $this->belongsToMany('App\Comment');
    }

}
