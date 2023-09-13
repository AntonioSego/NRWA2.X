<?php

namespace App\Http\Controllers\fetch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // Retrieve all categories
public function index()
{
    $categories = Category::all();
    return response()->json($categories);
}

// Store a new category
public function store(Request $request)
{
    $category = new Category;
    $category->category_name = $request->category_name;
    $category->category_active = $request->category_active;
    $category->category_status = $request->category_status;
    $category->save();
    return response()->json($category);
}

// Retrieve a specific category
public function show(Category $category)
{
    return response()->json($category);
}

// Update an existing category
public function update(Request $request, Category $category)
{
    $category->name = $request->name;
    $category->save();
    return response()->json($category);
}

// Delete a category
public function destroy(Category $category)
{
    $category->delete();
    return response()->json(['message' => 'Category deleted successfully']);
}

}
