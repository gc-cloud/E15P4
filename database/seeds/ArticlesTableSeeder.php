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
      'bottomline' => 'Exercising three times a week for 30 minutes makes sense.',
      'body' => 'No exercise increases your risk of heart attacks, too much exercise
            also increases the risk of heart attacks.  ',
      'user_id' => 2,
      ]);


      DB::table('articles')->insert([
      'title' => 'Wine?',
      'bottomline' => 'Three drinks spread over each week minimize risk of heart attack. More
                    can be dangerous to your health.',
      'body' => 'Studies show that moderate drinking that is spread over time can reduce risk of CHI.
                Drinking more alcohol can increase risk of multiple cancers, liver failure and obesity  ',
      'user_id' => 2,
      ]);


      DB::table('articles')->insert([
      'title' => 'Is sleeping really necessary?',
      'bottomline' => 'Sleeping 9 hours a day maximizes your brain potential.',
      'body' => 'Sleep depravation can lead to decreased performance, stress, irritation,
                and in extreme cases death.',
      'user_id' => 3,
      ]);

      DB::table('articles')->insert([
      'title' => 'Find purpose',
      'bottomline' => 'Having a purpose in life can make you happier.',
      'body' => 'Whether it is raising your children, mastering a musical instrument, helping society or
                  other things, it is statistically proven that you will be happier.',
      'user_id' => 3,
      ]);
    }
}
