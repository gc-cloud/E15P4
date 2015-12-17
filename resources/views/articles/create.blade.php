@extends('layouts.master')

@section('title')
  <h2> Add a new Article </h2>
@stop

@section('content')
  @include('errors')
@stop

@section('body')



{{-- Form::model binds the fields to the existing values--}}


{!! Form::model($article,array('url' => 'articles/create','class'=>'border','files' => true)) !!}

    @include('articles.content');


    <div class='form-group'>
      {!!Form::label('Categories:')!!}<br>
        @foreach($categories_for_checkboxes as $category_id => $category_name)
          <input type="checkbox" name="categories[{{ $category_id }}]" value='{{ $category_id }}' checked> {{ $category_name }} <br>
       @endforeach
    </div>
    {{-- Add / edit references. We start with one set. THe user can add more with javasript  --}}
    <div class='form-group' id="dynamicSourceInput">
      <h2>Sources:</h2>

      {!!Form::label('Source /  URL')!!}
      {!!Form::text('ids[new0]',0,array('hidden'))!!}
      {!!Form::text('sources[new0]', null,array('class'=>'form-control','placeholder'=>'Source'))!!}<br>
      {!!Form::url('urls[new0]', null, array('class'=>'form-control','placeholder'=>'URL', 'onLoad'=>'addInput("dynamicSourceInput"'))!!}<br>
      {!!old('title')!!}
      {!!old('sources.new0')!!}
      {!!old('sources.new1')!!}
      {!!count(old('sources'))!!}<br>
      @foreach(old('sources') as $key => $source)
       sources[{!!$key!!}]= {!!$source!!}<br>
       <input type="text" name="sources[{!!$key!!}]" value="{!!$source!!}"><br>
       @endforeach()





    </div>
    <div class='form-group'>
      {!! Form::button('Add Sources', array('onClick'=>'addInput("dynamicSourceInput");', 'class' => 'btn btn-link')) !!}
    </div>
      {!! Form::submit('Save Article', array('class' => 'btn btn-primary')) !!}
  {!! Form::close() !!}
  {{-- Script for  dynamic addition of elements --}}

@stop
