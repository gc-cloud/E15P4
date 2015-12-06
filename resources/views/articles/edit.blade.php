@extends('layouts.master')

@section('title')
@stop


@section('content')

    <h1>Edit Article</h1>
    @include('errors')
    
    <!-- using Form::model allows to bind the fields to the existing values-->
    {!! Form::model($article, array('url' => 'articles/edit')) !!}
          <div class='form-group'>
            {!!Form::label('Title:')!!}<br>
            {!!Form::text('title')!!}<br>
          </div>

          <div class='form-group'>
            {!!Form::label('Bottomline')!!}<br>
            {!!Form::text('bottomline')!!}<br>
          </div>
          <div class='form-group'>
            {!!Form::label('Body:')!!}<br>
            {!!Form::textarea('body')!!}<br>
          </div>
          <div class='form-group'>
            {!!Form::label('Category:')!!}<br>
            <select name='category' id='category'>
              @foreach($categories_for_select as $category_id => $category_name)
                 <option value='{{ $category_id }}'> {{ $category_name }} </option>
             @endforeach
            </select>
          </div>
          <div class='form-group'>
            {!!Form::label('Author:')!!}<br>
            <select name='author' id='author'>
              @foreach($authors_for_select as $author_id => $author_name)
                 <option value='{{ $author_id }}'> {{ $author_name }} </option>
             @endforeach
            </select>
          </div>
          {!! Form::submit('Add Article', array('class' => 'btn btn-primary')) !!}
    {!! Form::close() !!}

@stop

@section('body')
@stop
