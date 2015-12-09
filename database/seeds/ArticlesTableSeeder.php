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
      'bottomline' => 'Exercise three times a week for 30-45 minutes.',
      'body' => '
            <p>There is strong evidence that dequate levels of physical activity
            have a number of health benefits, including:</p>
            <ul>
              <li>Lower rates of all-cause mortality, coronary heart disease,
              high blood pressure, stroke, type 2 diabetes, colon cancer and breast
              cancer</li>
              <li>Higher level of cardiorespiratory and muscular fitness, functional
              health,  healthier body mass and composition, and better cognitive
              functions</li>
              <li>Biomarker profile that is more favourable for the prevention
              of cardiovascular disease, type 2 diabetes and the enhancement of
              bone health</li>
              <li>Reduced risk of moderate and severe functional limitations and
              role limitations</li>
            </ul>

            <p>Of course, everything has limits and exercise is no exception.  It is
            important to know when to stop exercise to prevent joint damage,
            dehydration, and in extreme cases heart attacks</p>

            <p>According to the world healt organization, the recommended amount of
             physical activity varies by age group:</p>

             <ul>
              <li>Children and youth aged 5–17 should accumulate at least 60 minutes
              of moderate- to vigorous-intensity physical activity daily.
              Amounts of physical activity greater than 60 minutes provide
              additional health benefits.
              Most of the daily physical activity should be aerobic.</li>
              <li>Adults should do at least 150 minutes of moderate-intensity
              aerobic physical activity throughout the week or do at least 75
              minutes of vigorous-intensity aerobic physical activity throughout
              the week or an equivalent combination of moderate- and vigorous-intensity activity.
              </li>
             </ul>',
      'author_id' => 1,
      ]);


      DB::table('articles')->insert([
      'title' => 'Processed meat ?',
      'bottomline' => 'Processed meat contains various chemicals that are harmful to health.',
      'body' => '<p>Processed meat is meat that has been preserved by curing, salting, smoking,
                  addition of preservatives, or canning.</p>

                 <p>Some examples of processed meat include:</p>
                 <ul>
                   <li>sausages</li>
                   <li> salami</li>
                   <li>bacon</li>
                   <li>corned beef</li>
                   <li>beef jerky</li>
                   <li>canned meat</li>
                 </ul>
                 <p>During processing, meat that was previously fresh ends up
                 containing various chemicals that are harmful to health. Several studies
                 have linked processed meat with increased risk or diseases including high blood
                 pressure, heart disease, bowel and stomach cancer.</p>

                 <p> Recently, the World Health Organization added processed meat to
                 their list or carcinogens</p>

                 <p> You should try to limit your consumption of processed
                 meat and follow a diet based on fresh products.  It is important that these
                 products contain diverse and sufficient amouts of protein and other nutrients</p>',
      'author_id' => 1,
      ]);

      DB::table('articles')->insert([
      'title' => 'Red or white?',
      'bottomline' => 'Limit your alcohol intake to three drinks spread over each week.',
      'body' => '
                <p>Driking patterns have changed substantially.  There is some evidence
                that moderate drinking may have cardiovascular benefits.  However, these
                these benefits are probably overstated and require very small amounts of
                alcohol consumption.</p>
                <p>On the other hand, there is strong evidence linking high alcohol consumption
                with with a number of downsides:</p>
                <ul>
                  <li>Increase in breast cancer risk </li>
                  <li>Increased mortality</li>
                  <li>Obesity (which is associated with several other health issues)</li>
                  <li>Increased risk of liver failure</li>
                  <li>Reincidence and new lesions in patients with Coronary Heart Disease</li>

                </ul>

                <p> Despite the evidence, many people still have the impression that alcohol
                drinking is healthy and is associated with cardiovascular benefits.
                The "french paradox" is commonly quoted as evidence.  There are
                several things that are important to know about this:</p>

                <ul>
                  <li>The french paradox refers to a relatively low incidence of
                  Coronary Heart Disease in French People, while having a diet rich
                  in saturated fats. </li>
                  <li>This term was first used in the newsletter of the
                  International Organization of Vine and Wine</li>
                  <li>The hypotesis linking fats french paradox may or may not be valid</li>
                </ul>

                 <p>The bottomline is that alcohol drinking is not a medicine and should
                 be done in moderation and over time.  If you want to have a healthy heart you are
                 better off eating in moderation (a mediterranean diet
                 is a good idea), reducing your stress levels, and exercising regularly</p>',
      'author_id' => 1,
      ]);


      DB::table('articles')->insert([
      'title' => 'Is sleeping really necessary?',
      'bottomline' => 'Sleeping 9 hours a day maximizes your brain potential.',
      'body' => 'Sleep depravation can lead to decreased performance, stress, irritation,
                and in extreme cases death.',
      'author_id' => 2,
      ]);

      DB::table('articles')->insert([
      'title' => 'Find purpose',
      'bottomline' => 'Having a purpose in life can make you happier.',
      'body' => 'Whether it is raising your children, mastering a musical instrument, helping society or
                  other things, it is statistically proven that you will be happier.',
      'author_id' => 2,
      ]);
    }
}
