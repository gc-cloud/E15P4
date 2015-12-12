@extends('layouts.master')

@section('title')
    <h2>{{ $article->title }}</h2>

@stop

@section('content')
@stop

@section('body')
  <div class="border">
    @if($article->id)
      <h3>The bottomline</h3>
      <p>{{$article->bottomline}}</p>
      <h3>Why</h3>
      <p>{!!$article->body!!}</p>
      <!-- <img src='{{ $article->mainImage }}'> ADD a cool image here-->
      <h3>Sources</h3>
      <ul>
      @foreach($sources_for_article as $source)
        <li><a href='{{$source->url}}'>{{$source->source}}</a></li>
      @endforeach
      </ul>

    @else
      <h1>No Article specified</h1>
    @endif
  </div>
  <div>
      <a href='/'>-> All articles</a><br>
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
          [<a href='#login'> Login </a> to use your Name  or <a href='/register'>  Register </a> to get an account]
        @endif
        <input type="text" name="user_id" value='{{ $reader->id }}' hidden="hidden" readonly="readonly"><br>
        <input type="text" name="article_id" value='{{ $article->id }}' hidden="hidden" readonly="readonly"><br>

        {!!Form::text('comment', null, array('class'=>'form-control','placeholder'=>'Leave a comment'))!!}

        <br>
        {!! Form::submit('Post', array('class' => 'btn btn-small btn-info')) !!}
      </div>
    {!! Form::close() !!}
    {{-- Script for  dynamic addition of elements --}}
    <script src="/js/Zudbu.js" ></script>

@stop
