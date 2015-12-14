@extends('layouts.master')

@section('title')
  <h2>{{$title}}
@stop

@section('content')
@stop

@section('body')
@foreach($articles as $article)
    <div class="result">
        <a href='/articles/show/{{$article->id}}'>
          <img src="/images/articles/article_{{$article->id}}_thumb.jpg" class="img-thumbnail">
        </a>
        <h2>{{ $article->title }}</h2>
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
