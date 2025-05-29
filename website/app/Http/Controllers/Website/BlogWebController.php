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
        $meta = [
            'title' => 'Sociomark Blog | Digital Marketing Insights in UAE',
            'description' => 'Read expert tips, trends, and ideas from Sociomark, a digital marketing agency in UAE, to grow your brand online using SEO, social media, and more.'
        ];

        return view('Frontend/Blog/Blog', compact('firstBlog', 'otherBlogs', 'categories', 'blogs', 'tags', 'meta'));
    }
    public function innerBlog($slug)
    {
        $categories = Category::all();
        // $blog = Blog::findOrFail($slug);
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $blogs = Blog::get();
        $tags = Tag::all();
        return view('Frontend/Blog/InnerBlog', compact('categories', 'blogs', 'blog', 'tags'));
    }
    public function categoryBlog($slug)
    {
        // Find the category by slug
        $category = Category::where('slug', $slug)->firstOrFail();
        $categories = Category::all();
        $tags = Tag::all();
        // Fetch blogs that contain the category name in the JSON field
        $blogs = Blog::whereJsonContains('categories', (string) $category->id)->paginate(10);
        return view('Frontend/Blog/CategoryBlog', compact('categories', 'blogs', 'category', 'tags'));
    }

    public function tagBlog($slug)
    {
        // Find the category by slug
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $categories = Category::all();
        $tags = Tag::all();
        // Fetch blogs that contain the category name in the JSON field
        $blogs = Blog::whereJsonContains('tags', (string) $tag->id)->paginate(10);
        return view('Frontend/Blog/CategoryBlog', compact('categories', 'blogs', 'tag', 'tags'));
    }
}
