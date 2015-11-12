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
      DB::table('categories')->insert([
        'category' => 'body',
      ]);
      DB::table('categories')->insert([
        'category' => 'mind',
      ]);
      DB::table('categories')->insert([
        'category' => 'spirit',
      ]);
    }
}
