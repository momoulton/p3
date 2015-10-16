@extends('layouts.master')

@section('title')
  Lorem Ipsum Generator
@stop

@section('content')
    <h2>Lorem Ipsum Generator</h2>
    <p>How many paragraphs?</p>
    <form action="/lorem-ipsum" method="post">
      <input type='hidden' name='_token' value='{{ csrf_token() }}'>
      Paragraphs: <input type="text" name="paragraphs">
      <br>
      @if(count($errors) > 0)
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      @endif
      <input type="submit" value="Submit">
@stop
