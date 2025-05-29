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
        // Fetch blogs that contain the category name in the JSON field
        $blogs = Blog::whereJsonContains('categories', (string) $category->id)->paginate(10);
        return view('Frontend/Blog/CategoryBlog', compact('categories', 'blogs', 'category', 'tags', 'meta'));
    }

    public function tagBlog($slug)
    {
        // Find the category by slug
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $categories = Category::all();
        $tags = Tag::all();
        // Fetch blogs that contain the category name in the JSON field
        $blogs = Blog::whereJsonContains('tags', (string) $tag->id)->paginate(10);
        $meta = [
            'title' => 'SEO Strategies & Tips | Sociopedia Blog',
            'description' => 'Master the art of SEO with Sociopedia. Get expert advice, latest trends, and actionable tips to improve your website’s ranking and drive organic traffic.'
        ];
        return view('Frontend/Blog/CategoryBlog', compact('categories', 'blogs', 'tag', 'tags', 'meta'));
    }
}
