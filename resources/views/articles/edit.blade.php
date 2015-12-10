@extends('layouts.master')

@section('title')
  <h2>Edit Article</h2>
@stop

@section('content')
    @include('errors')
@stop

@section('body')
  <!-- Form::model binds the fields to the existing values-->
  {!! Form::model($article, array('url' => 'articles/edit/{{$article_id}}','class'=>'border')) !!}
    @include('articles.content')
    <input type='hidden' name='id' value='{{ $article->id }}'>

    <!-- Add categories, show as checked if they were previously selected -->
    <div class='form-group'>
      <h2>Categories:</h2>
      @foreach($categories_for_checkboxes as $category_id => $category_name)
        <?php $checked = in_array($category_id,$categories_for_article)? true: false ?>
        {!!Form::checkbox('categories[]', $category_id, $checked)!!} {{ $category_name }} <br>
      @endforeach
    </div>

    <!-- Add / edit references  -->
    <div class='form-group' id="dynamicInput">
      <h2>References:</h2>
      @foreach($sources_for_article as $source)
        {!!Form::label('Reference / URL :')!!}
        {!!Form::text('source', $source->source,array('class'=>'form-control'))!!}<br>
        {!!Form::text('url', $source->url, array('class'=>'form-control'))!!}<br>
      @endforeach
    </div>

    {!! Form::button('Add References', array('onClick'=>'addInput("dynamicInput");', 'class' => 'btn btn-primary')) !!}
    {!! Form::submit('Save Article', array('class' => 'btn btn-primary')) !!}
  {!! Form::close() !!}

<!-- Script for  dynamic addition of elements -->
<script src="/js/Zudbu.js" ></script>



@stop
