@extends('layouts.master')


@section('title')
    Create book
@stop

@section('head')
    {{-- <link href="/css/books/show.css" type='text/css' rel='stylesheet'> --}}
@stop

@section('content')

  <h1> Add a new book </h1>

  @include('errors')

  {!! Form::open(array('url' => 'books/create')) !!}
        <div class='form-group'>
          {!!Form::label('Title:')!!}<br>
          {!!Form::text('title')!!}<br>
        </div>
        <div class='form-group'>
          {!!Form::label('Author:')!!}<br>
          <select name='author' id='author'>
            @foreach($authors_for_dropdown as $author_id => $author_name)
               <option value='{{ $author_id }}'> {{ $author_name }} </option>
           @endforeach
          </select>
        </div>
        <div class='form-group'>
          {!!Form::label('Cover (URL):')!!}<br>
          {!!Form::text('cover','http://')!!}<br>
        </div>
        <div class='form-group'>
          {!!Form::label('Published (YYYY):')!!}<br>
          {!!Form::text('published')!!}<br>
        </div>
        <div class='form-group'>
          {!!Form::label('Purchase Link:')!!}<br>
          {!!Form::text('purchase_link','http://')!!}<br>
        </div>
        {!! Form::submit('Add Book', array('class' => 'btn btn-primary')) !!}
  {!! Form::close() !!}

@stop

@section('body')
    <script src="/js/books/show.js"></script>
@stop
