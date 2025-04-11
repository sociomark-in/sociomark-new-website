@extends('Frontend.layout.app')

@section('custome-style')
<style>
    html {
        scroll-behavior: smooth;
    }

    #about-us #about-sec2,
    #about-us #contact {
        background: radial-gradient(ellipse at top, #fff, transparent), radial-gradient(40% 40% at 50% 25%, #75b4d1, transparent), radial-gradient(ellipse at bottom, #fff, transparent);
    }

    #about-us #about-sec3 {
        background-color: #F5F5F5;
    }

    #about-us #about-sec {
        padding: 8px;
    }

    #about-us .about-area2 .imgBox {
        top: 40px;
    }

    #about-us .about-area2 .sec-title,
    #about-us #about-sec2 .sec-title,
    #about-us #about-sec3 .sec-title,
    #portfolio-sec .sec-title,
    #about-us #contact .sec-title {
        font-size: 35px !important;
        line-height: 42px !important;
    }

    #about-us .about-area2 .sec-title {
        width: 67rem;
    }

    #about-us .about-area2 .sec-para,
    #about-us #about-sec2 .sec-para,
    #about-us #about-sec3 .sec-para,
    #about-us #contact .sec-para {
        line-height: 28px !important;
        font-size: 20px !important;
        letter-spacing: .10px !important;
        color: #797E88 !important;
    }

    #about-us #about-sec3 .sec-para-black {
        color: white !important;
        line-height: 28px !important;
        font-size: 20px !important;
        letter-spacing: .10px !important;
    }

    @media (max-width: 576px) {

        #about-us .about-area2 .sec-title,
        #portfolio-sec .sec-title,
        #about-us #contact .sec-title {
            padding-bottom: 0.5rem;
            font-size: 24px;
            font-weight: 600;
            line-height: 26px;
            width: auto;
            text-align: center;
        }

        #about-us .about-area2 .sec-para,
        #about-us #contact .sec-para {
            font-size: 16px !important;
            line-height: 20px !important;
            text-align: center;
        }

        #about-us #about-sec2,
        #about-us #services-tab {
            padding: 3rem 0 3rem 0 !important;
        }

        .according-list-area {
            margin-bottom: 290px;
        }

        #about-us #services-tab .side-padding-mbl {
            padding: 0px 1.5rem;
        }

        #about-us #services-tab .sec-para {
            text-align: left;
        }

        #about-us #contact {
            padding: 40px 2px !important;
        }
    }

    /* section2 */

    #about-us #about-sec2 {
        padding: 6rem 0 6rem 0;
    }

    #about-us #about-sec2 .process-step {
        text-align: center;
        position: relative;
    }

    #about-us #about-sec2 .icon {
        background-color: #f2f3f7;
        border-radius: 50%;
        width: 80px;
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        font-size: 24px;
        color: #6f42c1;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        z-index: 1;
        position: relative;
    }

    #about-us #about-sec2 .process-step h5 {
        font-weight: 600;
        margin-bottom: 0px;
    }

    #about-us #about-sec2 .process-step p {
        font-size: 18px;
        color: #666;
    }

    /* Reversed steps: text above circle */
    #about-us #about-sec2 .step-reverse .icon {
        margin-top: 20px;
    }

    /* Zig-zag line style */
    #about-us #about-sec2 .process-step::after {
        content: '';
        position: absolute;
        width: 198px;
        height: 2px;
        background: #bbb;
        z-index: 0;
    }

    /* Diagonal down (1 to 2 and 3 to 4) */
    #about-us #about-sec2 .zig-down::after {
        top: 77px;
        left: 72%;
        transform: rotate(22deg);
        transform-origin: left center;
    }

    /* Diagonal up (2 to 3) */
    #about-us #about-sec2 .zig-up::after {
        bottom: 68px;
        left: 70%;
        transform: rotate(-24deg);
        transform-origin: left center;
    }

    #about-us #about-sec2 .process-step:last-child::after {
        content: none;
    }

    #about-us .icon .position-absolute-img {
        transition: all 0.4s ease-in-out;
        border-radius: 50%;
        padding: 15px;
        display: inline-block;
    }

    #about-us .icon .position-absolute-img:hover {
        transform: scale(1.1);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        background-color: rgb(255, 215, 235);
        /* Slightly darker pink */
    }

    @media (max-width: 768px) {
        #about-us #about-sec2 .process-step::after {
            display: none;
        }

        #about-us .step-reverse {
            display: flex;
            flex-direction: column-reverse;
        }
    }

    /* section2 end */
    /* section3 */
    .feature-card {
        padding: 40px 20px;
        text-align: center;
        /* background-color: white; */
        height: 100%;

    }

    #about-us #about-sec3 .first-feature-card:nth-child(odd) .flip-box-front {
        background-color: #ffffff;
    }
    #about-us #about-sec3 .flip-box{
        width: 300px;
    }
    #about-us #about-sec3 .first-feature-card:nth-child(even) .flip-box-front {

        background-color: #f6f9ff;
    }

    #about-us #about-sec3 .second-feature-card:nth-child(even) .flip-box-front {
        background-color: #ffffff;
    }

    #about-us #about-sec3 .second-feature-card:nth-child(odd) .flip-box-front {

        background-color: #f6f9ff;
    }

    .feature-card.bg-light-blue {
        background-color: #f6f9ff;
    }

    .feature-icon {
        font-size: 32px;
        color: #333;
        margin-bottom: 10px;
    }

    #about-us #about-sec3 .flip-box-front {
        background-color: white;
        color: black;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border-radius: 10px !important;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border: 2px solid transparent;
    }

    #about-us #about-sec3 .flip-box-back {
        border-radius: 10px !important;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border: 2px solid transparent;
    }

    /* section3end */
    /* gallary :start */

    #portfolio-sec {
        padding-top: 20px;
    }

    #about-us .filter-menu .tab-btn:hover,
    #about-us .garally .filter-menu .tab-btn.active {
        padding: 10px 25px !important;
        font-weight: 500;
        border-bottom: 3px solid #106c97;
        background: transparent;
        border-radius: 0px;
        border-left: none;
        color: #106c97;
        border-bottom: 4px solid #106c97;
    }

    #about-us .garally .filter-menu .tab-btn {
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

    /* contact form */
    #about-us #contact {
        padding: 30px;
    }

    #contact .space-bottom {
        padding-bottom: 35px;
    }


    #contact .contact-form {
        border-radius: 10px;
        padding: 45px 23px;
        /* box-shadow: 0 4px 8px rgba(0,0,0,0.1);
                border: 2px solid transparent; */
        box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
        -webkit-box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
        -moz-box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
    }

    /* contact form end */
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"
    integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/additional-methods.min.js"
    integrity="sha512-TiQST7x/0aMjgVTcep29gi+q5Lk5gVTUPE9XgN0g96rwtjEjLpod4mlBRKWHeBcvGBAEvJBmfDqh2hfMMmg+5A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
@section('content')
<main id="about-us">
    <div class="breadcumb-wrapper " data-bg-src="https://placehold.co/1920x520">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">About us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-seo-agency.html">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="about-area2 mb-md-5 mt-md-5 mt-5 md-5 overflow-hidden overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-12 d-flex justify-content-center align-items-center flex-column">
                    <div class="title-area mb-md-3 mb-2 mt-n1">
                        <!-- <h2 class="sec-title text-center "> Our Comprehensive International SEO Solutions</h2> -->
                        <h2 class="text-center fw-bold sec-title my-3"
                            data-aos="zoom-in"
                            data-aos-delay="100"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-out">
                            Expand Your Global Reach with <span class="text-blue"> Our Comprehensive International</span> SEO Solutions
                        </h2>
                    </div>
                    <p class="mt-n2 mb-25 sec-para text-center"  data-aos="fade-down"
                            data-aos-delay="100"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-out">Established in 1995, Saor has been a leading force in the digital landscape for
                        over two decades. We're a passionate team of designers, developers, and strategists driven by a
                        shared vision. Our digital agency combines innovation, strategy, and expertise to fuel your online
                        success. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, animi voluptatem esse quis tenetur, quidem harum ipsa tempore laborum reprehenderit nam! Voluptatum, hic minima temporibus vero pariatur accusamus ipsam qui?
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="overflow-hidden mb-md-3 mt-md-3 mt-0 md-0" id="about-sec2">
        <div class="container process-container text-center">
            {{-- <h6 class="text-primary fw-semibold mb-2 sec-para"
                data-aos="fade-up"
                data-aos-delay="100"
                data-aos-duration="1000"
                data-aos-easing="ease-in-out">
                FLOW PROCESS
            </h6> --}}

            <h2 class="fw-bold mb-5 sec-title"
                data-aos="fade-up"
                data-aos-delay="200"
                data-aos-duration="1200"
                data-aos-easing="ease-in-out">
                Our Working <span class="text-blue"> Process</span>
            </h2>
            <div class="row justify-content-center gy-5">
                <!-- Step 1 -->
                <div class="col-md-3 process-step zig-down"
                    data-aos="fade-up"
                    data-aos-delay="300"
                    data-aos-duration="1200"
                    data-aos-easing="ease-in-out">
                    <div class="row g-3 g-md-4">
                        <div class="col-12">
                            <div class="img">
                                <div class="shadow-title">01</div>
                                <div class="icon">
                                    <div class="position-absolute-img" style="background-color: rgb(255 235 245);">
                                        <img src="{{ asset('frontend-assets/img/ourCulture/2.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="text">
                                <h5>Choose A Service</h5>
                                <p>Pick the ideal service that suits your requirement</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 2 (reversed) -->
                <div class="col-md-3 process-step step-reverse zig-up"
                    data-aos="fade-up"
                    data-aos-delay="400"
                    data-aos-duration="1200"
                    data-aos-easing="ease-in-out">
                    <div class="row flex-column-reverse">
                        <div class="col-12">
                            <div class="img">
                                <div class="shadow-title">02</div>
                                <div class="icon">
                                    <div class="position-absolute-img">
                                        <img src="{{ asset('frontend-assets/img/ourCulture/1.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="text">
                                <h5>Define Requirements</h5>
                                <p>Let us know what you expect & provide a clear brief</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-md-3 process-step zig-down"
                    data-aos="fade-up"
                    data-aos-delay="500"
                    data-aos-duration="1200"
                    data-aos-easing="ease-in-out">
                    <div class="row g-3 g-md-4">
                        <div class="col-12">
                            <div class="img">
                                <div class="shadow-title">03</div>
                                <div class="icon">
                                    <div class="position-absolute-img" style="background-color: rgb(238 251 229);">
                                        <img src="{{ asset('frontend-assets/img/ourCulture/4.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="text">
                                <h5>Request A Meeting</h5>
                                <p>We’ll set up a time to discuss all of your project goals</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Step 4 (reversed) -->
                <div class="col-md-3 process-step step-reverse"
                    data-aos="fade-up"
                    data-aos-delay="600"
                    data-aos-duration="1200"
                    data-aos-easing="ease-in-out">
                    <div class="text">
                        <h5>Final Solution</h5>
                        <p>Get the final solution done as per the provided plan</p>
                    </div>
                    <div class="img">
                        <div class="shadow-title">04</div>
                        <div class="icon">
                            <div class="position-absolute-img" style="background-color: rgb(252 243 233);">
                                <img src="{{ asset('frontend-assets/img/ourCulture/3.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-md-5 mt-md-5 mt-5 md-5 overflow-hidden overflow-hidden space" id="about-sec3">
        <div class="container">
            <div class="row d-flex justify-content-center justify-content-md-end mt-4">
                <!-- Top Left Info -->
                <div class="col-md-6 col-12 pe-0 pe-md-5">
                    <h2 class="fw-bold sec-title my-3"
                        data-aos="fade-down"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                        Property <span class="text-blue"> features</span>
                    </h2>
                    <p class="sec-para" data-aos="fade-up"
                        data-aos-delay="200"
                        data-aos-duration="1200"
                        data-aos-easing="ease-in-out">Over 5,000+ Reviews and Counting. Customers trust our Quality product features. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni laudantium, iusto et atque eum velit amet facilis nemo possimus vitae ullam vel harum asperiores, rem voluptatibus sit illo aperiam nesciunt! </p>
                </div>

                <!-- Feature Cards -->
                <div class="col-12 col-md-3 first-feature-card feature-card flip-box p-0 mx-2" data-aos="fade-left" "
                    data-aos-delay=" 300"
                    data-aos-duration="1200"
                    data-aos-easing="ease-in-out">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <img src="{{ asset('frontend-assets/img/ourCulture/2.png') }}" alt="">
                            <p class="sec-para fw-semibold my-4"> Our Vision</p>
                        </div>
                        <div class="flip-box-back d-flex justify-content-center align-items-center">
                            <p class="sec-para-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad minus rerum quibusdam veritatis tempore magnam.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3 first-feature-card feature-card flip-box p-0 mx-2" data-aos="fade-left"
                    data-aos-delay="300"
                    data-aos-duration="1200"
                    data-aos-easing="ease-in-out">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <img src="{{ asset('frontend-assets/img/ourCulture/2.png') }}" alt="">
                            <p class="sec-para fw-semibold my-4">Our Mission</p>
                        </div>
                        <div class="flip-box-back d-flex justify-content-center align-items-center">
                            <p class="sec-para-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad minus rerum quibusdam veritatis tempore magnam.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center justify-content-md-end mt-4" data-aos="fade-right"
                data-aos-delay="400"
                data-aos-duration="1200"
                data-aos-easing="ease-in-out">
                <div class="col-12 col-md-3 second-feature-card feature-card flip-box p-0 mx-2">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <img src="{{ asset('frontend-assets/img/ourCulture/2.png') }}" alt="">
                            <p class="sec-para fw-semibold my-4">Our Vision</p>
                        </div>
                        <div class="flip-box-back d-flex justify-content-center align-items-center">
                            <p class="sec-para-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad minus rerum quibusdam veritatis tempore magnam.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3 second-feature-card feature-card flip-box p-0 mx-2" data-aos="fade-right"
                    data-aos-delay="400"
                    data-aos-duration="1200"
                    data-aos-easing="ease-in-out">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <img src="{{ asset('frontend-assets/img/ourCulture/2.png') }}" alt="">
                            <p class="sec-para fw-semibold my-4">Our Vision</p>
                        </div>
                        <div class="flip-box-back d-flex justify-content-center align-items-center">
                            <p class="sec-para-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad minus rerum quibusdam veritatis tempore magnam.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3 second-feature-card feature-card flip-box p-0 mx-2" data-aos="fade-right"
                    data-aos-delay="400"
                    data-aos-duration="1200"
                    data-aos-easing="ease-in-out">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <img src="{{ asset('frontend-assets/img/ourCulture/2.png') }}" alt="">
                            <p class="sec-para fw-semibold my-4">Our Vision</p>
                        </div>
                        <div class="flip-box-back d-flex justify-content-center align-items-center">
                            <p class="sec-para-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad minus rerum quibusdam veritatis tempore magnam.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="overflow-hidden position-relative space-extra-top space-bottom garally mt-md-5" id="portfolio-sec">
        <div class="container">
            <div class="title-area text-center mb-25">
                <h2 class="sec-title"> </h2>
                <h2 class="fw-bold sec-title my-3"
                    data-aos="fade-up"
                    data-aos-delay="100"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                    Clients We've <span class="text-blue"> Worked With</span>
                </h2>
            </div>
            <div class="filter-menu filter-menu-active mt-md-5 mb-md-4">
                <button data-filter="*" class="tab-btn active" type="button">All</button>
                <button data-filter=".cat1" class="tab-btn" type="button">Education</button>
                <button data-filter=".cat2" class="tab-btn" type="button">Healthcare</button>
                <button data-filter=".cat3" class="tab-btn" type="button">News & Media</button>
                <button data-filter=".cat4" class="tab-btn" type="button">Real Eastate</button>
                <button data-filter=".cat5" class="tab-btn" type="button">Logistist</button>
                <button data-filter=".cat6" class="tab-btn" type="button">Gaming</button>

            </div>
            <div class="portfolio-area" data-aos="zoom-in"
                data-aos-delay="200"
                data-aos-duration="1200"
                data-aos-easing="ease-in-out">
                <div class="row g-4 filter-active">
                    <div class="col-md-6 col-xl-3 filter-item cat1 cat5 cat7 cat3">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="https://placehold.co/200x100/webp" alt="Client Logo">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 filter-item cat5 cat5 cat8 cat1">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="https://placehold.co/200x100/webp" alt="Client Logo">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 filter-item cat5 cat3 cat2">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="https://placehold.co/200x100/webp" alt="Client Logo">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 filter-item cat4 cat1 cat6">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="https://placehold.co/200x100/webp" alt="Client Logo">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3 filter-item cat4 cat6">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="https://placehold.co/200x100/webp" alt="Client Logo">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 filter-item cat4 cat6">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="https://placehold.co/200x100/webp" alt="Client Logo">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 filter-item cat4 cat6">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="https://placehold.co/200x100/webp" alt="Client Logo">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="project-btn mt-60"><a href="portfolio.html" class="th-btn th-radius">View All Portfolio</a>
                </div> -->
            </div>
        </div>
    </div>

    <div class="th-blog-wrapper space-top space-extra-bottom" id="contact">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-5 pe-md-5">
                    <div class="title-area mb-20">
                        <h2 class="sec-title ">The Powerful Benefits of Saor SEO</h2>
                    </div>
                    <p class="sec-para mb-35 ">In today's digital landscape, a strong online presence is critical for business success. But simply having a website isn't enough.</p>

                </div>
                <div class="col-xl-7">
                    <form action="{{ route('contact.store') }}" method="POST" class="contact-form style2" id="contactform">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-label" for="name">Your Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Enter your Name" value="{{ old('name') }}">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <i class="far fa-envelope"></i>
                                <label class="form-label" for="email">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Enter your Email" value="{{ old('email') }}">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <i class="fal fa-phone"></i>
                                <label class="form-label" for="phone">Phone</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Enter your Phone" value="{{ old('phone') }}">
                                @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">

                                <label class="form-label" for="service">Service you want?</label>
                                <select class="form-select @error('service') is-invalid @enderror" id="service" name="service">
                                    <option selected disabled>Choose an option</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>

                                @error('service')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">

                                <label class="form-label" for="budget">Marketing Budget</label>
                                <select class="form-select @error('budget') is-invalid @enderror" id="budget" name="budget">
                                    <option selected disabled>Choose an option</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                                @error('budget')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">

                                <label class="form-label" for="aboutUs">How did you hear about Us?</label>
                                <select class="form-select @error('aboutUs') is-invalid @enderror" id="aboutUs" name="aboutUs">
                                    <option selected disabled>Choose an option</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                                @error('aboutUs')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-12">

                                <label class="form-label" for="messageforus">Your Message</label>
                                <textarea class="form-control @error('messageforus') is-invalid @enderror" id="messageforus" placeholder="Enter your message" rows="4" name="messageforus"></textarea>
                                <i class="fal fa-pencil"></i>
                                @error('messageforus')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 form-group mb-0 text-center">
                                <button class="th-btn th-radius">Submit Message</button>
                            </div>
                        </div>

                    </form>
                    <script type="text/javascript">
                        $.validator.addMethod("emailregex", function(value, element) {
                            return this.optional(element) || /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/i.test(value);
                        })
                        $.validator.addMethod("letters", function(value, element) {
                            return this.optional(element) || /^[a-zA-Z \s']*$/i.test(value);
                        });
                        $.validator.addMethod("numbers", function(value, element) {
                            return this.optional(element) || /^[0-9 ]*$/i.test(value);
                        });
                        $('#contactform').validate({
                            rules: {
                                name: {
                                    required: true,
                                    letters: true,
                                },
                                lastname: 'required',
                                organisation: 'required',
                                email: {
                                    required: true,
                                    emailregex: true,
                                },
                                phone: {
                                    required: true,
                                    numbers: true,
                                },
                                message: {
                                    required: true,
                                }
                            },
                            messages: {
                                name: {
                                    required: 'This Name field is required',
                                    letters: 'Only Letters & Spaces are Allowed.'
                                },
                                phone: {
                                    required: 'This Phone field is required',
                                    maxlength: 'Please enter a Valid Mobile Number',
                                    minlength: 'Please enter a Valid Mobile Number',
                                },
                                lastname: 'This Last Name field is required',
                                organisation: 'This Organisation field is required',
                                email: 'Please enter a Valid Email Id',
                                message: 'This message field is required',
                            },
                            submitHandler: function(form) {
                                form.submit();
                            }
                        });
                    </script>
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
</script>
@endpush