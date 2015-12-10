@extends('layouts.master')

@section('title')
    <h2>{{ $article->title }}</h2>

@stop

@section('content')
@stop

@section('body')
  <div class="border">
    @if($article->id)
      <h3>The bottomline</h3>
      <p>{{$article->bottomline}}</p>
      <h3>Why</h3>
      <p>{!!$article->body!!}</p>
      <!-- <img src='{{ $article->mainImage }}'> ADD a cool image here-->
      <h3>Sources</h3>
      <ul>
         @foreach($sources_for_article as $source)
         <li><a href='{{$source->url}}'>{{$source->source}}</a></li>
        @endforeach
      </ul>
     </div>
    @else
        <h1>No Article specified</h1>
    @endif

    <!-- @if(isset($show_edit))
      <a href='/articles/edit/{{$article->id}}'>Edit</a><br>
    @endif -->

      <a href='/'>-> All articles</a><br>
  </div>
@stop
