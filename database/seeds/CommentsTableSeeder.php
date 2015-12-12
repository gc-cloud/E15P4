<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      /* Create an array of articles and comments. */
        $articles =[
          'Exercise: How much?' =>[
              'Good to know that older people can workout!',
              'I am combining aerobic and strength training and feel great after two weeks',
              'Since I starter swimming I sleep better and am more focused',
              'My "friends" say I\'m a couch potato...',
              'Exercise can also help reduce stress levels',
              'Tribal knowledge in America is that older people should not work out.
              Science has proven the contrary!'],
          'Broccoli?' =>[
            'A lot of people say that everything gives you cancer now, at least
            it is better to know what does for sure',
            'The China Study suggested this a long time ago',
            'Eating fish is good but stay away from farmed...',
            'People in other countries have gained a lot of weight after fast
            food chains are introduced',
            'I guess my grannie was right!',
            'Organic!',
            'http://www.organicitsworthit.org/make/broccoli-salad'],
          'Red or white?' =>[
            'Wow! I was under the impression that driking wine was ok as long as
            it was red.  I\'m cutting back to three a week!',
            'Yeah, there is a lot of marketing about wine benefits.  I guess
            there is a lot of money to be made with the marketing too! ',
            'Very well researched posting, thanks for sharing',
            'The article is right, at some point there was a shift in habits'],
          'Is sleeping really necessary?' =>[
            'Thanks for the tips, I read on an iPad at night and have been
            trouble sleeping lately.  ',
            'I had no idea that lack of sleep was related to heart disease',
            'This is a cool site, it was about time.  Thanks!',
            'I eat a lot every night, that may explain'],
          'Inner peace' =>[
            'Goot to know that there are actual scientific studies about this topic',
            'I think mind, body and spirit are one and the same',
            'Anybody knows where can I learn to meditate?',
            'After three weeks of meditating I am feeling the benefits'],
          'Meditation and intelligence' =>[
            'I\'m really into maximizing my potential.  Very interesting article',
            '"Non pharmacological cognitive enhancers", great link!',
            'My school is super hard.  I\'m going to try meditation ',
            'I took an eight week course and can attest to similar benefits'],
          'Achieve Unity' =>[
            'Makes sense',
            'Spirituality is such an important topic.  More serious research is
            needed',
            'I work with terminal patients and spirituality is a key factor',
            'My religious community is too strict,definitely on the stressing
            side '],
          'Spirituality and addictions' =>[
            'I disagree with what the article is saying. Religion is not a social
            norm',
            'It may not be a social norm but it sets expectations',
            'My family is very religious and definitely has expectations, I would
            not dream of steering away from them',
            'I work with people with addictions and spirituality
            has been very helpful for some. '],
        ];

        /* Loop through the array to commit comments to the database. */
        foreach($articles as $title => $comments) {
          $article = \App\Article::where('title','like',$title)->first();
          foreach($comments as $new_comment) {
            $comment = new \App\Comment;
            $comment->comment = $new_comment;
            $comment->article_id = $article->id;
            $comment->user_id = random_int(1,5);
            $comment->save();
          }
        }
    }
}
