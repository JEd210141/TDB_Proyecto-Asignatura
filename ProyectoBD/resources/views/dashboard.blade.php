@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Lista de Usuarios
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
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
                                    <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary">Ver</a>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">Editar</a>
                                    <a href="{{ route('users.destroy', $user->id) }}"
                                        class="btn btn-danger delete-user">Eliminar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <form action="{{ route('comments.store') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="content">Comentario:</label>
                            <textarea name="content" id="content" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="user_id">Usuario:</label>
                            <select name="user_id" id="user_id" class="form-control">
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>


                        <button type="submit" class="btn btn-primary">Crear Comentario</button>
                    </form>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Comentario</th>
                                <th>Categoria</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            @if($user->comments->count() > 0)
                            @foreach($user->comments as $comment)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $comment->content ?? '---' }}</td>
                                <td>{{ $comment->category->name ?? '---' }}</td>
                            </tr>
                            @endforeach
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                    <div class="form-group">
                        <label for="backup">Respaldo de base de datos</label>
                        <button type="submit" class="btn btn-primary" id="backup" onclick="return backup()">Hacer
                            respaldo</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection