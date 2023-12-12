<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboard', compact('users'));
    }

    public function store(Request $request)
    {
        $categories = Category::all();

        return view('dashboard', compact('categories'));
    }

    public function dashboard()
    {
        $categories = Category::all(); // Obtener todas las categorías
        return view('dashboard', compact('categories')); // Pasar las categorías a la vista
    }

    public function backup()
    {
        $filename = 'db_backup_' . date('Y-m-d_H-i-s') . '.sql';

        $command = 'mysqldump -u root -p database > ' . storage_path('app/backups/' . $filename);

        exec($command);

        return redirect()->route('dashboard');
    }

}
