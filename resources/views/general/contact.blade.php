@extends('layouts.master')
@section('title')
  <h2>Contact Us</h2>
@stop

@section('content')
    @include('errors')
@stop

@section('body')
{!! Form::open(array('url' => '/contact', 'class' => 'form border')) !!}

    <div class='form-group'>
        <span class="glyphicon glyphicon-user"></span>
        {!! Form::label('name','Name') !!}
        {!! Form::text('name', null, array('placeholder'=>'Name','class'=>'form-control','id'=>'name')) !!}
    </div>

    <div class='form-group'>
        <span class="glyphicon glyphicon-envelope"></span>
        {!! Form::label('email','Email') !!}
        {!! Form::text('email', null, array('placeholder'=>'email','class'=>'form-control','id'=>'email')) !!}
    </div>

    <div class='form-group'>
        <span class="glyphicon glyphicon-lock"></span>
        {!! Form::label('body', 'Message') !!}
        {!!Form::textarea('body',null,array('id'=>'body','placeholder'=>'Your message', 'class'=>'form-control'))!!}
    </div>
      {!! Form::submit('Send!', array('class' => 'btn btn-primary')) !!}
{!! Form::close() !!}

@stop
