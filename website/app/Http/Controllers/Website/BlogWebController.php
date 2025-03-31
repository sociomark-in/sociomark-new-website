<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogWebController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);

        return view('Frontend/Blog/Blog', compact('firstBlog', 'otherBlogs', 'categories', 'blogs', 'tags'));
    }
    public function innerBlog($id)
    {
        $categories = Category::all();
        $blog = Blog::findOrFail($id);
        $blogs = Blog::get();
        $tags = Tag::all();
        return view('Frontend/Blog/InnerBlog', compact('categories', 'blogs', 'blog', 'tags'));
    }
    public function categoryBlog($id)
    {
        $category = Category::findOrFail($id); // Fetch the category
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::whereJsonContains('categories', (string) $id)->paginate(10); 
        return view('Frontend/Blog/CategoryBlog', compact('categories', 'blogs','category', 'tags'));
    }
    public function tagBlog($id)
    {
        $tag = Tag::findOrFail($id); // Fetch the category
        $categories = Category::all();
        $tags = Tag::all(); 
        $blogs = Blog::whereJsonContains('tags', (string) $id)->paginate(10); 
        return view('Frontend/Blog/TagBlog', compact('categories', 'blogs','tag', 'tags'));
    }
}
