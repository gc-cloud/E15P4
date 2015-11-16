<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  /**
  * Get the post that owns the comment.
  */
 public function article()
 {
     return $this->belongsToMany('App\Article');
 }
}
