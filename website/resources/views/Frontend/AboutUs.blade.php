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
        <div class="about-area2 mb-md-5 mt-md-5 mt-5 md-5 overflow-hidden" id="about-sec">
            <div class="container">
                <div class="row align-items-end justify-content-center">
                    <div class="col-lg-9 col-12 d-flex justify-content-center align-items-center flex-column">
                        <div class="title-area mb-md-3 mb-2 mt-n1">
                            <!-- <h2 class="sec-title text-center "> Our Comprehensive International SEO Solutions</h2> -->
                            <h1 class="text-center fw-bold sec-title my-3" data-aos="zoom-in" data-aos-delay="100"
                                data-aos-duration="1000" data-aos-easing="ease-in-out">
                                Your brand’s digital partner, <span class="text-blue"> every step of the way</span>
                            </h1> 
                        </div>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-center align-items-center flex-column">
                        <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">In today's digital age, a strong online
                            presence is no longer a luxury but a necessity. Sociomark is your trusted partner in navigating
                            the tough digital landscape. As a leading Digital Marketing agency based in Navi Mumbai, we are
                            committed to driving tangible results for your business.
                            Our expertise spans a wide range of services, including Social Media Marketing, SEO, Graphic
                            design, Website Development, Performance Marketing, etc. We understand that every business is
                            unique, and therefore, we tailor our strategies to meet your specific goals and objectives.
                            Let us help you unlock the full potential of your brand. Partner with us and experience the
                            difference a dedicated agency can make.
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
                            <span class="sub-title sub-title4  ">Work Process<span></span></span>
                            <h2 class="sec-title  ">The work process of our agency</h2>
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
                                    <h2 class="box-title">Research and Strategy</h2>
                                    <p class="box-text">Conduct thorough market of the research to the fast target audience
                                        behaviors. Submit as many design tasks</p>

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
                                        <img src="{{ asset('frontend-assets/img/icon/process_1_3.svg') }}" alt="icon">
                                    </div>
                                    <div class="box-shape"><img src="{{ asset('frontend-assets/img/icon/arrow.png') }}"
                                            alt=""></div>
                                    <div class="box-number">
                                        03 </div>
                                </div>
                                <div class="box-content">
                                    <h2 class="box-title">Finished &amp; User Testing</h2>
                                    <p class="box-text">Conduct thorough market of the research to the fast target audience
                                        behaviors. Submit as many design tasks</p>

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
                                    <h2 class="box-title">Research and Strategy</h2>
                                    <p class="box-text">Conduct thorough market of the research to the fast target audience
                                        behaviors. Submit as many design tasks</p>

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
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="overflow-hidden mb-md-3 mt-md-3 mt-0 md-0" id="about-process">
            <div class="container process-container text-center">
                <h2 class="fw-bold mb-5 sec-title" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1200"
                    data-aos-easing="ease-in-out">
                    Our Working <span class="text-blue"> Process</span>
                </h2>
                <div class="row justify-content-center gy-5">
                    <!-- Step 1 -->
                    <div class="col-md-3 process-step zig-down" data-aos="fade-up" data-aos-delay="300"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">

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
                        data-aos-delay="400" data-aos-duration="1200" data-aos-easing="ease-in-out">
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
                    <div class="col-md-3 process-step zig-down" data-aos="fade-up" data-aos-delay="500"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">
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
                        data-aos-delay="600" data-aos-duration="1200" data-aos-easing="ease-in-out">
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
        </div>

        <div class="ourwork overflow-hidden space" id="aboutUs-KEyPoints">
            <div class="container">
                <div class="text-center content-box">
                    <!-- <h2 class="sec-title">Making a mark, one day at a time!</h2> -->
                    <h2 class="fw-bold sec-title" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1200"
                        data-aos-easing="ease-in-out">
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
                                            class="fa-regular fa-arrow-right ms-2"></i></a>
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
                                            class="fa-regular fa-arrow-right ms-2"></i></a>
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
                                            class="fa-regular fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

        <div class="mb-md-5 mb-2 py-4 px-3 founder" id="our-founder">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6 position-relative img custom-top me-0 me-md-5" data-aos="fade-right"
                        data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out"
                        style="--tw-bg-opacity: 1; background-color: rgb(255 255 255 / var(--tw-bg-opacity)); padding: 1rem; border-radius: 30px;">
                        <img src="https://www.sociomark.in/assets/img/founders.jpg"
                            class="img-fluid rounded w-100 h-100 object-fit-cover" alt="Office Team">
                    </div>
                    <div class="col-md-6 text-white p-4 ">
                        <h2 class="fw-bold mb-1 sec-title" data-aos="fade-left" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            Meet Our <span class="text-blue"> Founders</span>
                        </h2>

                        <h4 class="sec-para text-uppercase sub-sec-title " data-aos="fade-left" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">Mr. Vivek Baandal & Mrs. Heta Desai
                            Baandal</h4>
                        <p class="sec-para" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1200"
                            data-aos-easing="ease-in-out">Together Mr. Vivek Baandal & Mrs. Heta Desai Baandal are
                            dedicated to helping businesses achieve digital prosperity. Their partnership forged during the
                            college years, has grown into a flourishing business venture. They have build an agency that is
                            committed to delivering outstanding work, their shared passion for creativity and innovation
                            drives SocioMark’s success.
                            The agency fosters an environment that is creative and collaborative, where every idea is
                            welcomed and appreciated. This culture of innovation empowers the development of fresh and
                            creative work that delivers exceptional results. With a core philosophy of fostering client's
                            thriving success, Vivek and Heta have made their agency a reliable ally for businesses seeking
                            to elevate their market presence and to make a significant impact in the digital world
                        </p>

                        <a href="about.html" class="th-btn th-icon text-white p-3 logo-info mt-2" data-aos="fade-left"
                            data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">Meet Our Team</a>
                    </div>
                </div>
            </div>
        </div>

        <section class="space">
            <div class="container">
                <div class="title-area text-center">
                    <span class="sub-title sub-title4 ">EXPERT TEAM <span></span></span>
                    <h2 class="sec-title ">See Our Skilled Expert Team</h2>
                </div>
                <div class="">
                    <div class="team-collage position-relative">
                        <div class="team">
                            @for ($i = 0; $i < 16; $i++)
                                <div class="member" data-aos="zoom-in" data-aos-delay="{{ $i * 100 }}"
                                    style="left: {{ -5 + $i * (100 / 16) }}%">
                                    <img src="{{ asset('frontend-assets/img/team/person-placeholder.png') }}"
                                        alt="Person">
                                </div>
                            @endfor
                            @for ($j = 0; $j < 16; $j++)
                                <div class="member" data-aos="zoom-in" data-aos-delay="{{ $i * 100 + $j * 100 }}"
                                    style="margin-top: 100px; left: {{ $j * (100 / 15) }}%">
                                    <img src="{{ asset('frontend-assets/img/team/person-placeholder.png') }}"
                                        alt="Person">
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="mb-md-5 mt-md-5 mt-5 mb-2 py-1 py-md-4 overflow-hidden position-relative space" id="about-flip">
            <div class="container">
                <div class="row d-flex justify-content-center justify-content-md-end mt-4">

                    <div class="col-md-6 col-12 pe-0 pe-md-5">
                        <h2 class="fw-bold sec-title my-3" data-aos="fade-down" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            Property <span class="text-blue"> features</span>
                        </h2>
                        <p class="sec-para" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1200"
                            data-aos-easing="ease-in-out">Over 5,000+ Reviews and Counting. Customers trust our Quality
                            product features. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni laudantium,
                            iusto et atque eum velit amet facilis nemo possimus vitae ullam vel harum asperiores, rem
                            voluptatibus sit illo aperiam nesciunt! </p>
                    </div>
                    <div class="col-12 col-md-3 first-feature-card feature-card flip-box p-0 mx-2" data-aos="fade-left"
                        data-aos-delay=" 300" data-aos-duration="1200" data-aos-easing="ease-in-out">
                        <div class="flip-box-inner h-100">
                            <div class="flip-box-front h-100 d-flex align-items-center justify-content-center flex-column">
                                <img src="{{ asset('frontend-assets/img/ourCulture/2.png') }}" alt=""
                                    class="h-auto w-auto">
                                <h4 class="sub-sec-title mt-2"> Our Vision</h4>
                            </div>
                            <div class="flip-box-back d-flex justify-content-center align-items-center h-100">
                                <p class="sec-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad minus rerum
                                    quibusdam veritatis tempore magnam.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 first-feature-card feature-card flip-box p-0 mx-2" data-aos="fade-left"
                        data-aos-delay="300" data-aos-duration="1200" data-aos-easing="ease-in-out">
                        <div class="flip-box-inner h-100">
                            <div class="flip-box-front h-100 d-flex align-items-center justify-content-center flex-column">
                                <img src="{{ asset('frontend-assets/img/ourCulture/2.png') }}" alt=""
                                    class="h-auto w-auto">
                                <h4 class="sub-sec-title mt-2">Our Mission</h4>
                            </div>
                            <div class="flip-box-back d-flex justify-content-center align-items-center h-100">
                                <p class="sec-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad minus rerum
                                    quibusdam veritatis tempore magnam.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center justify-content-md-end mt-4" data-aos="fade-right"
                    data-aos-delay="400" data-aos-duration="1200" data-aos-easing="ease-in-out">
                    <div class="col-12 col-md-3 second-feature-card feature-card flip-box p-0 mx-2">
                        <div class="flip-box-inner h-100">
                            <div class="flip-box-front h-100 d-flex align-items-center justify-content-center flex-column">
                                <img src="{{ asset('frontend-assets/img/ourCulture/2.png') }}" alt=""
                                    class="h-auto w-auto">
                                <h4 class="sub-sec-title mt-2">Our Vision</h4>
                            </div>
                            <div class="flip-box-back d-flex justify-content-center align-items-center h-100">
                                <p class="sec-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad minus rerum
                                    quibusdam veritatis tempore magnam.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 second-feature-card feature-card flip-box p-0 mx-2" data-aos="fade-right"
                        data-aos-delay="400" data-aos-duration="1200" data-aos-easing="ease-in-out">
                        <div class="flip-box-inner h-100">
                            <div class="flip-box-front h-100 d-flex align-items-center justify-content-center flex-column">
                                <img src="{{ asset('frontend-assets/img/ourCulture/2.png') }}" alt=""
                                    class="h-auto w-auto">
                                <h4 class="sub-sec-title mt-2">Our Vision</h4>
                            </div>
                            <div class="flip-box-back d-flex justify-content-center align-items-center v">
                                <p class="sec-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad minus rerum
                                    quibusdam veritatis tempore magnam.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 second-feature-card feature-card flip-box p-0 mx-2" data-aos="fade-right"
                        data-aos-delay="400" data-aos-duration="1200" data-aos-easing="ease-in-out">
                        <div class="flip-box-inner h-100">
                            <div class="flip-box-front h-100 d-flex align-items-center justify-content-center flex-column">
                                <img src="{{ asset('frontend-assets/img/ourCulture/2.png') }}" alt=""
                                    class="h-auto w-auto">
                                <h4 class="sub-sec-title mt-2">Our Vision</h4>
                            </div>
                            <div class="flip-box-back d-flex justify-content-center align-items-center h-100">
                                <p class="sec-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad minus rerum
                                    quibusdam veritatis tempore magnam.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
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
