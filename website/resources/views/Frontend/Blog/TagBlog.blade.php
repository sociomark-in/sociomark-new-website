@extends('Frontend.layout.blogapp')
@section('custome-style')
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
        padding: 20px;
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

    #Blog_section .widget_categories a:hover,
    #Blog_section .tagcloud a:hover,
    #Blog_Section .widget_categories a.active,
    #Blog_section .tagcloud a:active {
        background-color: #106c97 !important;
        color: white !important;
    }

    .widget_categories a:hover,
    .widget_categories a.active,
    .tagcloud a:hover,
    .tagcloud a:active {
        background-color: #106c97 !important;
        color: white !important;
    }

    .recent-post .media-img img {
        object-fit: cover !important;
    }

    .blog-img {
        width: 400px;
        height: 230px;
    }

    .blog-single {
        margin-right: 0px !important;
    }

    #Blog_Section .box-blog img {
        object-fit: contain !important;
    }
</style>

@endsection

@section('content')


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
                    <div class="row">

                        @foreach($blogChunk as $blog)
                        @if ($blog->status == 'active')
                        <div class="col-md-6" data-category="{{ implode(', ', $blog->category_names) ?: 'No Category' }}">

                            <div class="box-blog th-blog blog-single has-post-thumbnail">
                                <div class="blog-img box-blog">
                                    <a href="{{ route('blog-inner', ['slug' => $blog->slug]) }}">
                                        <img src="{{ url('storage/app/public/' . ($blog->images[0] ?? 'default.jpg')) }}" alt="Blog Image" class="w-100 h-100 object-fit-cover">
                                    </a>
                                </div>
                                <div class="blog-content content-padding">
                                    <div class="blog-meta">
                                        <a href="#"><i class="fa-light fa-calendar"></i> {{ $blog->created_at ? $blog->created_at->format('F d, Y') : 'Unpublished' }}</a>
                                        <!-- <a href="#"><i class="fa-regular fa-clock"></i> 08 min read</a> -->
                                        <a href="#"><i class="fa-light fa-tags"></i> {{ implode(', ', $blog->category_names) ?: 'No Category' }}</a>
                                    </div>
                                    <h3 class="blog-title blog-title-text"><a href="{{ route('blog-inner', ['slug' => $blog->slug]) }}">{{ $blog->blog_name }}</a></h3>
                                    <p class="blog-text">{{ Str::limit(strip_tags($blog->content), 100) }}</p>
                                    <a href="{{ route('blog-inner', ['slug' => $blog->slug]) }}" class="th-btn black-border th-icon th-radius">Read More<i class="fa-solid fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>

                        </div>
                        @endif
                        @endforeach

                    </div>
                    <div class="th-pagination">
                        <ul>
                            {{-- Previous Page Link --}}
                            @if ($blogs->onFirstPage())
                            <li class="disabled"><span>«</span></li>
                            @else
                            <li><a href="{{ $blogs->previousPageUrl() }}" rel="prev">«</a></li>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                            @if ($page == $blogs->currentPage())
                            <li class="active"><span>{{ $page }}</span></li>
                            @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($blogs->hasMorePages())
                            <li><a href="{{ $blogs->nextPageUrl() }}" rel="next">»</a></li>
                            @else
                            <li class="disabled"><span>»</span></li>
                            @endif
                        </ul>
                    </div>

                </div>
                <div class="col-xxl-4 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="box widget widget_categories">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li><a href="{{ route('blog') }}" class="category-filter" data-category="all">All Categories</a></li>
                                @foreach ($categories as $category)
                                <li><a href="{{ route('categoryBlog', ['slug' => $category->slug]) }}">{{ $category->name }}</a>" class="category-filter">{{ $category->category_name }}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="widget box">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                @foreach ($blogs->take(3) as $blog)
                                @if ($blog->status == 'active')
                                <div class="recent-post">
                                    <div class="media-img recent_blog_img">
                                        <a href="{{ route('blog-inner', ['slug' => $blog->slug]) }}">
                                            <img src="{{ url('storage/app/public/' . ($blog->images[0] ?? 'default.jpg')) }}" alt="Blog Image" class="w-100 h-100 object-fit-cover">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="{{ route('blog-inner', ['slug' => $blog->slug]) }}">
                                                <i class="fa-sharp fa-solid fa-calendar-days"></i>
                                                {{ $blog->created_at ? $blog->created_at->format('F d, Y') : 'Unpublished' }}
                                            </a>
                                        </div>
                                        <h4 class="post-title recent_post_title">
                                            <a class="text-inherit" href="{{ route('blog-inner', ['slug' => $blog->slug]) }}">
                                                {{ $blog->blog_name }}
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="box widget widget_tag_cloud   ">
                            <h3 class="widget_title">Popular Tags</h3>
                            <div class="tagcloud">
                                @foreach ($tags->take(6) as $tag)
                                <a href="{{ route('tagBlog', ['slug' => $tag->slug]) }}">{{ $tag->name }}</a>
                                @endforeach

                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section><!--============================== -->

</main>

@endsection