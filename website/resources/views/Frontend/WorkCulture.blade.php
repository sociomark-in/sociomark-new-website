@extends('Frontend.layout.app')
<!-- Plugin: LightGallery -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lightgallery-bundle.min.css"
    integrity="sha512-nUqPe0+ak577sKSMThGcKJauRI7ENhKC2FQAOOmdyCYSrUh0GnwLsZNYqwilpMmplN+3nO3zso8CWUgu33BDag=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.min.js"
    integrity="sha512-jEJ0OA9fwz5wUn6rVfGhAXiiCSGrjYCwtQRUwI/wRGEuWRZxrnxoeDoNc+Pnhx8qwKVHs2BRQrVR9RE6T4UHBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.umd.min.js"
    integrity="sha512-VOQBxCIgNssJrB8+irZF7L8MvfpAshegc36C3H5QD7vmibXM4uCNaqJIaSNatD2z2ZQQJSx0k+q+m+xsSPp4Xw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/thumbnail/lg-thumbnail.umd.min.js"
    integrity="sha512-dc8xJSGs0ib9uo0fLT/v4wp2LG7+4OSzc+UpFiIKiv6QP/e4hZH/S8manUCTtO3tNVGzcje8uJjSdL+NH29blQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/zoom/lg-zoom.umd.min.js"
    integrity="sha512-OUF2jbRheQR5yXPCvXN71udWa5cvwPf+shcXM+5GrW1vtNurTn7az8LCP3hS50gm17ULXdh3cdkhiPa0Qqyczw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Plugin: LightGallery -->

<style>
    #work-culture #about-sec {
        padding: 8px;
    }

    #work-culture .about-area2 .sec-para,
    #key-point-about-us .sec-para {
        line-height: 28px !important;
        font-size: 20px !important;
        letter-spacing: .10px !important;
        color: #797E88 !important;
    }

    /* key-point section 2 start */
    #key-point-about-us {
        background-color: #F5F5F5;
        padding: 90px 0px;
    }

    #key-point-about-us .card {
        position: relative;
        transition: all 0.3s ease;
        border-radius: 20px;
        /* box-shadow: 0 4px 8px rgba(0,0,0,0.1); */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border: 2px solid transparent;
        padding: 20px 30px;
        height: 140px;
    }

    .card::before,
    .card::after {
        content: '';
        position: absolute;
        width: 50px;
        height: 2px;
        /* background-color: #106c97; */
        background: linear-gradient(45deg, #0a415a, #106c97);

        transition: width 0.3s ease;
        border-radius: 20px;
    }

    .card::before {
        top: 0;
        right: 0;
        border-top-right-radius: 20px;
    }

    .card::after {
        bottom: 0;
        left: 0;
        border-bottom-left-radius: 20px;
    }

    .card:hover::before,
    .card:hover::after {
        width: 100%;
    }

    #key-point-about-us .card-top-left,
    #key-point-about-us .card-bottom-right {
        position: absolute;
        width: 2px;
        height: 50px;
        /* background-color: #106c97; */
        background: linear-gradient(45deg, #0a415a, #106c97);
        transition: height 0.3s ease;
        border-radius: 20px;
    }

    #key-point-about-us .card-top-left {
        bottom: 0;
        left: 0;
        border-top-left-radius: 20px;
    }

    #key-point-about-us .card-bottom-right {
        top: 0;
        right: 0;
        border-bottom-right-radius: 20px;
    }

    #key-point-about-us .card:hover .card-top-left,
    #key-point-about-us .card:hover .card-bottom-right {
        height: 100%;
    }

    #key-point-about-us .card-icon {
        font-size: 40px;
        color: #106c97;
    }

    #key-point-about-us .card-title {
        font-weight: bold;
        text-align: left;
        font-size: 1.35rem;
    }

    #key-point-about-us .card-text {
        font-size: 16px;
        line-height: 1.50;
        text-align: left;
    }

    #key-point-about-us .position-absolute-img {
        position: absolute;
        top: -30px;
        /* z-index: 200; */
        background: antiquewhite;
        padding: 1rem;
        border-radius: 10px;
        transition: all 0.3s ease;
        border: 1px solid gainsboro;
    }

    #key-point-about-us .card:hover .position-absolute-img {
        background: antiquewhite;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border: 2px solid transparent;

    }

    #key-point-about-us .position-absolute-text {
        position: absolute;
        /* bottom: 11px; */
        bottom: 25px;
    }

    @media only screen and (max-width: 600px) {
        #key-point-about-us {
            padding: 50px 0px;
        }
    }

    /* key point section 2 end */

    /* gallary :start */

    #portfolio-sec {
        padding-top: 20px;
    }

    .garally .filter-menu .tab-btn.active {
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

    .garally .filter-menu .tab-btn {
        border-radius: 27px !important;
        padding: 10px 25px !important;
        /* box-shadow: 0 4px 8px rgba(0,0,0,0.1); */
        border: 1px solid black;
        outline: none;
        /* border: 2px solid transparent; */
    }

    .garally .filter-menu .tab-btn:not(:last-child):before {
        height: 0px;
    }

    .garally .garally-row-height {
        height: 748px;
    }

    .portfolio-area {}

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

    .portfolio-area .filter-item{
        width: clamp(150px, 25%, 300px)
    }


    /* gallary end */
</style>
@section('content')
    <main id="work-culture">
        <section>
            <div class="full-width">
                <picture>
                    <source media="(min-width: 1400px)" srcset="{{ asset('frontend-assets/img/banners/work.jpg') }}">
                    <img src="{{ asset('frontend-assets/img/banners/work.jpg')}}" alt="">
                </picture>
            </div>
        </section>
        <section class="overflow-hidden space">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content breadcrumb-light">
                            <h1 class="breadcumb-title">Work Culture</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li>Work Culture</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-area2 mb-md-5 mt-md-5 mt-0 md-0 overflow-hidden space" id="about-sec">
            <div class="container">
                <div class="row flex-row-reverse align-items-center">
                    <div class="col-lg-6 mb-30 mb-xl-0">
                        <div class="imgBox img-box2 me-xl-4 mt-lg-60" data-aos="fade-right" data-aos-delay="100">
                            <div class="img1 th-anim mb-35">
                                <img src="{{ asset('https://placehold.co/500x500') }}" class="w-100" alt="About">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="">
                            <div class="title-area mb-35">
                                <span class="sub-title sub-title4 style1 mb-4 mb-md-5">Why Choose Sociomark</span>
                                <h2 class="sec-title ">Your <span class="text-blue">Trusted Partner</span> for Global
                                    Digital Success</h2>
                                <p class="mb-30">With over 29 years of experience, Saor has a deep understanding of the
                                    digital landscape and a proven track record of success. Conveys a collaborative
                                    approach, suggesting that the agency works closely with clients.</p>

                                <a href="{{ route('about') }}" class="th-btn th-icon">About Us<i
                                        class="fa-solid fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="key-point-about-us mb-md-5 mb-3 d-none" id="key-point-about-us">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-4 pe-md-5">
                        <div class="row gy-4 flex-column">
                            <div class="">
                                <div class="media-body">
                                    <h2 class="box-title" data-aos="fade-down" data-aos-delay="100">
                                        <span class="text-themeRed text-xl md:text-3xl font-medium">What Make</span><br>
                                        <span
                                            class="text-themeBlue text-xl md:text-5xl font-semibold sec-title text-blue">Us
                                            Special?</span>
                                    </h2>
                                    <p class="sec-para" data-aos="fade-down" data-aos-delay="100">Experience, Expertise, and
                                        an Excellent team fuel our growth and make us unique. Our passion for building
                                        long-lasting partnerships with our clients makes us a forerunner in digital
                                        marketing.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 mt-5 mt-md-0">
                        <div class="row justify-content-center gx-4 gy-5 ">
                            <!-- Card 1 -->
                            <div class="col-md-4 col-6">
                                <div class="card text-center" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="card-top-left"></div>
                                    <div class="card-bottom-right"></div>
                                    <div class="position-absolute-img">
                                        <img src="{{ asset('frontend-assets/img/ourCulture/1.png') }}" alt="">
                                    </div>
                                    <div class="position-absolute-text">
                                        <h5 class="card-title">24/7 Support</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="col-md-4 col-6">
                                <div class="card text-center" data-aos="zoom-in" data-aos-delay="400">
                                    <div class="card-top-left"></div>
                                    <div class="card-bottom-right"></div>
                                    <div class="position-absolute-img" style="background-color: rgb(255 235 245);">
                                        <img src="{{ asset('frontend-assets/img/ourCulture/2.png') }}" alt="">
                                    </div>
                                    <div class="position-absolute-text">
                                        <h5 class="card-title">Top Guide</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="col-md-4 col-6">
                                <div class="card text-center" data-aos="zoom-in" data-aos-delay="500">
                                    <div class="card-top-left"></div>
                                    <div class="card-bottom-right"></div>
                                    <div class="position-absolute-img" style="background-color: rgb(252 243 233);">
                                        <img src="{{ asset('frontend-assets/img/ourCulture/3.png') }}" alt="">
                                    </div>
                                    <div class="position-absolute-text">
                                        <h5 class="card-title">Best Course</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 4 -->
                            <div class="col-md-4 col-6">
                                <div class="card text-center" data-aos="zoom-in" data-aos-delay="600">
                                    <div class="card-top-left"></div>
                                    <div class="card-bottom-right"></div>
                                    <div class="position-absolute-img" style="background-color: rgb(238 251 229);">
                                        <img src="{{ asset('frontend-assets/img/ourCulture/4.png') }}" alt="">
                                    </div>
                                    <div class="position-absolute-text">
                                        <h5 class="card-title">24/7 Support</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 5 -->
                            <div class="col-md-4 col-6">
                                <div class="card text-center" data-aos="zoom-in" data-aos-delay="700">
                                    <div class="card-top-left"></div>
                                    <div class="card-bottom-right"></div>
                                    <div class="position-absolute-img" style="background-color: rgb(252 243 233);">
                                        <img src="{{ asset('frontend-assets/img/ourCulture/5.png') }}" alt="">
                                    </div>
                                    <div class="position-absolute-text">
                                        <h5 class="card-title">Top Guide</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 6 -->
                            <div class="col-md-4 col-6">
                                <div class="card text-center" data-aos="zoom-in" data-aos-delay="800">
                                    <div class="card-top-left"></div>
                                    <div class="card-bottom-right"></div>
                                    <div class="position-absolute-img">
                                        <img src="{{ asset('frontend-assets/img/ourCulture/6.png') }}" alt="">
                                    </div>
                                    <div class="position-absolute-text">
                                        <h5 class="card-title">Best Course</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="space">
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-8">
                        <div class="title-area text-center">
                            <div class="shadow-title">Journey</div>
                            <span class="sub-title sub-title4 mb-4 mb-md-5">Our Journey<span></span></span>
                            <h2 class="sec-title  ">From Brief to <span class="text-blue">Brilliance</span></h2>
                        </div>
                    </div>
                </div>
                <div class="step-wrap">
                    <div class="process-mobile d-block d-md-none">
                        <div class="row gy-3 gy-md-5">
                            @for ($i = 2025; $i > 2017; $i--)
                                <div class="col-xl-6">
                                    <div class="process-card">
                                        <div class="box-wrapp justify-content-start gap-2">
                                            <div class="box-icon">
                                                <img src="{{ asset('frontend-assets/img/icon/process_1_1.svg') }}"
                                                    alt="icon">
                                            </div>
                                            <div class="box-shape"><img
                                                    src="{{ asset('frontend-assets/img/icon/arrow.png') }}"
                                                    alt=""></div>
                                            <div class="box-number">
                                                {{ $i }} </div>
                                        </div>
                                        <div class="box-content">
                                            <h2 class="box-title">Lorem ipsum dolor sit amet.</h2>
                                            <p class="box-text">
                                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident, esse
                                                veniam unde tempora, quaerat ex modi quidem delectus quas velit, autem eum
                                                cumque eos dolore. Possimus ullam unde cum quod.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="process-mobile d-none d-md-block">
                        <div class="swiper journeySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="process-card">
                                        <div class="box-wrapp justify-content-start gap-2">
                                            <div class="box-icon">
                                                <img src="{{ asset('frontend-assets/img/icon/process_1_1.svg') }}"
                                                    alt="icon">
                                            </div>
                                            <div class="box-shape"><img
                                                    src="{{ asset('frontend-assets/img/icon/arrow.png') }}"
                                                    alt=""></div>
                                            <div class="box-number">
                                                2017 </div>
                                        </div>
                                        <div class="box-content">
                                            {{-- <h2 class="box-title">Lorem ipsum dolor sit amet.</h2> --}}
                                            <p class="box-text">Along with 2 employees, started in a co-working space</p>
                                            <p class="box-text">Shifted to a mezzanine floor office in the same year</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="process-card">
                                        <div class="box-wrapp justify-content-start gap-2">
                                            <div class="box-icon">
                                                <img src="{{ asset('frontend-assets/img/icon/process_1_1.svg') }}"
                                                    alt="icon">
                                            </div>
                                            <div class="box-shape"><img
                                                    src="{{ asset('frontend-assets/img/icon/arrow.png') }}"
                                                    alt=""></div>
                                            <div class="box-number">
                                                2018 </div>
                                        </div>
                                        <div class="box-content">
                                            {{-- <h2 class="box-title">Lorem ipsum dolor sit amet.</h2> --}}
                                            <p class="box-text">Moved into our new office with 8 employees</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="process-card">
                                        <div class="box-wrapp justify-content-start gap-2">
                                            <div class="box-icon">
                                                <img src="{{ asset('frontend-assets/img/icon/process_1_1.svg') }}"
                                                    alt="icon">
                                            </div>
                                            <div class="box-shape"><img
                                                    src="{{ asset('frontend-assets/img/icon/arrow.png') }}"
                                                    alt=""></div>
                                            <div class="box-number">
                                                2019 </div>
                                        </div>
                                        <div class="box-content">
                                            {{-- <h2 class="box-title">Lorem ipsum dolor sit amet.</h2> --}}
                                            <p class="box-text">Diageo Road to Safety</p>
                                            <p class="box-text">TAVF Awards 2019</p>
                                            <p class="box-text">Best Digital Marketing Campaign</p>
                                            <p class="box-text">Best Use of Social Network</p>
                                            <p class="box-text">Button Dabao Desh Banao</p>
                                            <p class="box-text">DigiPub Awards 2019</p>
                                            <p class="box-text">Best Use of Social Media</p>
                                            <p class="box-text">Social Samosa shoutout for our Diageo X Network18 campaign
                                                'Road to Safety'</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="process-card">
                                        <div class="box-wrapp justify-content-start gap-2">
                                            <div class="box-icon">
                                                <img src="{{ asset('frontend-assets/img/icon/process_1_1.svg') }}"
                                                    alt="icon">
                                            </div>
                                            <div class="box-shape"><img
                                                    src="{{ asset('frontend-assets/img/icon/arrow.png') }}"
                                                    alt=""></div>
                                            <div class="box-number">
                                                2020 </div>
                                        </div>
                                        <div class="box-content">
                                            {{-- <h2 class="box-title">Lorem ipsum dolor sit amet.</h2> --}}
                                            <p class="box-text">Maintained social distancing through WFH in the COVID
                                                period</p>
                                            <p class="box-text">Social Samosa shoutout for our NODWIN Gaming X
                                                Cosplaygenie's Halloween Campaign</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="process-card">
                                        <div class="box-wrapp justify-content-start gap-2">
                                            <div class="box-icon">
                                                <img src="{{ asset('frontend-assets/img/icon/process_1_1.svg') }}"
                                                    alt="icon">
                                            </div>
                                            <div class="box-shape"><img
                                                    src="{{ asset('frontend-assets/img/icon/arrow.png') }}"
                                                    alt=""></div>
                                            <div class="box-number">
                                                2021 </div>
                                        </div>
                                        <div class="box-content">
                                            {{-- <h2 class="box-title">Lorem ipsum dolor sit amet.</h2> --}}
                                            <p class="box-text">Shifted to a 2000 sq. ft. area office, overseeing Navi
                                                Mumbai's beautiful Palm Beach</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="process-card">
                                        <div class="box-wrapp justify-content-start gap-2">
                                            <div class="box-icon">
                                                <img src="{{ asset('frontend-assets/img/icon/process_1_1.svg') }}"
                                                    alt="icon">
                                            </div>
                                            <div class="box-shape"><img
                                                    src="{{ asset('frontend-assets/img/icon/arrow.png') }}"
                                                    alt=""></div>
                                            <div class="box-number">
                                                2022 </div>
                                        </div>
                                        <div class="box-content">
                                            {{-- <h2 class="box-title">Lorem ipsum dolor sit amet.</h2> --}}
                                            <p class="box-text">Our reMARKable pool grew to 30+ employees</p>
                                            <p class="box-text">Our illustrations for NODWIN Gaming's BGMS were
                                                collaborated with Star Sports India</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="process-card">
                                        <div class="box-wrapp justify-content-start gap-2">
                                            <div class="box-icon">
                                                <img src="{{ asset('frontend-assets/img/icon/process_1_1.svg') }}"
                                                    alt="icon">
                                            </div>
                                            <div class="box-shape"><img
                                                    src="{{ asset('frontend-assets/img/icon/arrow.png') }}"
                                                    alt=""></div>
                                            <div class="box-number">
                                                2023 </div>
                                        </div>
                                        <div class="box-content">
                                            {{-- <h2 class="box-title">Lorem ipsum dolor sit amet.</h2> --}}
                                            <p class="box-text">Heta Baandal, our founder, was named one of the 21 Rising
                                                Business Leaders of India 2023 by Startup Reporter</p>
                                            <p class="box-text">Multiple PR features on platforms like AdGully, Afaqs &
                                                Brand Equity</p>
                                            <p class="box-text">Our illustrations for NODWIN Gaming's VCSA were
                                                collaborated with Hyundai India</p>
                                            <p class="box-text">Started our own in-house photography & videography section
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="process-card">
                                        <div class="box-wrapp justify-content-start gap-2">
                                            <div class="box-icon">
                                                <img src="{{ asset('frontend-assets/img/icon/process_1_1.svg') }}"
                                                    alt="icon">
                                            </div>
                                            <div class="box-shape"><img
                                                    src="{{ asset('frontend-assets/img/icon/arrow.png') }}"
                                                    alt=""></div>
                                            <div class="box-number">
                                                2024 </div>
                                        </div>
                                        <div class="box-content">
                                            {{-- <h2 class="box-title">Lorem ipsum dolor sit amet.</h2> --}}
                                            <p class="box-text">Bagged our 1st international client</p>
                                            <p class="box-text">Agency Head of the Year - Women Disruptors 2024</p>
                                            <p class="box-text">Our Boss Lady Heta Baandal was recognized by AdGully</p>
                                            <p class="box-text">Our first Infinity Canvas video for Navi Mumbai Municipal
                                                Corporation was played in a Swachh Survekshan LIVE event </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="process-card">
                                        <div class="box-wrapp justify-content-start gap-2">
                                            <div class="box-icon">
                                                <img src="{{ asset('frontend-assets/img/icon/process_1_1.svg') }}"
                                                    alt="icon">
                                            </div>
                                            <div class="box-shape"><img
                                                    src="{{ asset('frontend-assets/img/icon/arrow.png') }}"
                                                    alt=""></div>
                                            <div class="box-number">
                                                2025 </div>
                                        </div>
                                        <div class="box-content">
                                            {{-- <h2 class="box-title">Lorem ipsum dolor sit amet.</h2> --}}
                                            <p class="box-text">We are now a team of 50+ Employees</p>
                                            <p class="box-text"> Multiple Social Media Dissect features for our clients -
                                                Markets4you & CyberPowerPC</p>
                                            <p class="box-text">International Expansion</p>
                                            <p class="box-text">Opened an office in Dubai</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @push('scripts')
                            <script>
                                new Swiper('.journeySwiper', {
                                    spaceBetween: 30,
                                    slidesPerView: 3,
                                })
                            </script>
                        @endpush
                    </div>
                </div>
            </div>
        </section>

        <section class="overflow-hidden space arrow-wrap" id="team-sec">
            <div class="container">
                <div class="row justify-content-lg-between justify-content-center align-items-end d-none">
                    <div class="col-lg-7">
                        <div class="title-area text-center text-lg-start pe-xl-5">
                            <div class="shadow-title style3">Team</div>
                            <span class="sub-title sub-title4 style1 mb-4 mb-md-5">Expert Team Members</span>
                            <h2 class="sec-title ">Building Our Future</h2>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <p class="ps-xl-5 text-center text-lg-start">We start with a comprehensive analysis of your
                            business, industry, target audience, and current
                            digital presence. Through this process, we identify opportunities.</p>
                        <div class="sec-btn text-end">
                            <div class="icon-box">
                                <button data-slider-prev="#teamSwiper" class="slider-arrow prev style4 default"><i
                                        class="fas fa-arrow-left"></i></button>
                                <button data-slider-next="#teamSwiper" class="slider-arrow next style4 default"><i
                                        class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div> <!-- / Title row -->

                <div class="swiper teamSwiper d-none">
                    <div class="swiper-wrapper">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="swiper-slide">
                                <div class="th-team team-card style1 mb-3">
                                    <div class="box-img">
                                        <img src="https://placehold.co/300x400" alt="Team">
                                    </div>
                                    <div class="box-content">
                                        <div>
                                            <h3 class="box-title"><a href="team-details.html">Lorem, ipsum.</a>
                                            </h3>
                                            <span class="team-desig">Web Developer</span>
                                        </div>
                                        <div class="team-social">
                                            <div class="icon-btn"><i class="fa-light fa-plus"></i></div>
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
                                    </div>

                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                @push('scripts')
                    <script>
                        new Swiper(".teamSwiper", {
                            spaceBetween: 30,
                            slidesPerView: 4,
                            loop: true,
                            navigation: {
                                nextEl: ".slider-arrow.next",
                                prevEl: ".slider-arrow.prev",
                            },
                        })
                    </script>
                @endpush
                <div class="row g-3">
                    <div class="col-12">
                        <video loop muted autoplay class="w-100">
                            <source src="{{ asset('frontend-assets/team-video.mp4') }}">
                        </video>
                    </div>
                </div>
            </div>
        </section>

        <section class="position-relative space garally" id="portfolio-sec">
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-8">
                        <div class="title-area text-center">
                            <div class="shadow-title">Culture</div>
                            <span class="sub-title sub-title4 mb-4 mb-md-5">Our Culture<span></span></span>
                            <h2 class="sec-title">Work Culture</h2>
                        </div>
                    </div>
                </div>
                <div class="portfolio-area">
                    <div class="filter-menu filter-menu-active mt-5 mb-4">
                        <button data-filter="*" class="tab-btn active" type="button">All Moments</button>
                        <button data-filter=".cat-2025" class="tab-btn" type="button">2025</button>
                        <button data-filter=".cat-2024" class="tab-btn" type="button">2024</button>
                        <button data-filter=".cat-2022, .cat-2023" class="tab-btn" type="button">2023 - 2022</button>
                        <button data-filter=".cat-2020" class="tab-btn" type="button">2022 - 2018</button>
                        <button data-filter=".cat-old" class="tab-btn" type="button">2017</button>
                    </div>
                    <div class="masonary-gallery-active" id="masonary-gallery">
                        @for ($i = 1; $i <= 25; $i++)
                            <a href="{{ asset('frontend-assets/img/gallery/workplace/2020 (' . $i . ').jpg') }}"
                                class="filter-item mb-3 cat-2020 project-item box-img">
                                <img src="{{ asset('frontend-assets/img/gallery/workplace/2020 (' . $i . ').jpg') }}"
                                    class="w-100" alt="">
                            </a>
                        @endfor
                        @for ($i = 1; $i <= 6; $i++)
                            <a href="{{ asset('frontend-assets/img/gallery/workplace/2022 (' . $i . ').jpg') }}"
                                class="filter-item mb-3 cat-2022 project-item box-img">
                                <img src="{{ asset('frontend-assets/img/gallery/workplace/2022 (' . $i . ').jpg') }}"
                                    class="w-100" alt="">
                            </a>
                        @endfor
                        @for ($i = 1; $i <= 3; $i++)
                            <a href="{{ asset('frontend-assets/img/gallery/workplace/2023 (' . $i . ').jpg') }}"
                                class="filter-item mb-3 cat-2023 project-item box-img">
                                <img src="{{ asset('frontend-assets/img/gallery/workplace/2023 (' . $i . ').jpg') }}"
                                    class="w-100" alt="">
                            </a>
                        @endfor
                        @for ($i = 1; $i <= 15; $i++)
                            <a href="{{ asset('frontend-assets/img/gallery/workplace/2024 (' . $i . ').jpg') }}"
                                class="filter-item mb-3 cat-2024 project-item box-img">
                                <img src="{{ asset('frontend-assets/img/gallery/workplace/2024 (' . $i . ').jpg') }}"
                                    class="w-100" alt="">
                            </a>
                        @endfor
                        @for ($i = 1; $i <= 5; $i++)
                            <a href="{{ asset('frontend-assets/img/gallery/workplace/2025 (' . $i . ').jpg') }}"
                                class="filter-item mb-3 cat-2025 project-item box-img">
                                <img src="{{ asset('frontend-assets/img/gallery/workplace/2025 (' . $i . ').jpg') }}"
                                    class="w-100" alt="">
                            </a>
                        @endfor
                    </div>
                    <!-- <div class="project-btn mt-60"><a href="portfolio.html" class="th-btn th-radius">View All Portfolio</a>
                                                            </div> -->
                </div>
            </div>
            @push('scripts')
                <script>
                    $(".masonary-gallery-active").imagesLoaded(function() {
                        var $filter = ".masonary-gallery-active",
                            $filterItem = ".filter-item",
                            $filterMenu = ".filter-menu-active";

                        if ($($filter).length > 0) {
                            var $grid = $($filter).isotope({
                                itemSelector: $filterItem,
                                filter: "*",
                                masonry: {
                                    // use outer width of grid-sizer for columnWidth

                                    gutter: 24,
                                    columnWidth: 4,
                                    fitWidth: true
                                    // horizontalOrder: true
                                },
                            });

                            // filter items on button click
                            $($filterMenu).on("click", "button", function() {
                                var filterValue = $(this).attr("data-filter");
                                $grid.isotope({
                                    filter: filterValue,
                                });
                            });

                            // Menu Active Class
                            $($filterMenu).on("click", "button", function(event) {
                                event.preventDefault();
                                $(this).addClass("active");
                                $(this).siblings(".active").removeClass("active");
                            });
                        }

                    }).progress(function(){

                    });
                    var gallery = lightGallery(document.getElementById('masonary-gallery'), {
                        plugins: [lgZoom, lgThumbnail],
                        speed: 500,
                    });
                </script>
            @endpush
        </section>

        <section class="position-relative space overflow-hidden d-none">
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-8">
                        <div class="title-area text-center">
                            <div class="shadow-title">Culture</div>
                            <span class="sub-title sub-title4 mb-4 mb-md-5">Our Culture<span></span></span>
                            <h2 class="sec-title">Work Culture</h2>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-pills gap-3 justify-content-center" id="galleryTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link tab-btn active" id="tab-2524" data-bs-toggle="tab"
                            data-bs-target="#tab-2524-pane" type="button" role="tab" aria-controls="tab-2524-pane"
                            aria-selected="true">2025 - 2024</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link tab-btn" id="tab-2422" data-bs-toggle="tab"
                            data-bs-target="#tab-2422-pane" type="button" role="tab" aria-controls="tab-2422-pane"
                            aria-selected="false">2024 - 2022</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link tab-btn" id="tab-2217" data-bs-toggle="tab"
                            data-bs-target="#tab-2217-pane" type="button" role="tab" aria-controls="tab-2217-pane"
                            aria-selected="false">2022 - 2017</button>
                    </li>
                </ul>
                <div class="tab-content position-relative" id="galleryTabContent">
                    <div class="tab-pane fade show active" id="tab-2524-pane" role="tabpanel" aria-labelledby="tab-2524"
                        tabindex="0">
                        <div class="row gy-4 filter-active">
                            <div class="col-md-6 col-xl-3">
                                <div class="project-item">
                                    <div class="box-img global-img">
                                        <img src="{{ asset('https://placehold.co/400x200') }}" class="w-100"
                                            alt="project image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-2422-pane" role="tabpanel" aria-labelledby="tab-2422"
                        tabindex="0">
                        <div class="row gy-4 filter-active">
                            <div class="col-md-6 col-xl-3">
                                <div class="project-item">
                                    <div class="box-img global-img">
                                        <img src="{{ asset('https://placehold.co/400x200') }}" class="w-100"
                                            alt="project image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-2217-pane" role="tabpanel" aria-labelledby="tab-2217"
                        tabindex="0">
                        <div class="row gy-4 filter-active">
                            <div class="col-md-6 col-xl-3">
                                <div class="project-item">
                                    <div class="box-img global-img">
                                        <img src="{{ asset('https://placehold.co/400x200') }}" class="w-100"
                                            alt="project image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
