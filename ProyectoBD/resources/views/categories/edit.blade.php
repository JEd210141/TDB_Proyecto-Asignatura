@extends('layouts.app')

@section('content')
    <h1>Editar Categoría</h1>
    <!-- Agrega un formulario para editar la categoría actual -->
    <form method="post" action="{{ route('categories.update', $category->id) }}">
        @csrf
        @method('PUT')
        <!-- Agrega campos del formulario con valores actuales -->
        <label for="name">Nombre:</label>
        <input type="text" name="name" value="{{ old('name', $category->name) }}">
        @error('name')<p>{{ $message }}</p>@enderror

        <!-- Agrega más campos según sea necesario -->

        <button type="submit">Actualizar Categoría</button>
    </form>
@endsection
