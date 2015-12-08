@extends('layouts.master')

@section('title')
<h2>Edit Article</h2>
@stop

@section('content')

    @include('errors')
    <!-- using Form::model allows to bind the fields to the existing values-->
    {!! Form::model($article, array('url' => 'articles/edit')) !!}
          <input type='hidden' name='id' value='{{ $article->id }}'>
          @include('articles.content')
    {!! Form::close() !!}

@stop

@section('body')
@stop
