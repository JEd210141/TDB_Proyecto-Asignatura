@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Usuario</h1>
    <!-- Agrega un formulario para crear un nuevo usuario -->
    <form method="post" action="{{ route('users.store') }}">
        @csrf
        <!-- Agrega campos del formulario según tus necesidades -->
        <label for="name">Nombre:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')<p>{{ $message }}</p>@enderror

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email')<p>{{ $message }}</p>@enderror

        <label for="password">Contraseña:</label>
        <input type="password" name="password">
        @error('password')<p>{{ $message }}</p>@enderror

        <!-- Agrega más campos según sea necesario -->

        <button type="submit">Guardar Usuario</button>
    </form>
@endsection
