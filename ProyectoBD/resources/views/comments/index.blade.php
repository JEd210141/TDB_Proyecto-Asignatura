<!-- resources/views/comments/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Lista de Comentarios</h1>

    <ul>
        @foreach($comments as $comment)
            <li>
                <p>{{ $comment->content }}</p>
                <p>Usuario: {{ $comment->user->name }}</p>
            </li>
        @endforeach
    </ul>
@endsection
