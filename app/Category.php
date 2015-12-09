<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  /**
   * The articles that belong to the category.
   */
  public function articles()
  {
      return $this->belongsToMany('App\Article')->withTimestamps();
  }

  /**
   * The categories that can be applied to an article
   */
   public function getCategoriesForCheckboxes(){
     $categories = $this->orderby('name','ASC')->get();
     $categories_for_checkboxes = [];
     foreach($categories as $category) {
         $categories_for_checkboxes[$category->id] = $category->name;
     }
     return $categories_for_checkboxes;
   }
}
