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


 /**
 * Update sources in an article. Since the user can add and delete at will
 * on the client side, we first cleanup the original values and then add
 * the new ones.  This function is called to store and edit articles.
 */
  public function updateArticleSources($sources, $request, $article_id)
  {
    foreach ($sources as $source) {
      $source->delete();
    }
    if ($request->urls && $request->sources){
      dump($request->sources);
      foreach ($request->sources as $key => $value) {
        $source = new Source;
        $source->source = $request->sources[$key];
        $source->url = $request->urls[$key];
        $source->article_id = $article_id;
        $source->save();
      }
    }
      return;
  }
}
