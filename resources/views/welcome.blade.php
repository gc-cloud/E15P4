@extends('layouts.master')

@section('title')
  <h2>Featured Articles</h2>
@stop


@section('content')
  @include('errors')

<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active slide" style="background-image: url('images/articles/article_2_pic.jpg')">
      <div class="carousel-caption">
        <h1>Broccoli?.</h1>
        <p>WHO lists processed meats as carcinogenic.</p>
        <p><a class="btn btn-lg btn-primary" href="articles/show/2" role="button">More &raquo;</a></p>
      </div>
    </div>
    <div class="item slider-size slide"style="background-image: url('images/articles/article_1_pic.jpg')">
      <div class="carousel-caption">
        <h1>Working out.</h1>
        <p>30 minutes 5 times a week is ideal</p>
        <p><a class="btn btn-lg btn-primary" href="articles/show/1" role="button">More &raquo;</a></p>
      </div>
    </div>
    <div class="item slider-size slide" style="background-image: url('images/articles/article_5_pic.jpg')">
      <div class="carousel-caption">
        <h1>Inner Peace.</h1>
        <p>Mindfulness Meditation Improves Quality of Life.</p>
        <p><a class="btn btn-lg btn-primary" href="articles/show/5" role="button">More &raquo;</a></p>
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
  <h1>All Articles.</h1>
  @foreach($articles as $article)
      <div class="result megalink">
          <a href='/articles/show/{{$article->id}}'>
            <span class="megaLink">
              <img src="/images/articles/article_{{$article->id}}_thumb.jpg" class="img-thumbnail">
            </span>
          </a>
          <h2 >{{ $article->title }}</h2>
          <p> {{$article->bottomline}}<a href='/articles/show/{{$article->id}}'> Read full article</a></p>
          @if(isset($show_edit))
            <!-- This section only shows if the user is authorized to contribute -->
            <a href='/articles/edit/{{$article->id}}'><span class="glyphicon glyphicon-pencil"></span> Edit</a>
            <a href='/articles/confirm-delete/{{$article->id}}'><span class="glyphicon glyphicon-trash"></span> Delete</a><br>
          @endif
      </div>
      <br>
  @endforeach
@stop
