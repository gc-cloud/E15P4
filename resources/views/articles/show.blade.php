@extends('layouts.master')

@section('title')
  <h1>Zudbu</h1>
  <p>Full Article.</p>
@stop

@section('content')

  @if($id)
    <h2>{{ $article->title }}</h2>
    <p>{{$article->bottomline}}</p>
    <p>{{$article->body}}</p>
    <!-- <img src='{{ $article->mainImage }}'> ADD a cool image here-->
    <a href='/articles/edit/{{$article->id}}'>Edit</a><br>
  @else
      <h1>No Article specified</h1>
  @endif
@stop

@section('body')
@stop
