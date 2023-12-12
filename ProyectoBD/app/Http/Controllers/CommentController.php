<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
        ]);
    
        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->user_id = $request->input('user_id');
        $comment->category_id = $request->input('category_id');
        $comment->save();
    
        return redirect()->route('dashboard')->with('success', 'Comentario creado exitosamente.');
    }
    

    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $comment = Comment::findOrFail($id);
        $comment->fill($request->all());
        $comment->save();

        return redirect()->route('posts.show', $comment->post->id)->with('success', 'Comentario actualizado exitosamente.');
    }

    // Puedes agregar métodos para buscar comentarios por diferentes criterios
    // Puedes agregar un método para eliminar un comentario
}
