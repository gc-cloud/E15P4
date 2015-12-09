@extends('layouts.master')

@section('title')
  <h2>Edit Article</h2>
@stop

@section('content')
    @include('errors')
    <!-- using Form::model allows to bind the fields to the existing values-->
    {!! Form::model($article, array('url' => 'articles/edit')) !!}
      @include('articles.content')
      <input type='hidden' name='id' value='{{ $article->id }}'>
      <div class='form-group'>
        {!!Form::label('Categories:')!!}<br>
          @foreach($categories_for_checkboxes as $category_id => $category_name)
            <!-- Mark category as checked if it was previously selected -->
            <?php $checked = in_array($category_id,$categories_for_article)? 'checked': '' ?>
            <input {{$checked}} type = "checkbox" name="categories[]" value='{{ $category_id }}'> {{ $category_name }} <br>
         @endforeach
      </div>
      {!! Form::submit('Save Article', array('class' => 'btn btn-primary')) !!}
    {!! Form::close() !!}
@stop

@section('body')
@stop
