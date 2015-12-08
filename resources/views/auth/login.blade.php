@extends('layouts.master')

@section('content')

    <p>Don't have an account? <a href='/register'>Register here</a></p>

    <h1>Login</h1>

    @include('errors')

    {!! Form::open(array('url' => '/login')) !!}

        <div class='form-group'>
            <label for='email'>Email</label>
            <input type='text' name='email' id='email' value='{{ old('email') }}'>
        </div>

        <div class='form-group'>
            <label for='password'>Password</label>
            <input type='password' name='password' id='password' value='{{ old('password') }}'>
        </div>

        <div class='form-group'>
            <input type='checkbox' name='remember' id='remember'>
            <label for='remember' class='checkboxLabel'>Remember me</label>
        </div>

        <button type='submit' class='btn btn-primary'>Login</button>

    {!! Form::close() !!}
@stop
