@extends('layouts.master')
@section('title')



@section('content')

@foreach($articles as $article)
    <div>
      <h2>{{ $article->title }}</h2>
      <p>{{$article->bottomline}}</p>
      <a href='/articles/edit/{{$article->id}}'>Edit</a><br>
    </div>
@endforeach

@stop

@section('body')
@stop
