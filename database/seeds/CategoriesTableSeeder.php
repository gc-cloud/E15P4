<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      /* Alternative approach */
      $data = ['body', 'mind','spirit'];

       foreach($data as $categoryName) {
           $category = new \App\Category();
           $category->name = $categoryName;
           $category->save();
       }
    }
}
