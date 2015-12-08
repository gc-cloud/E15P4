@extends('layouts.master')

@section('title')
  <h2> Add a new Article </h2>
@stop

@section('content')

  @include('errors')

  {!! Form::open(array('url' => 'articles/create')) !!}
    @include('articles.content')
  {!! Form::close() !!}
@stop

@section('body')
@stop
