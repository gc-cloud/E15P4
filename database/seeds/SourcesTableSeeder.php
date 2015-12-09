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
        'source' => 'Physical activity and young people',
        'url'=>'http://www.who.int/dietphysicalactivity/factsheet_young_people/en/',
        'article_id'=>1,
      ]);

      DB::table('sources')->insert([
        'source' => 'Physical activity and young people',
        'url'=>'http://www.who.int/dietphysicalactivity/factsheet_young_people/en/',
        'article_id'=>1,
      ]);

      DB::table('sources')->insert([
        'source' => 'Physical activity and adults',
        'url'=>'http://www.who.int/dietphysicalactivity/factsheet_adults/en/',
        'article_id'=>1,
      ]);

      DB::table('sources')->insert([
        'source' => 'Meat consumption and mortality--results from the European
        Prospective Investigation into Cancer and Nutrition',
        'url'=>'http://www.ncbi.nlm.nih.gov/pubmed/23497300',
        'article_id'=>2,
      ]);

      DB::table('sources')->insert([
        'source' => 'Red and processed meat consumption and risk of incident
        coronary heart disease, stroke, and diabetes mellitus: a systematic
        review and meta-analysis',
        'url'=>'http://www.ncbi.nlm.nih.gov/pubmed/20479151',
        'article_id'=>2,
      ]);

      DB::table('sources')->insert([
        'source' => 'Processed meat and colorectal cancer: a review of
        epidemiologic and experimental evidenc',
        'url'=>'http://www.ncbi.nlm.nih.gov/pubmed/18444144',
        'article_id'=>2,
      ]);


      DB::table('sources')->insert([
        'source' => 'Alcohol consumption, body mass index and breast cancer
        risk by hormone receptor status: Women\'s Lifestyle and Health Study.',
        'url'=>'http://www.ncbi.nlm.nih.gov/pubmed/26552431',
        'article_id'=>3,
      ]);

      DB::table('sources')->insert([
        'source' => 'Excessive alcohol consumption increases mortality in
        later life: a genetic analysis of the health in men cohort study.',
        'url'=>'http://www.ncbi.nlm.nih.gov/pubmed/26644136',
        'article_id'=>3,
      ]);

      DB::table('sources')->insert([
        'source' => 'Impact of daily lifestyle on coronary heart disease.',
        'url'=>'http://www.ncbi.nlm.nih.gov/pubmed/26622449',
        'article_id'=>3,
      ]);

      DB::table('sources')->insert([
        'source' => 'Alcohol and liver disease in Europe - simple measures
        have the potential to prevent tens of thousands of premature deaths.',
        'url'=>'http://www.ncbi.nlm.nih.gov/pubmed/26592352',
        'article_id'=>3,
      ]);

      DB::table('sources')->insert([
        'source' => 'French Paradox',
        'url'=>'https://en.wikipedia.org/wiki/French_paradox',
        'article_id'=>3,
      ]);


      DB::table('sources')->insert([
        'source' => 'A Systematic Review of the Evidence Supporting a Causal
        Link Between Dietary Factors and Coronary Heart Disease',
        'url'=>'http://archinte.jamanetwork.com/article.aspx?articleid=1108492',
        'article_id'=>3,
      ]);


      DB::table('sources')->insert([
        'source' => 'Harvard Medical School: Systematic Review on Happiness',
        'url'=>'http://www.ncbi.nlm.nih.gov/pmc/articles/PMC1768013/',
        'article_id'=>3,
      ]);


      DB::table('sources')->insert([
        'source' => 'Harvard Medical School: Systematic Review on Happiness',
        'url'=>'http://www.ncbi.nlm.nih.gov/pmc/articles/PMC1768013/',
        'article_id'=>3,
      ]);

      DB::table('sources')->insert([
        'source' => 'Harvard Medical School: Systematic Review on Happiness',
        'url'=>'thttp://www.ncbi.nlm.nih.gov/pubmed/26552431',
        'article_id'=>3,
      ]);

    }
}
