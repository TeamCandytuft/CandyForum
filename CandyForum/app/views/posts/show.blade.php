@extends('layouts.default')
@section('content')
@foreach($posts as $post):
<div class="post">
    <p>Author: {{ $post['author_id'] }}</p>
    <p>Category: {{ $post['category_id'] }}</p>
    <p>Tags: {{ $post['tags'] }}</p>
    <h2>Header: {{ $post['header'] }}</h2>
    <span>Content: {{ $post['content'] }}</span>
</div>
@endforeach
@stop