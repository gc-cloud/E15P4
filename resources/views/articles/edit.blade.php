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
      {!!Form::label('Categories:')!!}<br>
      @foreach($categories_for_checkboxes as $category_id => $category_name)
        <?php $checked = in_array($category_id,$categories_for_article)? true: false ?>
        {!!Form::checkbox('categories[]', $category_id, $checked)!!} {{ $category_name }} <br>
      @endforeach
    </div>

    <!-- Add / edit references  -->
    <div class='form-group' id="dynamicInput">
      {!!Form::label('References:')!!}<br>
      <?php $i=1; ?>
      @foreach($sources_for_article as $source)
        <?php echo '<p>Reference: '. $i.' </p>' ?>
        {!!Form::text('url', $source->url, array('class'=>'entryField'))!!}<br>
        {!!Form::text('source', $source->source,array('class'=>'entryField'))!!}<br> <br>
        <?php $i++; ?>
      @endforeach
    </div>

    {!! Form::button('Add References', array('onClick'=>'addInput("dynamicInput");', 'class' => 'btn btn-primary')) !!}
    {!! Form::submit('Save Article', array('class' => 'btn btn-primary')) !!}
  {!! Form::close() !!}

<!-- Script for  dynamic addition of elements -->
<script src="/js/Zudbu.js" ></script>



@stop
