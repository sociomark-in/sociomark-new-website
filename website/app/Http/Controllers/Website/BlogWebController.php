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

        $otherBlogs = Blog::where('status', 'active')
            ->orderBy('created_at', 'desc')
            ->paginate(4);

        // Tell Laravel to generate pretty pagination URLs like /blog/page2
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
        $blogs = Blog::where('status', 'active')
            ->orderBy('created_at', 'desc')->get();

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

        // Get all categories and tags
        $categories = Category::all();
        $tags = Tag::all();
        $otherBlogs = Blog::where('status', 'active')
            ->orderBy('created_at', 'desc')
            ->paginate(4);

        // Tell Laravel to generate pretty pagination URLs like /blog/page2
        $otherBlogs->withPath(url('/blog/page'));
        // Canonical and schema (from DB columns)
        $canonical = $category->canonicals ?: url()->current(); // use fallback
        $blog_schema = $category->blog_schema;

        $meta = [
            'meta_title' => $category->meta_title ?? 'Sociomark',
            'meta_desciption' => $category->meta_description ?? 'Read the latest blog on Sociomark',
        ];

        // Blogs under the selected category
        $blogs = Blog::whereJsonContains('categories', (string) $category->id)->orderBy('created_at', 'desc')->paginate(4);

        // Pass everything to the view
        return view('Frontend.Blog.CategoryBlog', compact(
            'categories',
            'blogs',
            'otherBlogs',
            'category',
            'tags',
            'canonical',
            'blog_schema',
            'meta'
        ));
    }
    public function tagBlog($slug)
    {
        // Find the category by slug
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $categories = Category::all();
        $tags = Tag::all();
        $otherBlogs = Blog::where('status', 'active')
            ->orderBy('created_at', 'desc')
            ->paginate(4);

        //  Tell Laravel to generate pretty pagination URLs like /blog/page2
        $otherBlogs->withPath(url('/blog/page'));
        // Fetch blogs that contain the category name in the JSON field
        $blogs = Blog::whereJsonContains('tags', (string) $tag->id)->orderBy('created_at', 'desc')->paginate(4);
        $meta = [
            'meta_title' => $tag->meta_title ?? 'Sociomark',
            'meta_desciption' => $tag->meta_description ?? 'Read the latest blog on Sociomark',
        ];
        $canonical = $tag->canonicals ?: url()->current();
        $blog_schema = $tag->blog_schema;
        return view('Frontend/Blog/TagBlog', compact('categories', 'blogs', 'tag', 'tags', 'meta', 'otherBlogs'));
    }
}
