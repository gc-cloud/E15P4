@extends('layouts.master')

@section('title')
    <h2>{{ $article->title }}</h2>
    <a href='/articles/edit/{{$article->id}}'>Edit</a><br> <!-- To do, display only for contributors -->
@stop

@section('content')

  @if($id)

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
@stop

@section('body')
@stop
