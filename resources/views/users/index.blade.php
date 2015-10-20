@extends('layouts.master')

@section('title')
  User Generator
@stop

@section('content')
    <h2>User Generator</h2>
    <p>How many users? (1-99)</p>
    <form action="/users" method="post">
      <input type='hidden' name='_token' value='{{ csrf_token() }}'>
      Users <input type="text" name="users">
      @if($errors->get('users'))
        <br>
        <ul>
          @foreach ($errors->get('users') as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      @endif
      <br>
      Add Birthday? <input type="checkbox" name="birthday">
      @if($errors->get('birthday'))
        <br>
        <ul>
          @foreach ($errors->get('birthday') as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      @endif
      <br>
      <input type="submit" value="Submit">
      <br>
      @if(!isset($birthdays) AND isset($names))
      @for ($i=0; $i<sizeOf($names); $i++)
        <p>{{ $names[$i] }}</p>
        @endfor
      @endif

      @if(isset($names) AND isset($birthdays))
        @for ($i=0; $i<sizeOf($names); $i++)
          <p>{{ $names[$i] }}: {{ $birthdays[$i] }}</p>
          @endfor
      @endif
@stop
