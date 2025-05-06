<?php

namespace App\Http\Controllers\Website; // Correct namespace

use App\Http\Controllers\Controller; // Make sure you extend the base Controller
use App\Models\Tag;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home2()
    {
        return view("Frontend/Home");
    }
    public function Home()
    {
        $meta = [
            'title' => 'Digital Marketing Agency in UAE | Boost Your Business​',
            'description' => "We are an award-winning digital marketing company in Dubai, specializing in creative, purpose-driven strategies that highlight your brand's unique personality.",
            'keywords' => 'Digital Marketing Agency in UAE, digital marketing company in Dubai'
        ];
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Home2", compact('firstBlog', 'otherBlogs', 'categories', 'blogs', 'tags', 'meta'));
    }
    public function HomeNew()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/HomeNew", compact('firstBlog', 'otherBlogs', 'categories', 'blogs', 'tags'));
    }

    public function myHome()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/myHome", compact('firstBlog', 'otherBlogs', 'categories', 'blogs', 'tags'));
    }
    public function About()
    {
        $meta = [
            'title' => 'About Us - Digital Marketing Company in Dubai​​',
            'description' => "Learn about the story behind SocioMark, a leading digital marketing company in Dubai. Learn about our mission, values, and the team driving your brand's success."
        ];
        return view("Frontend/AboutUs", compact('meta'));
    }
    public function Services()
    {
        return view("Frontend/Services");
    }
    public function careers()
    {
        return view("Frontend/careers");
    }
    public function privacyAndPolicy()
    {
        return view("Frontend/privacyAndPolicy");
    }
    public function termsAndcondition()
    {
        return view("Frontend/termsAndcondition");
    }
    public function thankYou()
    {
        return view("Frontend/thankYou");
    }
}
