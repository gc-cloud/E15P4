@extends('layouts.master')

@section('title')
  <h2>Edit Article</h2>
@stop

@section('content')
    @include('errors')
@stop

@section('body')
  {{-- Form::model binds the fields to the existing values--}}
  {!! Form::model($article, array('url' => 'articles/edit/{{$article_id}}','class'=>'border')) !!}
    @include('articles.content')
    <input type='hidden' name='id' value='{{ $article->id }}'>

    {{-- Add categories, show as checked if they were previously selected --}}
    <div class='form-group'>
      <h2>Categories:</h2>
      @foreach($categories_for_checkboxes as $category_id => $category_name)
        <?php $checked = in_array($category_id,$categories_for_article)? true: false ?>
        {!!Form::checkbox('categories[]', $category_id, $checked)!!} {{ $category_name }} <br>
      @endforeach
    </div>

      {{-- Add / edit references  --}}
      <div class='form-group' id="dynamicSourceInput">
        <h2>Sources:</h2>
        @foreach($sources_for_article as $key=>$source)
          {!!Form::label('Source /  URL')!!}
          @if($key >0)
            {!!link_to('sources/delete/'.$source->id, '' , $attributes = array('class'=>'glyphicon glyphicon-trash'), null)!!}
          @endif
          {!!Form::text('ids[0]',$source->id,array('hidden'))!!}
          {!!Form::text('sources[0]', $source->source,array('class'=>'form-control'))!!}<br>
          {!!Form::url('urls[0]', $source->url, array('class'=>'form-control'))!!}<br>
        @endforeach
      </div>

    <div class='form-group'>
      {!! Form::button('Add Sources', array('onClick'=>'addInput("dynamicSourceInput");', 'class' => 'btn btn-link')) !!}
    </div>
    {!! Form::submit('Save Article', array('class' => 'btn btn-primary')) !!}
  {!! Form::close() !!}

{{-- Script for  dynamic addition of elements --}}
<script src="/js/Zudbu.js" ></script>
@stop
