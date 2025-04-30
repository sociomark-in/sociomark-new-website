<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Blog;

class ServiceController extends Controller
{
    public $data;
    public function __construct()
    {
        $this->data = [
            'industries' => [
                [
                    'name' => "Education",
                    'id' => "education",
                    'slug' => "education",
                ],
                [
                    'name' => "Healthcare",
                    'id' => "healthcare",
                    'slug' => "healthcare",
                ],
                [
                    'name' => "FMCG",
                    'id' => "fmcg",
                    'slug' => "fmcg",
                ],
                [
                    'name' => "News & Media",
                    'id' => "news-and-media",
                    'slug' => "news-and-media",
                ],
                [
                    'name' => "Real Estate",
                    'id' => "real-estate",
                    'slug' => "real-estate",
                ],
                [
                    'name' => "Logistics",
                    'id' => "logistics",
                    'slug' => "logistics",
                ],
                [
                    'name' => "Fashion & Lifestyle",
                    'id' => "fashion-and-lifestyle",
                    'slug' => "fashion-and-lifestyle",
                ],
                [
                    'name' => "Gaming",
                    'id' => "gaming",
                    'slug' => "gaming",
                ],
                [
                    'name' => "Home & Interior",
                    'id' => "home-and-interior",
                    'slug' => "home-and-interior",
                ],
                [
                    'name' => "Automobile",
                    'id' => "automobile",
                    'slug' => "automobile",
                ],
                [
                    'name' => "Public Sector",
                    'id' => "public-sector",
                    'slug' => "public-sector",
                ],
            ]
        ];
    }

    public function seo()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Services/Seo", compact('blogs'));
    }
    public function website()
    {
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $this->data['clients'] = [
            'news-and-media' => [
                [
                    'logo' => "clients/times.jpg",
                    'name' => "Times Network",
                    'redirect' => [
                        'route' => 'home'
                    ]
                ]
            ]
        ];
        return view("Frontend/Services/Website", compact('blogs'), ['data', $this->data]);
    }
    public function socialMedia()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Services/SocialMedia", compact('blogs'));
    }
    public function digitalMarketing()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Services/digitalMarketing", compact('blogs'));
    }
    public function contentMarketing()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Services/contentMarketing", compact('blogs'));
    }
    public function sem()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Services/sem", compact('blogs'));
    }
    public function photoVideography()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Services/photoVideography", compact('blogs'));
    }
}
