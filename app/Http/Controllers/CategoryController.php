<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Example method: Display a listing of the resource.
    public function index()
    {
        // return view('categories.index'); // Example: Load a view
        return 'List of categories'; // Example: Return a simple string
    }

    // Example method: Show the form for creating a new resource.
    public function create()
    {
        // return view('categories.create');
    }

    // Example method: Store a newly created resource in storage.
    public function store(Request $request)
    {
        // Logic to store a new category
    }

    // Example method: Display the specified resource.
    public function show(string $id)
    {
        // return view('categories.show', ['id' => $id]);
    }

    // Example method: Show the form for editing the specified resource.
    public function edit(string $id)
    {
        // return view('categories.edit', ['id' => $id]);
    }

    // Example method: Update the specified resource in storage.
    public function update(Request $request, string $id)
    {
        // Logic to update a category
    }

    // Example method: Remove the specified resource from storage.
    public function destroy(string $id)
    {
        // Logic to delete a category
    }
} 