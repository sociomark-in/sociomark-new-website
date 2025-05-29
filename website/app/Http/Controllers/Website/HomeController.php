<?php

namespace App\Http\Controllers\Website; // Correct namespace

use App\Http\Controllers\Controller; // Make sure you extend the base Controller
use App\Models\Tag;
use App\Models\PR;
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
            'title' => 'Leading Digital Marketing Agency in UAE | Sociomark​',
            'description' => "Sociomark is a top-rated digital marketing agency in Dubai, offering SEO, social media, and branding solutions to grow your business online effectively.",
            'keywords' => 'Digital Marketing Agency in UAE, digital marketing company in Dubai'
        ];
        $categories = Category::all();
        $tags = Tag::all();
        $prs = PR::latest()->get();
        $blogs = Blog::all(); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Home2", compact('firstBlog', 'otherBlogs', 'categories', 'blogs', 'tags', 'meta', 'prs'));
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
            'title' => 'Creative Marketing Agency in Dubai | Sociomark​​',
            'description' => "Learn about Sociomark, a trusted digital marketing company in UAE, offering innovative strategies to grow your online presence and drive real results."
        ];
        return view("Frontend/AboutUs", compact('meta'));
    }
    public function Services()
    {
        $meta = [
            'title' => 'Digital Marketing Services Dubai | SEO, PPC, SMM | Sociomark​​',
            'description' => "Explore Digital Marketing Services in Dubai with Sociomark. We offer SEO, Social Media, PPC & more to grow your brand online."
        ];
        return view("Frontend/Services", compact('meta'));
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
