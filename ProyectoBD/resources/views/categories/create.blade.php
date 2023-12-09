@extends('layouts.app')

@section('content')
    <h1>Crear Nueva Categoría</h1>
    <!-- Agrega un formulario para crear una nueva categoría -->
    <form method="post" action="{{ route('categories.store') }}">
        @csrf
        <!-- Agrega campos del formulario según tus necesidades -->
        <label for="name">Nombre:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')<p>{{ $message }}</p>@enderror

        <!-- Agrega más campos según sea necesario -->

        <button type="submit">Guardar Categoría</button>
    </form>
@endsection
