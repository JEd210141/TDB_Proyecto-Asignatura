<!-- resources/views/posts/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Lista de Posts</h1>

    <ul>
        @foreach($posts as $post)
            <li>
                <strong>{{ $post->title }}</strong>
                <p>{{ $post->content }}</p>
                <p>Categoría: {{ $post->category->name }}</p>
            </li>
        @endforeach
    </ul>
@endsection
