<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    // Example method: Display a listing of the resource.
    public function index()
    {
        $posts = Post::with('category')->get(); 
 
        return view('posts.index', compact('posts'));
    }

    // Example method: Show the form for creating a new resource.
    public function create()
    {
        $categories = Category::all();
 
        return view('posts.create', compact('categories'));
    }

    // Example method: Store a newly created resource in storage.
    public function store(StorePostRequest $request) 
    {
        // $request->validate([ 
        //     'title' => ['required'],
        //     'text' => ['required'],
        //     'category_id' => ['required'],
        // ]); 

        // Post::create([
        //     'title' => $request->input('title'),
        //     'text' => $request->input('text'),
        //     'category_id' => $request->input('category_id'),
        // ]);
        Post::create($request->validated()); 
        return redirect()->route('posts.index');
    }
    // Example method: Display the specified resource.
    public function show(Post $post) 
    {
        // $post = Post::find($postId); 
 
        return view('post', compact('post'));
    }

    // Example method: Show the form for editing the specified resource.
    public function edit(Post $post)
    {
        $categories = Category::all();
 
        return view('posts.edit', compact('post', 'categories'));
    }

    // Example method: Update the specified resource in storage.
    public function update(Request $request, Post $post)
    {
        $post->update([
            'title' => $request->input('title'),
            'text' => $request->input('text'),
            'category_id' => $request->input('category_id'),
        ]);
 
        return redirect()->route('posts.index');
    }

    // Example method: Remove the specified resource from storage.
    public function destroy(Post $post)
    {
        $post->delete();
 
        return redirect()->route('posts.index');
    }
    // public function show($postId)
    // {
 
    // }
} 