<!-- resources/views/users/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Lista de Usuarios</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role->name }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}">Ver</a>
                        <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                        <!-- Agregar más acciones según sea necesario -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
