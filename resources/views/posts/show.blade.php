@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->description }}</p>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary text-bg-dark">Back to Posts</a>
@endsection
