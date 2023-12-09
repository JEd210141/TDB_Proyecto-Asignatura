@extends('layouts.app')

@section('content')
    <h1>Detalles del Post</h1>
    <p>ID: {{ $post->id }}</p>
    <p>Título: {{ $post->title }}</p>
    <p>Contenido: {{ $post->content }}</p>
    <!-- Agrega más detalles según sea necesario -->
@endsection
