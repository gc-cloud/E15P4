@extends('layouts.master')

@section('title')
  <h2>Featured Articles</h2>
@stop


@section('content')
  @include('errors')
  @include('general.carousel')
@stop

@section('body')
  <h1>All Articles.</h1>
  @include('articles.thumbs')
@stop
