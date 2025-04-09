@extends('Frontend.layout.app')
<style>
    #work-culture #about-sec {
        padding: 8px;
    }

    #work-culture .about-area2 .imgBox {
        top: 40px;
    }

    #work-culture .about-area2 .sec-title,
    #key-point-about-us .sec-title,
    #portfolio-sec .sec-title {
        font-size: 35px;
        line-height: 42px;
    }

    #work-culture .about-area2 .sec-para,
    #key-point-about-us .sec-para {
        font-size: 17px;
        line-height: 24px;
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

    .portfolio-area {
        position: relative;
        z-index: 2;
        max-height: 100vh;
        overflow-y: auto;
        /* Enable vertical scrolling */
        overflow-x: hidden;
        /* Disable horizontal scrolling */
        /* scrollbar-width: thin;
        /* Firefox
        scrollbar-color: #888 #106c97; */
        /* Firefox */
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



    /* gallary end */
</style>
@section('content')
    <main id="work-culture">
        <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend-assets/img/bg/breadcumb-bg.jpg') }}">
            <div class="container">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Work Culture</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="home-seo-agency.html">Home</a></li>
                        <li>Work Culture</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="about-area2 mb-md-5 mt-md-5 mt-0 md-0 overflow-hidden overflow-hidden space" id="about-sec">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-4 mb-30 mb-xl-0">
                        <div class="imgBox img-box2 me-xl-4 mt-lg-60">
                            <div class="img1 th-anim mb-35">
                                <img src="{{ asset('frontend-assets/img/normal/about_2_1.png') }}" alt="About">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="title-area mb-25 mt-n1">
                            {{-- <span class="sub-title sub-title4 style1 ">About Us</span> --}}
                            <h2 class="sec-title ">Innovative Digital Solutions for Modern Businesses</h2>
                        </div>
                        <p class="mt-n2 mb-25 sec-para">Established in 1995, Saor has been a leading force in the digital
                            landscape for
                            over two decades. We're a passionate team of designers, developers, and strategists driven by a
                            shared vision. Our digital agency combines innovation, strategy, and expertise to fuel your
                            online
                            success. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, animi voluptatem esse
                            quis tenetur, quidem harum ipsa tempore laborum reprehenderit nam! Voluptatum, hic minima
                            temporibus vero pariatur accusamus ipsam qui?
                        </p>
                    </div>
                </div>
            </div>

    </div>

    <div class="overflow-hidden position-relative space-extra-top space-bottom garally" id="portfolio-sec">
        <div class="container">
            <div class="title-area text-center mb-25">
                <h2 class="sec-title">Our Work Culture</h2>
            </div>
            <div class="filter-menu filter-menu-active mt-5 mb-4">
                <button data-filter="*" class="tab-btn active" type="button">All Works</button>
                <button data-filter=".cat1" class="tab-btn" type="button">Apps</button>
                <button data-filter=".cat2" class="tab-btn" type="button">Branding</button>
                <button data-filter=".cat3" class="tab-btn" type="button">Creative</button>

            </div>
            <div class="portfolio-area">
                <div class="row gy-4 filter-active garally-row-height">
                    <div class="col-md-6 col-xl-auto filter-item cat1 cat5 cat7 cat3">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('frontend-assets/img/project/project_1_1.jpg') }}" alt="project image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto filter-item cat5 cat5 cat8 cat1">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('frontend-assets/img/project/project_1_1.jpg') }}" alt="project image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto filter-item cat5 cat3 cat2">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('frontend-assets/img/project/project_1_1.jpg') }}" alt="project image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto filter-item cat4 cat1 cat6">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('frontend-assets/img/project/project_1_1.jpg') }}" alt="project image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto filter-item cat2 cat3">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('frontend-assets/img/project/project_1_1.jpg') }}" alt="project image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto filter-item cat7 cat5 cat3">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('frontend-assets/img/project/project_1_1.jpg') }}" alt="project image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto filter-item cat4 cat6">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('frontend-assets/img/project/project_1_1.jpg') }}" alt="project image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto filter-item cat1 cat2 cat5">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('frontend-assets/img/project/project_1_1.jpg') }}" alt="project image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto filter-item cat1 cat2 cat5">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="{{ asset('frontend-assets/img/project/project_1_1.jpg') }}" alt="project image">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="project-btn mt-60"><a href="portfolio.html" class="th-btn th-radius">View All Portfolio</a>
                </div> -->
            </div>
        </div>
    </div>
    
    <div class="key-point-about-us mb-md-5 mb-3" id="key-point-about-us">
        <div class="container">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-md-4 pe-md-5">
                    <div class="row gy-4 flex-column">
                        <div class="">
                            <div class="media-body">
                                <h3 class="box-title"><span class="text-themeRed text-xl md:text-3xl font-medium">What Make</span><br> <span class="text-themeBlue text-xl md:text-5xl font-semibold sec-title">Us Special?</span></h3>
                                <p class="sec-para">Experience, Expertise, and an Excellent team fuel our growth and make us unique. Our passion for building long-lasting partnerships with our clients makes us a forerunner in digital marketing.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mt-5 mt-md-0">
                    <div class="row justify-content-center gx-4 gy-5 ">
                        <!-- Card 1 -->
                        <div class="col-md-4 col-6">
                            <div class="card text-center">
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
                            <div class="card text-center">
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
                            <div class="card text-center">
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
                            <div class="card text-center">
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
                            <div class="card text-center">
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
                            <div class="card text-center">
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
    </div>

    
</main>
@endsection
