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
        $categories = Category::all();
        $locale = app()->getLocale();
        return view('admin/Pages/Category/listCat', compact('categories', 'locale'));
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
        $validated =   $request->validate([
            'category_name.en' => 'required|unique:categories,category_name|max:255',
            'category_name.ar' => 'required|unique:categories,category_name|max:255',
            'description' => 'nullable|string',
            'slug' => 'nullable|string',
            'canonicals' => 'url|nullable',
            'blog_schema' => 'string|nullable',
            'meta_title'      => 'nullable|string',
            'meta_description' => 'nullable|string',
        ]);

        $category =  Category::create([
            'category_name' => $validated['category_name'],
            'description' => $validated['description'],
            'slug' => $validated['slug'],
            'canonicals' => $validated['canonicals'],
            'blog_schema' => $validated['blog_schema'],
            'meta_title' => $validated['meta_title'],
            'meta_description' => $validated['meta_description'],
        ]);

        return redirect()->route('blogs.index')->with('success', 'Category created successfully.');
    }

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    public function edit($id)
    {
        $category = category::findOrFail($id);
        return view('admin/Pages/Category/editCat', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'category_name.en' => 'required|max:255|unique:categories,category_name->en,' . $category->id,
            'category_name.ar' => 'required|max:255|unique:categories,category_name->ar,' . $category->id,
            'description' => 'nullable|string',
            'canonicals' => 'url|nullable',
            'blog_schema' => 'string|nullable',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
        ]);

        $category->update([
            'category_name' => $validated['category_name'], // 
            'description' => $validated['description'] ?? null,
            'slug' => Str::slug($validated['category_name']['en']), // 
            'canonicals' => $validated['canonicals'] ?? null,
            'blog_schema' => $validated['blog_schema'] ?? null,
            'meta_title' => $validated['meta_title'] ?? null,
            'meta_description' => $validated['meta_description'] ?? null,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }


    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
