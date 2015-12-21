@extends('layouts.master')

@section('title')
  <h2> Password Reset </h2>
@stop

@section('content')
  @include('errors')
  @if (session('status'))
    <div class="alert alert-success">
           {{ session('status') }}
    </div>
  @endif
@stop


@section('body')
    <h2>Reset your password</h2>

    {!! Form::open(array('url' => '/password/email', 'class'=>'border')) !!}

      <div class='form-group'>
        <span class="glyphicon glyphicon-envelope"></span>
        {!! Form::label('email','Email') !!}
        {!! Form::text('email', null, array('placeholder'=>'email','class'=>'form-control','id'=>'email')) !!}
      </div>

      {!! Form::submit('Send Password Reset Link!', array('class' => 'btn btn-primary')) !!}
    {!! Form::close() !!}

@stop
