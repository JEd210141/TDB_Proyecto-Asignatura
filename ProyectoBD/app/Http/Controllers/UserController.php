<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    // Método para mostrar el formulario de edición
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role_id' => 'required|exists:roles,id',
        ]);

        // Lógica para almacenar el usuario en la base de datos
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->role_id = $request->input('role_id');
        $user->save();

        return redirect()->route('users.index')->with('success', 'Usuario creado correctamente.');
    }

    // Método para actualizar los datos del usuario
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Validación de los campos según tus necesidades
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'role_id' => [
                'required',
                'exists:roles,id',
                'different:auth()->user()->role_id', // Agrega la validación
            ],
        ]);

        // Encriptación de la contraseña
        if ($request->input('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        // Actualización de los datos del usuario
        $user->update($request->all());

        // Redirección después de la actualización
        return redirect()->route('users.show', $user->id)->with('success', 'Usuario actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Usuario eliminado correctamente');
    }
}
