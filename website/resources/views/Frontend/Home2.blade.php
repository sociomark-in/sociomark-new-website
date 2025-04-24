@extends('Frontend.layout.app')
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!-- Plugin: TypewriterJS -->
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<!-- Plugin: TypewriterJS -->
@push('styles')
    <style>
        #home .about-area2 .sec-title {
            width: 67rem;
        }

        /* section3 */
        .according-img {
            opacity: 0;
            transform: scale(0.8);
            /* Start smaller */
            transition: all 0.6s ease;
            pointer-events: none;
            height: 0;
            overflow: hidden;
        }

        .according-list.item-active .according-img {
            transform: scale(1);
            height: fit-content;
        }

        /* Zoom in on hover */
        .hover-item:hover .according-img {
            opacity: 1;
            transform: scale(1);
            /* Zoom to normal size */
            pointer-events: auto;
            height: fit-content;
            overflow: visible;
        }

        #home #about-sec3 .box-title {
            line-height: 32px;
            font-size: 25px;
            letter-spacing: .10px;
            font-weight: 500;
            padding-left: 0px;
        }

        #home #about-sec3 .according-list {
            width: 100%;
        }

        @media (min-width: 768px) {
            #home #about-sec3 .according-list {
                width: 50%;
            }
        }

        #home #about-sec3 .th-btn,
        #home #about-sec5 .th-btn {
            padding: 15px 18px;
        }

        /* #home #about-sec3 .sec-para{
                                                                                                        font-weight: 400;
                                                                                                    } */
        #home #about-sec3 .accordion-item2 {
            max-width: 510px;
        }

        #home #about-sec3 .according-list .according-img {
            max-width: 700px;
        }

        #home #about-sec3 .accordion-item2 {
            padding-bottom: 15px;
        }

        #home #about-sec3 .accordion-item2 .box-title:before {
            width: 0px;

        }

        #home #about-sec3 .according-list.hover-item.item-active .accordion-item2 {
            border-bottom-color: #106c97;
        }

        /* section3 end */


        /* blog */
        #home #about-sec5 .box {
            padding: 28px 20px;
            border-radius: 10px;
        }

        #home #about-sec5 .blog-single.has-post-thumbnail {
            background-color: white !important;
        }

        #home #about-sec5 .box-blog,
        #home #about-sec5 .box-blog img {
            border-radius: 10px;
            box-shadow: 0px -2px 12px -1px rgba(0, 0, 0, 0.17);
            -webkit-box-shadow: 0px -2px 12px -1px rgba(0, 0, 0, 0.17);
            -moz-box-shadow: 0px -2px 12px -1px rgba(0, 0, 0, 0.17);
            border: none
        }

        #home #about-sec5 .content-padding {
            padding: 20px;
        }

        #home #about-sec5 .recent_post_title {
            font-size: 16px;
            line-height: 18px;
        }

        #home #about-sec5 .swiper-slide {
            height: auto;
        }

        #home #about-sec5 .category-filter {
            display: grid !important;
        }

        #home #about-sec5 .blog-title-text {
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



        /* contact form */
        #home #contact {
            padding: 30px;
        }

        /* contact form */
        #home #contact {
            padding: 30px;
        }

        /* contact form end */
        .tabbed-content .nav-pills .nav-link h3 {
            color: white !important;
            margin: 0;
        }

        .tabbed-content .nav-pills .nav-link.active {
            background-color: var(--theme-color);
        }
    </style>
@endpush

@section('content')
    <main id="home">
        {{-- Video Section --}}
        <section class="overflow-hidden video-heading height-full mb-md-3">
            <div class="content video-bg">
                <video class="w-100" autoplay muted loop>
                    <source src="{{ asset('frontend-assets/video.mp4') }}">
                </video>
            </div>
            <div class="content text-content">
                <div class="container h-100">
                    <div class="row h-100 justify-content-center align-items-center">
                        <div class="col-xxl-10 col-12">
                            <div class="big-title">
                                <h1 data-aos="fade-right" data-aos-duration="2000">
                                    <span>No Noise</span>
                                </h1>
                                <h1 data-aos="fade-right" data-aos-delay="2500" data-aos-duration="1000">
                                    <span class="text-orange">#JustResults</span>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @push('styles')
                <style>
                    #home .video-heading {
                        position: relative;
                    }

                    #home .video-heading::after {
                        position: absolute;
                        bottom: 0;
                        left: 0;
                        content: '';
                        width: 100%;
                        height: calc(max(20%, 10rem));
                        background: #000000;
                        background: linear-gradient(0deg, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 0) 90%);
                    }

                    #home .video-heading .content {
                        position: absolute;
                        height: 100vh;
                        width: 100%;
                    }

                    #home .video-heading .text-content {
                        z-index: 1;
                    }

                    #home .video-heading .video-bg {
                        position: absolute;
                        height: 100vh;
                        width: 100%;
                    }

                    #home .video-heading .video-bg video {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        object-position: center;
                    }
                </style>
            @endpush
        </section>

        {{-- About Section --}}
        <section class="choose-area" id="about-sec2">
            <div class="container">
                <div class="row g-4 g-md-5">
                    <div class="col-xl-6 pe-5">
                        <div class="title-area mb-20">
                            <h1 class="sec-title " data-aos="fade-right" data-aos-delay="300">A Bold Digital Marketing
                                Company
                                <span class="text-orange"> for Brands that Think Bigger</span>
                            </h1>
                        </div>
                        <p class="sec-para text-white-50" data-aos="fade-right" data-aos-delay="300">We're more than just a
                            <strong>digital marketing agency</strong>—we're your creative and strategic partners in the
                            digital realm.
                            From crafting high-performing websites to executing smart SEO strategies, running impactful ad
                            campaigns and managing your brand's social presence, we do it all with purpose.
                            Our mission is to help your business grow, connect and stand
                            out in a crowded digital world.

                        </p>
                        <a href="" class="th-btn white-border th-icon th-radius">
                            Read More <i class="fa-solid fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                    <div class="col-xl-6" data-aos="fade-left">
                        <div class="choose-image">
                            <div class="rounded-overflow" data-tilt data-tilt-max="10">
                                <img loading="lazy" src="{{ asset('frontend-assets/img/team/home.jpg') }}" alt="The Team">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="counter-box-wrap">
                            <div class="row g-3 gx-5 text-center">
                                <div class="col-xxl-3 col-xl-4 col-lg-6 col-6">
                                    <div class="counter-box">
                                        <h3 class="box-number text-orange"><span class="counter-number">8</span>+</h3>
                                        <div class="media-body">
                                            <p class="text-white counter-text mb-n1">years</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-6 col-6">
                                    <div class="counter-box">
                                        <h3 class="box-number text-orange"><span class="counter-number">50</span>+</h3>
                                        <div class="media-body">
                                            <p class="text-white counter-text mb-n1">Employees</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-6 col-6">
                                    <div class="counter-box">
                                        <h3 class="box-number text-orange"><span class="counter-number">70</span>+</h3>
                                        <div class="media-body">
                                            <p class="text-white counter-text mb-n1">Brands</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-4 col-lg-6 col-6">
                                    <div class="counter-box">
                                        <h3 class="box-number text-orange"><span class="counter-number">200</span>+</h3>
                                        <div class="media-body">
                                            <p class="text-white counter-text mb-n1">Campaigns</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="overflow-hidden height-full mb-md-3">
            <div class="container h-100">
                <div class="row h-100 flex-row-reverse align-items-center">
                    <div class="col-xl-6" data-aos="fade-left" data-aos-delay="300">
                        <div class="choose-image">
                            <div class="rounded-overflow" data-tilt data-tilt-max="10">
                                <img loading="lazy" src="https://placehold.co/804x610" alt="Choose">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="big-title">
                            <h1 data-aos="fade-right" data-aos-duration="2000">
                                <span>No Noise</span>
                            </h1>
                            <h1 data-aos="fade-right" data-aos-delay="2500" data-aos-duration="1000">
                                <span class="text-white">Just</span>
                            </h1>
                            <h1 data-aos="fade-right" data-aos-delay="3000" data-aos-duration="1000">
                                <span class="text-white">Results</span>
                            </h1>
                        </div>
                    </div>

                </div>
            </div>
        </section> --}}

        @push('scripts')
            <script>
                const init = () => {
                    const marquee = document.querySelectorAll('.marquee')

                    if (!marquee) return

                    marquee.forEach(item => {
                        const marqueeInner = item.querySelector('.marquee__inner')
                        const marqueeContent = marqueeInner.querySelector('.marquee__content')

                        // Duration
                        const duration = item.getAttribute('data-marquee-duration')

                        // Element Clone
                        const marqueeContentClone = marqueeContent.cloneNode(true)
                        marqueeInner.append(marqueeContentClone)

                        // Marquee animation
                        const marqueeContentAll = marqueeInner.querySelectorAll('.marquee__content')
                        marqueeContentAll.forEach(element => {
                            gsap.to(element, {
                                x: "-101%",
                                repeat: -1,
                                duration: duration,
                                ease: 'linear'
                            })
                        })
                    })
                }

                document.addEventListener('DOMContentLoaded', init)
            </script>
        @endpush

        {{-- Video Scroll --}}
        <section class="about-area" id="about-sec">
            <div class="container-fluid overflow-hidden">
                <div class="row justify-content-center">
                    <div class="col-12 p-0">
                        <div class="img player-video" id="videoScaleDown">
                            {{-- <iframe width="100%" height="800"
                            src="https://www.youtube.com/embed/fUcECL2KLeg?controls=0&autoplay=1&mute=1"
                            title="Sociomark Showreel" frameborder="0" allow="autoplay;  picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                            <video class="w-100" autoplay muted loop>
                                <source src="{{ asset('frontend-assets/test_video.mp4') }}">
                            </video>
                        </div>
                        @push('scripts')
                            <script>
                                gsap.set("#videoScaleDown", {
                                        xPercent: 0,
                                        yPercent: 0,
                                        scale: 1.4,
                                    }),
                                    gsap.to("#videoScaleDown", {
                                        scale: 0.7,
                                        // x: "-10%",
                                        transformOrigin: "center",
                                        scrollTrigger: {
                                            trigger: "#videoScaleDown",
                                            start: "40% 50%",
                                            end: "+=1000",
                                            markers: true,
                                            pin: true,
                                            scrub: true
                                        }
                                    })
                            </script>
                        @endpush
                    </div>
                    <div class="col-12">
                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="space" id="about-sec3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="title-area text-center">
                            <h2 class="fw-bold mb-5 sec-title" data-aos="fade-up" data-aos-delay="100">
                                Services We Provide To <span class="text-orange"> Grow Your Brand’s</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="according-list-area">
                    <div class="according-list hover-item item-active">
                        <div class="accordion-item2">
                            <h3 class="box-title">Keyword research and localization</h3>
                        </div>
                        <div class="according-img">
                            <div class="rounded-overflow">
                                <img loading="lazy" src="{{ asset('frontend-assets/img/service/DM.png') }}" alt="">
                            </div>
                            <p class="sec-para text">Appeals to clients looking for innovative and creative digital
                                solutions,
                                positioning the agency as a leader in creativity. Conveys a collaborative approach,
                                suggesting that the agency works closely with clients to achieve their digital
                                goals.
                            </p>
                            <a href="" class="th-btn white-border th-icon th-radius">
                                Read More
                            </a>
                        </div>

                    </div>
                    <div class="according-list hover-item">
                        <div class="accordion-item2">
                            <h3 class="box-title">International website structure and URL optimization</h3>
                        </div>
                        <div class="according-img">
                            <div class="rounded-overflow">
                                <img loading="lazy" src="{{ asset('frontend-assets/img/service/SEO.png') }}" alt="">
                            </div>
                            <p class="sec-para text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde
                                reiciendis nesciunt perferendis dignissimos accusantium nostrum, laboriosam cupiditate
                                dolores tenetur blanditiis.
                            </p>
                            <a href="" class="th-btn white-border th-icon th-radius">
                                Read More </a>
                        </div>
                    </div>
                    <div class="according-list hover-item">
                        <div class="accordion-item2">
                            <h3 class="box-title">Multilingual content creation and translation</h3>
                        </div>
                        <div class="according-img">
                            <div class="rounded-overflow">
                                <img loading="lazy" src="{{ asset('frontend-assets/img/service/SEM.png') }}" alt="">
                            </div>
                            <p class="sec-para text">Appeals to clients looking for innovative and creative digital
                                solutions,
                                positioning the agency as a leader in creativity. Conveys a collaborative approach,
                                suggesting that the agency works closely with clients to achieve their digital
                                goals.
                            </p>
                            <a href="" class="th-btn white-border th-icon th-radius">
                                Read More </a>
                        </div>
                    </div>
                    <div class="according-list hover-item">
                        <div class="accordion-item2">
                            <h3 class="box-title">Hreflang implementation</h3>
                        </div>
                        <div class="according-img">
                            <div class="rounded-overflow">
                                <img loading="lazy" src="{{ asset('frontend-assets/img/service/VP.png') }}" alt="">
                            </div>
                            <p class="sec-para text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo
                                tempora adipisci provident, magnam cupiditate quod voluptatibus consequuntur eaque
                                voluptatem, animi totam repudiandae facilis facere quo tempore, ad laudantium ducimus sunt?
                            </p>
                            <a href="" class="th-btn white-border th-icon th-radius">
                                Read More </a>
                        </div>
                    </div>
                    <div class="according-list hover-item">
                        <div class="accordion-item2">
                            <h3 class="box-title">Country-specific domain or subdomain strategy</h3>
                        </div>
                        <div class="according-img">
                            <div class="rounded-overflow">
                                <img loading="lazy" src="{{ asset('frontend-assets/img/service/WD.png') }}" alt="">
                            </div>
                            <p class="sec-para text">Appeals to clients looking for innovative and creative digital
                                solutions,
                                positioning the agency as a leader in creativity. Conveys a collaborative approach,
                                suggesting that the agency works closely with clients to achieve their digital
                                goals.
                            </p>
                            <a href="" class="th-btn white-border th-icon th-radius">
                                Read More </a>
                        </div>
                    </div>
                    <div class="according-list hover-item">
                        <div class="accordion-item2">
                            <h3 class="box-title">International link building and outreach</h3>
                        </div>
                        <div class="according-img">
                            <div class="rounded-overflow">
                                <img loading="lazy" src="{{ asset('frontend-assets/img/service/DM.png') }}" alt="">
                            </div>
                            <p class="sec-para text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
                                similique modi accusantium odit recusandae laudantium, vel, illo rerum cum sequi, minima
                                eaque mollitia quos odio beatae iste nam temporibus accusamus.
                            </p>
                            <p class="sec-para text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
                                similique modi accusantium odit recusandae laudantium, vel, illo rerum cum sequi, minima
                                eaque mollitia quos odio beatae iste nam temporibus accusamus.
                            </p>
                            <a href="" class="th-btn white-border th-icon th-radius">
                                Read More </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-mockup spin d-none d-lg-block" data-top="5%" data-right="2%"><img loading="lazy"
                    src="assets/img/shape/shape-9.png" alt=""></div>
            <div class="shape-mockup d-none d-lg-block" data-top="2%" data-left="0%"><img loading="lazy"
                    src="assets/img/shape/shape-13.png" alt=""></div>
            <div class="shape-mockup d-none d-lg-block" data-bottom="0%" data-left="50%"><img loading="lazy"
                    src="assets/img/shape/shape-14.png" alt=""></div>
    </section> --}}

        {{-- Stripe --}}
        <div class="" style="padding: calc(max(5%, 2rem)) 0">
            <div class="marquee" data-marquee-duration="30">
                <div class="marquee__inner">
                    <div class="marquee__content">
                        <div class="content">
                            <span>Digital Marketing</span>
                            <span>Search Engine Optimization</span>
                            <span>Social Media Marketing</span>
                            <span>Website Development</span>
                            <span>Content Marketing</span>
                            <span>SEM</span>
                            <span>Photography & Video Production</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Services --}}
        <section class="space" id="about-sec3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="title-area text-center">
                            <h2 class="fw-bold mb-5 sec-title" data-aos="fade-up" data-aos-delay="100">
                                Effective Solutions <br>for <span id="workTitle" class="text-orange">Lasting
                                    Impressions</span>
                            </h2>
                        </div>
                        <script>
                            new Typewriter('#workTitle', {
                                strings: ['Lasting Impressions', 'Digital Marketing', 'Search Engine Optimization',
                                    'Social Media Marketing', 'Website Development', 'Content Marketing', 'SEM', 'Photography',
                                    'Video Production'
                                ],
                                autoStart: true,
                                loop: true,
                                cursor: "",
                            });
                        </script>
                    </div>
                </div>
                <div class="tabbed-content tab-dark">
                    <div class="row">
                        {{-- <div class="d-flex align-items-start"> --}}
                        <div class="col-lg-4">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-digital-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-digital" type="button" role="tab"
                                    aria-controls="v-pills-digital" aria-selected="true">
                                    <h3 class="sec-para">Digital Marketing</h3>
                                </button>
                                <button class="nav-link" id="v-pills-seo-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-seo" type="button" role="tab"
                                    aria-controls="v-pills-seo" aria-selected="false">
                                    <h3 class="sec-para">Search Engine Optimization</h3>
                                </button>
                                <button class="nav-link" id="v-pills-social-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-social" type="button" role="tab"
                                    aria-controls="v-pills-social" aria-selected="false">
                                    <h3 class="sec-para">Social Media Marketing</h3>
                                </button>
                                <button class="nav-link" id="v-pills-website-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-website" type="button" role="tab"
                                    aria-controls="v-pills-website" aria-selected="false">
                                    <h3 class="sec-para">Website Development</h3>
                                </button>
                                <button class="nav-link" id="v-pills-performance-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-performance" type="button" role="tab"
                                    aria-controls="v-pills-performance" aria-selected="false">
                                    <h3 class="sec-para">Performance Marketing</h3>
                                </button>
                                <button class="nav-link" id="v-pills-content-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-content" type="button" role="tab"
                                    aria-controls="v-pills-content" aria-selected="false">
                                    <h3 class="sec-para">Content Marketing</h3>
                                </button>
                                <button class="nav-link" id="v-pills-production-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-production" type="button" role="tab"
                                    aria-controls="v-pills-production" aria-selected="false">
                                    <h3 class="sec-para">Graphic Designing & Video Production</h3>
                                </button>

                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-digital" role="tabpanel"
                                    aria-labelledby="v-pills-digital-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <img loading="lazy"
                                                src="{{ asset('frontend-assets/img/service/DM_gray.jpg') }}"
                                                alt="" class="w-100 mt-4 service-image rounded-overflow">
                                        </div>
                                        <div class="col-12">
                                            <p class="text mt-3">Want to go viral and drive sales? Discover the strategies
                                                that turn browsers into buyers and brands into buzzwords.
                                            </p>
                                            <a href="" class="th-btn white-border th-icon th-radius">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-social" role="tabpanel"
                                    aria-labelledby="v-pills-social-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <img loading="lazy"
                                                src="{{ asset('frontend-assets/img/service/SM_gray.jpg') }}"
                                                alt="" class="w-100 mt-4 service-image rounded-overflow">
                                        </div>
                                        <div class="col-12">
                                            <p class="text mt-3">Don’t just show up—stand out. We turn your social feed
                                                into your strongest marketing weapon.
                                            </p>
                                            <a href="" class="th-btn white-border th-icon th-radius">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-seo" role="tabpanel"
                                    aria-labelledby="v-pills-seo-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <img loading="lazy"
                                                src="{{ asset('frontend-assets/img/service/SEO_gray.jpg') }}"
                                                alt="" class="w-100 mt-4 service-image rounded-overflow">
                                        </div>
                                        <div class="col-12">
                                            <p class="text mt-3">Struggling to show up on Google? We’ve cracked the code to
                                                page one rankings—and your competitors aren’t ready for it.
                                            </p>
                                            <a href="" class="th-btn white-border th-icon th-radius">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-website" role="tabpanel"
                                    aria-labelledby="v-pills-website-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <img loading="lazy"
                                                src="{{ asset('frontend-assets/img/service/WD_gray.jpg') }}"
                                                alt="" class="w-100 mt-4 service-image rounded-overflow">
                                        </div>
                                        <div class="col-12">
                                            <p class="text mt-3"> Is your website your best salesperson? If not, you’re
                                                losing money. We build websites that work 24/7 to grow your business.

                                            </p>
                                            <a href="" class="th-btn white-border th-icon th-radius">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-performance" role="tabpanel"
                                    aria-labelledby="v-pills-performance-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <img loading="lazy"
                                                src="{{ asset('frontend-assets/img/service/DM_gray.jpg') }}"
                                                alt="" class="w-100 mt-4 service-image rounded-overflow">
                                        </div>
                                        <div class="col-">
                                            <p class="text mt-3">Tired of burning the budget with zero ROI? Get campaigns
                                                that don’t just perform—they outperform. See how we make every click count.

                                            </p>
                                            <a href="" class="th-btn white-border th-icon th-radius">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-content" role="tabpanel"
                                    aria-labelledby="v-pills-content-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <img loading="lazy"
                                                src="{{ asset('frontend-assets/img/service/CM_gray.jpg') }}"
                                                alt="" class="w-100 mt-4 service-image rounded-overflow">
                                        </div>
                                        <div class="col-12">
                                            <p class="text mt-3">Content that pulls, persuades and performs. From blogs to
                                                banners—we make every word work for you.

                                            </p>
                                            <a href="" class="th-btn white-border th-icon th-radius">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-production" role="tabpanel"
                                    aria-labelledby="v-pills-production-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <img loading="lazy"
                                                src="{{ asset('frontend-assets/img/service/VP_gray.jpg') }}"
                                                alt="" class="w-100 mt-4 service-image rounded-overflow">
                                        </div>
                                        <div class="col-12">
                                            <p class="text mt-3">If it doesn’t stop the scroll, it’s not us. Let’s turn
                                                your brand into a visual story that people will remember.

                                            </p>
                                            <a href="" class="th-btn white-border th-icon th-radius">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="tab-pane fade" id="v-pills-video" role="tabpanel"
                                aria-labelledby="v-pills-video-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <img loading="lazy"
                                            src="{{ asset('frontend-assets/img/service/VP_gray.jpg') }}" alt=""
                                            class="w-100 service-image rounded-overflow">
                                    </div>
                                    <div class="col-12">
                                        <p class="text mt-3">Appeals to clients looking for innovative and creative
                                            digital
                                            solutions,
                                            positioning the agency as a leader in creativity. Conveys a collaborative
                                            approach,
                                            suggesting that the agency works closely with clients to achieve their
                                            digital
                                            goals.
                                        </p>
                                        <a href="" class="th-btn white-border th-icon th-radius">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- </div> --}}
                <script>
                    // $(document).ready(function() {
                    //     $("#about-sec3 .nav-link").mouseenter(function() {
                    //         $(this).tab('show');
                    //     });
                    // });
                </script>
            </div>
        </section>

        {{-- Portfolio --}}
        <section class="overflow-hidden position-relative space-extra-top space-bottom garally " id="portfolio-sec">
            <div class="container">
                <div class="title-area text-center mb-25">
                    <h2 class="fw-bold mb-5 sec-title" data-aos="fade-up" data-aos-delay="100">
                        Our <span class="text-orange"> Portfolio</span>
                    </h2>
                </div>
                {{-- <div class="filter-menu filter-menu-active mt-5 mb-4">
                <button data-filter="*" class="tab-btn active" type="button">All</button>
                <button data-filter=".cat1" class="tab-btn" type="button">Social Media</button>
                <button data-filter=".cat2" class="tab-btn" type="button">Development</button>
                <button data-filter=".cat3" class="tab-btn" type="button">Digital Creatives</button>
            </div> --}}
                <div class="portfolio-area">
                    <div class="row g-3 g-md-4 justify-content-center">
                        <div class="col-12 col-md-6 col-xl-3" data-aos="zoom-in" data-aos-delay="100">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <img loading="lazy"
                                            src="{{ asset('frontend-assets/img/portfolio/Mastercard.png') }}"
                                            class="w-100" alt="Team Cashless India" />
                                    </div>
                                    <div class="flip-box-back">
                                        <h4>Team Cashless India </h4>
                                        <p class="sec-para">Crafted in perfect sync with Mastercard’s signature
                                            circles—where every post was a swipe of seamless design.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3" data-aos="zoom-in" data-aos-delay="100">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <img loading="lazy" src="{{ asset('frontend-assets/img/portfolio/Nodwin.png') }}"
                                            class="w-100" alt="NODWIN Gaming" class="w-100" />
                                    </div>
                                    <div class="flip-box-back">
                                        <h4>NODWIN Gaming</h4>
                                        <p class="sec-para">From nostalgic 90s vibes to viral memes, our designs merged
                                            gaming culture with creative flair, making every campaign/series a high-score
                                            hit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3" data-aos="zoom-in" data-aos-delay="100">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <img loading="lazy"
                                            src="{{ asset('frontend-assets/img/portfolio/Shahenaz.png') }}"
                                            class="w-100" alt="Shahenaz" />
                                    </div>
                                    <div class="flip-box-back">
                                        <h4>Shahenaz</h4>
                                        <p class="sec-para">A grid as graceful as the brand—designed to drape your feed in
                                            elegance.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3" data-aos="zoom-in" data-aos-delay="100">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <img loading="lazy"
                                            src="{{ asset('frontend-assets/img/portfolio/Ayushakti.png') }}"
                                            class="w-100" alt="Ayushakti" />
                                    </div>
                                    <div class="flip-box-back">
                                        <h4>Ayushakti</h4>
                                        <p class="sec-para">Healing through design—our creatives spoke the language of
                                            trust, care and Ayurveda.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3" data-aos="zoom-in" data-aos-delay="100">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <img loading="lazy" src="{{ asset('frontend-assets/img/portfolio/Jivana.png') }}"
                                            class="w-100" alt="Jivana" />
                                    </div>
                                    <div class="flip-box-back">
                                        <h4>Jivana</h4>
                                        <p class="sec-para">Captured the essence of authenticity, turning everyday
                                            ingredients into visual delights.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3" data-aos="zoom-in" data-aos-delay="100">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <img loading="lazy" src="{{ asset('frontend-assets/img/portfolio/TPC.png') }}"
                                            class="w-100" alt="The Professional Couriers" />
                                    </div>
                                    <div class="flip-box-back">
                                        <h4>The Professional Couriers</h4>
                                        <p class="sec-para">We kept it clean, clear and customer-first—just like their
                                            deliveries.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3" data-aos="zoom-in" data-aos-delay="100">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <img loading="lazy" src="{{ asset('frontend-assets/img/portfolio/Euro.png') }}"
                                            class="w-100" alt="EURO" />
                                    </div>
                                    <div class="flip-box-back">
                                        <h4>EURO</h4>
                                        <p class="sec-para">Styled comfort with star power—our creatives echoed Kartik
                                            Aaryan's charisma.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-3" data-aos="zoom-in" data-aos-delay="100">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <img loading="lazy" src="{{ asset('frontend-assets/img/portfolio/Jop.png') }}"
                                            class="w-100" alt="JOP Group" />
                                    </div>
                                    <div class="flip-box-back">
                                        <h4>JOP Group</h4>
                                        <p class="sec-para">Visualized spaces that speak—our designs mirrored JOP's
                                            architectural elegance. Crafted visuals that captured the essence of modern
                                            living and timeless design.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <style>
            .flip-box-front img {
                object-position: top;
            }

            .flip-box-front {
                background-color: black;
            }
        </style>
        {{-- Stripe --}}
        <div class="" style="padding: calc(max(5%, 2rem)) 0">
            <div class="marquee" data-marquee-duration="30">
                <div class="marquee__inner">
                    <div class="marquee__content">
                        <div class="content">
                            <span>Digital Marketing</span>
                            <span>Search Engine Optimization</span>
                            <span>Social Media Marketing</span>
                            <span>Website Development</span>
                            <span>Content Marketing</span>
                            <span>SEM</span>
                            <span>Photography & Video Production</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Testimonials --}}
        <section class="overflow-hidden position-relative space-extra-top space-bottom garally" id="testi-sec">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="title-area text-center">
                            <h2 class="fw-bold sec-title my-3" data-aos="fade-up" data-aos-delay="100">
                                <span class="text-orange">Client Satisfaction</span><br> our favourite kind of ROI
                            </h2>

                        </div>

                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xxl-7 col-xl-9 col-md-10 col-12">
                        <div class="slider-area">
                            <div class="swiper testimonial testimonialSwiper th-slider has-shadow">
                                <div class="swiper-wrapper">

                                    <div class="swiper-slide testimonial-card">
                                        <div class=" ">
                                            {{-- <div class="box-review">
                                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star"></i>
                                                </div> --}}
                                            <div class="sec-para">
                                                <div class="testimonial-message mb-3 mb-md-4">
                                                    <p class="">
                                                        Ever since we started working with Sociomark, <strong>our return on
                                                            investment on marketing have significantly improved, almost
                                                            doubled</strong>. Sociomark is literally <strong>our partner in
                                                            digital marketing</strong>.
                                                    </p>
                                                    <div class="d-none d-md-block">
                                                        They help us in creating a robust marketing strategy. They also
                                                        create those creatives which raise people's eyeballs when they watch
                                                        it on social media and the likes are only increasing month and month
                                                        because of that. Sociomark is so committed that they always deliver
                                                        what they promise each month. I am extremely happy working with
                                                        them. <strong> Best of luck Sociomark! </strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-wrapp">
                                                <div class="box-profile">
                                                    <div class="box-author">
                                                        <img loading="lazy"
                                                            src="https://ui-avatars.com/api/?name=Smita%20Naram"
                                                            alt="Avater">
                                                    </div>
                                                    <div class="box-info">
                                                        <h3 class="box-title text-black">Dr. Smita Naram</h3>
                                                        <span class="box-desig text-black">Founder, Ayushakti
                                                            Ayurveda</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide testimonial-card">
                                        <div class=" ">
                                            <div class="sec-para">
                                                <div class="testimonial-message mb-3 mb-md-4">
                                                    <p class="">
                                                        Working with SocioMark for about 3 years now. <strong> Lovely people
                                                            to work with.</strong>.
                                                    </p>
                                                    <div class="d-none d-md-block">
                                                        They have hardly ever missed any deadlines.The best part about them
                                                        is that they no longer feel like an external agency but someone who
                                                        is a part of Network18 group.We know whenever we are in trouble or
                                                        that late night call for an urgent creative SocioMark will always be
                                                        there.They have set benchmarks for others by their creative work
                                                        done for the Road to safety campaign.</strong>
                                                    </div>
                                                    <strong class="text-black">Best of luck Sociomark!</strong>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="box-wrapp">
                                                <div class="box-profile">
                                                    <div class="box-author">
                                                        <img loading="lazy"
                                                            src="https://ui-avatars.com/api/?name=Apurva%20Shah"
                                                            alt="Avater">
                                                    </div>
                                                    <div class="box-info">
                                                        <h3 class="box-title text-black">Apurva Shah</h3>
                                                        <span class="box-desig text-black">AGM, Marketing</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide testimonial-card">
                                        <div class=" ">
                                            <div class="sec-para">
                                                <div class="testimonial-message mb-3 mb-md-4">
                                                    <p class="">
                                                        Its a pleasure working with Sociomark for social media marketing of
                                                        our brand GrillBox through Facebook and Instagram.
                                                    </p>
                                                    <div class="d-none d-md-block">
                                                        Sociomark helped us to reach many users through their creative
                                                        contents. They were easy to work with and were flexible with meeting
                                                        our needs.
                                                    </div>
                                                    <strong class="text-black">Best of luck Sociomark!</strong>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="box-wrapp">
                                                <div class="box-profile">
                                                    <div class="box-author">
                                                        <img loading="lazy"
                                                            src="https://ui-avatars.com/api/?name=Shafeeq%20Mareen"
                                                            alt="Avater">
                                                    </div>
                                                    <div class="box-info">
                                                        <h3 class="box-title text-black">Shafeeq Mareen</h3>
                                                        <span class="box-desig text-black">Founder, GrillBox</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide testimonial-card">
                                        <div class=" ">
                                            <div class="sec-para">
                                                <div class="testimonial-message mb-3 mb-md-4">
                                                    <p class="">
                                                        Sociomark team is absolutely very professional in their work yet
                                                        bring in high flexibility in terms of ownership in delivery.
                                                    </p>
                                                    <div class="d-none d-md-block">
                                                        All the tasks and works are delivered with utmost commitment and
                                                        dedication and on time. they never said no and always valued and
                                                        worked on our feedbacks we have had a long term engagement with them
                                                        and they are an absolute pleasure to work with!
                                                    </div>
                                                    <strong class="text-black">Best of luck Sociomark!</strong>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="box-wrapp">
                                                <div class="box-profile">
                                                    <div class="box-author">
                                                        <img loading="lazy"
                                                            src="https://ui-avatars.com/api/?name=Siju%20Thomas"
                                                            alt="Avater">
                                                    </div>
                                                    <div class="box-info">
                                                        <h3 class="box-title text-black">Siju Thomas</h3>
                                                        <span class="box-desig text-black">CEO, The Professional
                                                            Couriers</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @push('scripts')
                    <script>
                        new Swiper(".testimonialSwiper", {
                            effect: "cards",
                            grabCursor: true,
                            autoplay: {
                                delay: 5000,
                                disableOnInteraction: false,
                            },
                        })
                    </script>
                @endpush
            </div>
        </section>

        {{-- PR Agents --}}
        <section class="space-extra-top space-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="title-area text-center">
                            <h2 class="fw-bold sec-title my-3" data-aos="fade-up" data-aos-delay="100">
                                Always in the <span class="text-orange">news</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="swiper prSwiper">
                            <div class="swiper-wrapper">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="swiper-slide">
                                        <a href="">
                                            <img src="https://placehold.co/200x100" alt="Logo" class="w-100">
                                        </a>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                    @push('scripts')
                        <script>
                            new Swiper(".prSwiper", {
                                slidesPerView: 6,
                                spaceBetween: 20,
                            })
                        </script>
                    @endpush
                </div>
            </div>
        </section>

        {{-- Blogs --}}
        <section class="th-blog-wrapper space-top space-extra-bottom" id="about-sec5">
            <div class="container">
                <div class="title-area text-center mb-25">
                    <h2 class="fw-bold sec-title my-3" data-aos="fade-up" data-aos-delay="100">
                        <span class="text-orange">Sociopedia</span><br>A library to go beyond the brief
                    </h2>
                </div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($blogs as $blog)
                            <div class="swiper-slide">
                                <div class="box-blog th-blog blog-single has-post-thumbnail">
                                    <div class="blog-img box-blog">
                                        <a href="{{ route('blog-inner', ['slug' => $blog->slug]) }}">
                                            <img loading="lazy"
                                                src="{{ url('storage/app/public/' . ($blog->images[0] ?? 'default.jpg')) }}"
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
                                            class="th-btn white-border th-icon th-radius">
                                            Read More <i class="fa-solid fa-arrow-right ms-2"></i>
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

        {{-- Contact --}}
        @push('scripts')
            <script>
                $(window).resize(function() {
                    /*Bind an event handler to the "resize"*/
                    if ($(window).width() < 786 || $(window).height() < 480) {
                        gsap.to("#contact", {
                            onStart: () => {
                                console.log("Started");
                                new bootstrap.Modal(document.getElementById("homeContactModal"), {}).show();
                            },
                            scrollTrigger: {
                                trigger: "#contact",
                                start: "0% 50%",
                                end: "+=1",
                                markers: true,
                                pin: true,
                                scrub: true
                            }
                        })
                    }
                })
            </script>
        @endpush
        <section class="th-blog-wrapper bg-white text-black space-top space-extra-bottom" id="contact">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-5 pe-md-5">
                        <div class="title-area mb-20">
                            <h2 class="sec-title text-black" data-aos="fade-right" data-aos-delay="100">Start the
                                Conversation, <span class="text-blue"> Spark the Change </span></h2>
                        </div>
                        <p class="sec-para mb-35 " data-aos="fade-right" data-aos-delay="100">Whether it’s a big brief or
                            a tiny thought, we’d love to hear what’s on your mind.
                        </p>


                    </div>
                    <div class="col-lg-7 d-none d-lg-block">
                        <form action="{{ route('contact.store') }}" method="POST" class="contact-form style2">
                            @csrf
                            <div class="row g-3">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" id="name" placeholder="Enter your Name"
                                        value="{{ old('name') }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    {{-- <i class="far fa-envelope"></i> --}}
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                        name="email" id="email" placeholder="Enter your Email"
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    {{-- <i class="fal fa-phone"></i> --}}
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                        name="phone" id="phone" placeholder="Enter your Phone"
                                        value="{{ old('phone') }}">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">

                                    <label for="service">Service you want?</label>
                                    <select class="form-select @error('service') is-invalid @enderror" id="service"
                                        name="service">
                                        <option selected disabled>Choose an option</option>
                                        <option value="Search Engine Optimization">Search Engine Optimization</option>
                                        <option value="Website Development">Website Development</option>
                                        <option value="Social Media">Social Media</option>
                                        <option value="Digital Marketing">Digital Marketing</option>
                                        <option value="Conetnt Marketing">Conetnt Marketing</option>
                                        <option value="SEM">SEM</option>
                                        <option value="Photography & Video Production">Photography & Video Production
                                        </option>
                                    </select>

                                    @error('service')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">

                                    <label for="budget">Marketing Budget</label>
                                    <select class="form-select @error('budget') is-invalid @enderror" id="budget"
                                        name="budget">
                                        <option selected disabled>Choose an option</option>
                                        <option value="Under ₹ 25000">Under ₹ 25000</option>
                                        <option value="₹ 25,000 - ₹ 1,00,000">₹ 25,000 - ₹ 1,00,000</option>
                                        <option value="Above ₹ 1,00,000">Above ₹ 1,00,000</option>
                                        <option value="Have not Estimated Yet">Have not Estimated Yet</option>
                                    </select>
                                    @error('budget')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">

                                    <label for="aboutUs">How did you hear about Us?</label>
                                    <select class="form-select @error('aboutUs') is-invalid @enderror" id="aboutUs"
                                        name="aboutUs">
                                        <option selected disabled>Choose an option</option>
                                        <option value="Through Search Engines(Google, Bing etc.)">Through Search
                                            Engines(Google, Bing etc.)</option>
                                        <option value="Social Media(Facebook, Instagram etc.)">Social Media(Facebook,
                                            Instagram etc.)</option>
                                        <option value="Word of Mouth/ Referral">Word of Mouth/ Referral</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    @error('aboutUs')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-12">

                                    <label for="messageforus">Your Message</label>
                                    <textarea class="form-control @error('messageforus') is-invalid @enderror" id="messageforus"
                                        placeholder="Enter your message" rows="4" name="messageforus"></textarea>
                                    {{-- <i class="fal fa-pencil"></i> --}}
                                    @error('messageforus')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 form-group mb-0 text-center">
                                    <button class="th-btn th-radius">Submit Message</button>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="col-12 d-block d-md-none">
                        <button class="th-btn th-radius" data-bs-toggle="modal"
                            data-bs-target="#homeContactModal">Contact Us</button>
                    </div>
                </div>
            </div>
        </section>

        <style>
            label {
                font-weight: 600;
            }
        </style>
        <div class="modal fade" id="homeContactModal" tabindex="-1" aria-labelledby="homeContactModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="homeContactModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body contact-form style2">
                        <form action="{{ route('contact.store') }}" method="POST" class="">
                            @csrf
                            <div class="row g-2">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" id="name" placeholder="Enter your Name"
                                        value="{{ old('name') }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    {{-- <i class="far fa-envelope"></i> --}}
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                        name="email" id="email" placeholder="Enter your Email"
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    {{-- <i class="fal fa-phone"></i> --}}
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                        name="phone" id="phone" placeholder="Enter your Phone"
                                        value="{{ old('phone') }}">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">

                                    <label for="service">Service you want?</label>
                                    <select class="form-select @error('service') is-invalid @enderror" id="service"
                                        name="service">
                                        <option selected disabled>Choose an option</option>
                                        <option value="Search Engine Optimization">Search Engine Optimization</option>
                                        <option value="Website Development">Website Development</option>
                                        <option value="Social Media">Social Media</option>
                                        <option value="Digital Marketing">Digital Marketing</option>
                                        <option value="Conetnt Marketing">Conetnt Marketing</option>
                                        <option value="SEM">SEM</option>
                                        <option value="Photography & Video Production">Photography & Video Production
                                        </option>
                                    </select>

                                    @error('service')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">

                                    <label for="budget">Marketing Budget</label>
                                    <select class="form-select @error('budget') is-invalid @enderror" id="budget"
                                        name="budget">
                                        <option selected disabled>Choose an option</option>
                                        <option value="Under ₹ 25000">Under ₹ 25000</option>
                                        <option value="₹ 25,000 - ₹ 1,00,000">₹ 25,000 - ₹ 1,00,000</option>
                                        <option value="Above ₹ 1,00,000">Above ₹ 1,00,000</option>
                                        <option value="Have not Estimated Yet">Have not Estimated Yet</option>
                                    </select>
                                    @error('budget')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">

                                    <label for="aboutUs">How did you hear about Us?</label>
                                    <select class="form-select @error('aboutUs') is-invalid @enderror" id="aboutUs"
                                        name="aboutUs">
                                        <option selected disabled>Choose an option</option>
                                        <option value="Through Search Engines(Google, Bing etc.)">Through Search
                                            Engines(Google, Bing etc.)</option>
                                        <option value="Social Media(Facebook, Instagram etc.)">Social Media(Facebook,
                                            Instagram etc.)</option>
                                        <option value="Word of Mouth/ Referral">Word of Mouth/ Referral</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    @error('aboutUs')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-12">

                                    <label for="messageforus">Your Message</label>
                                    <textarea class="form-control @error('messageforus') is-invalid @enderror" id="messageforus"
                                        placeholder="Enter your message" rows="4" name="messageforus"></textarea>
                                    {{-- <i class="fal fa-pencil"></i> --}}
                                    @error('messageforus')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 form-group mb-0 text-center">
                                    <button class="th-btn th-radius">Submit Message</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                // when window width is >= 0px
                0: {
                    slidesPerView: 1,
                },
                // when window width is >= 768px
                768: {
                    slidesPerView: 2,
                },
                // when window width is >= 992px
                992: {
                    slidesPerView: 3,
                }
            }
        });
        // services tab
        const tabTriggers = document.querySelectorAll('[data-bs-toggle="pill"]');

        tabTriggers.forEach(trigger => {
            trigger.addEventListener('shown.bs.tab', (event) => {
                const targetPaneId = event.target.getAttribute('data-bs-target');
                const targetPane = document.querySelector(targetPaneId);

                // Animate text content
                const textCols = targetPane.querySelectorAll('.col-lg-6.col-12.side-padding-mbl');
                textCols.forEach(col => {
                    col.classList.remove('animate-slide-in-right');
                    void col.offsetWidth;
                    col.classList.add('animate-slide-in-right');
                });

                // Animate images
                const images = targetPane.querySelectorAll('.page-img img');
                if (images.length === 1) {
                    images[0].classList.remove('animate-zoom-in');
                    void images[0].offsetWidth;
                    images[0].classList.add('animate-zoom-in');
                } else if (images.length === 2) {
                    images[0].classList.remove('animate-slide-in-left');
                    images[1].classList.remove('animate-slide-in-right');
                    void images[0].offsetWidth; // force reflow
                    void images[1].offsetWidth;
                    images[0].classList.add('animate-slide-in-left');
                    images[1].classList.add('animate-slide-in-right');
                }
            });
        });
        // services tab end
    </script>
@endpush
