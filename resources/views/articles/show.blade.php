@extends('layouts.master')


@section('title')
    Show Article
@stop


@section('content')
    @if($title)
        <h1>Show Article: {{ $title }}</h1>
    @else
        <h1>No Article specified</h1>
    @endif
@stop

@section('body')
@stop
