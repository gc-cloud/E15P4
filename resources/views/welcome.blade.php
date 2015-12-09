@extends('layouts.master')

@section('title')
  <p>Reliable information to nurture your body, mind and spirit.</p>
@stop


@section('content')

<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active slide-01">
          <div class="carousel-caption">
          <h1>Broccoli?.</h1>
          <p>WHO lists processed meats as carcinogenic.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">More &raquo;</a></p>
        </div>
      </div>
    <div class="item slider-size slide-02">
          <div class="carousel-caption">
          <h1>Working out.</h1>
          <p>30-45 minutes 3 times a week is ideal</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">More &raquo;</a></p>
        </div>
      </div>
    <div class="item slider-size slide-03">
          <div class="carousel-caption">
          <h1>Live Longer.</h1>
          <p>Find a sense of purpose.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">More &raquo;</a></p>
        </div>
      </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><!-- /.carousel -->
@stop

@section('body')
  <div class="row">
    <div class="col-md-4">
      <h2>Body</h2>
      <p>Healthy eating. Maintain a healthy environment. Stretching. Breathing. Working out. Yoga. Massage.  Sleeping. Resting. Sex. Cosmetics. </p>
      <p><a class="btn btn-default" href="#" role="button">View articles &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>Mind</h2>
      <p>Learning new things. Concentration and focus. Board games. Daydreaming. Reading. Doing new things. Writing. Crosswords, logic games and puzzles. </p>
      <p><a class="btn btn-default" href="#" role="button">View articles &raquo;</a></p>
   </div>
    <div class="col-md-4">
      <h2>Spirit</h2>
      <p>Meditation.  Purpose. Awareness. Gratitude. Music. Gardening. Letting go. Friends and family. Social networks. Hobbies. Volunteer. </p>
      <p><a class="btn btn-default" href="#" role="button">View articles &raquo;</a></p>
    </div>
  </div>

  <h1>All Articles.</h1>
  @foreach($articles as $article)
      <div>
          <h2>{{ $article->title }}</h2>
          <p>{{$article->bottomline}}</p>
          <!-- <img src='{{ $article->mainImage }}'> ADD a cool image here-->
      </div>
  @endforeach
@stop
