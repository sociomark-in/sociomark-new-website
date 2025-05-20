<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    // Show all blogs
    // public function index()
    // {

    //     $blogs = Blog::with('category')->latest()->get();
    //     return view('admin/Pages/Blog/Blogs', compact('blogs'));
    // }
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin/Pages/Blog/Blogs', compact('blogs'));
    }

    // Show form to create blog
    public function create()
    {
        $categories = Category::all(); // Fetch all categories
        $tags = Tag::all(); // Fetch all tags
        return view('admin/Pages/Blog/AddBlog', compact('categories', 'tags'));
    }



    // Store blog
    public function store(Request $request)
    {
        $request->validate([
            'blog_name' => 'required|string|max:255',
            'content' => 'required',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'tags' => 'nullable|array',
            'categories' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate each image
            'status' => 'required|in:active,draft,inactive',
            'display_on_home' => 'boolean',
        ]);

        // Store images
        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('blog_images', 'public');
                $imagePaths[] = $path;
            }
        }

        // Create blog
        Blog::create([
            'blog_name' => $request->blog_name,
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'slug' => Str::slug($request->blog_name),
            'tags' => $request->tags,
            'categories' => $request->categories,
            'images' => $imagePaths,
            'status' => $request->status,
            'display_on_home' => $request->display_on_home ?? false,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }


    // Show blog details
    // public function show(Blog $blog)
    // {
    //     return view('admin/Pages/Blog/EditBlog', compact('blog'));
    // }

    // Show form to edit blog

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = Category::all(); // Assuming you have a Category model
        $tags = Tag::all();
        return view('admin/Pages/Blog/EditBlog', compact('blog', 'categories', 'tags'));
    }


    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'blog_name' => 'required|string|max:255',
            'content' => 'required',
            'status' => 'required|in:draft,active,inactive',
            'tags' => 'nullable|array',
            'categories' => 'nullable|array',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords' => 'nullable|string|max:500',
            'slug' => 'nullable|string|max:255|unique:blogs,slug,' . $id,
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePaths = [];

        // Delete old images if new images are uploaded
        if ($request->hasFile('images')) {
            // Delete old images if they exist
            if (!empty($blog->images)) {
                foreach ($blog->images as $oldImage) {
                    Storage::disk('public')->delete($oldImage); // Delete old images
                }
            }

            // Store new images
            foreach ($request->file('images') as $image) {
                $path = $image->store('blog_images', 'public');
                $imagePaths[] = $path;
            }
        }

        // Update the blog with new data
        $blog->update([
            'blog_name' => $request->blog_name,
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'slug' => Str::slug($request->blog_name),
            'tags' => $request->tags,
            'categories' => $request->categories,
            'images' => $imagePaths, // Store new images if uploaded
            'status' => $request->status,
            'display_on_home' => $request->display_on_home ?? false,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }




    // Delete blog
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully!');
    }
}
