<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'content' => 'required|string|max:255',
            'rating' => 'integer|min:1|max:5',
        ]);

        $comment = Comment::create([
            'id_note' => $request->note_id,
            'id_user' => $request->user_id,
            'content' => $validatedData['content'],
            'rating' => $validatedData['rating'],
        ]);

        return response()->json($comment, 201);
    }
}