@extends('layouts.master')

@section('title')


  <h2>{{ ucfirst(trans($main_category )) }} articles.</h2>
@stop

@section('content')

@foreach($articles as $article)
    <div>
      <h2>{{ $article->title }}</h2>
    </div>
@endforeach

@stop

@section('body')
@stop
