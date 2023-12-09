@extends('layouts.app')

@section('content')
    <h1>Detalles del Rol</h1>
    <p>ID: {{ $role->id }}</p>
    <p>Nombre: {{ $role->name }}</p>
    <!-- Agrega más detalles según sea necesario -->
@endsection
