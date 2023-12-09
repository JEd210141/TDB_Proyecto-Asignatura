@extends('layouts.app')

@section('content')
    <h1>Editar Post</h1>
    <!-- Agrega un formulario para editar el post actual -->
    <form method="post" action="{{ route('posts.update', $post->id) }}">
        @csrf
        @method('PUT')
        <!-- Agrega campos del formulario con valores actuales -->
        <label for="title">Título:</label>
        <input type="text" name="title" value="{{ old('title', $post->title) }}">
        @error('title')<p>{{ $message }}</p>@enderror

        <label for="content">Contenido:</label>
        <textarea name="content">{{ old('content', $post->content) }}</textarea>
        @error('content')<p>{{ $message }}</p>@enderror

        <label for="category_id">Categoría:</label>
        <select name="category_id">
            <!-- Agrega opciones para seleccionar la categoría -->
        </select>
        @error('category_id')<p>{{ $message }}</p>@enderror

        <!-- Agrega más campos según sea necesario -->

        <button type="submit">Actualizar Post</button>
    </form>
@endsection
