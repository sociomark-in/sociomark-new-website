<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Blog;

class ServiceController extends Controller
{
    public function seo(){
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Services/Seo", compact('firstBlog', 'otherBlogs', 'categories', 'blogs', 'tags'));
    }
    public function website(){
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Services/Website", compact('firstBlog', 'otherBlogs', 'categories', 'blogs', 'tags'));
    }
    public function socialMedia(){
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Services/SocialMedia", compact('firstBlog', 'otherBlogs', 'categories', 'blogs', 'tags'));
    }
    public function digitalMarketing(){
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Services/digitalMarketing", compact('firstBlog', 'otherBlogs', 'categories', 'blogs', 'tags'));
    }
    public function contentMarketing(){
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Services/contentMarketing", compact('firstBlog', 'otherBlogs', 'categories', 'blogs', 'tags'));
    }
    public function sem(){
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Services/sem", compact('firstBlog', 'otherBlogs', 'categories', 'blogs', 'tags'));
    }
    public function photoVideography(){
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Services/photoVideography", compact('firstBlog', 'otherBlogs', 'categories', 'blogs', 'tags'));
    }
}