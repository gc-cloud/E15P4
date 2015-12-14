@extends('layouts.master')

@section('title')
    <h2>{{ $article->title }}</h2>


@stop

@section('content')
@stop

@section('body')
  <div class="border">
    <img src="/images/articles/article_{{$article->id}}_pic.jpg" class="img-responsive img-centered img-rounded">
    @if($article->id)
      <h2>The bottomline</h2>
      <p>{{$article->bottomline}}</p>
      <h2>Why</h2>
      <p>{!!$article->body!!}</p>
      <h2>Sources</h2>
      <ul>
      @foreach($sources_for_article as $source)
        <li><a href='{{$source->url}}'>{{$source->source}}</a></li>
      @endforeach
      </ul>

    @else
      <h2>No Article specified</h2>
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
