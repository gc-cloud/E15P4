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
        <p> {{$article->bottomline}}<a href='/articles/show/{{$article->id}}'> Read full article</a></p>
        <br>
        @if(isset($show_edit))
          <a href='/articles/edit/{{$article->id}}'><span class="glyphicon glyphicon-pencil"></span> Edit</a>
          <a href='/articles/confirm-delete/{{$article->id}}'><span class="glyphicon glyphicon-trash"></span> Delete</a><br>
        @endif
        <!-- <img src='{{ $article->mainImage }}'> ADD a cool image here-->
    </div>
    <br>
@endforeach
@stop
