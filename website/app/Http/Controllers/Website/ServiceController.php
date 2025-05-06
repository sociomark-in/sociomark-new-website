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
        $meta = [
            'title' => 'SEO Agency in UAE | Boost Your Rankings with Sociomark',
            'description' => 'Looking for the best SEO company in Dubai? Our SEO experts help your business grow online with proven strategies. Get top rankings and more traffic today!',
            'keywords' => 'SEO Agency in UAE, SEO company in Dubai'
        ];
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Services/Seo", compact('blogs', 'meta'));
    }
    public function website()
    {
        $meta = [
            'title' => 'Website Development Company in UAE | Build Your Online Presence',
            'description' => 'Looking for a top website development agency in Dubai? Our experts build responsive, user-friendly websites that drive conversions and boost online presence.',
            'keywords' => 'Website Development Company in UAE, website development agency in Dubai'
        ];
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
        return view("Frontend/Services/Website", compact('blogs'), 'meta', ['data', $this->data]);
    }
    public function socialMedia()
    {
        $meta = [
            'title' => 'Social Media Marketing Agency in UAE | Grow Your Brand',
            'description' => 'Partner with the top Social Media Marketing Company in Dubai. We create impactful campaigns that drive engagement, reach, and growth for your business.',
            'keywords' => 'Social Media Marketing Agency in UAE, Social Media Marketing Company in Dubai'
        ];
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Services/SocialMedia", compact('blogs' ,'meta'));
    }
    public function digitalMarketing()
    {
        $meta = [
            'title' => 'Leading Digital Marketing Agency in UAE | Grow with Experts',
            'description' => 'Top Digital Marketing Company in Dubai offering SEO, social media, PPC & more. Drive leads, boost sales & grow your brand with proven strategies.',
            'keywords' => 'digital marketing in Dubai, Digital Marketing in UAE '
        ];
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Services/digitalMarketing", compact('blogs', 'meta'));
    }
    public function contentMarketing()
    {
        $meta = [
            'title' => 'Top Content Marketing Agency in UAE | Expert Services',
            'description' => 'Looking for content marketing services in Dubai? Our agency offers tailored content strategies to boost your brand’s visibility and engagement across all platforms.',
            'keywords' => 'Content Marketing Agency in UAE, content marketing services in Dubai'
        ];

        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Services/contentMarketing", compact('blogs', 'meta'));
    }
    public function sem()
    {
        $meta = [
            'title' => 'Performance Marketing Agency in UAE | Get Quality Leads',
            'description' => 'Boost your ROI with the best performance marketing company in Dubai. We deliver data driven strategies to maximize growth and drive measurable success.',
            'keywords' => 'Performance Marketing Agency in UAE, performance marketing company in Dubai'
        ];
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Services/sem", compact('blogs', 'meta'));
    }
    public function photoVideography()
    {
        $meta = [
            'title' => 'Top Photography and Videography Services in UAE | Creative',
            'description' => 'Capture stunning moments with top photography and videography services in Dubai. We create impactful visuals that elevate your brand’s story and engagement.',
            'keywords' => 'Photography and Videography Company in UAE, photography and videography services in Dubai'
        ];
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Services/photoVideography", compact('blogs','meta'));
    }
}
