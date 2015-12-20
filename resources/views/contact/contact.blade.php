@extends('layouts.master')

@section('title')
    <h2>Zudbu Privacy</h2>
@stop

@section('content')
@stop

@section('body')
  You received a message from Zubu:
    <p>Name : {{$name}}</p>
    <p>Email: {{$email}}</p>
    <p>Message: {{$message}}</p>

@stop
