@extends('layout.app')

@section('content')
    <h1>My blog post</h1>
    <p>{{ $post->body }}</p>
@endsection
