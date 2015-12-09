@extends('layouts.master')

@section('title')
    <h2> Delete Article</h2>
@stop

@section('content')
@stop

@section('body')
<h2> Are you sure you want to delete :<em> {{ $article->title }}</em> ?</h2>
<h2><a href="/articles/delete/{{ $article->id }}"> Yes, delete forever </a></h2>
  <div class="border">
    @if($article->id)
      <h3>The bottomline</h3>
      <p>{{$article->bottomline}}</p>
      <h3>Why</h3>
      <p>{{$article->body}}</p>
      <!-- <img src='{{ $article->mainImage }}'> ADD a cool image here-->
      <h3>References</h3>
      <p> Here we will display a list of references</p>
    @else
        <h1>No Article specified</h1>
    @endif
      <!-- To do, display only for contributors -->
      @if(isset($show_edit))
        <a href='/articles/edit/{{$article->id}}'>Edit</a><br>
      @endif
  </div>
@stop
