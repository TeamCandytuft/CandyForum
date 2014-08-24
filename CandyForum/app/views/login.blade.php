@extends('layouts/default')
@section('content')
<h1> Log In</h1>
{{ Form::open(array('url' => 'login')) }}
{{ Form::label('username', 'Username') }}
{{ Form::text('username') }}

{{ Form::label('password', 'Password') }}
{{ Form::password('password') }}

{{ Form::submit('Log In') }}

{{ Form::close() }}
@stop