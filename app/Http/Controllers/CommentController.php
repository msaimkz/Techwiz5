<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        // Check if user is authenticated
        // if (!Auth::check()) {
        //     return response()->json(['error' => 'You must be logged in to comment.'], 403);
        // }
    
        $request->validate([
            'product_id' => 'required|integer',
            'parent_id' => 'nullable|integer',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'comment' => 'required|string',
        ]);
    
        // Create the comment
        $comment = Comment::create([
            'product_id' => $request->input('product_id'),
            'user_id' => Auth::id(), // Set to null if not logged in
            'parent_id' => $request->input('parent_id'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'comment' => $request->input('comment'),
        ]);
    
        // $comment = Comment::create([
        //     'comment' => $request->comment,
        //     'movie_id' => $request->movie_id,
        //     'user_id' => auth()->id(),
        // ]);
    
        return response()->json(['comment' => $comment->load('user')], 201);
    
        
    }
    
    
}
