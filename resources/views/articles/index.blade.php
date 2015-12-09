@extends('layouts.master')

@section('title')
  <h2>{{$title}}
@stop

@section('content')



@stop

@section('body')
@foreach($articles as $article)
    <div class="border">
        <h2>{{ $article->title }}</h2>
        <p> {{$article->bottomline}}</p>
        <a href='/articles/show/{{$article->id}}'> more</a><br>
        <a href='/articles/edit/{{$article->id}}'>Edit</a><br>
        <!-- <img src='{{ $article->mainImage }}'> ADD a cool image here-->
    </div>
    <br>
@endforeach
@stop
