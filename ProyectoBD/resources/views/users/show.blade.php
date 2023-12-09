@extends('layouts.app')

@section('content')
    <h1>Detalles del Usuario</h1>
    <p>ID: {{ $user->id }}</p>
    <p>Nombre: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <!-- Agrega más detalles según sea necesario -->
@endsection
