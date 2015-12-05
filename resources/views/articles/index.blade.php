@extends('layouts.master')

@section('title')
  <h1>Zudbu</h1>
  <p>All articles.</p>
@stop

@section('content')

    @foreach($articles as $article)
        <div>
            <h2>{{ $article->title }}</h2>
            <p>{{$article->bottomline}}</p>
            <a href='/articles/edit/{{$article->id}}'>Edit</a><br>
            <!-- <img src='{{ $article->mainImage }}'> ADD a cool image here-->
        </div>
    @endforeach
@stop

@section('body')
@stop
