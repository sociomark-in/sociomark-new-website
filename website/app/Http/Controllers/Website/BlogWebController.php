<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogWebController extends Controller
{
// public function index()
// {
//     $categories = Category::all();
//     $blogs = Blog::latest()->paginate(6); // Paginated blog posts
//     $firstBlog = Blog::latest()->first(); // Get the latest blog post
//     // $otherBlogs = Blog::latest()->skip(1)->take(4)->get(); // Get the next two blogs
//     $otherBlogs = Blog::latest()->skip(1)->take(4)->get(); 
//     // ✅ If $firstBlog exists, fetch categories based on stored category IDs
//     if ($firstBlog) {
//         $firstBlog->categoryNames = Category::whereIn('id', $firstBlog->categories ?? [])->pluck('category_name')->toArray();
//     }

//     return view('Frontend/Blog', compact('firstBlog', 'otherBlogs', 'categories', 'blogs'));
// }

public function index()
{
    $categories = Category::all();
    $blogs = Blog::latest()->paginate(6); // Paginate all blogs
    $firstBlog = Blog::latest()->first(); // Get latest blog

    // ✅ Paginate other blogs instead of using `take()`
    $otherBlogs = Blog::where('id', '!=', $firstBlog->id)->paginate(4); 

    return view('Frontend/Blog', compact('firstBlog', 'otherBlogs', 'categories', 'blogs'));
}


}
