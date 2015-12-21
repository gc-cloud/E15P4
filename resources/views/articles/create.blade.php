@extends('layouts.master')

@section('title')
  <h2> Add a new Article </h2>
@stop

@section('content')
  @include('errors')
@stop

@section('body')

{{-- Form::model binds the fields to the existing values--}}

{!! Form::model($article,array('url' => 'articles/create','class'=>'border','novalidate' => 'novalidate','files' => true)) !!}

    @include('articles.content')

    <div class='form-group'>
      <h2>Categories:</h2>
      @foreach($categories_for_checkboxes as $category_id => $category_name)
        <input type="checkbox" name="categories[{{ $category_id }}]" value='{{ $category_id }}' checked> {{ $category_name }} <br>
      @endforeach
    </div>
    {{-- Add / edit references. We start with one set. The user can add more with javasript  --}}
    <div class='form-group' id="dynamicSourceInput">
      <h2>Sources:</h2>

      {{-- Generate sources dynamically keeping old values.  At least one pair of source/url is created--}}
      @if(!count(old('sources')))
        {!!Form::label('Source /  URL')!!}
        {!!Form::text('sources[new0]', null,array('class'=>'form-control','placeholder'=>'Source'))!!}<br>
        {!!Form::url('urls[new0]', null, array('class'=>'form-control','placeholder'=>'URL'))!!}<br>
      @else
        @foreach(old('sources') as $key => $source)
           {!!Form::label('Source /  URL')!!}
           <input type="text" class = "form-control" name="sources[{!!$key!!}]" placeholder="source" value="{!!$source!!}"><br>
           <input type="text" class = "form-control" name="urls[{!!$key!!}]" placeholder="URL" value="{!!old('urls.'.$key.'')!!}"><br>
         @endforeach()
      @endif


    </div>
    <div class='form-group'>
      {!! Form::button('Add Sources', array('onClick'=>'addInput("dynamicSourceInput");', 'class' => 'btn btn-link')) !!}

    </div>

      {!! Form::submit(' Save ', array('class' => 'btn btn-primary')) !!}
      {!! Form::button('Cancel', array('type'=>'submit','class' => 'btn btn-danger', 'formaction'=>'/articles/edit/search')) !!}
      </button>


  {!! Form::close() !!}
  {{-- Script for  dynamic addition of elements --}}

@stop
