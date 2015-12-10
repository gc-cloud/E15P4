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
                   <li>salami</li>
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
                <p>Over the years, scientists have studied and documented the role of alcohol
                in the development of a number of medical problems such as:</p>
                <ul>
                  <li>Increase in breast cancer risk </li>
                  <li>Increased mortality</li>
                  <li>Fetal abnormalities</li>
                  <li>Liver cirrhosis and increased risk of liver failure</li>
                  <li>Obesity (which is associated with several other health issues including
                  cardiovascular problems, metabolic syndrome,and benign prostatic hyperplasia
                  in the case of abdominal obesity)</li>
                  <li>Reincidence and new lesions in patients with Coronary Heart Disease</li>
                </ul>


                <p>In the past couple of decades,  however, epidemiologic studies have
                documented an association between moderate alcohol consumption and
                lower risk for coronary heart disease (CHD). Much remains to be
                 learned about this association, the extent to which it is due specifically
                 to alcohol and not to other associated lifestyle factors, and what
                 the biological mechanisms of such an effect might be.
                 Some of the theories suggest that these effects are
                at least in part linked with the blod thinning effect of alcohol, and
                certain compounds (such as resveratrol) found in red wine (and red grape juice).
                All in all, the benefits of drinking alcohol are probably overstated
                and can be obtained with very small amounts of alcohol consumption. </p>

                <p> Based on the evidence, it is probably a good idea to limit alcohol intake
                to moderate levels (three drinks spread out over a given week).  If you are going to enjoy
                a glass of wine do it because you like it and not because you want to
                have a healthy heart, for that you are
                 better off eating in moderation (a mediterranean diet
                 is a good idea), reducing your stress levels, and exercising regularly</p>',
      'author_id' => 1,
      ]);


      DB::table('articles')->insert([
      'title' => 'Is sleeping really necessary?',
      'bottomline' => 'A good night\'s sleep keeps you healthy and sharp.',
      'body' => '
                <p>Sleep is important for good health. Not getting enough
                sleep or getting poor quality sleep on a regular basis increases
                the risk of having high blood pressure, heart disease, and other
                medical conditions. There is also a correlation between the lack of sleep and
                the likelihood of developing obesity and diabetes.
                Some studies suggest associations between lack of sleep and
                cognitive functioning as well as intelligence development.</p>

                <p> During sleep, the  body produces hormones that fuel growth
                in children, boost muscle mass,
                help repair cells and tissues, and help the immune system fight
                infections. </p>


                <p> Tips to get a good night\'s sleep</p>
                <ul>
                  <li>Go to bed and wake up at the same time every day.</li>
                  <li>Avoid caffeine and nicotine.</li>
                  <li>Don’t exercise too late in the day.</li>
                  <li>Avoid alcoholic drinks before bed.</li>
                  <li>Avoid large meals and beverages late at night.</li>
                  <li>Relax before bed</li>
                  <li>Remove distractions such as noises, bright lights,
                   an uncomfortable bed, or a TV or computer in the bedroom.</li>
                   <li>For children, avoid long periods of daily television exposure</li>
                </ul>',
      'author_id' => 2,
      ]);

      DB::table('articles')->insert([
      'title' => 'Inner peace',
      'bottomline' => 'Meditation helps you find inner peace',
      'body' => '
                <p>Once considered ritual, the benefits of "mindfulness" meditation, in which people learn
                to watch their thoughts and feelings without judging them, have been
                documented in several studies. </p>
                <ul>
                  <li>Reduced stress and anxiety</li>
                  <li>Letting go</li>
                  <li>Reduced depression</li>
                  <li>More empathy</li>
                  <li>Better quality of life</li>
                  <li>Improved ability to deal with impulses and addictions</li>
                </ul>
                <p>The literature suggests that ongoing practice is important to maximize
                the benefits.  Practice makes perfect!  <p></p>
                <ul> ',
      'author_id' => 2,
      ]);

      DB::table('articles')->insert([
      'title' => 'Meditation and intelligence',
      'bottomline' => 'Mindfulness Meditation can improve learning effectiveness, attention and memory .',
      'body' => '
                <p></p>
                <ul>
                  <li>Ability to make better choices</li>
                  <li></li>
                  <li></li>
                </ul>
                <p></p>
                <p></p>
                <ul>
                  <li>Boosts memory</li>
                  <li></li>
                  <li></li>
                </ul>
                <p></p>


                ',
      'author_id' => 2,
      ]);

      DB::table('articles')->insert([
      'title' => 'Spirituality',
      'bottomline' => 'Spirituality may enhance physical, psychological and cognitive well being',
      'body' => '
                <p>Spirituality is considered an important aspect of wellness.
                Research suggests that it may lead to enhanced psychological
                well being, reduce stress, depression and anxiety, and improve
                the capacity to deal with adversity.  Other benefits identified
                include:</p>
                <ul>
                  <li>Emotion regulation</li>
                  <li>Decreased rate of cognitive decline of Alzheimer\'s patients</li>
                  <li>Increased sense of self and self-steem</li>
                  <li>Increased levels or optimism, purpose and positive change</li>
                </ul>
                <p>In some cases, spirituality has negative effects such as
                increased anger, anxiety and depression, particularly in environments that
                consider negative events God\'s punishment to moral failure.</p>

                <p>One study of individuals recovering from substance abuse found that
                higher levels of religious faith and spirituality were associated
                with a more optimistic life orientation, greater perceived social
                support, higher resilience to stress, and lower levels of anxiety. </p>

                <p> A review of the literature found that spirituality and religiosity in Persons
                living with Sickle Cell Disease may be significant in coping with the disease,
                managing pain, affecting hospitalizations, and affecting quality of life.</p>',
      'author_id' => 2,
      ]);

      DB::table('articles')->insert([
      'title' => 'Spirituality can help deal with addictions',
      'bottomline' => 'Regular spiritual practice is associated with significantly higher remission for drug abuse.',
      'body' => '
                <p>The connection between religion/spirituality and deviance,
                was first made by Durkheim who defined
                socially expected behaviors as norms. He explained that deviance,
                like substance abuse, is due in large part to the absence of norms,
                and concluded that
                spirituality lowers deviance by preserving norms and social bonds.</p>

                <p>A study of relapse rates among 2,947 clients concludes that those
                with low spirituality have higher relapse rates and those with high
                spirituality have higher remission rates, with crack use being
                the sole exception. More specifically, the study found significant (7%-21%)
                 differences in terms of cocaine, heroin, alcohol, and marijuana
                 relapse as a function of five areas: </p>
                <ul>
                  <li>Strength of religious beliefs</li>
                  <li>Frequency of attending religious services</li>
                  <li>Frequency of reading religious books</li>
                  <li>Frequency of watching religious programs</li>
                  <li>Frequency of meditation/prayer</li>
                </ul>
                <p>Of these five areas, the highest marker was attendance to religious
                services, which is consistent with the social bond theory</p>',
      'author_id' => 2,
      ]);

    }
}
