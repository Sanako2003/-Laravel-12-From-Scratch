<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    // Example method: Display a listing of the resource.
    public function index()
    {
        $categories = Category::all(); 
 
        return view('categories.index', compact('categories'));
        // return view('categories.index'); // Example: Load a view
        return 'List of categories'; // Example: Return a simple string
    }

    // Example method: Show the form for creating a new resource.
    public function create()
    {
        return view('categories.create'); 
    }

    // Example method: Store a newly created resource in storage.
    public function store(Request $request)
    {
        Category::create([
            'name' => $request->input('name'),
        ]);
 
        return redirect()->route('categories.index');
    }

    // Example method: Display the specified resource.
    public function show(string $id)
    {
        // return view('categories.show', ['id' => $id]);
    }

    // Example method: Show the form for editing the specified resource.
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    // Example method: Update the specified resource in storage.
    public function update(Request $request, Category $category)
    {
        $category->update([
            'name' => $request->input('name'),
        ]);
        return redirect()->route('categories.index'); 
    }

    // Example method: Remove the specified resource from storage.
    public function destroy(Category $category)
    {
        $category->delete();
 
        return redirect()->route('categories.index');
    }
} 