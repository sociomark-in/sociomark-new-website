<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/Pages/Category/AddCategory');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|unique:categories,category_name|max:255',
            'description' => 'nullable|string',
            'canonicals' => 'url|nullable',
            'blog_schema' => 'string|nullable',
        ]);

        Category::create([
            'category_name' => $request->category_name,
            'description' => $request->description,
            'slug' => Str::slug($request->category_name),
            'canonicals' => $request->canonicals,
            'blog_schema' => $request->blog_schema,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Category created successfully.');
    }

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'category_name' => 'required|max:255|unique:categories,category_name,' . $category->id,
            'description' => 'nullable|string',
            'canonicals' => 'url|nullable',
            'blog_schema' => 'string|nullable',
        ]);

        $category->update([
            'category_name' => $request->category_name,
            'description' => $request->description,
            'slug' => Str::slug($request->category_name),
            'canonicals' => $request->canonicals,
            'blog_schema' => $request->blog_schema,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
