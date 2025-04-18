<section class="th-blog-wrapper space-top space-extra-bottom" id="about-sec5">
        <div class="container">
            <div class="title-area text-center mb-25">
                <h2 class="fw-bold sec-title my-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                    From The Blog: Blogs worth binging on. <span class="text-blue"> Dive in!</span>
                </h2>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($blogs as $blog)
                    <div class="swiper-slide">
                        <div class="box-blog th-blog blog-single has-post-thumbnail">
                            <div class="blog-img box-blog">
                                <a href="{{ route('blog-inner', ['slug' => $blog->slug]) }}">
                                    <img src="{{ url('storage/app/public/' . ($blog->images[0] ?? 'default.jpg')) }}"
                                        alt="Blog Image" width="100%"
                                        style="height: 270px; object-fit: cover; margin-right: 5px;">
                                </a>
                            </div>
                            <div class="blog-content content-padding">
                                <div class="blog-meta">
                                    <a href="#"><i class="fa-light fa-calendar"></i>
                                        {{ $blog->created_at ? $blog->created_at->format('F d, Y') : 'Unpublished' }}</a>
                                    <a href="#"><i class="fa-light fa-tags"></i>
                                        {{ implode(', ', $blog->getCategoryNames()) ?? 'No Category' }}</a>
                                </div>
                                <h3 class="blog-title blog-title-text">
                                    <a href="{{ route('blog-inner', ['slug' => $blog->slug]) }}">
                                        {{ Str::limit($blog->blog_name, 20) }}
                                    </a>
                                </h3>

                                <p class="blog-text">{{ Str::limit(strip_tags($blog->content), 80) }}</p>
                                <a href="{{ route('blog-inner', ['slug' => $blog->slug]) }}"
                                    class="th-btn black-border th-icon th-radius">
                                    Read More <i class="fa-regular fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>