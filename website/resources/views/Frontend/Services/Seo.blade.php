@extends('Frontend.layout.app')
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<style>
    #seo-service #about-sec3,
    #seo-service #about-sec5 {
        background-color: #F5F5F5;
    }

    #seo-service #about-sec {
        padding: 8px;
    }

    #seo-service .about-area2 .imgBox {
        top: 40px;
    }

    #seo-service .about-area2 .sec-title,
    #seo-service #about-sec2 .sec-title,
    #seo-service #about-sec3 .sec-title,
    #portfolio-sec .sec-title,
    #seo-service #about-sec5 .sec-title,
    #seo-service #about-sec6 .sec-title {
        font-size: 35px;
        line-height: 42px;
    }

    #seo-service .about-area2 .sec-title {
        width: 67rem;
    }

    #seo-service .about-area2 .sec-para,
    #seo-service #about-sec2 .sec-para,
    #seo-service #about-sec3 .sec-para,
    #seo-service #about-sec6 .sec-para {
        line-height: 28px;
        font-size: 20px;
        letter-spacing: .10px;
        color: #797E88;
    }

    @media (max-width: 576px) {
        #seo-service .about-area2 .sec-title {
            width: auto;
            line-height: 26px;
        }
    }

    /* section 2 */
    #seo-service #about-sec2 {
        /* background-color: #F5F5F5; */
        background: radial-gradient(ellipse at top, #fff, transparent), radial-gradient(40% 40% at 50% 25%, #75b4d1, transparent), radial-gradient(ellipse at bottom, #fff, transparent);
    }

    #seo-service #about-sec4 .sec-title {
        color: white;
    }

    #seo-service #about-sec2 .box-title {
        color: #121212;
    }

    #seo-service #about-sec2 .box-text {
        color: #797E88;
    }

    #seo-service #about-sec2 {
        padding: 6rem 0 6rem 0;
    }

    /* section 2 end */

    /* section3 */
    #seo-service #about-sec3 .box-title {
        line-height: 32px;
        font-size: 25px;
        letter-spacing: .10px;
        font-weight: 500;
        padding-left: 0px;
    }

    /* #seo-service #about-sec3 .sec-para{
        font-weight: 400;
    } */
    #seo-service #about-sec3 .accordion-item2 {
        max-width: 510px;
    }

    #seo-service #about-sec3 .according-list .according-img {
        max-width: 700px;
    }

    #seo-service #about-sec3 .accordion-item2 {
        padding-bottom: 5px;
    }

    #seo-service #about-sec3 .accordion-item2 .box-title:before {
        width: 0px;

    }

    #seo-service #about-sec3 .according-list.hover-item.item-active .accordion-item2 {
        border-bottom-color: #106c97;
    }

    /* section3 end */

    /* gallary :start */

    #portfolio-sec {
        padding-top: 20px;
    }

    #seo-service .filter-menu .tab-btn:hover,
    #seo-service .garally .filter-menu .tab-btn.active {
        padding: 10px 25px !important;
        font-weight: 500;
        border-bottom: 3px solid #106c97;
        background: transparent;
        border-radius: 0px;
        border-left: none;
        color: #106c97;
        border-bottom: 4px solid #106c97;
    }

    #seo-service .garally .filter-menu .tab-btn {
        padding: 10px 11px !important;
        border-radius: 0px;
        outline: none;
        border-bottom: 1px solid black;
        line-height: 28px;
        font-size: 20px;
        letter-spacing: .10px;
    }

    .garally .filter-menu .tab-btn:not(:last-child):before {
        height: 0px;
    }

    .garally .garally-row-height {
        height: 748px;
    }

    #portfolio-sec .global-img:before,
    #portfolio-sec .project-item:before {
        content: none;
        width: 0;
        height: 0;
    }

    #portfolio-sec .project-item {
        border-radius: 10px;
    }

    #portfolio-sec .project-item {
        box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
        -webkit-box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
        -moz-box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
        transform: none;
    }

    #portfolio-sec .global-img:hover img {
        transform: none;
        transition: none;
    }


    /* gallary end */
    /* blog */
    #seo-service #about-sec5 .box {
        padding: 28px 20px;
        border-radius: 10px;
    }

    #seo-service #about-sec5 .box-blog,
    #seo-service #about-sec5 .box-blog img {
        border-radius: 10px;
        box-shadow: 0px -2px 12px -1px rgba(0, 0, 0, 0.17);
        -webkit-box-shadow: 0px -2px 12px -1px rgba(0, 0, 0, 0.17);
        -moz-box-shadow: 0px -2px 12px -1px rgba(0, 0, 0, 0.17);
        border: none
    }

    #seo-service #about-sec5 .content-padding {
        padding: 20px;
    }

    #seo-service #about-sec5 .recent_post_title {
        font-size: 16px;
        line-height: 18px;
    }

    #seo-service #about-sec5 .th-btn {
        padding: 15px 18px;
    }

    #seo-service #about-sec5 .swiper-slide {
        height: auto;
    }

    #seo-service #about-sec5 .category-filter {
        display: grid !important;
    }

    #seo-service #about-sec5 .blog-title-text {
        font-size: 23px;
        margin-bottom: 6px;
    }

    .swiper-pagination {
        bottom: -30px;
        /* Position at the bottom */
    }

    .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background-color: #ccc;
        opacity: 1;
    }

    .swiper-pagination-bullet-active {
        background-color: #106c97;
    }

    .swiper-pagination-bullets .swiper-pagination-bullet {
        width: 15px !important;
        height: 15px !important;
    }

    .swiper-pagination-bullets .swiper-pagination-bullet.swiper-pagination-bullet-active {
        background-color: #106c97 !important;
    }

    .swiper-wrapper {
        height: auto !important;
    }

    .swiper-pagination-bullets {
        margin: 0px !important;
    }

    /* blog end */

    /* faq */
    #seo-service #about-sec6 .accordion-card {
        border-radius: 10px;
        box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
        -webkit-box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
        -moz-box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
        border: none;
    }

    /* end faq */
</style>
@section('content')
<main id="seo-service">
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend-assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Seo</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-seo-agency.html">Home</a></li>
                    <li>Seo</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="about-area2 mb-md-5 mt-md-5 mt-5 md-5 overflow-hidden overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row align-items-end">
                <!-- <div class="col-lg-4 mb-30 mb-xl-0">
                    <div class="imgBox img-box2 me-xl-4 mt-lg-60">
                        <div class="img1 th-anim mb-35">
                            <img src="{{ asset('frontend-assets/img/normal/about_2_1.png') }}" alt="About">
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-12 d-flex justify-content-center align-items-center flex-column">
                    <div class="title-area mb-25 mt-n1">
                        <h2 class="sec-title text-center">Expand Your Global Reach with Our Comprehensive International SEO Solutions</h2>
                    </div>
                    <p class="mt-n2 mb-25 sec-para text-center">Established in 1995, Saor has been a leading force in the digital landscape for
                        over two decades. We're a passionate team of designers, developers, and strategists driven by a
                        shared vision. Our digital agency combines innovation, strategy, and expertise to fuel your online
                        success. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, animi voluptatem esse quis tenetur, quidem harum ipsa tempore laborum reprehenderit nam! Voluptatum, hic minima temporibus vero pariatur accusamus ipsam qui?
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="choose-area overflow-hidden mb-md-3 mt-md-3 mt-0 md-0" id="about-sec2" data-mask-src="{{ asset('frontend-assets/img/bg/choose_bg_3.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="title-area mb-20">
                        <span class="sub-title style1">Benefits You Can't Ignore</span>
                        <h2 class="sec-title ">The Powerful Benefits of Saor SEO</h2>
                    </div>
                    <p class="sec-para mb-35 ">In today's digital landscape, a strong online presence is critical for business success. But simply having a website isn't enough.</p>
                    <div class="choose-feature-wrap">
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/icon/choose_feature_1_1.svg') }}" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Increased Website Traffic</h3>
                                <p class="box-text">Our SEO strategies will attract more qualified visitors to your website, bringing you closer.</p>
                            </div>
                        </div>
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/icon/choose_feature_1_2.svg') }}" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Enhanced Brand Awareness</h3>
                                <p class="box-text">Increased website traffic and the improved rankings naturally lead to greater brand awareness.</p>
                            </div>
                        </div>
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/icon/choose_feature_1_3.svg') }}" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">More Leads & Conversions</h3>
                                <p class="box-text">By attracting qualified the traffic and optimizing your website for conversions, we'll help you.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="choose-image">
                        <div class="img1 tilt-active">
                            <img src="{{ asset('frontend-assets/img/normal/choose_1.png') }}" alt="Choose">
                            <div class="choose-shape"><img src="{{ asset('frontend-assets/img/shape/choose-shape.png') }}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="overflow-hidden bg-smoke2 space" id="about-sec3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="title-area text-center">
                        <!-- <div class="shadow-title">GOALS</div> -->
                        <!-- <span class="sub-title sub-title4 ">Our Strategy<span></span></span> -->
                        <h2 class="sec-title ">International Seo Roadmap</h2>
                    </div>
                </div>
            </div>
            <div class="according-list-area">
                <div class="according-list hover-item item-active">
                    <div class="accordion-item2">
                        <h3 class="box-title">Keyword research and localization</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/normal/ser_2_1.jpg') }}" alt="">
                        <p class="sec-para text">Appeals to clients looking for innovative and creative digital
                            solutions,
                            positioning the agency as a leader in creativity. Conveys a collaborative approach,
                            suggesting that the agency works closely with clients to achieve their digital
                            goals.
                        </p>

                    </div>

                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title">International website structure and URL optimization</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/normal/ser_2_2.jpg') }}" alt="">
                        <p class="sec-para text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde reiciendis nesciunt perferendis dignissimos accusantium nostrum, laboriosam cupiditate dolores tenetur blanditiis.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title">Multilingual content creation and translation</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/normal/ser_2_3.jpg') }}" alt="">
                        <p class="sec-para text">Appeals to clients looking for innovative and creative digital
                            solutions,
                            positioning the agency as a leader in creativity. Conveys a collaborative approach,
                            suggesting that the agency works closely with clients to achieve their digital
                            goals.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title">Hreflang implementation</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/normal/ser_2_4.jpg') }}" alt="">
                        <p class="sec-para text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo tempora adipisci provident, magnam cupiditate quod voluptatibus consequuntur eaque voluptatem, animi totam repudiandae facilis facere quo tempore, ad laudantium ducimus sunt?
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title">Country-specific domain or subdomain strategy</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/normal/ser_2_5.jpg') }}" alt="">
                        <p class="sec-para text">Appeals to clients looking for innovative and creative digital
                            solutions,
                            positioning the agency as a leader in creativity. Conveys a collaborative approach,
                            suggesting that the agency works closely with clients to achieve their digital
                            goals.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title">International link building and outreach</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/normal/ser_2_6.jpg') }}" alt="">
                        <p class="sec-para text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam similique modi accusantium odit recusandae laudantium, vel, illo rerum cum sequi, minima eaque mollitia quos odio beatae iste nam temporibus accusamus.
                        </p>

                    </div>
                </div>
            </div>


        </div>
        <div class="shape-mockup spin d-none d-lg-block" data-top="5%" data-right="2%"><img
                src="assets/img/shape/shape-9.png" alt=""></div>
        <div class="shape-mockup d-none d-lg-block" data-top="2%" data-left="0%"><img
                src="assets/img/shape/shape-13.png" alt=""></div>
        <div class="shape-mockup d-none d-lg-block" data-bottom="0%" data-left="50%"><img
                src="assets/img/shape/shape-14.png" alt=""></div>

    </section>

    <div class="overflow-hidden position-relative space-extra-top space-bottom garally mt-5" id="portfolio-sec">
        <div class="container">
            <div class="title-area text-center mb-25">
                <h2 class="sec-title">Clients We've Worked With</h2>
            </div>
            <div class="filter-menu filter-menu-active mt-5 mb-4">
                <button data-filter="*" class="tab-btn active" type="button">All</button>
                <button data-filter=".cat1" class="tab-btn" type="button">Education</button>
                <button data-filter=".cat2" class="tab-btn" type="button">Healthcare</button>
                <button data-filter=".cat3" class="tab-btn" type="button">News & Media</button>
                <button data-filter=".cat4" class="tab-btn" type="button">Real Eastate</button>
                <button data-filter=".cat5" class="tab-btn" type="button">Logistist</button>
                <button data-filter=".cat6" class="tab-btn" type="button">Gaming</button>

            </div>
            <div class="portfolio-area">
                <div class="row gy-4 filter-active garally-row-height mt-md-0 mt-4">
                    <div class="col-md-6 col-xl-3 filter-item cat1 cat5 cat7 cat3">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="https://www.gbim.com/clientele/Technology/tech_1.webp" alt="project image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 filter-item cat5 cat5 cat8 cat1">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="https://www.gbim.com/clientele/Technology/tech_1.webp" alt="project image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 filter-item cat5 cat3 cat2">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="https://www.gbim.com/clientele/Technology/tech_1.webp" alt="project image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 filter-item cat4 cat1 cat6">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="https://www.gbim.com/clientele/Technology/tech_1.webp" alt="project image">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3 filter-item cat4 cat6">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="https://www.gbim.com/clientele/Technology/tech_1.webp" alt="project image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 filter-item cat4 cat6">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="https://www.gbim.com/clientele/Technology/tech_1.webp" alt="project image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 filter-item cat4 cat6">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="https://www.gbim.com/clientele/Technology/tech_1.webp" alt="project image">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="project-btn mt-60"><a href="portfolio.html" class="th-btn th-radius">View All Portfolio</a>
                </div> -->
            </div>
        </div>
    </div>

    <section class="th-blog-wrapper space-top space-extra-bottom" id="about-sec5">
        <div class="container">
            <div class="title-area text-center mb-25">
                <h2 class="sec-title mb-md-5">From The Blog: Blogs worth binging on. Dive in!</h2>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach($blogs as $blog)
                    <div class="swiper-slide">
                        <div class="box-blog th-blog blog-single has-post-thumbnail">
                            <div class="blog-img box-blog">
                                <a href="{{ route('blog-inner', ['slug' => $blog->slug]) }}">
                                    <img src="{{ url('storage/app/public/' . ($blog->images[0] ?? 'default.jpg')) }}" alt="Blog Image" width="100%" style="height: 270px; object-fit: cover; margin-right: 5px;">
                                </a>
                            </div>
                            <div class="blog-content content-padding">
                                <div class="blog-meta">
                                    <a href="#"><i class="fa-light fa-calendar"></i> {{ $blog->created_at ? $blog->created_at->format('F d, Y') : 'Unpublished' }}</a>
                                    <a href="#"><i class="fa-light fa-tags"></i> {{ implode(', ', $blog->getCategoryNames()) ?? 'No Category' }}</a>
                                </div>
                                <h3 class="blog-title blog-title-text">
                                    <a href="{{ route('blog-inner', ['slug' => $blog->slug]) }}">
                                        {{ Str::limit($blog->blog_name, 20) }}
                                    </a>
                                </h3>

                                <p class="blog-text">{{ Str::limit(strip_tags($blog->content), 80) }}</p>
                                <a href="{{ route('blog-inner', ['slug' => $blog->slug]) }}" class="th-btn black-border th-icon th-radius">
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
    <div class="overflow-hidden space" id="about-sec6">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="me-xl-5 pe-xl-3">
                        <div class="title-area mb-30 text-center text-xl-start">
                            <!-- <span class="sub-title sub-title7 style1 ">FAQS</span> -->
                            <h2 class="sec-title ">Have Any Questions?</h2>
                            <p class="sec-para ">We identify the most relevant and high-traffic keywords for your business. Our team conducts thorough research to understand your industry, competitors, and target audience to ensure your website ranks for terms that matter.</p>
                        </div>

                    </div>
                </div>
                <div class="col-xl-7 mt-35 mt-xl-0">
                    <div class="accordion-area accordion" id="faqAccordion">


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">How long does it take to see results from SEO?</button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse " aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">SEO is an ongoing process, but you can expect to see initial improvements in website traffic and rankings within 3-6 months with a well-defined strategy. Long-term results and significant traffic growth. We are a five-star rated holistic full-service digital marketing agencies, serving thousands of clients. Our digital agency covers all aspects of internet marketing:</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card active">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">How will I be kept informed about my SEO progress?</button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse show" aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">SEO is an ongoing process, but you can expect to see initial improvements in website traffic and rankings within 3-6 months with a well-defined strategy. Long-term results and significant traffic growth. We are a five-star rated holistic full-service digital marketing agencies, serving thousands of clients. Our digital agency covers all aspects of internet marketing:</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">What kind of SEO techniques do you use?</button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">SEO is an ongoing process, but you can expect to see initial improvements in website traffic and rankings within 3-6 months with a well-defined strategy. Long-term results and significant traffic growth. We are a five-star rated holistic full-service digital marketing agencies, serving thousands of clients. Our digital agency covers all aspects of internet marketing:</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">What happens if I don't see results after a while?</button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse " aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">SEO is an ongoing process, but you can expect to see initial improvements in website traffic and rankings within 3-6 months with a well-defined strategy. Long-term results and significant traffic growth. We are a five-star rated holistic full-service digital marketing agencies, serving thousands of clients. Our digital agency covers all aspects of internet marketing:</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">How do I get started with your agency?</button>
                            </div>
                            <div id="collapse-5" class="accordion-collapse collapse " aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">SEO is an ongoing process, but you can expect to see initial improvements in website traffic and rankings within 3-6 months with a well-defined strategy. Long-term results and significant traffic growth. We are a five-star rated holistic full-service digital marketing agencies, serving thousands of clients. Our digital agency covers all aspects of internet marketing:</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">What is your process for starting a new project?</button>
                            </div>
                            <div id="collapse-6" class="accordion-collapse collapse " aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="faq-text">SEO is an ongoing process, but you can expect to see initial improvements in website traffic and rankings within 3-6 months with a well-defined strategy. Long-term results and significant traffic growth. We are a five-star rated holistic full-service digital marketing agencies, serving thousands of clients. Our digital agency covers all aspects of internet marketing:</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</main>
@endsection

@push('scripts')
<script>
    const swiper = new Swiper('.mySwiper', {
        slidesPerView: 3,
        spaceBetween: 20,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        speed: 800,
    });
</script>
@endpush