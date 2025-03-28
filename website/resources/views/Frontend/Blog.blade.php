@extends('Frontend.layout.app')
@section('title', 'Home Page')
@section('author', 'Your Company Name')
@section('description', 'This is a dynamic description for the home page.')
@section('keywords', 'seo, marketing, agency, web design')
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

    #Blog_Section .th-btn {
        padding: 15px 18px;
    }

    #Blog_Section .swiper-slide {
        height: auto;
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
    <!--==============================
    Breadcumb
============================== -->
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
    </div><!--==============================
Blog Area
==============================-->

    <section class="th-blog-wrapper space-top space-extra-bottom" id="Blog_Section">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-8">
                    @if($firstBlog)
                    <div class="box-blog th-blog blog-single has-post-thumbnail">
                        <div class="swiper-slide">
                            <a href="">
                                <img src="{{ url('storage/app/public/' . ($firstBlog->images[0] ?? 'default.jpg')) }}"
                                    width="100%" style="height: 350px; object-fit: cover; margin-right: 5px;"
                                    style="object-fit: cover; margin-right: 5px;"
                                    alt="Blog Image">
                            </a>
                        </div>
                        <div class="blog-content content-padding">
                            <div class="blog-meta">
                                <a href="blog.html">
                                    <i class="fa-light fa-calendar"></i>
                                    {{ $firstBlog->created_at ? $firstBlog->created_at->format('F d, Y') : 'Unpublished' }}
                                </a>

                                <a href="blog.html">
                                    <i class="fa-regular fa-clock"></i> 08 min read
                                </a>
                            </div>
                            <h3 class="blog-title blog-title-text">
                                <a href="">{{ $firstBlog->blog_name }}</a>
                            </h3>
                            <p class="blog-text">{{ Str::limit(strip_tags($firstBlog->content), 100) }}</p>
                            <a href="" class="th-btn black-border th-icon th-radius">
                                Read More<i class="fa-regular fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                    @endif

                    <div class="row">
                        @foreach($otherBlogs->chunk(2) as $blogChunk) <!-- Group blogs in pairs -->
                        @foreach($blogChunk as $blog)
                        <div class="col-6" data-category="{{ implode(',', $blog->getCategoryNames()) }}">
                            <div class="box-blog th-blog blog-single has-post-thumbnail">
                                <div class="blog-img box-blog">
                                    <a href="">
                                    <img src="{{ url('storage/app/public/' . ($blog->images[0] ?? 'default.jpg')) }}" alt="Blog Image"  width="100%" style="height: 270px; object-fit: cover; margin-right: 5px;">

                                       
                                    </a>
                                </div>
                                <div class="blog-content content-padding">
                                    <div class="blog-meta">
                                        <a href="#"><i class="fa-light fa-calendar"></i> {{ $blog->created_at ? $blog->created_at->format('F d, Y') : 'Unpublished' }}</a>
                                        <a href="#"><i class="fa-regular fa-clock"></i> 08 min read</a>
                                        <a href="#"><i class="fa-light fa-tags"></i> {{ implode(', ', $blog->getCategoryNames()) ?? 'No Category' }}</a>
                                    </div>
                                    <h3 class="blog-title blog-title-text"><a href="">{{ $blog->blog_name }}</a></h3>
                                    <p class="blog-text">{{ Str::limit(strip_tags($blog->content), 100) }}</p>
                                    <a href="" class="th-btn black-border th-icon th-radius">Read More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endforeach
                    </div>




                    <div class="th-pagination">
                        <ul>
                            {{-- Previous Page Link --}}
                            @if ($otherBlogs->onFirstPage())
                            <li class="disabled"><span>«</span></li>
                            @else
                            <li><a href="{{ $otherBlogs->previousPageUrl() }}" rel="prev">«</a></li>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($otherBlogs->getUrlRange(1, $otherBlogs->lastPage()) as $page => $url)
                            @if ($page == $otherBlogs->currentPage())
                            <li class="active"><span>{{ $page }}</span></li>
                            @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($otherBlogs->hasMorePages())
                            <li><a href="{{ $otherBlogs->nextPageUrl() }}" rel="next">»</a></li>
                            @else
                            <li class="disabled"><span>»</span></li>
                            @endif
                        </ul>
                    </div>

                </div>
                <div class="col-xxl-4 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="box widget widget_search   ">
                            <form class="search-form">
                                <input type="text" placeholder="Enter Keyword">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="box widget widget_categories">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li><a href="javascript:void(0);" class="category-filter" data-category="all">All Categories</a></li>
                                @foreach ($categories as $category)
                                <li><a href="javascript:void(0);" class="category-filter" data-category="{{ $category->category_name }}">{{ $category->category_name }}</a></li>
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
                                            <a href="blog.html"><i class="fa-sharp fa-solid fa-calendar-days"></i> {{ $firstBlog->created_at ? $firstBlog->created_at->format('F d, Y') : 'Unpublished' }}</a>
                                        </div>
                                        <h4 class="post-title recent_post_title"><a class="text-inherit" href="blog-details.html">{{ $firstBlog->blog_name }}</a></h4>
                                    </div>
                                </div>

                                @endforeach
                            </div>
                        </div>
                        <div class="box widget widget_tag_cloud   ">
                            <h3 class="widget_title">Popular Tags</h3>
                            <div class="tagcloud">
                                <a href="blog.html">SEO Marketing</a>
                                <a href="blog.html">Design</a>
                                <a href="blog.html">Marketing</a>
                                <a href="blog.html">Branding</a>
                                <a href="blog.html">Development</a>
                                <a href="blog.html">UI/UX</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section><!--==============================
Brand Area  
==============================-->

    <div class="brand-sec overflow-hidden space-bottom">
        <div class="container th-container">
            <div class="slider-area text-center">
                <div class="swiper th-slider" id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"476":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"4"},"1400":{"slidesPerView":"6"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <a href="">
                                    <img class="original" src="{{ asset('frontend-assets/img/brand/brand_1_1.svg')}}" alt="Brand Logo">
                                    <img class="gray" src="{{ asset('frontend-assets/img/brand/brand_1_1.svg')}}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <a href="">
                                    <img class="original" src="{{ asset('frontend-assets/img/brand/brand_1_2.svg')}}" alt="Brand Logo">
                                    <img class="gray" src="{{ asset('frontend-assets/img/brand/brand_1_2.svg')}}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <a href="">
                                    <img class="original" src="{{ asset('frontend-assets/img/brand/brand_1_3.svg')}}" alt="Brand Logo">
                                    <img class="gray" src="{{ asset('frontend-assets/img/brand/brand_1_3.svg')}}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <a href="">
                                    <img class="original" src="{{ asset('frontend-assets/img/brand/brand_1_4.svg')}}" alt="Brand Logo">
                                    <img class="gray" src="{{ asset('frontend-assets/img/brand/brand_1_4.svg')}}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <a href="">
                                    <img class="original" src="{{ asset('frontend-assets/img/brand/brand_1_5.svg')}}" alt="Brand Logo">
                                    <img class="gray" src="{{ asset('frontend-assets/img/brand/brand_1_5.svg')}}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <a href="">
                                    <img class="original" src="{{ asset('frontend-assets/img/brand/brand_1_6.svg')}}" alt="Brand Logo">
                                    <img class="gray" src="{{ asset('frontend-assets/img/brand/brand_1_6.svg')}}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <a href="">
                                    <img class="original" src="{{ asset('frontend-assets/img/brand/brand_1_1.svg')}}" alt="Brand Logo">
                                    <img class="gray" src="{{ asset('frontend-assets/img/brand/brand_1_1.svg')}}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <a href="">
                                    <img class="original" src="{{ asset('frontend-assets/img/brand/brand_1_2.svg')}}" alt="Brand Logo">
                                    <img class="gray" src="{{ asset('frontend-assets/img/brand/brand_1_2.svg')}}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <a href="">
                                    <img class="original" src="{{ asset('frontend-assets/img/brand/brand_1_3.svg')}}" alt="Brand Logo">
                                    <img class="gray" src="{{ asset('frontend-assets/img/brand/brand_1_3.svg')}}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <a href="">
                                    <img class="original" src="{{ asset('frontend-assets/img/brand/brand_1_4.svg')}}" alt="Brand Logo">
                                    <img class="gray" src="{{ asset('frontend-assets/img/brand/brand_1_4.svg')}}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <a href="">
                                    <img class="original" src="{{ asset('frontend-assets/img/brand/brand_1_5.svg')}}" alt="Brand Logo">
                                    <img class="gray" src="{{ asset('frontend-assets/img/brand/brand_1_5.svg')}}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <a href="">
                                    <img class="original" src="{{ asset('frontend-assets/img/brand/brand_1_6.svg')}}" alt="Brand Logo">
                                    <img class="gray" src="{{ asset('frontend-assets/img/brand/brand_1_6.svg')}}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>

@endsection

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const categoryLinks = document.querySelectorAll(".category-filter");
        const blogItems = document.querySelectorAll("[data-category]");

        // Ensure all category links are visible
        categoryLinks.forEach(link => {
            link.style.display = "inline-block"; // Ensure visibility
        });

        // Category filtering logic
        categoryLinks.forEach(link => {
            link.addEventListener("click", function() {
                const selectedCategory = this.getAttribute("data-category");

                blogItems.forEach(blog => {
                    const categories = blog.getAttribute("data-category").split(",");

                    if (selectedCategory === "all" || categories.includes(selectedCategory)) {
                        blog.style.display = ""; // Show matching posts
                    } else {
                        blog.style.display = "none"; // Hide non-matching posts
                    }
                });

                // Remove active class from all category links
                categoryLinks.forEach(cat => cat.classList.remove("active"));

                // Add active class to the clicked category
                this.classList.add("active");
            });
        });

        // Make sure the category list is always visible
        const categoryWidget = document.querySelector(".widget_categories");
        if (categoryWidget) {
            categoryWidget.style.display = "block"; // Ensure visibility
        }

        // Trigger "All Categories" by default
        const defaultCategory = document.querySelector('.category-filter[data-category="all"]');
        if (defaultCategory) {
            defaultCategory.click();
        }
    });
</script>