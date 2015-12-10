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
        'source' => 'Physical activity and adults',
        'url'=>'http://ajcn.nutrition.org/content/79/5/913S.full',
        'article_id'=>1,
      ]);


      DB::table('sources')->insert([
        'source' => 'The evolution of physical activity recommendations:
        how much is enough?',
        'url'=>'http://www.who.int/dietphysicalactivity/factsheet_young_people/en/',
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
        epidemiologic and experimental evidence',
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
        'source' => 'A Systematic Review of the Evidence Supporting a Causal
        Link Between Dietary Factors and Coronary Heart Disease',
        'url'=>'http://archinte.jamanetwork.com/article.aspx?articleid=1108492',
        'article_id'=>3,
      ]);


      DB::table('sources')->insert([
        'source' => 'Revisiting the mechanistic basis of the French Paradox:
        Red wine inhibits the activity of protein disulfide isomerase in vitro.',
        'url'=>'http://www.ncbi.nlm.nih.gov/pubmed/26585763',
        'article_id'=>3,
      ]);


      DB::table('sources')->insert([
        'source' => 'Measuring the health risks and benefits of alcohol (pdf)',
        'url'=>'http://pubs.niaaa.nih.gov/publications/10report/chap01a.pdf',
        'article_id'=>3,
      ]);

      DB::table('sources')->insert([
        'source' => 'Obesity and Benign Prostatic Hyperplasia',
        'url'=>'http://m.aje.oxfordjournals.org/content/140/11/989.short',
        'article_id'=>3,
      ]);

      DB::table('sources')->insert([
        'source' => 'Associations between Metabolic Syndrome and Inadequate
         Sleep Duration and Skipping Breakfast',
        'url'=>'http://www.ncbi.nlm.nih.gov/pubmed/26634092',
        'article_id'=>4,
      ]);

      DB::table('sources')->insert([
        'source' => 'Associations between vasodilatory capacity, physical
        activity and sleep among younger and older adults.',
        'url'=>'http://www.ncbi.nlm.nih.gov/pubmed/26644309',
        'article_id'=>4,
      ]);


      DB::table('sources')->insert([
        'source' => 'Guide to healthy sleep',
        'url'=>'http://www.nhlbi.nih.gov/files/docs/public/sleep/healthysleepfs.pdf',
        'article_id'=>4,
      ]);


      DB::table('sources')->insert([
        'source' => 'Is insomnia associated with deficits in neuropsychological
         functioning? Evidence from a population-based study.',
        'url'=>'http://www.ncbi.nlm.nih.gov/pubmed/25348123',
        'article_id'=>4,
      ]);


      DB::table('sources')->insert([
        'source' => 'Hours of television viewing and sleep duration in children:
        a multicenter birth cohort study',
        'url'=>'http://www.ncbi.nlm.nih.gov/pubmed/24615283',
        'article_id'=>4,
      ]);

      DB::table('sources')->insert([
        'source' => 'Effects of sleep deprivation on the intelligence structure
        of school-age children in Changsha, China',
        'url'=>'http://www.ncbi.nlm.nih.gov/pubmed/24131840',
        'article_id'=>4,
      ]);

      DB::table('sources')->insert([
        'source' => 'Non Pharmacological Cognitive Enhancers – Current Perspectives',
        'url'=>'http://www.ncbi.nlm.nih.gov/pmc/articles/PMC4573018/',
        'article_id'=>4,
      ]);

      DB::table('sources')->insert([
        'source' => 'A randomized controlled trial of mindfulness meditation
        versus relaxation training: effects on distress, positive states of
        mind, rumination, and distraction',
        'url'=>'http://www.ncbi.nlm.nih.gov/pubmed/17291166',
        'article_id'=>5,
      ]);

      DB::table('sources')->insert([
        'source' => 'Finding the peace within us',
        'url'=>'http://www.apa.org/monitor/julaug02/peace.aspx',
        'article_id'=>5,
      ]);

      DB::table('sources')->insert([
        'source' => 'What are the benefits of mindfulness',
        'url'=>'http://www.apa.org/monitor/2012/07-08/ce-corner.aspx',
        'article_id'=>5,
      ]);

      DB::table('sources')->insert([
        'source' => 'Effects of a Mindfulness Meditation Course on Learning and
        Cognitive Performance among University Students in Taiwan.',
        'url'=>'http://www.ncbi.nlm.nih.gov/pubmed/26640495',
        'article_id'=>6,
      ]);
      DB::table('sources')->insert([
        'source' => 'Mindfulness-oriented meditation improves self-related
        character scales in healthy individuals',
        'url'=>'http://www.ncbi.nlm.nih.gov/pubmed/24746260',
        'article_id'=>6,
      ]);


      DB::table('sources')->insert([
        'source' => 'What are the benefits of mindfulness',
        'url'=>'http://www.apa.org/monitor/2012/07-08/ce-corner.aspx',
        'article_id'=>6,
      ]);

      DB::table('sources')->insert([
        'source' => 'Improving personality/character traits in individuals with
        alcohol dependence: the influence of mindfulness-oriented meditation.',
        'url'=>'http://www.ncbi.nlm.nih.gov/pubmed/25585050',
        'article_id'=>5,
      ]);
      DB::table('sources')->insert([
        'source' => 'The benefits of simply observing: mindful attention
        modulates the link between motivation and behavior',
        'url'=>'http://www.ncbi.nlm.nih.gov/pubmed/25347126',
        'article_id'=>5,
      ]);
      DB::table('sources')->insert([
        'source' => 'Non Pharmacological Cognitive Enhancers – Current Perspectives',
        'url'=>'http://www.ncbi.nlm.nih.gov/pmc/articles/PMC4573018/',
        'article_id'=>6,
      ]);

      DB::table('sources')->insert([
        'source' => 'Cognitive decline in Alzheimer disease: Impact of
        spirituality, religiosity, and QOL',
        'url'=>'http://www.ncbi.nlm.nih.gov/pubmed/17470754/',
        'article_id'=>7,
      ]);

      DB::table('sources')->insert([
        'source' => 'The Role of Spirituality and Religiosity in Persons
         Living With Sickle Cell Disease: A Review of the Literature.',
        'url'=>'http://www.ncbi.nlm.nih.gov/pubmed/26620813',
        'article_id'=>7,
      ]);

      DB::table('sources')->insert([
        'source' => 'Religious faith and spirituality in substance abuse
        recovery: determining the mental health benefits.',
        'url'=>'http://www.ncbi.nlm.nih.gov/pubmed/11166499/',
        'article_id'=>7,
      ]);

      DB::table('sources')->insert([
        'source' => 'Religious faith and spirituality in substance abuse
        recovery: determining the mental health benefits.',
        'url'=>'http://www.ncbi.nlm.nih.gov/pubmed/11166499/',
        'article_id'=>8,
      ]);


      DB::table('sources')->insert([
        'source' => 'NIDA-Drug Addiction Treatment Outcome Study (DATOS)
        Relapse as a Function of Spirituality/Religiosity.',
        'url'=>'http://www.ncbi.nlm.nih.gov/pubmed/26052556',
        'article_id'=>8,
      ]);


    }
}
