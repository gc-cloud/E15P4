@extends('layouts.master')

@section('title')
    <h2>{{ $article->title }}</h2>
@stop

@section('content')
@stop

@section('body')
  <div class="spaced">
    <a href='/'>Show All Articles <span class="glyphicon glyphicon-circle-arrow-right"></span></a>
  </div>
  <div class="border">
    <img src="{{$article->imagePath}}" class="img-responsive img-centered img-rounded">
    @if($article->id)
      <h2>The bottomline</h2>
      <p>{{$article->bottomline}}</p>
      <h2>Why</h2>
      <p>{!!$article->body!!}</p>
      <h2>Sources</h2>
      <ul>
      @foreach($sources_for_article as $source)
        <li><a href='{{$source->url}}' target="_blank">{{$source->source}}</a></li>
      @endforeach
      </ul>

    @else
      <h2>No Article specified</h2>
    @endif
  </div>
  <div class="spaced">
    <a href='/'>Show All Articles <span class="glyphicon glyphicon-circle-arrow-right"></span></a>
  </div>

  {!! Form::open(array('url' => 'articles/comment/','class'=>'border')) !!}
      <h2>Comments</h2>
      <hr>
      <div>
        @foreach($comments_for_article as $comment)
          <h4 class="user inline">{{$comment->user->name}} </h4>
          <p > {{$comment->comment}}</p>
        <hr>
        @endforeach
      </div>
      <div class='form-group' id="dynamicCommentInput">
        <h4 class="user inline">{{$reader->name}}</h4>
        @if(!$user)
          [<a href='/login'>Login  </a> or <a href='/register'>  Register </a> to post with your name]
        @endif
        <input type="text" name="user_id" value='{{ $reader->id }}' hidden="hidden" readonly="readonly"><br>
        <input type="text" name="article_id" value='{{ $article->id }}' hidden="hidden" readonly="readonly"><br>
        {!!Form::text('comment', null, array('class'=>'form-control','placeholder'=>'Leave a comment'))!!}
        <br>
        {!! Form::submit('Post', array('class' => 'btn btn-small btn-primary')) !!}
      </div>
    {!! Form::close() !!}
    {{-- Script for  dynamic addition of elements --}}
    <script src="/js/Zudbu.js" ></script>

@stop
