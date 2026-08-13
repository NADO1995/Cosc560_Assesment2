<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['user', 'category'])->get();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('posts.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:50',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'is_active' => 'required|in:Yes,No',
        ]);

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => auth()->id(),
            'category_id' => $request->category_id,
            'is_active' => $request->is_active,
        ]);

        return redirect()->route('posts.index')
            ->with('success', 'Post created successfully.');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();

        return view('posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|max:50',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
            'is_active' => 'required|in:Yes,No',
        ]);

        $post->update([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
            'is_active' => $request->is_active,
        ]);

        return redirect()->route('posts.index')
            ->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Post deleted successfully.');
    }
}