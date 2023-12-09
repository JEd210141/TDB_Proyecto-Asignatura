@extends('layouts.app')

@section('content')
    <h1>Editar Comentario</h1>
    <!-- Agrega un formulario para editar el comentario actual -->
    <form method="post" action="{{ route('comments.update', $comment->id) }}">
        @csrf
        @method('PUT')
        <!-- Agrega campos del formulario con valores actuales -->
        <label for="content">Contenido:</label>
        <textarea name="content">{{ old('content', $comment->content) }}</textarea>
        @error('content')<p>{{ $message }}</p>@enderror

        <label for="post_id">Post:</label>
        <select name="post_id">
            <!-- Agrega opciones para seleccionar el post -->
        </select>
        @error('post_id')<p>{{ $message }}</p>@enderror

        <label for="user_id">Usuario:</label>
        <select name="user_id">
            <!-- Agrega opciones para seleccionar el usuario -->
        </select>
        @error('user_id')<p>{{ $message }}</p>@enderror

        <!-- Agrega más campos según sea necesario -->

        <button type="submit">Actualizar Comentario</button>
    </form>
@endsection
