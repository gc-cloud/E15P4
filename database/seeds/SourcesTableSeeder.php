<?php

use Illuminate\Database\Seeder;

class SourcesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('sources')->insert([
        'source' => 'American Heart Association: Cardiovascular Heart Disease and Physical Activity',
        'url'=>'test.com',
        'article_id'=>1,
      ]);

      DB::table('sources')->insert([
        'source' => 'google scholar: Alcohol effect on CHI ',
        'url'=>'test.com',
        'article_id'=>2,
      ]);

      DB::table('sources')->insert([
        'source' => 'google scholar: Alcohol and Cancer',
        'url'=>'test.com',
        'article_id'=>2,
      ]);

      DB::table('sources')->insert([
        'source' => 'The Wellness Foundation: Stress Management Techniques',
        'url'=>'test.com',
        'article_id'=>3,
      ]);
      DB::table('sources')->insert([
        'source' => 'Harvard Medical School: Systematic Review on Happiness',
        'url'=>'test.com',
        'article_id'=>4,
      ]);


    }
}
