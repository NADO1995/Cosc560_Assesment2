<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->get();

        return response()->json($posts);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:50',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'is_active' => 'required|in:Yes,No',
        ]);

        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => $request->user()->id,
            'category_id' => $request->category_id,
            'is_active' => $request->is_active,
        ]);

        return response()->json($post, 201);
    }

    public function show(string $id)
    {
        $post = Post::with('category')->findOrFail($id);

        return response()->json($post);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|max:50',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'is_active' => 'required|in:Yes,No',
        ]);

        $post = Post::findOrFail($id);

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'is_active' => $request->is_active,
        ]);

        return response()->json($post);
    }

    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        return response()->json([
            'message' => 'Post deleted successfully'
        ]);
    }
}