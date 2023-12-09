@extends('layouts.app')

@section('content')
    <h1>Detalles del Comentario</h1>
    <p>ID: {{ $comment->id }}</p>
    <p>Contenido: {{ $comment->content }}</p>
    <!-- Agrega más detalles según sea necesario -->
@endsection
