@extends('layouts/default')
@section('content')
<h1> Sign Up!</h1>
  <h2>New User Registration</h2>
    {{ Form::open(array('url' => 'register')) }}
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username') }}
        @if ($errors->has('username')) <p>{{ $errors->first('username') }}</p> @endif

        {{ Form::label('password', 'Password') }}
        {{ Form::password('password') }}
        @if ($errors->has('password')) <p>{{ $errors->first('password') }}</p> @endif

        {{ Form::label('password_confirm', 'Confirm Password') }}
        {{ Form::password('password_confirm') }}
        @if ($errors->has('password_confirm')) <p>{{ $errors->first('password_confirm') }}</p> @endif

        {{ Form::label('name', 'Name') }}
        {{ Form::text('name') }}
        @if ($errors->has('name')) <p>{{ $errors->first('name') }}</p> @endif

        {{ Form::label('last_name', 'Last Name') }}
        {{ Form::text('last_name') }}
        @if ($errors->has('last_name')) <p>{{ $errors->first('last_name') }}</p> @endif

        {{ Form::label('email', 'Email Address') }}
        {{ Form::text('email') }}
        @if ($errors->has('email')) <p>{{ $errors->first('email') }}</p> @endif

        {{ Form::submit('Sign Up') }}

    {{ Form::close() }}
@stop