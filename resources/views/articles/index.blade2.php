@extends('layouts.master')

@section('title')
  <h2>{{$main_category }} articles.</h2>
@stop

@section('content')

    <!-- @foreach($articles as $article) -->
        <div>
            <!-- <h2>{{ $article->title }}</h2>
            <p>{{$article->bottomline}}<a href='/articles/show/{{$article->id}}'> read more...</a></p> -->
            <!-- <a href='/articles/edit/{{$article->id}}'>Edit</a><br> -->
            <!-- To-do: Show only to editors -->
            <!-- <img src='{{ $article->mainImage }}'> ADD a cool image here-->
        </div>
    <!-- @endforeach -->
@stop

@section('body')
@stop
