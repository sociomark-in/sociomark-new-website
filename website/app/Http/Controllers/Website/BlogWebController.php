<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class BlogWebController extends Controller
{
    // public function index(Request $request)
    // {
    //     $categories = Category::all();
    //     $tags = Tag::all();
    //     $blogs = Blog::all(); // Paginate all blogs
    //     $firstBlog = Blog::latest()->first(); // Get latest blog

    //     // ✅ Paginate other blogs instead of using `take()`
    //     $otherBlogs = Blog::paginate(4);
    //     $meta = [
    //         'title' => 'Sociomark Blog | Digital Marketing Insights in UAE',
    //         'description' => 'Read expert tips, trends, and ideas from Sociomark, a digital marketing agency in UAE, to grow your brand online using SEO, social media, and more.'
    //     ];
    //     if (isset($request->input('page'))) {
    //         $page = $request->input('page');
    //         $meta['title'] = 'Sociomark Blog | Digital Marketing Insights in UAE - Page ' . $page;
    //     }

    //     return view('Frontend/Blog/Blog', compact('firstBlog', 'otherBlogs', 'categories', 'blogs', 'tags', 'meta'));
    // }
    public function index(Request $request, $page = 1)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::all();
        $firstBlog = Blog::latest()->first();

        // Set the current page manually
        Paginator::currentPageResolver(function () use ($page) {
            return $page;
        });

        $otherBlogs = Blog::where('status', 'active')->paginate(4);

        // 🔽 Tell Laravel to generate pretty pagination URLs like /blog/page2
        $otherBlogs->withPath(url('/blog/page'));

        $meta = [
            'title' => 'Sociomark Blog | Digital Marketing Insights in UAE',
            'description' => 'Read expert tips, trends, and ideas from Sociomark, a digital marketing agency in UAE, to grow your brand online using SEO, social media, and more.'
        ];

        // if ($page > 1) {
        //     $meta['title'] .= ' - Page ' . $page;
        // }

        return view('Frontend/Blog/Blog', compact('firstBlog', 'otherBlogs', 'categories', 'blogs', 'tags', 'meta'));
    }
    public function innerBlog($slug)
    {
        $categories = Category::all();
        // $blog = Blog::findOrFail($slug);
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $blogs = Blog::get();
        $tags = Tag::all();
        // Extract meta data from the blog
        $meta = [
            'meta_title' => $blog->meta_title ?? $blog->blog_name ?? 'Sociomark',
            'meta_desciption' => $blog->meta_description ?? 'Read the latest blog on Sociomark',
        ];
        $canonical = $blog->canonicals ?: url()->current();
        $blog_schema = $blog->blog_schema;
        return view('Frontend/Blog/InnerBlog', compact('categories', 'blogs', 'blog', 'tags', 'meta', 'canonical', 'blog_schema'));
    }
    public function categoryBlog($slug)
    {
        // Find the category by slug
        $category = Category::where('slug', $slug)->firstOrFail();
        $categories = Category::all();
        $tags = Tag::all();
        if ($slug === 'seo') {
            $meta = [
                'title' => 'Welcome to Sociopedia: Your Hub for Digital Marketing Insights',
                'description' => 'Explore the latest trends, tips, and strategies in digital marketing with Sociopedia your go-to blog for expert advice, creative ideas, and industry updates.'
            ];
        } elseif ($slug === 'website') {
            $meta = [
                'title' => 'Web Development Tips | Sociopedia Blog',
                'description' => 'Explore effective web development marketing strategies on Sociopedia. Learn how to boost your site’s visibility, grow your online presence and more.'
            ];
        } elseif ($slug === 'Influncer') {
            $meta = [
                'title' => 'Influencer Marketing Insights | Sociopedia Blog',
                'description' => 'Dive into the world of influencer marketing with Sociopedia. Discover strategies, trends, and tips to leverage influencers for your brand growth and engagement'
            ];
        } elseif ($slug === 'digital') {
            $meta = [
                'title' => 'Digital Marketing Trends & Tips | Sociopedia Blog',
                'description' => 'Stay ahead with Sociopedia’s expert insights on digital marketing. Discover the latest trends, strategies, and tools to grow your brand online effectively.'
            ];
        } elseif ($slug === 'Social-Media') {
            $meta = [
                'title' => 'Social Media Marketing Insights | Sociopedia Blog',
                'description' => 'Unlock the power of social media with Sociopedia. Explore proven strategies, tips, and trends to boost engagement and grow your brand’s online presence.'
            ];
        }
        $canonical = $category->canonicals ?: url()->current();
        $blog_schema = $category->blog_schema;
        // Fetch blogs that contain the category name in the JSON field
        $blogs = Blog::whereJsonContains('categories', (string) $category->id)->paginate(10);
        return view('Frontend/Blog/CategoryBlog', compact('categories', 'blogs', 'category', 'tags', 'meta','canonical', 'blog_schema'));
    }

    public function tagBlog($slug)
    {
        // Find the category by slug
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $categories = Category::all();
        $tags = Tag::all();
        // Fetch blogs that contain the category name in the JSON field
        $blogs = Blog::whereJsonContains('tags', (string) $tag->id)->paginate(2);
        $meta = [
            'title' => 'SEO Strategies & Tips | Sociopedia Blog',
            'description' => 'Master the art of SEO with Sociopedia. Get expert advice, latest trends, and actionable tips to improve your website’s ranking and drive organic traffic.'
        ];
        $canonical = $tag->canonicals ?: url()->current();
        $blog_schema = $tag->blog_schema;
        
        return view('Frontend/Blog/CategoryBlog', compact('categories', 'blogs', 'tag', 'tags', 'meta','canonical', 'blog_schema'));
    }
}
