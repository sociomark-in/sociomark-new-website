@extends('Frontend.layout.app')
@section('title', $blog->meta_title ?? 'Default Title')
<!-- @section('author', 'Your Company Name') -->
@section('description', $blog->meta_description)
@section('keywords', $blog->meta_keywords)
@section('robots', 'INDEX,FOLLOW')

@section('content')

<style>
    #Blog_Section .box {
        padding: 28px 20px;
        border-radius: 10px;
    }

    #Blog_Section .box-blog,
    #Blog_Section .box-blog img {
        border-radius: 10px;
        box-shadow: 0px -2px 12px -1px rgba(0, 0, 0, 0.17);
        -webkit-box-shadow: 0px -2px 12px -1px rgba(0, 0, 0, 0.17);
        -moz-box-shadow: 0px -2px 12px -1px rgba(0, 0, 0, 0.17);
        border: none
    }

    #Blog_Section .content-padding {
        padding: 20px;
    }

    #Blog_Section .recent_post_title {
        font-size: 16px;
        line-height: 18px;
    }

    #Blog_Section .content-padding {
        padding: 0px 20px 20px 20px;
    }
    #Blog_Section .category-filter {
        display: grid !important;
    }

    #Blog_Section .blog-title-text {
        font-size: 23px;
        margin-bottom: 6px;
    }

    #Blog_Section .recent_blog_img {
        height: 85px;
        object-fit: cover;
        border-radius: 10px;
    }
</style>

<main>

    <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend-assets/img/bg/breadcumb-bg.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Blog</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-seo-agency.html">Home</a></li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="th-blog-wrapper space-top space-extra-bottom" id="Blog_Section">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-8">
                    <div class="col-md-12" data-category="{{ implode(',', $blog->getCategoryNames()) }}">
                        <div class="blog-content content-padding">
                            <div class="blog-meta">
                                <a href="#"><i class="fa-light fa-calendar"></i> {{ $blog->created_at ? $blog->created_at->format('F d, Y') : 'Unpublished' }}</a>
                                <a href="#"><i class="fa-light fa-tags"></i> {{ implode(', ', $blog->getCategoryNames()) ?? 'No Category' }}</a>
                            </div>
                            <h3 class="blog-title blog-title-text"><a href="">{{ $blog->blog_name }}</a></h3>
                          
                        </div>
                        <div class="box-blog th-blog blog-single has-post-thumbnail">
                            <div class="blog-img box-blog">
                                <a href="">
                                    <img src="{{ url('storage/app/public/' . ($blog->images[0] ?? 'default.jpg')) }}" alt="Blog Image" width="100%" style="height: 270px; object-fit: cover; margin-right: 5px;">
                                </a>
                            </div>
                            <div class="blog-content content-padding">
                            
                            <div class="">{!! $blog->content !!}</div>

                            <!-- <p class="blog-text">{!! nl2br(e($blog->content)) !!}</p> -->

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="box widget widget_categories">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li><a href="{{ route('blog') }}" class="category-filter" data-category="all">All Categories</a></li>
                                @foreach ($categories as $category)
                                <li><a href="{{ route('categoryBlog', $category->id) }}" class="category-filter">{{ $category->category_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="widget box ">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                @foreach ($blogs->take(3) as $blog)
                                <div class="recent-post">
                                    <div class="media-img recent_blog_img">
                                        <a href="blog-details.html">
                                            <img src="{{ url('storage/app/public/' . ($blog->images[0] ?? 'default.jpg')) }}" alt="Blog Image">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fa-sharp fa-solid fa-calendar-days"></i> {{ $blog->created_at ? $blog->created_at->format('F d, Y') : 'Unpublished' }}</a>
                                        </div>
                                        <h4 class="post-title recent_post_title"><a class="text-inherit" href="blog-details.html">{{ $blog->blog_name }}</a></h4>
                                    </div>
                                </div>

                                @endforeach
                            </div>
                        </div>
                        <div class="box widget widget_tag_cloud   ">
                            <h3 class="widget_title">Popular Tags</h3>
                            <div class="tagcloud">
                                @foreach ($tags as $tag)
                                <a href="{{ route('tagBlog', $tag->id) }}">{{ $tag->name }}</a>
                                @endforeach
                                <!-- <a href="blog.html">SEO Marketing</a>
                                <a href="blog.html">Design</a>
                                <a href="blog.html">Marketing</a>
                                <a href="blog.html">Branding</a>
                                <a href="blog.html">Development</a>
                                <a href="blog.html">UI/UX</a> -->
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section><!--============================== -->

</main>

@endsection

