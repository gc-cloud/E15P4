@extends('layouts.master')

@section('head')
  <script src="/js/Zudbu.js" ></script>
  <script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
  <script>
  tinymce.init({
    selector: '#mytextarea'
  });
  </script>
@stop

@section('title')
  <h2> Add a new Article </h2>
@stop

@section('content')
  @include('errors')
@stop

@section('body')
<h1>TinyMCE Quick Start Guide</h1>
  <form method="post">

  </form>


{{-- Form::model binds the fields to the existing values--}}

{!! Form::model($article,array('url' => 'articles/create','class'=>'border')) !!}
  <textarea id="mytextarea">Hello, World!</textarea>
    @include('articles.content')
    <div class='form-group'>
      {!!Form::label('Categories:')!!}<br>
        @foreach($categories_for_checkboxes as $category_id => $category_name)
           <input type = "checkbox" name="categories[]" value='{{ $category_id }}'> {{ $category_name }} <br>
       @endforeach
    </div>
    {{-- Add / edit references. We start with one set. THe user can add more with javasript  --}}
    <div class='form-group' id="dynamicSourceInput">
      <h2>Sources:</h2>
      {!!Form::label('Source /  URL')!!}
      {!!Html::link('sources/delete/'.'0',' [delete]')!!}
      {!!Form::text('ids[]',0,array('hidden'))!!}
      {!!Form::text('sources[]', null,array('class'=>'form-control','placeholder'=>'Source'))!!}<br>
      {!!Form::url('urls[]', null, array('class'=>'form-control','placeholder'=>'URL'))!!}<br>
    </div>
    <div class='form-group'>
      {!! Form::button('Add Sources', array('onClick'=>'addInput("dynamicSourceInput");', 'class' => 'btn btn-link')) !!}
    </div>
      {!! Form::submit('Save Article', array('class' => 'btn btn-primary')) !!}
  {!! Form::close() !!}
  {{-- Script for  dynamic addition of elements --}}

@stop
