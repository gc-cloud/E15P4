<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
  /**
  * Get the article that owns the source.
  */
 public function article()
 {
     return $this->belongsTo('App\Article');
 }

}
