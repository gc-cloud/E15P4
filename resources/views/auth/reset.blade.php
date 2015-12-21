@extends('layouts.master')

@section('title')
  <h2>Password Reset</h2>
@stop

@section('content')
    @include('errors')
@stop


@section('body')
{!! Form::open(array('url' => '/password/reset', 'class' => 'form border', 'files' => true)) !!}
<input type="hidden" name="token" value="{{ $token }}">


    <div class='form-group'>
        <span class="glyphicon glyphicon-envelope"></span>
        {!! Form::label('email','Email') !!}
        {!! Form::text('email', null, array('placeholder'=>'email','class'=>'form-control','id'=>'email')) !!}
    </div>

    <div class='form-group'>
        <span class="glyphicon glyphicon-lock"></span>
        {!! Form::label('password','Password') !!}
        {!! Form::password('password',array('placeholder'=>'password','class'=>'form-control','id'=>'password')) !!}
    </div>

    <div class='form-group'>
        <span class="glyphicon glyphicon-lock"></span>
        {!! Form::label('password_confirmation', 'Confirm Password') !!}
        {!! Form::password('password_confirmation',array('placeholder'=>'confirm password','class'=>'form-control','id'=>'password_confirmation')) !!}
    </div>
      {!! Form::submit('Reset Password', array('class' => 'btn btn-primary')) !!}
{!! Form::close() !!}


@stop
