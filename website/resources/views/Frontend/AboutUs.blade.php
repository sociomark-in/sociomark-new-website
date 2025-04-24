@extends('Frontend.layout.app')

@section('custome-style')
    <style>
        #about-us #about-process,
        #about-us #contact {
            background: radial-gradient(ellipse at top, #fff, transparent), radial-gradient(40% 40% at 50% 25%, #75b4d1, transparent), radial-gradient(ellipse at bottom, #fff, transparent);
        }

        #about-us #aboutUs-KEyPoints,
        #our-founder {
            background-color: #F5F5F5;
        }
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
        <div class="breadcumb-wrapper p-0">
            <div class="">
                <div class="w-100" style="height: 70vh;">
                    <video src="{{asset('frontend-assets/about.mp4')}}" loop autoplay muted class="w-100 h-100" style="object-fit: cover;"></video>
                </div>
            </div>
        </div>
        <div class="about-area2 mb-md-5 mt-md-5 mt-5 md-5 overflow-hidden" id="about-sec">
            <div class="container">
                <div class="row align-items-end justify-content-center">
                    <div class="col-lg-9 col-12 d-flex justify-content-center align-items-center flex-column">
                        <div class="title-area mb-md-3 mb-2 mt-n1">
                            <!-- <h2 class="sec-title text-center "> Our Comprehensive International SEO Solutions</h2> -->
                            <h1 class="text-center fw-bold sec-title my-3" data-aos="zoom-in" data-aos-delay="100">
                                Your brand’s digital partner, <span class="text-blue"> every step of the way</span>
                            </h1>
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-center align-items-center flex-column">
                        <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="100">
                            We go beyond the ordinary. Every brand we work with gets a tailored, thoughtful strategy—because
                            no two stories are the same. Whether it’s SEO, social media marketing, or web development, we
                            listen, understand, and deliver what actually works.
                        </p>
                        <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="100">
                            As a full-suite digital marketing agency in UAE, we offer everything from performance marketing
                            to creative strategy under one roof. Our focus is on real results and meaningful connections.
                            Client satisfaction isn’t just a goal—it’s how we measure success. While others follow trends,
                            we build lasting impact. That’s what makes us reMARKable.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <section class="position-relative overflow-hidden space overflow-hidden" id="process-sec">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="title-area text-center">
                            <div class="shadow-title">Process</div>
                            <span class="sub-title sub-title4 mb-4 mb-md-5">Work Process<span></span></span>
                            <h2 class="sec-title  ">From Brief to Brilliance</h2>
                        </div>
                    </div>
                </div>
                <div class="step-wrap">
                    <div class="row g-3 g-md-4">
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="process-card">
                                <div class="box-wrapp">
                                    <div class="box-icon">
                                        <img src="{{ asset('frontend-assets/img/icon/process_1_1.svg') }}" alt="icon">
                                    </div>
                                    <div class="box-shape"><img src="{{ asset('frontend-assets/img/icon/arrow.png') }}"
                                            alt=""></div>
                                    <div class="box-number">
                                        01 </div>
                                </div>
                                <div class="box-content">
                                    <h2 class="box-title">Pick What You Need</h2>
                                    <p class="box-text">Choose the service that fits your brand’s current goals.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="process-card">
                                <div class="box-wrapp">
                                    <div class="box-icon">
                                        <img src="{{ asset('frontend-assets/img/icon/process_1_2.svg') }}" alt="icon">
                                    </div>
                                    <div class="box-shape"><img src="{{ asset('frontend-assets/img/icon/arrow.png') }}"
                                            alt=""></div>
                                    <div class="box-number">
                                        02 </div>
                                </div>
                                <div class="box-content">
                                    <h2 class="box-title">Share Your Vision</h2>
                                    <p class="box-text">From campaign goals to creative vibes, the more you share, the
                                        better we plan.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="process-card">
                                <div class="box-wrapp">
                                    <div class="box-icon">
                                        <img src="{{ asset('frontend-assets/img/icon/process_1_3.svg') }}" alt="icon">
                                    </div>
                                    <div class="box-shape"><img src="{{ asset('frontend-assets/img/icon/arrow.png') }}"
                                            alt=""></div>
                                    <div class="box-number">
                                        03 </div>
                                </div>
                                <div class="box-content">
                                    <h2 class="box-title">Let’s Talk</h2>
                                    <p class="box-text">We’ll schedule a call to align on vision, ideas, and execution.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="process-card">
                                <div class="box-wrapp">
                                    <div class="box-icon">
                                        <img src="{{ asset('frontend-assets/img/icon/process_1_1.svg') }}" alt="icon">
                                    </div>
                                    <div class="box-shape"><img src="{{ asset('frontend-assets/img/icon/arrow.png') }}"
                                            alt=""></div>
                                    <div class="box-number">
                                        04 </div>
                                </div>
                                <div class="box-content">
                                    <h2 class="box-title">Watch It Come Alive</h2>
                                    <p class="box-text"> Get the final solution, tailored to your brief and ready to roll.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <!--<div class="col-xl-4 col-md-6 col-12">
                                <div class="process-card">
                                    <div class="box-wrapp">
                                        <div class="box-icon">
                                            <img src="{{ asset('frontend-assets/img/icon/process_1_2.svg') }}" alt="icon">
                                        </div>
                                        <div class="box-shape"><img src="{{ asset('frontend-assets/img/icon/arrow.png') }}"
                                                alt=""></div>
                                        <div class="box-number">
                                            05 </div>
                                    </div>
                                    <div class="box-content">
                                        <h2 class="box-title">Plan Customization</h2>
                                        <p class="box-text">Conduct thorough market of the research to the fast target audience
                                            behaviors. Submit as many design tasks</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 col-12">
                                <div class="process-card">
                                    <div class="box-wrapp">
                                        <div class="box-icon">
                                            <img src="{{ asset('frontend-assets/img/icon/process_1_3.svg') }}"
                                                alt="icon">
                                        </div>
                                        <div class="box-shape"><img src="{{ asset('frontend-assets/img/icon/arrow.png') }}"
                                                alt=""></div>
                                        <div class="box-number">
                                            06 </div>
                                    </div>
                                    <div class="box-content">
                                        <h2 class="box-title">Finished &amp; User Testing</h2>
                                        <p class="box-text">Conduct thorough market of the research to the fast target audience
                                            behaviors. Submit as many design tasks</p>

                                    </div>
                                </div>
                            </div>-->
                    </div>
                </div>
            </div>
        </section>

        <section class="d-none overflow-hidden mb-md-3 mt-md-3 mt-0 md-0" id="about-process">
            <div class="container process-container text-center">
                <h2 class="fw-bold mb-5 sec-title" data-aos="fade-up" data-aos-delay="200">
                    Our Working <span class="text-blue"> Process</span>
                </h2>
                <div class="row justify-content-center gy-5">
                    <!-- Step 1 -->
                    <div class="col-md-3 process-step zig-down" data-aos="fade-up" data-aos-delay="300">

                        <div class="img">
                            <div class="shadow-title">01</div>
                            <div class=" icon " style="background-color: rgb(255 235 245);">
                                <img src="{{ asset('frontend-assets/img/ourCulture/2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="text mt-1 mt-3">
                            <h4 class="sub-sec-title">Choose A Service</h4>
                            <p class="sec-para">Pick the ideal service that suits your requirement</p>
                        </div>
                    </div>

                    <!-- Step 2 (reversed) -->
                    <div class="col-md-3 process-step d-flex flex-column-reverse flex-md-column zig-up" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="text">
                            <h4 class="sub-sec-title">Define Requirements</h4>
                            <p class="sec-para">Let us know what you expect & provide a clear brief</p>
                        </div>
                        <div class="img mt-1 mt-3">
                            <div class="shadow-title">02</div>

                            <div class="icon">
                                <img src="{{ asset('frontend-assets/img/ourCulture/1.png') }}" alt="">
                            </div>

                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="col-md-3 process-step zig-down" data-aos="fade-up" data-aos-delay="500">
                        <div class="img ">
                            <div class="shadow-title">03</div>
                            <div class="icon" style="background-color: rgb(238 251 229);">
                                <img src="{{ asset('frontend-assets/img/ourCulture/4.png') }}" alt="">
                            </div>
                        </div>
                        <div class="text mt-1 mt-3">
                            <h4 class="sub-sec-title">Request A Meeting</h4>
                            <p class="sec-para">We’ll set up a time to discuss all of your project goals</p>
                        </div>
                    </div>

                    <!-- Step 4 (reversed) -->
                    <div class="col-md-3 process-step d-flex flex-column-reverse flex-md-column" data-aos="fade-up"
                        data-aos-delay="600">
                        <div class="text">
                            <h4 class="sub-sec-title">Final Solution</h4>
                            <p class="sec-para">Get the final solution done as per the provided plan</p>
                        </div>
                        <div class="img mt-1 mt-3">
                            <div class="shadow-title">04</div>
                            <div class="icon position-absolute-img" style="background-color: rgb(252 243 233);">
                                <img src="{{ asset('frontend-assets/img/ourCulture/3.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ourwork overflow-hidden space" id="aboutUs-KEyPoints">
            <div class="container">
                <div class="text-center content-box">
                    <!-- <h2 class="sec-title">Making a mark, one day at a time!</h2> -->
                    <h2 class="fw-bold sec-title" data-aos="fade-up" data-aos-delay="200">
                        More Than Just Services — <span class="text-blue"> Here’s What Powers Us</span>
                    </h2>
                </div>

                <!-- Static Flex Image Layout -->
                <div class="image-gallery js-overlay gap-3 d-flex flex-column flex-lg-row justify-content-center">
                    <div class="position-relative">
                        <img src="https://themes.potenzaglobalsolutions.com/netcraft/wp-content/uploads/2024/12/general-img1-800x900.jpg"
                            class="gallery-img default-active" alt="Business Image">
                        <div class="img-overlay d-flex flex-column justify-content-between h-100 p-3">
                            <!-- Top content -->
                            <div class="top-content desc-text d-none">
                                <a href="about.html" class="th-btn th-btn-white no-hover p-2 px-3 mt-2">Semrush (SEO)</a>
                                <a href="about.html" class="th-btn th-btn-white no-hover p-2 px-3 mt-2">ChatGPT
                                    (Content)</a>
                                <a href="about.html" class="th-btn th-btn-white no-hover p-2 px-3 mt-2">Meta Ads
                                    (Advertising)</a>
                                <a href="about.html" class="th-btn th-btn-white no-hover p-2 px-3 mt-2">Adobe (Photography
                                    & Editing)</a>
                            </div>

                            <!-- Bottom content -->
                            <div class="bottom-content">
                                <h4 class="text-white sub-sec-title">Our Tools</h4>
                                <div class="mb-2">
                                    <p class="text-white text-start mb-0 sec-para">Hover to discover how we power your
                                        growth.</p>
                                    <p class="text-white text-start desc-text d-none sec-para">
                                        In today’s fast-moving digital landscape, staying ahead means staying smart — and
                                        that’s exactly what we do.
                                    </p>
                                </div>
                                <div class="">
                                    <a href="#"
                                        class="th-btn th-btn-white th-icon d-flex justify-content-between">Explore More <i
                                            class="fa-solid fa-arrow-right ms-2"></i></a>
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
                                <a href="about.html" class="th-btn th-btn-white no-hover p-2 px-3 mt-2">+250% leads</a>
                                <a href="about.html" class="th-btn th-btn-white no-hover p-2 px-3 mt-2">60K new users</a>
                                <a href="about.html" class="th-btn th-btn-white no-hover p-2 px-3 mt-2">2k views</a>
                                <a href="about.html" class="th-btn th-btn-white no-hover p-2 px-3 mt-2">View Case
                                    Study</a>
                            </div>

                            <!-- Bottom content -->
                            <div class="bottom-content">
                                <h4 class="text-white sub-sec-title">Client Impact</h4>
                                <div class="mb-2">
                                    <p class="text-white text-start mb-0 sec-para">Real stories of brands we’ve transformed
                                    </p>
                                    <p class="text-white text-start desc-text d-none sec-para">
                                        Our success is measured by the results we drive — and the brands we help grow. From
                                        local startups to national players, our portfolio is packed with case studies that
                                        showcase real ROI.
                                    </p>
                                </div>
                                <div class="">
                                    <a href="#"
                                        class="th-btn th-btn-white th-icon d-flex justify-content-between">Explore More <i
                                            class="fa-solid fa-arrow-right ms-2"></i></a>
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
                                <a href="about.html" class="th-btn th-icon text-white p-2 logo-info mt-2">Growth
                                    mindset</a>
                                <a href="about.html" class="th-btn th-icon text-white p-2 logo-info mt-2">People-first
                                    culture</a>
                            </div>

                            <!-- Bottom content -->
                            <div class="bottom-content">
                                <h4 class="text-white sub-sec-title">Culture & Team</h4>
                                <div class="mb-2">
                                    <p class="text-white text-start mb-0 sec-para">Meet the creative minds fueling your
                                        success
                                    </p>
                                    <p class="text-white text-start desc-text d-none sec-para">
                                        Behind every pixel, post, and plan is a passionate team driven by curiosity and
                                        creativity.
                                    </p>
                                </div>
                                <div class="">
                                    <a href="#"
                                        class="th-btn th-btn-white th-icon d-flex justify-content-between">Explore More <i
                                            class="fa-solid fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-area overflow-hidden position-relative p-0 d-none" id="about-banner"
            style="background-color: black;">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 p-0 position-relative">

                        <!-- Static Background Text Centered -->
                        <div class="static-text position-absolute top-50 start-50 translate-middle text-center w-100"
                            style="z-index: 0; pointer-events: none;">
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

        <section class="mb-md-5 mb-2 py-4 px-3 founder" id="our-founder">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6 position-relative img custom-top me-0 me-md-5" data-aos="fade-right"
                        data-aos-delay="100"
                        style="--tw-bg-opacity: 1; background-color: rgb(255 255 255 / var(--tw-bg-opacity)); padding: 1rem; border-radius: 30px;">
                        <img src="{{ asset('frontend-assets/img/team/founders.png') }}"
                            class="img-fluid rounded w-100 h-100 object-fit-cover" alt="Office Team">
                    </div>
                    <div class="col-md-6 text-white p-4 ">
                        <h2 class="fw-bold mb-1 sec-title" data-aos="fade-left" data-aos-delay="100">
                            Meet Our <span class="text-blue"> Founders</span>
                        </h2>

                        <h4 class="sec-para text-uppercase sub-sec-title " data-aos="fade-left" data-aos-delay="100">Mr.
                            Vivek Baandal & Mrs. Heta Desai Baandal</h4>
                        <p class="sec-para" data-aos="fade-left">
                            Together, Mr. Vivek Baandal and Mrs. Heta Desai Baandal are dedicated to helping businesses grow
                            in the digital space. What started during their college days has grown into a successful agency
                            built on creativity and purpose.
                        </p>
                        <p class="sec-para" data-aos="fade-left" data-aos-delay="200">
                            They’ve created an environment where ideas thrive, and collaboration leads the way. With a
                            strong foundation and growing presence as a digital marketing company in UAE, they continue to
                            guide brands toward better visibility and long-term success.
                        </p>

                        <a href="about.html" class="th-btn th-icon text-white p-3 logo-info mt-2" data-aos="fade-left"
                            data-aos-delay="100">Meet Our Team</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="space">
            <div class="container">
                <div class="title-area text-center">
                    <span class="sub-title sub-title4 ">EXPERT TEAM <span></span></span>
                    <h2 class="sec-title ">See Our Skilled Expert Team</h2>
                </div>
                <div class="d-none">
                    <div class="team-collage position-relative">
                        <div class="team">
                            @for ($i = 0; $i < 16; $i++)
                                <div class="member" data-aos="zoom-in" data-aos-delay="{{ $i * 100 }}"
                                    style="left: {{ -5 + $i * (100 / 16) }}%">
                                    <img src="{{ asset('frontend-assets/img/team/person-placeholder.png') }}"
                                        alt="Person">
                                </div>
                            @endfor
                            @for ($j = 0; $j < 13; $j++)
                                <div class="member" data-aos="zoom-in" data-aos-delay="{{ $i * 100 + $j * 100 }}"
                                    style="margin-top: 100px; left: {{ $j * (100 / 15) }}%">
                                    <img src="{{ asset('frontend-assets/img/team/person-placeholder.png') }}"
                                        alt="Person">
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-12">
                        <div class="swiper teamSwiper">
                            <div class="swiper-wrapper">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="swiper-slide">
                                        <div class="th-team team-card style1 mb-3">
                                            <div class="box-img">
                                                <img src="{{ asset('frontend-assets/img/team/team_1_3.jpg') }}"
                                                    alt="Team">
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
                                })
                            </script>
                        @endpush
                    </div>
                </div>
            </div>
        </section>
        <style>
            #about-flip .flip-box {
            width: 240px;
            height: 320px;
        }
        </style>
        <section class="mb-md-5 mt-md-5 mt-5 mb-2 py-1 py-md-4 overflow-hidden position-relative space" id="about-flip">
            <div class="container">
                <div class="row text-center d-flex justify-content-center justify-content-md-end mt-4">

                    <div class="col-md-12 col-12 pe-0 pe-md-5">
                        <h2 class="fw-bold sec-title my-3" data-aos="fade-down" data-aos-delay="100">
                            What Makes Us <span class="text-blue"> Remarkable</span>
                        </h2>
                        <p class="sec-para" data-aos="fade-up" data-aos-delay="200">
                            We’re more than a digital agency—we’re a mix of brains, bold moves, and brand love.
                        </p>
                        <p class="sec-para" data-aos="fade-up" data-aos-delay="200">
                            Rooted in the UAE and collaborating with brands across the globe, we bring fresh thinking to
                            every brief.
                        </p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-4" data-aos="fade-right"
                    data-aos-delay="400">
                    <div class="col-12 col-md-2 first-feature-card feature-card flip-box p-0 mx-2" data-aos="fade-left"
                        data-aos-delay=" 300">
                        <div class="flip-box-inner h-100">
                            <div class="flip-box-front h-100 d-flex align-items-center justify-content-center flex-column">
                                <img src="{{ asset('frontend-assets/img/ourCulture/2.png') }}" alt=""
                                    class="h-auto w-auto">
                                <h4 class="sub-sec-title mt-2">Quality Content</h4>
                            </div>
                            <div class="flip-box-back d-flex justify-content-center align-items-center h-100">
                                <p class="sec-para">We don’t just create—we captivate your audience.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-2 first-feature-card feature-card flip-box p-0 mx-2" data-aos="fade-left"
                        data-aos-delay="300">
                        <div class="flip-box-inner h-100">
                            <div class="flip-box-front h-100 d-flex align-items-center justify-content-center flex-column">
                                <img src="{{ asset('frontend-assets/img/ourCulture/2.png') }}" alt=""
                                    class="h-auto w-auto">
                                <h4 class="sub-sec-title mt-2">Customized Strategy</h4>
                            </div>
                            <div class="flip-box-back d-flex justify-content-center align-items-center h-100">
                                <p class="sec-para">A strategy that speaks your brand’s language.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 second-feature-card feature-card flip-box p-0 mx-2">
                        <div class="flip-box-inner h-100">
                            <div class="flip-box-front h-100 d-flex align-items-center justify-content-center flex-column">
                                <img src="{{ asset('frontend-assets/img/ourCulture/2.png') }}" alt=""
                                    class="h-auto w-auto">
                                <h4 class="sub-sec-title mt-2">Results-Driven</h4>
                            </div>
                            <div class="flip-box-back d-flex justify-content-center align-items-center h-100">
                                <p class="sec-para">Performance that delivers measurable results.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-2 second-feature-card feature-card flip-box p-0 mx-2" data-aos="fade-right"
                        data-aos-delay="400">
                        <div class="flip-box-inner h-100">
                            <div class="flip-box-front h-100 d-flex align-items-center justify-content-center flex-column">
                                <img src="{{ asset('frontend-assets/img/ourCulture/2.png') }}" alt=""
                                    class="h-auto w-auto">
                                <h4 class="sub-sec-title mt-2">Creative Distinction</h4>
                            </div>
                            <div class="flip-box-back d-flex justify-content-center align-items-center h-100">
                                <p class="sec-para">Creativity that cuts through the noise.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-2 second-feature-card feature-card flip-box p-0 mx-2" data-aos="fade-right"
                        data-aos-delay="400">
                        <div class="flip-box-inner h-100">
                            <div class="flip-box-front h-100 d-flex align-items-center justify-content-center flex-column">
                                <img src="{{ asset('frontend-assets/img/ourCulture/2.png') }}" alt=""
                                    class="h-auto w-auto">
                                <h4 class="sub-sec-title mt-2">Collaborative Growth</h4>
                            </div>
                            <div class="flip-box-back d-flex justify-content-center align-items-center h-100">
                                <p class="sec-para">We’re in this together—every step of the way.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        @include('Frontend.partial.contactUs')

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
