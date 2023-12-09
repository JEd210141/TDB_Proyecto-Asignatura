@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Post</h1>
    <!-- Agrega un formulario para crear un nuevo post -->
    <form method="post" action="{{ route('posts.store') }}">
        @csrf
        <!-- Agrega campos del formulario según tus necesidades -->
        <label for="title">Título:</label>
        <input type="text" name="title" value="{{ old('title') }}">
        @error('title')<p>{{ $message }}</p>@enderror

        <label for="content">Contenido:</label>
        <textarea name="content">{{ old('content') }}</textarea>
        @error('content')<p>{{ $message }}</p>@enderror

        <label for="category_id">Categoría:</label>
        <select name="category_id">
            <!-- Agrega opciones para seleccionar la categoría -->
        </select>
        @error('category_id')<p>{{ $message }}</p>@enderror

        <!-- Agrega más campos según sea necesario -->

        <button type="submit">Guardar Post</button>
    </form>
@endsection
