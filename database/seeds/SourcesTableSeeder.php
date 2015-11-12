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
      ]);

      DB::table('sources')->insert([
        'source' => 'google scholar: Alcohol effect on CHI ',
      ]);

      DB::table('sources')->insert([
        'source' => 'google scholar: Alcohol and Cancer',
      ]);

      DB::table('sources')->insert([
        'source' => 'The Wellness Foundation: Stress Management Techniques',
      ]);
      DB::table('sources')->insert([
        'source' => 'Harvard Medical School: Systematic Review on Happiness',
      ]);


    }
}
