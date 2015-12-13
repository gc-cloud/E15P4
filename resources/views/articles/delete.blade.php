@extends('layouts.master')

@section('title')
    <h2> Delete Article: {{ $article->title }}</h2>
@stop

@section('content')
@stop

@section('body')
  <div class="border">
    @if($article->id)
      <h2>The bottomline</h2>
      <p>{{$article->bottomline}}</p>
      <h2>Why</h2>
      <p>{!!$article->body!!}</p>
    @else
        <h2>No Article specified</h2>
    @endif
  </div>
  <h2> Are you sure you want to delete "{{ $article->title }}" ?</h2>
  <form>
    <br>
    <button type="submit" class="btn btn-danger btn-sm" formaction="/articles/delete/{{ $article->id }}">
    <span class="glyphicon glyphicon-trash"></span> Yes, delete
    </button>
    <button type="submit" class="btn btn-default btn-sm" formaction="/articles/edit/search">
    <span class="glyphicon glyphicon-circle-arrow-left"></span> No, go back
    </button>
  </form>
@stop
