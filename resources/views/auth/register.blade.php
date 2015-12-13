@extends('layouts.master')

@section('title')
  <h2>Register</h2>
@stop

@section('content')
    @include('errors')
@stop


@section('body')
<form method='POST' action='/register' class="border">
    {!! csrf_field() !!}

    <div class='form-group'>
        <span class="glyphicon glyphicon-user"></span><label for='name'> Name</label>
        <input type='text' name='name' id='name' value='{{ old('name') }}' class="form-control">
    </div>

    <div class='form-group'>
        <span class="glyphicon glyphicon-envelope"></span><label for='email'> Email</label>
        <input type='text' name='email' id='email' value='{{ old('email') }}' class="form-control">
    </div>

    <div class='form-group'>
        <span class="glyphicon glyphicon-lock"></span><label for='password'> Password</label>
        <input type='password' name='password' id='password' class="form-control">
    </div>

    <div class='form-group'>
        <span class="glyphicon glyphicon-lock"></span><label for='password_confirmation'> Confirm Password</label>
        <input type='password' name='password_confirmation' id='password_confirmation' class="form-control">
    </div>

    <button type='submit' class='btn btn-primary'>Register</button>
</form>
@stop
