@extends('layouts.master')

@section('title')
  <h2> Login </h2>
@stop

@section('content')
  @include('errors')
@stop

@section('body')



    {!! Form::open(array('url' => '/login', 'class' => 'form border', 'files' => true)) !!}

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
        {!! Form::submit('Login!', array('class' => 'btn btn-primary')) !!}
        <p>Don't have an account? <a href='/register'>Register here</a></p>
    {!! Form::close() !!}





@stop
