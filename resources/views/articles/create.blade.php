@extends('layouts.master')

@section('title')
  <h2> Add a new Article </h2>
@stop

@section('content')
  @include('errors')
@stop

@section('body')
  {!! Form::open(array('url' => 'articles/create','class'=>'border')) !!}
    @include('articles.content')
    <div class='form-group'>
      {!!Form::label('Categories:')!!}<br>
        @foreach($categories_for_checkboxes as $category_id => $category_name)
           <input type = "checkbox" name="categories[]" value='{{ $category_id }}'> {{ $category_name }} <br>
       @endforeach
    </div>
    <div class='form-group' id="dynamicSourceInput">
      <h2>Sources:</h2>
    </div>
    <div class='form-group'>
      {!! Form::button('Add Sources', array('onClick'=>'addInput("dynamicSourceInput");', 'class' => 'btn btn-primary')) !!}
      {!! Form::submit('Save Article', array('class' => 'btn btn-primary')) !!}
    </div>
  {!! Form::close() !!}
  {{-- Script for  dynamic addition of elements --}}
  <script src="/js/Zudbu.js" ></script>
@stop
