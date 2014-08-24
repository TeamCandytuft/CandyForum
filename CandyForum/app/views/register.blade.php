@extends('layouts/default')
@section('content')
<h1> Sign Up!</h1>
  <h2>New User Registration</h2>
    {{ Form::open(array('url' => 'register')) }}
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username') }}

        {{ Form::label('password', 'Password') }}
        {{ Form::password('password') }}

        {{ Form::label('password_confirm', 'Confirm Password') }}
        {{ Form::password('password_confirm') }}

        {{ Form::label('name', 'Name') }}
        {{ Form::text('name') }}

        {{ Form::label('last_name', 'Last Name') }}
        {{ Form::text('last_name') }}

        {{ Form::label('email', 'Email Address') }}
        {{ Form::text('email') }}

        {{ Form::submit('Sign Up') }}

    {{ Form::close() }}
@stop