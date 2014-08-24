@extends ('layouts.default')
@section ('content')
{{ Form::open(array('url' => 'posts/view', 'class' => 'form-group col-lg-8', 'id' => 'comment-form')) }}
{{ Form::text('header', null, array('class' => 'form-control', 'placeholder' => 'Header')) }}

{{ Form::textarea('password', null, array('class' => 'form-control', 'placeholder' => 'Add text here')) }}

{{ Form::submit('Add post') }}
{{ Form::close() }}
@stop