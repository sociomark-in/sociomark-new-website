@extends('Frontend.layout.app')

@section('custome-style')
<style>
    #about-us #about-sec2,
    #about-us #contact {
        background: radial-gradient(ellipse at top, #fff, transparent), radial-gradient(40% 40% at 50% 25%, #75b4d1, transparent), radial-gradient(ellipse at bottom, #fff, transparent);
    }

    #about-us #about-sec4,
    #our-founder {
        background-color: #F5F5F5;
    }

    #about-us .about-area2 .sec-title,
    #about-us #about-sec2 .sec-title,
    #about-us #about-sec3 .sec-title,
    #about-us #about-sec4 .sec-title,
    #portfolio-sec .sec-title,
    #about-us #contact .sec-title,
    #our-founder .sec-title {
        font-size: 32px;
        line-height: 42px;
        font-weight: 700 !important;
    }

    #about-us .about-area2 .sec-title {
        width: 67rem;
    }

    #about-us .about-area2 .sec-para,
    #about-us #about-sec2 .sec-para,
    #about-us #about-sec3 .sec-para,
    #about-us #about-sec4 .sec-para,
    #about-us #contact .sec-para,
    #our-founder .sec-para {
        line-height: 28px;
        font-size: 18px;
        letter-spacing: .10px;
        color: rgb(19, 20, 20);
        font-weight: 400;
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

    .sub-sec-title {
        font-size: 20px;
        line-height: 30px;
        color: #121212;
        font-weight: 600 !important;
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
        height: 100%;
    }

    #about-us #about-sec3 .flip-box {
        width: 300px;
        height: 320px;
    }

    #about-us #about-sec3 .flip-box-inner {
        height: 100%;
    }

    #about-us #about-sec3 .first-feature-card:nth-child(even) .flip-box-front {
        height: 100%;
        background-color: #f6f9ff;
    }

    #about-us #about-sec3 .second-feature-card:nth-child(even) .flip-box-front {
        background-color: #ffffff;
        height: 100%;
    }

    #about-us #about-sec3 .second-feature-card:nth-child(odd) .flip-box-front {
        height: 100%;
        background-color: #f6f9ff;
    }

    #about-us #about-sec3 .flip-box-front img {
        height: auto;
        width: auto;
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
        height: 100%;
    }

    /* section3end */

    /* about-sec4 */
    .content-box {
        text-align: center;
        margin-bottom: 20px;
    }

    .image-gallery {
        display: flex;
        justify-content: center;
        gap: 10px;
        flex-wrap: wrap;
    }

    .position-relative {
        position: relative;
        overflow: hidden;
    }

    .gallery-img {
        width: 310px;
        height: 450px;
        object-fit: cover;
        transition: all 0.5s ease;
        border-radius: 10px;
        cursor: pointer;
        display: block;
    }

    .gallery-img.default-active {
        width: 570px;
    }

    .gallery-img.default-active .img-overlay p {
        width: 50%;
    }

    #about-sec4 .img-overlay .top-content .logo-info {
        width: auto;
        height: 40px;
        line-height: 23px;
    }

    .img-overlay p {
        width: 100%;
    }

    .img-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: end;
        /* default state */
        height: 100%;
        padding: 1rem;
        background: rgba(0, 0, 0, 0.2);
        /* semi-transparent black */
        color: white;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        border-radius: 10px;
        transition: all 0.4s ease;
        pointer-events: none;
        /* allows hover on img */
        opacity: 1;
        /* always visible now */
    }

    .img-overlay.active {
        justify-content: space-between;
    }

    .desc-text {
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .desc-text:not(.d-none) {
        opacity: 1;
    }


    .position-relative:hover .img-overlay {
        background: rgba(0, 0, 0, 0.2);
        transform: scale(1.02);
        pointer-events: auto;
    }

    /* .position-relative:hover .gallery-img {
        width: 570px;
    } */

    /* Smooth text entrance but visible from start */
    .img-overlay h4,
    .img-overlay p,
    .img-overlay a {
        opacity: 1;
        transform: translateY(0);
        transition: all 0.4s ease;
    }

    .img-overlay a {
        background-color: white !important;
        color: black !important;
    }

    .explore-btn a {
        padding: 0px !important;
        background-color: white !important;
        color: black !important;
    }

    .explore-btn {
        background-color: white;
        color: black !important;
        opacity: 1;
        transform: translateY(0);
        transition: all 0.4s ease;
        display: flex;
        /* justify-content: space-around; */
        align-items: center;
        justify-content: center;
        border-radius: 55px;
        padding: 15px 28px;
        opacity: 1;
        transform: translateY(0);
        transition: all 0.4s ease;

    }

    .img-overlay a:hover {
        background-color: black;
        color: white !important;
    }

    /* about-sec4 :end */

    /* about banner */
    #about-banner .player-video::before {
        content: none;
    }

    /* about banner :end */
    /* founder */
    #our-founder {
        margin-top: 7rem;
    }

    .founder .img {
        width: 33rem;
        height: 34rem;
        margin-top: -6rem;
    }

    .founder .img img {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }

    #our-founder.custom-top {
        top: -39px;
    }

    /* founder end */
   
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
                <h1 class="breadcumb-title text-uppercase">About us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-seo-agency.html">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="about-area2 mb-md-5 mt-md-5 mt-5 md-5 overflow-hidden space" id="about-sec">
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
                            Hello, we are Sociomark – <span class="text-blue"> A Digital Marketing Company</span> in Mumbai
                        </h2>
                    </div>
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">In today's digital age, a strong online presence is no longer a luxury but a necessity. Sociomark is your trusted partner in navigating the tough digital landscape. As a leading Digital Marketing agency based in Navi Mumbai, we are committed to driving tangible results for your business.
                        Our expertise spans a wide range of services, including Social Media Marketing, SEO, Graphic design, Website Development, Performance Marketing, etc. We understand that every business is unique, and therefore, we tailor our strategies to meet your specific goals and objectives.
                        Let us help you unlock the full potential of your brand. Partner with us and experience the difference a dedicated agency can make.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="overflow-hidden mb-md-3 mt-md-3 mt-0 md-0" id="about-sec2">
        <div class="container process-container text-center">
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
                                <h4 class="sub-sec-title">Choose A Service</h4>
                                <p class="sec-para">Pick the ideal service that suits your requirement</p>
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
                                <h4 class="sub-sec-title">Define Requirements</h4>
                                <p class="sec-para">Let us know what you expect & provide a clear brief</p>
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
                                <h4 class="sub-sec-title">Request A Meeting</h4>
                                <p class="sec-para">We’ll set up a time to discuss all of your project goals</p>
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
                        <h4 class="sub-sec-title">Final Solution</h4>
                        <p class="sec-para">Get the final solution done as per the provided plan</p>
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


    <div class="ourwork overflow-hidden space" id="about-sec4">
        <div class="container">
            <div class="text-center content-box">
                <!-- <h2 class="sec-title">Making a mark, one day at a time!</h2> -->
                <h2 class="fw-bold sec-title"
                    data-aos="fade-up"
                    data-aos-delay="200"
                    data-aos-duration="1200"
                    data-aos-easing="ease-in-out">
                    More Than Just Services — <span class="text-blue"> Here’s What Powers Us</span>
                </h2>
            </div>

            <!-- Static Flex Image Layout -->
            <div class="image-gallery js-overlay gap-3">
                <div class="position-relative">
                    <img src="https://themes.potenzaglobalsolutions.com/netcraft/wp-content/uploads/2024/12/general-img1-800x900.jpg"
                        class="gallery-img default-active" alt="Business Image">
                    <div class="img-overlay d-flex flex-column justify-content-between h-100 p-3">
                        <!-- Top content -->
                        <div class="top-content desc-text d-none">
                            <a href="about.html" class="th-btn th-icon text-white p-2 logo-info mt-2">Semrush (SEO)</a>
                            <a href="about.html" class="th-btn th-icon text-white p-2 logo-info mt-2">ChatGPT (Content)</a>
                            <a href="about.html" class="th-btn th-icon text-white p-2 logo-info mt-2">Meta Ads (Advertising)</a>
                            <a href="about.html" class="th-btn th-icon text-white p-2 logo-info mt-2">Adobe Photoshop/Lightroom (Photography & Editing)</a>
                        </div>

                        <!-- Bottom content -->
                        <div class="bottom-content">
                            <h4 class="text-white sub-sec-title">Our Tools</h4>
                            <p class="text-white text-start mb-0 sec-para">Hover to discover how we power your growth.</p>
                            <p class="text-white text-start desc-text d-none sec-para">
                                In today’s fast-moving digital landscape, staying ahead means staying smart — and that’s exactly what we do.
                            </p>
                            <div class="explore-btn">
                                <a href="about.html" class="th-btn th-icon text-white w-100 text-start">Explore More </a>
                                <i class="fa-regular fa-arrow-right ms-2"></i>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="position-relative">
                    <img src="https://themes.potenzaglobalsolutions.com/netcraft/wp-content/uploads/2024/12/general-img1-800x900.jpg"
                        class="gallery-img" alt="Meeting Image">

                    <div class="img-overlay h-100 p-3">
                        <!-- Top content -->
                        <div class="top-content desc-text d-none">
                            <a href="about.html" class="th-btn th-icon text-white p-2 logo-info mt-2">+250% leads</a>
                            <a href="about.html" class="th-btn th-icon text-white p-2 logo-info mt-2">60K new users</a>
                            <a href="about.html" class="th-btn th-icon text-white p-2 logo-info mt-2">2k views</a>
                            <a href="about.html" class="th-btn th-icon text-white p-2 logo-info mt-2">View Case Study</a>
                        </div>

                        <!-- Bottom content -->
                        <div class="bottom-content">
                            <h4 class="text-white sub-sec-title">Client Impact</h4>
                            <p class="text-white text-start mb-0 sec-para">Real stories of brands we’ve transformed</p>
                            <p class="text-white text-start desc-text d-none sec-para">
                                Our success is measured by the results we drive — and the brands we help grow. From local startups to national players, our portfolio is packed with case studies that showcase real ROI.
                            </p>
                            <div class="explore-btn">
                                <a href="about.html" class="th-btn th-icon text-white w-100 text-start">Explore More </a>
                                <i class="fa-regular fa-arrow-right ms-2"></i>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="position-relative">
                    <img src="https://themes.potenzaglobalsolutions.com/netcraft/wp-content/uploads/2024/12/general-img1-800x900.jpg"
                        class="gallery-img" alt="Office Image">
                    <div class="img-overlay h-100 p-3">
                        <!-- Top content -->
                        <div class="top-content desc-text d-none">
                            <a href="about.html" class="th-btn th-icon text-white p-2 logo-info mt-2">Bold ideas</a>
                            <a href="about.html" class="th-btn th-icon text-white p-2 logo-info mt-2">Creatives</a>
                            <a href="about.html" class="th-btn th-icon text-white p-2 logo-info mt-2">Growth mindset</a>
                            <a href="about.html" class="th-btn th-icon text-white p-2 logo-info mt-2">People-first culture</a>
                        </div>

                        <!-- Bottom content -->
                        <div class="bottom-content">
                            <h4 class="text-white sub-sec-title">Culture & Team</h4>
                            <p class="text-white text-start mb-0 sec-para">Meet the creative minds fueling your success</p>
                            <p class="text-white text-start desc-text d-none sec-para">
                                Behind every pixel, post, and plan is a passionate team driven by curiosity and creativity.
                            </p>
                            <div class="explore-btn">
                                <a href="about.html" class="th-btn th-icon text-white w-100 text-start">Explore More </a>
                                <i class="fa-regular fa-arrow-right ms-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="about-area overflow-hidden position-relative p-0" id="about-banner" style="background-color: black;">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 p-0 position-relative">

                    <!-- Static Background Text Centered -->
                    <div class="static-text position-absolute top-50 start-50 translate-middle text-center w-100" style="z-index: 0; pointer-events: none;">
                        <h1 style="font-size: 100px; color: white; font-weight: 900; white-space: nowrap;">
                            SINCE 2017
                        </h1>
                    </div>

                    <!-- Video Layer -->
                    <div class="img player-video" id="videoScaleDown" style="position: relative; z-index: 1;">
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
                        });

                        gsap.to("#videoScaleDown", {
                            scale: 0.7,
                            transformOrigin: "center",
                            scrollTrigger: {
                                trigger: "#videoScaleDown",
                                // start: "40% 50%",
                                // end: "+=1000",
                                markers: false,
                                pin: true,
                                scrub: true
                            }
                        });
                    </script>
                    @endpush
                </div>
            </div>
        </div>
    </section>

    <div class="mb-md-5 mb-2 py-4 px-3 founder" id="our-founder">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <!-- Left Section with Image and Play Button -->
                <!-- Left Section with Image and Play Button -->
                <div class="col-md-6 position-relative img custom-top me-0 me-md-5"
                    data-aos="fade-right"
                    data-aos-delay="100"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out"
                    style="--tw-bg-opacity: 1; background-color: rgb(255 255 255 / var(--tw-bg-opacity)); padding: 1rem; border-radius: 30px;">
                    <img src="https://www.sociomark.in/assets/img/founders.jpg" class="img-fluid rounded" alt="Office Team">
                </div>


                <!-- Right Section with Text and Progress Bars -->
                <div class="col-md-6 text-white p-4 ">
                    <h2 class="fw-bold mb-1 sec-title"
                        data-aos="fade-left"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                        Meet Our <span class="text-blue"> Founders</span>
                    </h2>

                    <h4 class="sec-para text-uppercase sub-sec-title " data-aos="fade-left"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">Mr. Vivek Baandal & Mrs. Heta Desai Baandal</h4>
                    <p class="sec-para" data-aos="fade-left"
                        data-aos-delay="200"
                        data-aos-duration="1200"
                        data-aos-easing="ease-in-out">Together Mr. Vivek Baandal & Mrs. Heta Desai Baandal are dedicated to helping businesses achieve digital prosperity. Their partnership forged during the college years, has grown into a flourishing business venture. They have build an agency that is committed to delivering outstanding work, their shared passion for creativity and innovation drives SocioMark’s success.
                        The agency fosters an environment that is creative and collaborative, where every idea is welcomed and appreciated. This culture of innovation empowers the development of fresh and creative work that delivers exceptional results. With a core philosophy of fostering client's thriving success, Vivek and Heta have made their agency a reliable ally for businesses seeking to elevate their market presence and to make a significant impact in the digital world
                    </p>

                    <a href="about.html" class="th-btn th-icon text-white p-3 logo-info mt-2" data-aos="fade-left"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">Meet Our Team</a>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-md-5 mt-md-5 mt-5 mb-2 py-1 py-md-4 overflow-hidden overflow-hidden space" id="about-sec3">
        <div class="container">
            <div class="row d-flex justify-content-center justify-content-md-end mt-4">

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
                <div class="col-12 col-md-3 first-feature-card feature-card flip-box p-0 mx-2"
                    data-aos="fade-left"
                    data-aos-delay=" 300"
                    data-aos-duration="1200"
                    data-aos-easing="ease-in-out">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                            <img src="{{ asset('frontend-assets/img/ourCulture/2.png') }}" alt="">
                            <h4 class="sub-sec-title mt-2"> Our Vision</h4>
                        </div>
                        <div class="flip-box-back d-flex justify-content-center align-items-center">
                            <p class="sec-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad minus rerum quibusdam veritatis tempore magnam.</p>
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
                            <h4 class="sub-sec-title mt-2">Our Mission</h4>
                        </div>
                        <div class="flip-box-back d-flex justify-content-center align-items-center">
                            <p class="sec-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad minus rerum quibusdam veritatis tempore magnam.</p>
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
                            <h4 class="sub-sec-title mt-2">Our Vision</h4>
                        </div>
                        <div class="flip-box-back d-flex justify-content-center align-items-center">
                            <p class="sec-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad minus rerum quibusdam veritatis tempore magnam.</p>
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
                            <h4 class="sub-sec-title mt-2">Our Vision</h4>
                        </div>
                        <div class="flip-box-back d-flex justify-content-center align-items-center">
                            <p class="sec-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad minus rerum quibusdam veritatis tempore magnam.</p>
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
                            <h4 class="sub-sec-title mt-2">Our Vision</h4>
                        </div>
                        <div class="flip-box-back d-flex justify-content-center align-items-center">
                            <p class="sec-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad minus rerum quibusdam veritatis tempore magnam.</p>
                        </div>
                    </div>
                </div>

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

    // about-sec4

    document.addEventListener("DOMContentLoaded", function() {
        const images = document.querySelectorAll(".gallery-img");

        if (images.length > 0) {
            images.forEach(img => img.classList.remove("default-active"));
            images[0].classList.add("default-active");

            const firstOverlay = images[0].parentElement.querySelector(".img-overlay");
            const firstDescs = firstOverlay.querySelectorAll(".desc-text");

            firstDescs.forEach(desc => desc.classList.remove("d-none"));
            firstOverlay.classList.remove("justify-content-end");
            firstOverlay.classList.add("justify-content-between");
        }

        images.forEach((img) => {
            img.addEventListener("mouseenter", function() {
                // Remove active from all
                images.forEach((image) => image.classList.remove("default-active"));
                const allOverlays = document.querySelectorAll(".img-overlay");
                allOverlays.forEach(overlay => {
                    overlay.classList.remove("justify-content-between");
                    overlay.classList.add("justify-content-end");

                    const descs = overlay.querySelectorAll(".desc-text");
                    descs.forEach(desc => desc.classList.add("d-none"));
                });

                // Set active
                this.classList.add("default-active");
                const currentOverlay = this.parentElement.querySelector(".img-overlay");
                const currentDescs = currentOverlay.querySelectorAll(".desc-text");

                currentDescs.forEach(desc => desc.classList.remove("d-none"));

                currentOverlay.classList.remove("justify-content-end");
                currentOverlay.classList.add("justify-content-between");
            });
        });
    });


    // about-sec4 end
</script>
@endpush