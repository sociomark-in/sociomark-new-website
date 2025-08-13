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
        $locale = app()->getLocale();
        return view('admin/Pages/Blog/Blogs', compact('blogs', 'locale'));
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
        $validated = $request->validate([
            'card_title.en' => 'required|string|max:255',
            'card_title.ar' => 'required|string|max:255',
            'blog_name.en' => 'required|string',
            'blog_name.ar' => 'nullable|string',
            'content.en' => 'required',
            'content.ar' => 'required',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'tags' => 'nullable|array',
            'categories' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:active,draft,inactive',
            'display_on_home' => 'boolean',
            'canonicals' => 'url|nullable',
            'blog_schema' => 'string|nullable',
        ]);


        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('blog_images', 'public');
                $imagePaths[] = $path;
            }
        }

        $blog = Blog::create([
            'card_title' => $validated['card_title'],
            'blog_name' => $validated['blog_name'], // ← this is now ['en' => ..., 'ar' => ...]
            'content' => $validated['content'],
            'meta_title' => $validated['meta_title'],
            'meta_description' => $validated['meta_description'],
            'meta_keywords' => $validated['meta_keywords'],
            'slug' => Str::slug($validated['blog_name']['en']),
            'tags' => $validated['tags'],
            'categories' => $validated['categories'],
            'images' => $imagePaths,
            'status' => $validated['status'],
            'display_on_home' => $validated['display_on_home'] ?? false,
            'canonicals' => $validated['canonicals'],
            'blog_schema' => $validated['blog_schema'],
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = Category::all();
        $tags = Tag::all();
        $locale = app()->getLocale();

        return view('admin/Pages/Blog/EditBlog', compact('blog', 'categories', 'tags', 'locale'));
    }
    // public function edit($id)
    // {
    //     $blog = Blog::with(['categories', 'tags'])->findOrFail($id);
    //     $categories = Category::all();
    //     $tags = Tag::all();
    //     $locale = app()->getLocale();

    //     return view('admin.Pages.Blog.EditBlog', compact('blog', 'categories', 'tags', 'locale'));
    // }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'card_title.en' => 'required|string|max:255',
            'card_title.ar' => 'required|string|max:255',
            'blog_name.en' => 'required|string',
            'blog_name.ar' => 'nullable|string',
            'content.en' => 'required',
            'content.ar' => 'required',
            'status'          => 'required|in:draft,active,inactive',
            'tags'            => 'nullable|array',
            'categories'      => 'nullable|array',
            'meta_title'      => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords'   => 'nullable|string|max:500',
            'slug'            => 'nullable|string|max:255|unique:blogs,slug,' . $id,
            'images.*'        => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'canonicals'      => 'url|nullable',
            'blog_schema'          => 'string|nullable',
        ]);

        // Start building the $data array with all the "always-present" fields:
        $data = [
            'card_title'       => $request->input('card_title'),
            'blog_name'        => $request->input('blog_name'),
            'content'          => $request->input('content'),
            'meta_title'       => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description'),
            'meta_keywords'    => $request->input('meta_keywords'),
            'slug'             => Str::slug($request->input('blog_name.en')),
            'tags'             => $request->input('tags', []),
            'categories'       => $request->input('categories', []),
            'status'           => $request->input('status'),
            'display_on_home'  => (bool) $request->input('display_on_home', false),
            'canonicals'       => $request->input('canonicals'),
            'blog_schema'      => $request->input('blog_schema'),
        ];
        // Only if the user has uploaded new images do we delete old ones and store new
        if ($request->hasFile('images')) {
            // 1) Delete old images from disk (if any)
            if (!empty($blog->images) && is_array($blog->images)) {
                foreach ($blog->images as $oldPath) {
                    Storage::disk('public')->delete($oldPath);
                }
            }

            // 2) Store new ones and overwrite $data['images']
            $newImagePaths = [];
            foreach ($request->file('images') as $image) {
                $newImagePaths[] = $image->store('blog_images', 'public');
            }
            $data['images'] = $newImagePaths;
        }

        // Now update all fields at once
        $blog->update($data);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }
    // Delete blog
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully!');
    }
}
