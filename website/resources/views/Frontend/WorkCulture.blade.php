@extends('Frontend.layout.app')
<style>
    #work-culture #about-sec {
        padding: 8px;
    }

    #work-culture .about-area2 .sec-title,
    #key-point-about-us .sec-title,
    #portfolio-sec .sec-title {
        font-size: 35px;
        line-height: 42px;
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



    /* gallary end */
</style>
@section('content')
    <main id="work-culture">
        <section class="">
            <div class="full-width">
                <picture>
                    <source media="(min-width: 1400px)" srcset="https://placehold.co/1920x900">
                    <img src="https://placehold.co/1080x1080" alt="">
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
                                <span class="sub-title sub-title4 style1 mb-4 mb-md-5">Why Choose Saor</span>
                                <h2 class="sec-title ">Your <span class="text-blue">Trusted Partner</span> for Global
                                    Digital Success</h2>
                                <p class="mb-30">With over 29 years of experience, Saor has a deep understanding of the
                                    digital landscape and a proven track record of success. Conveys a collaborative
                                    approach, suggesting that the agency works closely with clients.</p>
                                <p class="mb-30">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea aliquam
                                    voluptates, doloremque delectus ut, cum exercitationem mollitia adipisci temporibus
                                    saepe distinctio omnis voluptas animi voluptatem ad! Fugit beatae animi praesentium.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="key-point-about-us mb-md-5 mb-3" id="key-point-about-us">
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
                <div class="step-wrap">
                    <div class="process-">
                        <div class="row gy-3 gy-md-5">
                            @for ($i = 2025; $i > 2017; $i--)
                            <div class="col-xl-6">
                                <div class="process-card">
                                    <div class="box-wrapp justify-content-start gap-2">
                                        <div class="box-icon">
                                            <img src="{{ asset('frontend-assets/img/icon/process_1_1.svg')}}" alt="icon">
                                        </div>
                                        <div class="box-shape"><img src="{{ asset('frontend-assets/img/icon/arrow.png') }}" alt=""></div>
                                        <div class="box-number">
                                            {{ $i }} </div>
                                    </div>
                                    <div class="box-content">
                                        <h2 class="box-title">Lorem ipsum dolor sit amet.</h2>
                                        <p class="box-text">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident, esse veniam unde tempora, quaerat ex modi quidem delectus quas velit, autem eum cumque eos dolore. Possimus ullam unde cum quod.
                                        </p>

                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="overflow-hidden position-relative space-extra-top space-bottom garally" id="portfolio-sec">
            <div class="container">
                <div class="title-area text-center mb-25">
                    <!-- <h2 class="sec-title">Our Work Culture</h2> -->
                    <h2 class="fw-bold sec-title my-3" data-aos="fade-up" data-aos-delay="100">
                        Our Work <span class="text-blue"> Culture</span>
                    </h2>
                </div>
                <div class="filter-menu filter-menu-active mt-5 mb-4">
                    <button data-filter="*" class="tab-btn active" type="button">All Moments</button>
                    <button data-filter=".cat1" class="tab-btn" type="button">2025 -2024</button>
                    <button data-filter=".cat2" class="tab-btn" type="button">2024 - 2022</button>
                    <button data-filter=".cat3" class="tab-btn" type="button">2022 - 2018</button>
                    <button data-filter=".cat3" class="tab-btn" type="button">2017</button>
                </div>
                <div class="portfolio-area">
                    <div class="row gy-4 filter-active">
                        <div class="col-md-6 col-xl-auto filter-item cat1 cat5 cat7 cat3">
                            <div class="project-item">
                                <div class="box-img global-img">
                                    <img src="{{ asset('https://placehold.co/400x200') }}" class="w-100"
                                        alt="project image">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto filter-item cat5 cat5 cat8 cat1">
                            <div class="project-item">
                                <div class="box-img global-img">
                                    <img src="{{ asset('https://placehold.co/400x200') }}" class="w-100"
                                        alt="project image">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto filter-item cat5 cat3 cat2">
                            <div class="project-item">
                                <div class="box-img global-img">
                                    <img src="{{ asset('https://placehold.co/400x200') }}" class="w-100"
                                        alt="project image">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto filter-item cat4 cat1 cat6">
                            <div class="project-item">
                                <div class="box-img global-img">
                                    <img src="{{ asset('https://placehold.co/400x200') }}" class="w-100"
                                        alt="project image">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto filter-item cat2 cat3">
                            <div class="project-item">
                                <div class="box-img global-img">
                                    <img src="{{ asset('https://placehold.co/400x200') }}" class="w-100"
                                        alt="project image">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto filter-item cat7 cat5 cat3">
                            <div class="project-item">
                                <div class="box-img global-img">
                                    <img src="{{ asset('https://placehold.co/400x200') }}" class="w-100"
                                        alt="project image">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto filter-item cat4 cat6">
                            <div class="project-item">
                                <div class="box-img global-img">
                                    <img src="{{ asset('https://placehold.co/400x200') }}" class="w-100"
                                        alt="project image">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto filter-item cat1 cat2 cat5">
                            <div class="project-item">
                                <div class="box-img global-img">
                                    <img src="{{ asset('https://placehold.co/400x200') }}" class="w-100"
                                        alt="project image">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto filter-item cat1 cat2 cat5">
                            <div class="project-item">
                                <div class="box-img global-img">
                                    <img src="{{ asset('https://placehold.co/400x200') }}" class="w-100"
                                        alt="project image">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto filter-item cat1 cat5 cat7 cat3">
                            <div class="project-item">
                                <div class="box-img global-img">
                                    <img src="{{ asset('https://placehold.co/400x200') }}" class="w-100"
                                        alt="project image">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto filter-item cat5 cat5 cat8 cat1">
                            <div class="project-item">
                                <div class="box-img global-img">
                                    <img src="{{ asset('https://placehold.co/400x200') }}" class="w-100"
                                        alt="project image">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto filter-item cat5 cat3 cat2">
                            <div class="project-item">
                                <div class="box-img global-img">
                                    <img src="{{ asset('https://placehold.co/400x200') }}" class="w-100"
                                        alt="project image">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto filter-item cat4 cat1 cat6">
                            <div class="project-item">
                                <div class="box-img global-img">
                                    <img src="{{ asset('https://placehold.co/400x200') }}" class="w-100"
                                        alt="project image">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto filter-item cat2 cat3">
                            <div class="project-item">
                                <div class="box-img global-img">
                                    <img src="{{ asset('https://placehold.co/400x200') }}" class="w-100"
                                        alt="project image">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto filter-item cat7 cat5 cat3">
                            <div class="project-item">
                                <div class="box-img global-img">
                                    <img src="{{ asset('https://placehold.co/400x200') }}" class="w-100"
                                        alt="project image">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto filter-item cat4 cat6">
                            <div class="project-item">
                                <div class="box-img global-img">
                                    <img src="{{ asset('https://placehold.co/400x200') }}" class="w-100"
                                        alt="project image">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto filter-item cat1 cat2 cat5">
                            <div class="project-item">
                                <div class="box-img global-img">
                                    <img src="{{ asset('https://placehold.co/400x200') }}" class="w-100"
                                        alt="project image">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto filter-item cat1 cat2 cat5">
                            <div class="project-item">
                                <div class="box-img global-img">
                                    <img src="{{ asset('https://placehold.co/400x200') }}" class="w-100"
                                        alt="project image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="project-btn mt-60"><a href="portfolio.html" class="th-btn th-radius">View All Portfolio</a>
                    </div> -->
                </div>
            </div>
        </section>




    </main>
@endsection
