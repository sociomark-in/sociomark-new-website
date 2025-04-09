@extends('Frontend.layout.app')


@section('title', 'Sociomark')
@section('author', 'Your Company Name')
@section('description', 'This is a dynamic description for the home page.')
@section('keywords', 'seo, marketing, agency, web design')
@section('robots', 'INDEX,FOLLOW')


@section('custome-style')
<style>
    #home #about-sec .sec-title,
    #home #about-sec3 .sec-title,
    #home #portfolio-sec .sec-title,
    #home #process-sec .sec-title,
    #home #testi-sec .sec-title,
    #home #blog-sec .sec-title {
        font-size: 35px !important;
        line-height: 42px !important;
    }

    #home #about-sec .sec-para,
    #home #about-sec3 .sec-para {
        line-height: 28px;
        font-size: 20px;
        letter-spacing: .10px;
        color: #797E88;
        /* text-align: justify; */
    }

    a {
        border-radius: 55px !important;
    }

    /* about-sec */
    #home .about-sec-title {
        font-size: 24px;
        font-weight: 500;
    }

    /* about-sec end */
    /* section3 */
    /* #home #about-sec3 .accordion-item .accordion-button:not(.collapsed) .box-title {
        color: #106c97;
    } */

    #home #about-sec3 .accordion-item .accordion-button:not(.collapsed) .accordion-item_info {
        background-color: #106c97 !important;
        padding: 1rem !important;
    }

    #home #about-sec3 .accordion-item .accordion-button:not(.collapsed) .accordion-item_wrapp {
        color: white;
    }

    #home #about-sec3 .accordion-item .accordion-button:not(.collapsed) .accordion-body {
        border-bottom: 1px solid black !important;
    }

    /* section3 end */
    /* portfolio */
    #home #portfolio-sec .filter-menu .tab-btn.active {
        border-radius: 27px !important;
        padding: 10px 25px !important;
        border: 1px solid black !important;
        background-color: #106c97;
        color: white;
        font-weight: 600;
        border: none !important;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background: #106c97;
    }

    #home #portfolio-sec .filter-menu .tab-btn {
        border-radius: 27px !important;
        padding: 10px 25px !important;
        /* box-shadow: 0 4px 8px rgba(0,0,0,0.1); */
        border: 1px solid black;
        outline: none;
        /* border: 2px solid transparent; */
    }

    #home #portfolio-sec .filter-menu .tab-btn:not(:last-child):before {
        height: 0px;
    }

    #home #portfolio-sec .garally-row-height {
        height: 748px;
    }

    .garally .portfolio-area::-webkit-scrollbar {
        width: 3px;
        height: 30px;
    }

    /* Track */
    .garally .portfolio-area::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 10px;
    }

    /* Handle */
    .garally .portfolio-area::-webkit-scrollbar-thumb {
        background: #106c97;
        border-radius: 10px;
    }

    /* Handle on hover */
    .garally .portfolio-area::-webkit-scrollbar-thumb:hover {
        background: #106c97;
    }

    /* portfolio end */

    /* blog  */
    #home .brand-area {
        border-top: none !important;
        border-bottom: none;
    }

    /* blog end */
</style>
@endsection

@section('content')

<main id="home">
    <div class="about-area" id="about-sec">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 p-0">
                    {{-- <picture>
                            <source media="(min-width: 768px)" srcset="https://placehold.co/1920x800" type="image/webp">
                            <source media="(min-width: 768px)" srcset="https://placehold.co/1920x800" type="image/jpg')}}">
                    <source srcset="https://placehold.co/1000x800" type="image/webp">
                    <img loading="lazy" src="https://placehold.co/1000x800" alt="" class="w-100">
                    </picture> --}}
                    <div class="img">
                        {{-- <img src="https://placehold.co/1920x800" alt="" srcset=""> --}}
                        <iframe width="100%" height="800" src="https://www.youtube.com/embed/fUcECL2KLeg?controls=0&autoplay=1&mute=1"
                            title="Sociomark Showreel" frameborder="0"
                            allow="autoplay;  picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--======== / Hero Section ========--><!--==============================
                About Area
                ==============================-->
    <div class="about-area space" id="about-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-area mb-40 text-center">
                        {{-- <span class="sub-title sub-title2 ">Welcome to SEO Agency</span> --}}
                        <h2 class="sec-title">Hello, we are, Sociomark - Digital Marketing Company
                            in Mumbai</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-5 ">
                <div class="col-xl-5">
                    <div class=" pe-xl-4">
                        <!-- <h4 class="about-sec-title ">Innovative Digital Solutions </h4> -->
                        <p class="sec-para">In today's digital age, a sth4ong online presence is no longer a luxury but a necessity.
                            Sociomark is your trusted partner in navigating the tough digital landscape. As a leading
                            Digital Marketing agency based in Navi Mumbai,
                            we are committed to driving tangible results for your business.</p>
                        <p class="sec-para">Our expertise spans a wide range of digital marketing services, including Social Media
                            Marketing, SEO, Graphic Designing, Website Development, PPC, and Ecommerce Marketing. We
                            understand that every business is unique, and therefore,
                            we tailor our strategies to meet your specific goals and objectives.</p>
                        <div class="skill-card mt-30 d-none">
                            <div class="skill-feature" data-theme-color="#FED91F">
                                <h5 class="skill-feature_title">SEO Analysis</h5>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 80%;">
                                        <div class="progress-value">80%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-feature" data-theme-color="#121212">
                                <h5 class="skill-feature_title">Marketing Strategy</h5>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 90%;">
                                        <div class="progress-value">90%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group mt-40">
                            <a href="about.html" class="th-btn th-icon th-black2">More About Us<i
                                    class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-4 mb-30 mb-xl-0 d-none d-md-block">
                    <!-- <div class="img-box1 ps-xl-4">
                        <div class="img1 th-anim"> -->
                    <img src="https://www.sociomark.in/assets/img/owner/award2.jpeg" alt="About">
                    <!-- </div>
                    </div> -->
                </div>
                <div class="col-xl-4 col-sm-8 mb-30 mb-xl-0">
                    <div class="about-wrapp justify-content-center">
                        <!-- <div class="about-shape"><img src="{{ asset('frontend-assets/img/shape/shape-5.png') }}" alt=""></div> -->
                        <div class="discount-wrapp d-none">
                            <a href="https://youtu.be/fUcECL2KLeg" class="play-btn popup-video">
                                <i class="fa-solid fa-play"></i></a>
                            <div class="discount-tag">
                                <span class="discount-anime">Build a success brand with Sociomark</span>
                            </div>
                        </div>
                    </div>
                    <div class="img-box1 order-1">
                        <div class="img1 th-anim">
                            <img src="https://www.sociomark.in/assets/img/owner/group2.jpeg" alt="About">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
                Counter Area
                ==============================-->
    <div class="space-extra2-bottom bg-white" id="about-sec2">
        <div class="container">
            <div class="counter-card-wrap">
                <div class="counter-card text-center">
                    <h3 class="box-number"><span class="counter-number">3</span>k<span class="plus">+</span></h3>
                    <div class="media-body">
                        <!-- <p class=" counter-text mb-n1">Successful Project</p> -->
                        <span class="sub-title sub-title2 style1 p-0counter-text mb-n1">Successful Project</span>
                    </div>
                </div>
                <div class="divider"></div>

                <div class="counter-card">
                    <h3 class="box-number"><span class="counter-number">200</span><span class="plus">+</span></h3>
                    <div class="media-body">
                        <p class=" counter-text mb-n1">Experienced Team</p>
                    </div>
                </div>
                <div class="divider"></div>

                <div class="counter-card">
                    <h3 class="box-number"><span class="counter-number">43</span>k<span class="plus">+</span></h3>
                    <div class="media-body">
                        <p class=" counter-text mb-n1">Happy Customers</p>
                    </div>
                </div>
                <div class="divider"></div>

                <div class="counter-card">
                    <h3 class="box-number"><span class="counter-number">36</span>k<span class="plus">+</span></h3>
                    <div class="media-body">
                        <p class=" counter-text mb-n1">Client 5 Star Review</p>
                    </div>
                </div>
                <div class="divider"></div>

            </div>
        </div>
    </div>
    <!--==============================
        Service Area
        ==============================-->
    <section class="overflow-hidden space-extra-top space-bottom" id="about-sec3">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-end">
                <div class="col-lg-12">
                    <div class="title-area text-center text-lg-center pe-xl-5">
                        {{-- <span class="sub-title sub-title2 style1">Our Services</span> --}}
                        <h2 class="sec-title">
                            Boost your SEO ranking with excellent effective services
                        </h2>
                    </div>
                </div>
            </div>

            <div class="service-accordion">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="service-accordion-content" id="serviceAccordion">
                            <div class="accordion-item">
                                <div class="accordion-header" id="collapse-item-1">
                                    <div class="accordion-button" role="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                        <span class="accordion-item_info">
                                            <span class="accordion-item_wrapp">
                                                <span class="box-title">Lorum Ipsum</span>
                                            </span>
                                            <span class="icon">
                                                <i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                        </span>
                                    </div>
                                </div>
                                <div id="collapse-1" class="accordion-collapse collapse show"
                                    aria-labelledby="collapse-item-1" data-bs-parent="#serviceAccordion">
                                    <div class="accordion-body">
                                        <p class="sec-para">
                                            Our SEO services ensure your website ranks higher on
                                            search engines like Google, helping your business.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header" id="collapse-item-2">
                                    <div class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2" aria-expanded="false"
                                        aria-controls="collapse-2">
                                        <span class="accordion-item_info">
                                            <span class="accordion-item_wrapp">
                                                <span class="box-title">Lorum Ipsum</span>
                                            </span>
                                            <span class="icon">
                                                <i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                        </span>
                                    </div>
                                </div>
                                <div id="collapse-2" class="accordion-collapse collapse"
                                    aria-labelledby="collapse-item-2" data-bs-parent="#serviceAccordion">
                                    <div class="accordion-body">
                                        <p class="sec-para">
                                            Pay-Per-Click (PPC) advertising is a digital marketing
                                            model in which advertisers pay a fee each time
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header" id="collapse-item-3">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false"
                                        aria-controls="collapse-3">
                                        <span class="accordion-item_info">
                                            <span class="accordion-item_wrapp">
                                                <span class="box-title">Lorum Ipsum</span>
                                            </span>
                                            <span class="icon">
                                                <i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                        </span>
                                    </button>
                                </div>
                                <div id="collapse-3" class="accordion-collapse collapse"
                                    aria-labelledby="collapse-item-3" data-bs-parent="#serviceAccordion">
                                    <div class="accordion-body">
                                        <p class="sec-para">
                                            Content marketing is a strategic approach focused on
                                            creating, publishing, and distributing valuable
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header" id="collapse-item-4">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false"
                                        aria-controls="collapse-4">
                                        <span class="accordion-item_info">
                                            <span class="accordion-item_wrapp">
                                                <span class="box-title">Lorum Ipsum</span>
                                            </span>
                                            <span class="icon">
                                                <i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                        </span>
                                    </button>
                                </div>
                                <div id="collapse-4" class="accordion-collapse collapse"
                                    aria-labelledby="collapse-item-4" data-bs-parent="#serviceAccordion">
                                    <div class="accordion-body">
                                        <p class="sec-para">
                                            Email marketing is a digital marketing strategy that
                                            involves sending targeted emails
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header" id="collapse-item-5">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false"
                                        aria-controls="collapse-5">
                                        <span class="accordion-item_info">
                                            <span class="accordion-item_wrapp">
                                                <span class="box-title">Lorum Ipsum</span>
                                            </span>
                                            <span class="icon">
                                                <i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                        </span>
                                    </button>
                                </div>
                                <div id="collapse-5" class="accordion-collapse collapse"
                                    aria-labelledby="collapse-item-5" data-bs-parent="#serviceAccordion">
                                    <div class="accordion-body">
                                        <p class="sec-para">
                                            Social media marketing is a form of digital marketing
                                            that uses social media platforms
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <div class="accordion-header" id="collapse-item-6">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false"
                                        aria-controls="collapse-6">
                                        <span class="accordion-item_info">
                                            <span class="accordion-item_wrapp">
                                                <span class="box-title">Lorum Ipsum</span>
                                            </span>
                                            <span class="icon">
                                                <i class="fa-sharp fa-regular fa-arrow-right"></i></span>
                                        </span>
                                    </button>
                                </div>
                                <div id="collapse-6" class="accordion-collapse collapse"
                                    aria-labelledby="collapse-item-6" data-bs-parent="#serviceAccordion">
                                    <div class="accordion-body">
                                        <p class="sec-para">
                                            Conversion Rate Optimization (CRO) is the process of
                                            improving a website or landing page
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="th-accordion_images">
                            <img class="active" src="https://placehold.co/600x600" alt="" />
                            <img src="https://placehold.co/600x600" alt="" />
                            <img src="https://placehold.co/600x600" alt="" />
                            <img src="https://placehold.co/600x600" alt="" />
                            <img src="https://placehold.co/600x600" alt="" />
                            <img src="https://placehold.co/600x600" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
          portfolio Area
          ==============================-->
    <div class="overflow-hidden position-relative space-extra-top space-bottom garally" id="portfolio-sec">
        <div class="container">
            <div class="title-area text-center mb-25">
                <h2 class="sec-title">Our Work Culture</h2>
            </div>
            <div class="filter-menu filter-menu-active mt-5 mb-4">
                <button data-filter="*" class="tab-btn active" type="button">All</button>
                <button data-filter=".cat1" class="tab-btn" type="button">Social Media</button>
                <button data-filter=".cat2" class="tab-btn" type="button">Development</button>
                <button data-filter=".cat3" class="tab-btn" type="button">Digital Creatives</button>
            </div>
            <div class="portfolio-area">
                <div class="row gy-4 justify-content-center filter-active">
                    <div class="col-auto col-md-6 col-xl-auto filter-item  cat5 cat7 cat3">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <img src="https://www.sociomark.in/assets/img/project/mastercard.jpg" alt="Lorum Ipsum" />
                                </div>
                                <div class="flip-box-back">
                                    <h2>Mastercard</h2>
                                    <p>Lorum Ipsum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto col-md-6 col-xl-auto filter-item cat1 cat5 cat7 cat3">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <img src="https://www.sociomark.in/assets/img/project/castrol600.jpg" alt="Lorum Ipsum" />
                                </div>
                                <div class="flip-box-back">
                                    <h2>Castrol</h2>
                                    <p>Lorum Ipsum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto col-md-6 col-xl-auto filter-item cat1 cat5 cat7 cat3">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <img src="https://www.sociomark.in/assets/img/project/Button-Dabo-Desh-Bano.jpg" alt="Lorum Ipsum" />
                                </div>
                                <div class="flip-box-back">
                                    <h2>Button Dabo Desh Bano</h2>
                                    <p>Lorum Ipsum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto col-md-6 col-xl-auto filter-item cat1 cat2 cat5 cat7 cat3">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <img src="https://www.sociomark.in/assets/img/project/nodwin-600.jpg" alt="Lorum Ipsum" />
                                </div>
                                <div class="flip-box-back">
                                    <h2>Nodwin Gaming</h2>
                                    <p>Lorum Ipsum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto col-md-6 col-xl-auto filter-item cat1 cat2 cat5 cat7 cat3">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <img src="https://www.sociomark.in/assets/img/project/Euro_600x600.jpg" alt="Lorum Ipsum" />
                                </div>
                                <div class="flip-box-back">
                                    <h2>Euro</h2>
                                    <p>Lorum Ipsum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto col-md-6 col-xl-auto filter-item cat1 cat5 cat7 cat3">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <img src="https://www.sociomark.in/assets/img/project/tpc.jpeg" alt="Lorum Ipsum" />
                                </div>
                                <div class="flip-box-back">
                                    <h2>TPC</h2>
                                    <p>Lorum Ipsum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto col-md-6 col-xl-auto filter-item cat1 cat5 cat7 cat3">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <img src="https://www.sociomark.in/assets/img/project/mastercard.jpg" alt="Lorum Ipsum" />
                                </div>
                                <div class="flip-box-back">
                                    <h2>Mastercard</h2>
                                    <p>Lorum Ipsum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="project-btn mt-60">
                      <a href="#" class="th-btn th-radius">View All Portfolio</a>
                    </div> -->
            </div>
        </div>
    </div>

    <!--==============================
                Project Area
                ==============================-->
    <section class="project-area bg-white position-relative overflow-hidden space d-none" id="project-sec"
        data-bg-src="{{ asset('frontend-assets/img/bg/project_bg_1.png') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="title-area mb-40 text-center">
                        <span class="sub-title sub-title2 ">Our Mission & Vision</span>
                        <h2 class="sec-title ">Present creative and innovative SEO solutions</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="project-image th-anim">
                        <img src="{{ asset('frontend-assets/img/normal/project-image.jpg') }}" alt="">
                        <div class="discount-wrapp">
                            <h2 class="project-counter"><span class="counter-number">24</span></h2>
                            <div class="discount-tag">
                                <span class="discount-anime">years of experience</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-30">
                <div class="col-md-6">
                    <div class="project-card">
                        <span class="box-subtitle">Our Mission</span>
                        <h3 class="box-title"><a href="portfolio-details.html">Customer Success Is Our Mission</a>
                        </h3>
                        <p class="box-text">Our mission is to empower businesses by creating digital marketing
                            strategies that are not only effective but sustainable. We believe in building long-term
                            relationships with our clients by delivering results that exceed expectations and drive
                            real, tangible growth.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="project-card">
                        <span class="box-subtitle">Our Vision</span>
                        <h3 class="box-title"><a href="portfolio-details.html">To be the Leading Agency in the
                                Industry.</a></h3>
                        <p class="box-text">We help you build and maintain a strong social media presence across
                            platforms like Facebook, Instagram, LinkedIn, and Twitter. By crafting tailored social media
                            strategies, we engage your audience, foster brand loyalty, and drive conversions.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--==============================
                Team Area
                ==============================-->
    <section class="team-area pb-20 space-top d-none">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title sub-title3 text-white ">Team Members</span>
                <h2 class="sec-title text-white ">Meet Our Team Members</h2>
            </div>

            <div class="slider-area">
                <div class="swiper th-slider teamSlider2 has-shadow" id="teamSlider2"
                    data-slider-options='{"spaceBetween":80,"breakpoints":{"0":{"slidesPerView":1},"767":{"slidesPerView":"2"},"992":{"slidesPerView":"2","centeredSlides":"true"},"1024":{"slidesPerView":"3","centeredSlides":"true"}}}'>
                    <div class="swiper-wrapper">
                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img-wrap">
                                    <div class="box-img">
                                        <img src="{{ asset('frontend-assets/img/team/team_2_1.jpg') }}"
                                            alt="Team">
                                    </div>
                                    <div class="th-social">
                                        <a target="_blank" href="https://facebook.com/"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i
                                                class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i
                                                class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="team-details.html">Helman Calderon</a></h3>
                                    <span class="team-desig">Web Developer</span>

                                </div>

                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img-wrap">
                                    <div class="box-img">
                                        <img src="{{ asset('frontend-assets/img/team/team_2_2.jpg') }}"
                                            alt="Team">
                                    </div>
                                    <div class="th-social">
                                        <a target="_blank" href="https://facebook.com/"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i
                                                class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i
                                                class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="team-details.html">Miler Michel</a></h3>
                                    <span class="team-desig">UI/UX Designer</span>

                                </div>

                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img-wrap">
                                    <div class="box-img">
                                        <img src="{{ asset('frontend-assets/img/team/team_2_3.jpg') }}"
                                            alt="Team">
                                    </div>
                                    <div class="th-social">
                                        <a target="_blank" href="https://facebook.com/"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i
                                                class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i
                                                class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="team-details.html">Olivia Martinez</a></h3>
                                    <span class="team-desig">Wordpress Developer</span>

                                </div>

                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img-wrap">
                                    <div class="box-img">
                                        <img src="{{ asset('frontend-assets/img/team/team_2_1.jpg') }}"
                                            alt="Team">
                                    </div>
                                    <div class="th-social">
                                        <a target="_blank" href="https://facebook.com/"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i
                                                class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i
                                                class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="team-details.html">Helman Calderon</a></h3>
                                    <span class="team-desig">plugin Developer</span>

                                </div>

                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img-wrap">
                                    <div class="box-img">
                                        <img src="{{ asset('frontend-assets/img/team/team_2_2.jpg') }}"
                                            alt="Team">
                                    </div>
                                    <div class="th-social">
                                        <a target="_blank" href="https://facebook.com/"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i
                                                class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i
                                                class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="team-details.html">Miler Michel</a></h3>
                                    <span class="team-desig">Front end Developer</span>

                                </div>

                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="swiper-slide">
                            <div class="th-team team-box">
                                <div class="team-img-wrap">
                                    <div class="box-img">
                                        <img src="{{ asset('frontend-assets/img/team/team_2_3.jpg') }}"
                                            alt="Team">
                                    </div>
                                    <div class="th-social">
                                        <a target="_blank" href="https://facebook.com/"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i
                                                class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i
                                                class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title"><a href="team-details.html">Olivia Martinez</a></h3>
                                    <span class="team-desig">Backend Developer</span>

                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="icon-box">
                        <button data-slider-prev="#teamSlider2" class="slider-arrow default"><i
                                class="far fa-arrow-left"></i></button>
                        <button data-slider-next="#teamSlider2" class="slider-arrow default"><i
                                class="far fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup" data-top="0" data-left="0">
            <div class="particle-2" id="particle-2"></div>
        </div>
    </section>

    <div class="marquee-area d-none">
        <div class="marquee-content positive-relative overflow-hidden">
            <div class="marquee">
                <div class="marquee-group style2">
                    <div class="item ">
                        <div class="video-img"><img src="{{ asset('frontend-assets/img/normal/ser-cta-1.png') }}"
                                alt=""> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                        <span>Monitoring Business
                            Analytics</span>
                    </div>
                    <div class="item">
                        <div class="video-img"><img src="{{ asset('frontend-assets/img/normal/ser-cta-2.png') }}"
                                alt=""> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                        <span>Marketing Solutions</span>
                    </div>
                    <div class="item ">
                        <div class="video-img"><img src="{{ asset('frontend-assets/img/normal/ser-cta-3.png') }}"
                                alt=""> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                        <span>SEO Strategy
                            Development</span>
                    </div>
                    <div class="item">
                        <div class="video-img"><img src="{{ asset('frontend-assets/img/normal/ser-cta-4.png') }}"
                                alt=""> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                        <span>Search Engine
                            Optimization</span>
                    </div>
                    <div class="item ">
                        <div class="video-img"><img src="{{ asset('frontend-assets/img/normal/ser-cta-1.png') }}"
                                alt=""> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                        <span>Research & Analysis</span>
                    </div>
                    <div class="item ">
                        <div class="video-img"><img src="{{ asset('frontend-assets/img/normal/ser-cta-2.png') }}"
                                alt=""> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                        <span>Monitoring Business
                            Analytics</span>
                    </div>
                    <div class="item">
                        <div class="video-img"><img src="{{ asset('frontend-assets/img/normal/ser-cta-3.png') }}"
                                alt=""> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                        <span>Marketing Solutions</span>
                    </div>
                    <div class="item ">
                        <div class="video-img"><img src="{{ asset('frontend-assets/img/normal/ser-cta-4.png') }}"
                                alt=""> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                        <span>SEO Strategy
                            Development</span>
                    </div>
                    <div class="item">
                        <div class="video-img"><img src="{{ asset('frontend-assets/img/normal/ser-cta-1.png') }}"
                                alt=""> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                        <span>Search Engine
                            Optimization</span>
                    </div>
                    <div class="item ">
                        <div class="video-img"><img src="{{ asset('frontend-assets/img/normal/ser-cta-2.png') }}"
                                alt=""> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                        <span>Research & Analysis</span>
                    </div>
                    <div class="item ">
                        <div class="video-img"><img src="{{ asset('frontend-assets/img/normal/ser-cta-3.png') }}"
                                alt=""> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                        <span>Monitoring Business
                            Analytics</span>
                    </div>
                    <div class="item">
                        <div class="video-img"><img src="{{ asset('frontend-assets/img/normal/ser-cta-4.png') }}"
                                alt=""> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                        <span>Marketing Solutions</span>
                    </div>

                </div>
                <div aria-hidden="true" class="marquee-group style2">
                    <div class="item ">
                        <div class="video-img"><img src="{{ asset('frontend-assets/img/normal/ser-cta-1.png') }}"
                                alt=""> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                        <span>Monitoring Business
                            Analytics</span>
                    </div>
                    <div class="item">
                        <div class="video-img"><img src="{{ asset('frontend-assets/img/normal/ser-cta-2.png') }}"
                                alt=""> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                        <span>Marketing Solutions</span>
                    </div>
                    <div class="item ">
                        <div class="video-img"><img src="{{ asset('frontend-assets/img/normal/ser-cta-3.png') }}"
                                alt=""> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                        <span>SEO Strategy
                            Development</span>
                    </div>
                    <div class="item">
                        <div class="video-img"><img src="{{ asset('frontend-assets/img/normal/ser-cta-4.png') }}"
                                alt=""> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                        <span>Search Engine
                            Optimization</span>
                    </div>
                    <div class="item ">
                        <div class="video-img"><img src="{{ asset('frontend-assets/img/normal/ser-cta-1.png') }}"
                                alt=""> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                        <span>Research & Analysis</span>
                    </div>
                    <div class="item ">
                        <div class="video-img"><img src="{{ asset('frontend-assets/img/normal/ser-cta-2.png') }}"
                                alt=""> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                        <span>Monitoring Business
                            Analytics</span>
                    </div>
                    <div class="item">
                        <div class="video-img"><img src="{{ asset('frontend-assets/img/normal/ser-cta-3.png') }}"
                                alt=""> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                        <span>Marketing Solutions</span>
                    </div>
                    <div class="item ">
                        <div class="video-img"><img src="{{ asset('frontend-assets/img/normal/ser-cta-4.png') }}"
                                alt=""> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                        <span>SEO Strategy
                            Development</span>
                    </div>
                    <div class="item">
                        <div class="video-img"><img src="{{ asset('frontend-assets/img/normal/ser-cta-1.png') }}"
                                alt=""> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                        <span>Search Engine
                            Optimization</span>
                    </div>
                    <div class="item ">
                        <div class="video-img"><img src="{{ asset('frontend-assets/img/normal/ser-cta-2.png') }}"
                                alt=""> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                        <span>Research & Analysis</span>
                    </div>
                    <div class="item ">
                        <div class="video-img"><img src="{{ asset('frontend-assets/img/normal/ser-cta-3.png') }}"
                                alt=""> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                        <span>Monitoring Business
                            Analytics</span>
                    </div>
                    <div class="item">
                        <div class="video-img"><img src="{{ asset('frontend-assets/img/normal/ser-cta-4.png') }}"
                                alt=""> <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                class="play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                        <span>Marketing Solutions</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
                Process Area
                ==============================-->
    <section class="space-extra-top space-bottom overflow-hidden" id="process-sec">
        <div class="container">
            <div class="row flex-row-reverse align-items-end">
                <div class="col-xl-12">
                    <div class="title-area text-center text-xl-center">
                        {{-- <span class="sub-title sub-title2 style1 ">Work Process</span> --}}
                        <h2 class="sec-title">Our Working Process Faster And Easier
                        </h2>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="ps-xl-3 mb-40">
                        <div class="process-item">
                            <span class="box-number">01</span>
                            <div class="box-content">
                                <h3 class="box-title">Creative ideas</h3>
                                <p class="box-text">Every business is unique. That's why we tailor our SEO and
                                    marketing
                                    services to meet your specific goals, industry requirements, and target audience.
                                </p>
                            </div>
                        </div>
                        <div class="process-item">
                            <span class="box-number">02</span>
                            <div class="box-content">
                                <h3 class="box-title">Execution</h3>
                                <p class="box-text">Every business is unique. That's why we tailor our SEO and
                                    marketing
                                    services to meet your specific goals, industry requirements, and target audience.
                                </p>
                            </div>
                        </div>
                        <div class="process-item">
                            <span class="box-number">03</span>
                            <div class="box-content">
                                <h3 class="box-title">Finishing</h3>
                                <p class="box-text">Every business is unique. That's why we tailor our SEO and
                                    marketing
                                    services to meet your specific goals, industry requirements, and target audience.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 mt-35 mt-xl-0">
                    <div class="img">
                        <img src="https://placehold.co/800x800" alt="" srcset="">
                    </div>
                    <div class="process-wrapp d-none">
                        <div class="process-img">
                            <div class="img1"><img src="{{ asset('frontend-assets/img/normal/process_1_1.jpg') }}"
                                    alt="Faq"></div>
                            <div class="shape-1"><img src="{{ asset('frontend-assets/img/shape/shape-8.png') }}"
                                    alt=""></div>
                        </div>
                        <div class="process-img">
                            <div class="shape-2"></div>
                            <div class="img1"><img src="{{ asset('frontend-assets/img/normal/process_1_2.jpg') }}"
                                    alt="Faq"></div>
                            <div class="arrow text-center">
                                <img src="{{ asset('frontend-assets/img/shape/arrow-down.png') }}" alt="">
                            </div>
                            <<<<<<< HEAD
                                <div class="sec-btn text-center">
                                <a href="service.html" class="th-btn ser-btn th-icon">More About<i
                                        class="fa-regular fa-arrow-right ms-2"></i> </a>
                                =======

                                <div class="swiper-slide">
                                    <div class="blog-grid">
                                        <div class="box-img global-img">
                                            <img src="{{ asset('frontend-assets/img/blog/blog_2_2.jpg') }}" alt="blog image">
                                        </div>
                                        <div class="box-content">
                                            <div class="blog-meta">
                                                <a href="blog.html"><i class="fa-light fa-calendar"></i>january 10,
                                                    2025</a>
                                            </div>
                                            <h3 class="box-title"><a href="blog-details.html">6 Tips for Personal Selling in
                                                    that Guarantee Success</a></h3>
                                            <a href="blog-details.html" class="line-btn th-icon">Read More <i
                                                    class="fa-regular fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="blog-grid">
                                        <div class="box-img global-img">
                                            <img src="{{ asset('frontend-assets/img/blog/blog_2_3.jpg') }}" alt="blog image">
                                        </div>
                                        <div class="box-content">
                                            <div class="blog-meta">
                                                <a href="blog.html"><i class="fa-light fa-calendar"></i>january 10,
                                                    2025</a>
                                            </div>
                                            <h3 class="box-title"><a href="blog-details.html">8 Things About Web Design Your
                                                    Boss Wants To Know</a></h3>
                                            <a href="blog-details.html" class="line-btn th-icon">Read More <i
                                                    class="fa-regular fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="blog-grid">
                                        <div class="box-img global-img">
                                            <img src="{{ asset('frontend-assets/img/blog/blog_2_1.jpg') }}" alt="blog image">
                                        </div>
                                        <div class="box-content">
                                            <div class="blog-meta">
                                                <a href="blog.html"><i class="fa-light fa-calendar"></i>january 10,
                                                    2025</a>
                                            </div>
                                            <h3 class="box-title"><a href="blog-details.html">How Chatbots Can Help You
                                                    Drive More Sales</a></h3>
                                            <a href="blog-details.html" class="line-btn th-icon">Read More <i
                                                    class="fa-regular fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="blog-grid">
                                        <div class="box-img global-img">
                                            <img src="{{ asset('frontend-assets/img/blog/blog_2_2.jpg') }}" alt="blog image">
                                        </div>
                                        <div class="box-content">
                                            <div class="blog-meta">
                                                <a href="blog.html"><i class="fa-light fa-calendar"></i>january 10,
                                                    2025</a>
                                            </div>
                                            <h3 class="box-title"><a href="blog-details.html">6 Tips for Personal Selling in
                                                    that Guarantee Success</a></h3>
                                            <a href="blog-details.html" class="line-btn th-icon">Read More <i
                                                    class="fa-regular fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="blog-grid">
                                        <div class="box-img global-img">
                                            <img src="{{ asset('frontend-assets/img/blog/blog_2_3.jpg') }}" alt="blog image">
                                        </div>
                                        <div class="box-content">
                                            <div class="blog-meta">
                                                <a href="blog.html"><i class="fa-light fa-calendar"></i>january 10,
                                                    2025</a>
                                            </div>
                                            <h3 class="box-title"><a href="blog-details.html">8 Things About Web Design Your
                                                    Boss Wants To Know</a></h3>
                                            <a href="blog-details.html" class="line-btn th-icon">Read More <i
                                                    class="fa-regular fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                    <button data-slider-prev="#blogSlider3" class="slider-arrow style3 slider-prev"><i
                            class="far fa-arrow-left"></i></button>
                    <button data-slider-next="#blogSlider3" class="slider-arrow style3 slider-next"><i
                            class="far fa-arrow-right"></i></button>
                </div>

            </div>
            <!-- <div class="shape-mockup spin d-none d-lg-block" data-top="5%" data-right="2%"><img src="{{ asset('frontend-assets/img/shape/shape-9.png') }}" alt=""></div> -->
            <!-- <div class="shape-mockup d-none d-lg-block" data-top="2%" data-left="0%"><img src="{{ asset('frontend-assets/img/shape/shape-13.png') }}" alt=""></div> -->
            <!-- <div class="shape-mockup d-none d-lg-block" data-bottom="0%" data-left="50%"><img src="{{ asset('frontend-assets/img/shape/shape-14.png') }}" alt=""></div> -->
    </section>

    <!--==============================
                Brand Area
                ==============================-->
    <div class="brand-area bg-white overflow-hidden">
        <div class="container th-container">
            <div class="slider-area text-center">
                <div class="swiper th-slider" id="brandSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"476":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"5"},"1400":{"slidesPerView":"6"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-item style2">
                                <a href="">
                                    <img class="original w-75 h-100" src="https://www.sociomark.in/lp/assets/media/clients/buildtrack (1).png" alt="Brand Logo">
                                    <img class="gray w-75 h-100" src="https://www.sociomark.in/lp/assets/media/clients/buildtrack (1).png" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item style2">
                                <a href="">
                                    <img class="original w-75 h-100" src="https://www.sociomark.in/lp/assets/media/clients/euro.jpg" alt="Brand Logo">
                                    <img class="gray w-75 h-100" src="https://www.sociomark.in/lp/assets/media/clients/euro.jpg" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item style2">
                                <a href="">
                                    <img class="original w-75 h-100" src="https://www.sociomark.in/lp/assets/media/clients/tataplay.png" alt="Brand Logo">
                                    <img class="gray w-75 h-100" src="https://www.sociomark.in/lp/assets/media/clients/tataplay.png" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item style2">
                                <a href="">
                                    <img class="original" src="https://placehold.co/400x100" alt="Brand Logo">
                                    <img class="gray" src="https://placehold.co/400x100" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item style2">
                                <a href="">
                                    <img class="original" src="https://placehold.co/400x100" alt="Brand Logo">
                                    <img class="gray" src="https://placehold.co/400x100" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item style2">
                                <a href="">
                                    <img class="original" src="https://placehold.co/400x100" alt="Brand Logo">
                                    <img class="gray" src="https://placehold.co/400x100" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item style2">
                                <a href="">
                                    <img class="original" src="https://placehold.co/400x100" alt="Brand Logo">
                                    <img class="gray" src="https://placehold.co/400x100" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item style2">
                                <a href="">
                                    <img class="original" src="https://placehold.co/400x100" alt="Brand Logo">
                                    <img class="gray" src="https://placehold.co/400x100" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item style2">
                                <a href="">
                                    <img class="original" src="https://placehold.co/400x100" alt="Brand Logo">
                                    <img class="gray" src="https://placehold.co/400x100" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item style2">
                                <a href="">
                                    <img class="original" src="https://placehold.co/400x100" alt="Brand Logo">
                                    <img class="gray" src="https://placehold.co/400x100" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item style2">
                                <a href="">
                                    <img class="original" src="https://placehold.co/400x100" alt="Brand Logo">
                                    <img class="gray" src="https://placehold.co/400x100" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item style2">
                                <a href="">
                                    <img class="original" src="https://placehold.co/400x100" alt="Brand Logo">
                                    <img class="gray" src="https://placehold.co/400x100" alt="Brand Logo">
                                </a>
                            </div>
                            >>>>>>> f49bc012477f91eefa928b5170e74d0dd197d387
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="shape-mockup spin  d-none d-xl-block" data-top="3%" data-right="18%"><img src="{{ asset('frontend-assets/img/shape/shape-9.png') }}" alt=""></div> -->
    </section>
    <!--==============================
                Testimonial Area
                ==============================-->
    <section class="overflow-hidden brand-area space" id="testi-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-area text-center">
                        {{-- <span class="sub-title sub-title2 ">Testimonials</span> --}}
                        <h2 class="sec-title ">60+ Happy Clients Said To Us They Are Satisfied</h2>
                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="testiSlide1"
                    data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1300":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="box-review">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i>
                                </div>
                                <p class="box-text">“Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s,”</p>
                                <div class="box-wrapp">
                                    <div class="box-profile">
                                        <div class="box-author">
                                            <img src="https://placehold.co/44x44" alt="Avater">
                                        </div>
                                        <div class="box-info">
                                            <h3 class="box-title">Lorem Ipsum</h3>
                                            <span class="box-desig">Lorem Ipsum.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="box-review">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i>
                                </div>
                                <p class="box-text">“Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s,
                                </p>
                                <div class="box-wrapp">
                                    <div class="box-profile">
                                        <div class="box-author">
                                            <img src="https://placehold.co/44x44" alt="Avater">
                                        </div>
                                        <div class="box-info">
                                            <h3 class="box-title">Lorem Ipsum</h3>
                                            <span class="box-desig">Lorem Ipsum.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="box-review">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i>
                                </div>
                                <p class="box-text">“Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s,”</p>
                                <div class="box-wrapp">
                                    <div class="box-profile">
                                        <div class="box-author">
                                            <img src="https://placehold.co/44x44" alt="Avater">
                                        </div>
                                        <div class="box-info">
                                            <h3 class="box-title">Lorem Ipsum</h3>
                                            <span class="box-desig">Lorem Ipsum.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="box-review">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i>
                                </div>
                                <p class="box-text">“Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s,”</p>
                                <div class="box-wrapp">
                                    <div class="box-profile">
                                        <div class="box-author">
                                            <img src="https://placehold.co/44x44" alt="Avater">
                                        </div>
                                        <div class="box-info">
                                            <h3 class="box-title">Lorem Ipsum</h3>
                                            <span class="box-desig">Lorem Ipsum.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="box-review">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i>
                                </div>
                                <p class="box-text">“Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s,”</p>
                                <div class="box-wrapp">
                                    <div class="box-profile">
                                        <div class="box-author">
                                            <img src="https://placehold.co/44x44" alt="Avater">
                                        </div>
                                        <div class="box-info">
                                            <h3 class="box-title">Lorem Ipsum</h3>
                                            <span class="box-desig">Lorem Ipsum.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="box-review">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i>
                                </div>
                                <p class="box-text">“Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s,”</p>
                                <div class="box-wrapp">
                                    <div class="box-profile">
                                        <div class="box-author">
                                            <img src="https://placehold.co/44x44" alt="Avater">
                                        </div>
                                        <div class="box-info">
                                            <h3 class="box-title">Lorem Ipsum</h3>
                                            <span class="box-desig">Lorem Ipsum.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <<<<<<< HEAD
                            </div>
                    </div>
                    <button data-slider-prev="#testiSlide1" class="slider-arrow slider-prev"><i
                            class="far fa-arrow-left"></i></button>
                    <button data-slider-next="#testiSlide1" class="slider-arrow slider-next"><i
                            class="far fa-arrow-right"></i></button>
                </div>
            </div>
            {{-- <div class="shape-mockup" data-top="0" data-right="0">
                <div class="particle-3" id="particle-3"></div>
            </div> --}}
            {{-- <div class="shape-mockup spin  d-none d-xl-block" data-top="20%" data-left="12%"><img
                    src="{{ asset('frontend-assets/img/shape/shape-1.png') }}" alt="">
        </div>
        <div class="shape-mockup moving  d-none d-xl-block" data-bottom="40%" data-left="5%"><img
                src="{{ asset('frontend-assets/img/shape/shape-7.png') }}" alt=""></div> --}}
    </section>
    <!--==============================
                Blog Area
                ==============================-->
    <section class="blog-area overflow-hidden bg-smoke2 space" id="blog-sec">
        <div class="container">
            <div class="title-area text-center">
                <!-- <div class="shadow-title">Blog</div> -->
                <!-- <span class="sub-title sub-title4 d-none">News & Blog</span> -->
                <h2 class="sec-title">Latest Release Blog & Articles</h2>
            </div>

            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="blogSlider3"
                    data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="blog-grid">
                                <div class="box-img global-img">
                                    <img src="{{ asset('frontend-assets/img/blog/blog_2_1.jpg') }}" alt="blog image">
                                </div>
                                <div class="box-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fa-light fa-calendar"></i>january 10,
                                            2025</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">Make more productive work
                                            flowin few steps.</a></h3>
                                    <a href="blog-details.html" class="line-btn th-icon">Read More <i
                                            class="fa-regular fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-grid">
                                <div class="box-img global-img">
                                    <img src="{{ asset('frontend-assets/img/blog/blog_2_2.jpg') }}" alt="blog image">
                                </div>
                                <div class="box-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fa-light fa-calendar"></i>january 10,
                                            2025</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">6 Tips for Personal Selling in
                                            that Guarantee Success</a></h3>
                                    <a href="blog-details.html" class="line-btn th-icon">Read More <i
                                            class="fa-regular fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-grid">
                                <div class="box-img global-img">
                                    <img src="{{ asset('frontend-assets/img/blog/blog_2_3.jpg') }}" alt="blog image">
                                </div>
                                <div class="box-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fa-light fa-calendar"></i>january 10,
                                            2025</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">8 Things About Web Design Your
                                            Boss Wants To Know</a></h3>
                                    <a href="blog-details.html" class="line-btn th-icon">Read More <i
                                            class="fa-regular fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-grid">
                                <div class="box-img global-img">
                                    <img src="{{ asset('frontend-assets/img/blog/blog_2_1.jpg') }}" alt="blog image">
                                </div>
                                <div class="box-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fa-light fa-calendar"></i>january 10,
                                            2025</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">How Chatbots Can Help You
                                            Drive More Sales</a></h3>
                                    <a href="blog-details.html" class="line-btn th-icon">Read More <i
                                            class="fa-regular fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-grid">
                                <div class="box-img global-img">
                                    <img src="{{ asset('frontend-assets/img/blog/blog_2_2.jpg') }}" alt="blog image">
                                </div>
                                <div class="box-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fa-light fa-calendar"></i>january 10,
                                            2025</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">6 Tips for Personal Selling in
                                            that Guarantee Success</a></h3>
                                    <a href="blog-details.html" class="line-btn th-icon">Read More <i
                                            class="fa-regular fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-grid">
                                <div class="box-img global-img">
                                    <img src="{{ asset('frontend-assets/img/blog/blog_2_3.jpg') }}" alt="blog image">
                                </div>
                                <div class="box-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="fa-light fa-calendar"></i>january 10,
                                            2025</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">8 Things About Web Design Your
                                            Boss Wants To Know</a></h3>
                                    <a href="blog-details.html" class="line-btn th-icon">Read More <i
                                            class="fa-regular fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <button data-slider-prev="#blogSlider3" class="slider-arrow style3 slider-prev"><i
                        class="far fa-arrow-left"></i></button>
                <button data-slider-next="#blogSlider3" class="slider-arrow style3 slider-next"><i
                        class="far fa-arrow-right"></i></button>
            </div>

        </div>
        <!-- <div class="shape-mockup spin d-none d-lg-block" data-top="5%" data-right="2%"><img src="{{ asset('frontend-assets/img/shape/shape-9.png') }}" alt=""></div> -->
        <!-- <div class="shape-mockup d-none d-lg-block" data-top="2%" data-left="0%"><img src="{{ asset('frontend-assets/img/shape/shape-13.png') }}" alt=""></div> -->
        <!-- <div class="shape-mockup d-none d-lg-block" data-bottom="0%" data-left="50%"><img src="{{ asset('frontend-assets/img/shape/shape-14.png') }}" alt=""></div> -->
    </section>

    <!--==============================
                Brand Area
                ==============================-->
    <div class="brand-area overflow-hidden">
        <div class="container th-container">
            <div class="slider-area text-center">
                <div class="swiper th-slider" id="brandSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"476":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"4"},"1400":{"slidesPerView":"6"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-item style2">
                                <a href="">
                                    <img class="original" src="https://placehold.co/400x100" alt="Brand Logo">
                                    <img class="gray" src="https://placehold.co/400x100" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item style2">
                                <a href="">
                                    <img class="original" src="https://placehold.co/400x100" alt="Brand Logo">
                                    <img class="gray" src="https://placehold.co/400x100" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item style2">
                                <a href="">
                                    <img class="original" src="https://placehold.co/400x100" alt="Brand Logo">
                                    <img class="gray" src="https://placehold.co/400x100" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item style2">
                                <a href="">
                                    <img class="original" src="https://placehold.co/400x100" alt="Brand Logo">
                                    <img class="gray" src="https://placehold.co/400x100" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item style2">
                                <a href="">
                                    <img class="original" src="https://placehold.co/400x100" alt="Brand Logo">
                                    <img class="gray" src="https://placehold.co/400x100" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item style2">
                                <a href="">
                                    <img class="original" src="https://placehold.co/400x100" alt="Brand Logo">
                                    <img class="gray" src="https://placehold.co/400x100" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item style2">
                                <a href="">
                                    <img class="original" src="https://placehold.co/400x100" alt="Brand Logo">
                                    <img class="gray" src="https://placehold.co/400x100" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item style2">
                                <a href="">
                                    <img class="original" src="https://placehold.co/400x100" alt="Brand Logo">
                                    <img class="gray" src="https://placehold.co/400x100" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item style2">
                                <a href="">
                                    <img class="original" src="https://placehold.co/400x100" alt="Brand Logo">
                                    <img class="gray" src="https://placehold.co/400x100" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item style2">
                                <a href="">
                                    <img class="original" src="https://placehold.co/400x100" alt="Brand Logo">
                                    <img class="gray" src="https://placehold.co/400x100" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item style2">
                                <a href="">
                                    <img class="original" src="https://placehold.co/400x100" alt="Brand Logo">
                                    <img class="gray" src="https://placehold.co/400x100" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item style2">
                                <a href="">
                                    <img class="original" src="https://placehold.co/400x100" alt="Brand Logo">
                                    <img class="gray" src="https://placehold.co/400x100" alt="Brand Logo">
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
=======
<style>
    /* .brand-item {
    width: 300px;
    height: 100px;
} */
</style>
@endsection
>>>>>>> f49bc012477f91eefa928b5170e74d0dd197d387