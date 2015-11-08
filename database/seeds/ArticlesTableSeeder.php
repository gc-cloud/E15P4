<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('articles')->insert([
      'title' => 'Exercise: How much?',
      'summary' => 'Best resuls are achieved exercising three times a week for
                30 minutes',
      'body' => 'No exercise increases your risk of heart attacks, too much exercise
            also increases the risk of heart attacks.  ',
      ]);


      DB::table('articles')->insert([
      'title' => 'Wine?',
      'summary' => 'Three alcoholic drinks spread over each week minimize risk of heart attack. More
                    can be dangerous to your healt',
      'body' => 'Studies show that moderate drinking that is spread over time can reduce risk of CHI.
                Drinking more alcohol can increase risk of multiple cancers, liver failure and obesity  ',
      ]);


      DB::table('articles')->insert([
      'title' => 'Is sleeping really necessary?',
      'summary' => 'Sleeping 9 hours a day maximizes your brain potential',
      'body' => 'Sleep depravation can lead to decreased performance, stress, irritation,
                and in extreme cases death.',
      ]);
    }
}
