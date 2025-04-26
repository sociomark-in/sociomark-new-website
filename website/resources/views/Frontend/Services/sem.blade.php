@extends('Frontend.layout.app')
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
@section('custome-style')
    <style>
        #seo-service #work-flow,
        #seo-service #about-sec5,
        #seo-service #Features,
        #seo-service #contact {
            background-color: #F5F5F5 !important;
        }

        #seo-service #features .sub-sec-title {
            font-weight: 700 !important;
        }

        @media (max-width: 576px) {

            #seo-service #about-sec2,
            #seo-service #services-tab {
                padding: 3rem 0 3rem 0 !important;
            }

            .according-list-area {
                margin-bottom: 290px;
            }

            #seo-service #services-tab .side-padding-mbl {
                padding: 0px 1.5rem;
            }

            #seo-service #services-tab .sec-para {
                text-align: left;
            }

            #seo-service #contact {
                padding: 40px 2px !important;
            }
        }

        /* section 2 */
        #seo-service #about-sec2 {
            /* background-color: #F5F5F5; */
            background: radial-gradient(ellipse at top, #fff, transparent), radial-gradient(40% 40% at 50% 25%, #75b4d1, transparent), radial-gradient(ellipse at bottom, #fff, transparent);
        }

        /* section 2 end */


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

        #seo-service #about-sec3 .according-list.item-active .according-img {
            transform: scale(1);
            height: fit-content;
        }

        /* Zoom in on hover */
        .hover-item:hover .according-img {
            opacity: 1;
            transform: scale(1);
            /* Zoom to normal size */
            pointer-events: auto;
            height: auto;
            overflow: visible;
        }



        #seo-service #about-sec3 .box-title {
            line-height: 32px;
            font-size: 25px;
            letter-spacing: .10px;
            font-weight: 500;
            padding-left: 0px;
        }

        #seo-service #about-sec3 .according-list .according-img {
            max-width: 700px;
        }

        #seo-service #about-sec3 .accordion-item2 {
            padding-bottom: 15px;
            max-width: 510px;
        }

        #seo-service #about-sec3 .accordion-item2 .box-title:before {
            width: 0px;

        }

        #seo-service #about-sec3 .according-list.hover-item.item-active .accordion-item2 {
            border-bottom-color: #106c97;
        }

        /* section3 end */

        /* services tab */
        /* Slide-in animations */
        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-100px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Zoom-in animation */
        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.85);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Apply animations */
        .animate-slide-in-right {
            animation: slideInRight 0.6s ease forwards;
        }

        .animate-slide-in-left {
            animation: slideInLeft 0.6s ease forwards;
        }

        .animate-zoom-in {
            animation: zoomIn 0.6s ease forwards;
        }

        .animate-slide-in-right,
        .animate-slide-in-left,
        .animate-zoom-in {
            animation-duration: 0.8s;
            animation-delay: 0.1s;
            animation-fill-mode: both;
        }

        #seo-service #services-tab .nav-pills .nav-link {
            border-radius: 0.25rem;
            background-color: #106c97;
            color: white;
            border: none;
            border-radius: 0px;
            text-align: left;
            padding-left: 35px !important;
        }

        #seo-service #services-tab .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            background-color: white !important;
            color: #106c97 !important;
        }

        #seo-service #services-tab #v-pills-tab {
            padding: 20px 20px 20px 0px;
            background-color: #106c97;
        }

        #seo-service #services-tab .sec-para-list,
        #seo-service #about-sec6 .sec-para-faq {
            font-size: 17px;
            color: #797E88;
            line-height: 28px;
            letter-spacing: .10px;
        }

        @media (max-width: 1300px) {
            #seo-service #about-sec3 .according-list .according-img {
                max-width: 50%;
            }

            #seo-service #about-sec3 .accordion-item2 {
                max-width: 45%;
            }
        }

        @media (max-width: 950px) {
            #seo-service #about-sec3 .according-list .according-img {
                max-width: 100%;
            }

            #seo-service #about-sec3 .accordion-item2 {
                max-width: 100%;
            }
        }

        /* services tab end */
    </style>
@endsection

@section('content')
    <main id="seo-service">
        <div class="breadcumb-wrapper p-0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <img src="https://placehold.co/1920x900" alt="" srcset="" width="100%">
                    </div>
                </div>
            </div>
        </div>
        <div class="space-extra2-bottom">
            <div class="container">
                <div class="row text-center">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                        <div class="counter-card pb-2">
                            <h3 class="box-number text-orange"><span class="counter-number">123</span>M<span class="plus">+</span>
                            </h3>
                            <div class="media-body">
                                <p class=" counter-text mb-n1"><b>Organic Traffic</b></p>
                            </div>
                        </div>
                        <div class="divider"></div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                        <div class="counter-card pb-2">
                            <h3 class="box-number text-orange"><span class="counter-number">412</span>K<span class="plus">+</span>
                            </h3>
                            <div class="media-body">
                                <p class=" counter-text mb-n1"><b>Organic Keywords Growth</b></p>
                            </div>
                        </div>
                        <div class="divider"></div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                        <div class="counter-card pb-2">
                            <h3 class="box-number text-orange"><span class="counter-number">2.4</span>M<span class="plus">+</span>
                            </h3>
                            <div class="media-body">
                                <p class=" counter-text mb-n1"><b>Organic Revenue Generated</b></p>
                            </div>
                        </div>
                        <div class="divider"></div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                        <div class="counter-card pb-2">
                            <h3 class="box-number text-orange"><span class="counter-number">48</span><span class="plus">+</span></h3>
                            <div class="media-body">
                                <p class=" counter-text mb-n1"><b>Happy Customers</b></p>
                            </div>
                        </div>
                        <div class="divider"></div>
                    </div>

                </div>
            </div>
        </div>

        <section class="overflow-hidden py-5" id="about-sec">
            <div class="container">
                <div class="row align-items-end justify-content-center">
                    <div class="col-lg-10 col-12 d-flex justify-content-center align-items-center flex-column">
                        <div class="title-area mb-md-3 mb-2 mt-n1">
                            <h2 class="text-center fw-bold sec-title my-3" data-aos="zoom-in" data-aos-delay="100"
                                data-aos-duration="1000" data-aos-easing="ease-in-out">
                                Get <span class="text-blue">Seen</span>, Get <span class="text-blue">Clicked</span>, Get
                                <span class="text-blue">Results </span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12 d-flex justify-content-center align-items-center flex-column">
                        <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                            data-aos-duration="1200" data-aos-easing="ease-in-out">Your audience is out there, scrolling,
                            searching, comparing—and ads are how you grab their attention. Paid advertising isn’t just about
                            showing up. It’s about appearing in the right place with a right message at the right time.
                            That’s where Sociomark steps in. We craft ads that stop thumbs and spark interest. Whether it’s
                            search, display, or video, each click is backed by strategy, creativity, and constant
                            optimization. From snappy headlines to conversion-ready landing pages, every piece is built to
                            bring in business.
                        </p>
                        <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                            data-aos-duration="1200" data-aos-easing="ease-in-out">No cookie-cutter templates here. Your
                            goals guide the approach. Want to boost traffic? Sell a product? Capture leads? There’s a paid
                            solution for that. With <b>SEM</b>, you get targeted visibility that translates into action.
                            From <b>Google pay per click</b> to <b>LinkedIn paid advertising</b>, we help you tap into the
                            platforms that matter.Your budget works smarter, your results go further, and your brand is
                            under the spotlight that it needs.
                        </p>
                    </div>
                </div>
            </div>
        </section>


        <style>
            .benefit-block:hover {
                border-left: 5px solid #106c97 !important;
            }

            .benefit-block:hover .sub-sec-title {
                color: #106c97 !important;
            }

            #benefits {
                max-height: 60vh;
            }
        </style>
        <section class="overflow-hidden space" id="work-flow">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="title-area text-center">
                            <h2 class="fw-bold mb-5 sec-title" data-aos="fade-right" data-aos-delay="100"
                                data-aos-duration="1000" data-aos-easing="ease-in-out">
                                How We Deliver <span class="text-blue">Impact</span>, Not Just <span class="text-blue">Impressions</span>
                            </h2>
                            {{-- <p class="sec-para">Here are a few of the SEO strategies that we as a Leading Digital Marketing
                                Agency in Mumbai
                                implement, so that the website that we build for our clients stand out from the rest. This
                                in turn gives them a major advantage over its competitors.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="row align-items-start">
                    <!-- Left Side -->
                    <div class="col-md-6 text-center">
                        <div class="circle-wrapper" data-aos="fade-right" data-aos-delay="200" data-tilt data-tilt-max="10">
                            <div class="circle" data-tilt data-tilt-max="10">
                                <img src="{{ asset('frontend-assets/img/Services-page/Services_Main.png') }}" alt="Key"
                                    class="key-image mt-3">
                            </div>
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="col-md-6">
                        <div id="benefits">
                            <div class="benefit-block border-start border-4">
                                <h4 class="sub-sec-title">Goal-First Planning</h4>
                                <p class="sec-para"> It begins with knowing your destination. Every campaign is woven around a particular objective. </p>
                            </div>
                            <div class="benefit-block border-start border-4">
                                <h4 class="sub-sec-title"> Precision Targeting</h4>
                                <p class="sec-para">With <b>paid search advertising</b>, we go beyond demographics. Behaviour, intent, location—we zero in on what matters.
                                </p>
                            </div>
                            <div class="benefit-block border-start border-4">
                                <h4 class="sub-sec-title">Creative That Converts</h4>
                                <p class="sec-para"> Ad fatigue is real. That’s why our creatives—from <b>YouTube paid ads</b> to carousel posts—are built to engage and convert.</p>
                            </div>


                            <div class="benefit-block border-start border-4">
                                <h4 class="sub-sec-title">Smart Spend Allocation</h4>
                                <p class="sec-para"> Your money deserves better. We place every rupee where it works hardest, from <b>Google paid search</b> to retargeting.</p>
                            </div>
                            <div class="benefit-block border-start border-4">
                                <h4 class="sub-sec-title"> Reports That Make Sense</h4>
                                <p class="sec-para">Clear, useful, and jargon-free. You know what’s working and where we’re heading next.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="overflow-hidden space" id="about-sec3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="title-area text-center">
                            <h2 class="fw-bold mb-5 sec-title" data-aos="fade-right" data-aos-delay="100"
                                data-aos-duration="1000" data-aos-easing="ease-in-out">
                                Our
                                <span class="text-blue"> Paid Ads</span> Playbook
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="according-list-area">
                    <div class="according-list hover-item item-active">
                        <div class="accordion-item2">
                            <h3 class="box-title">Understand the Audience</h3>
                        </div>
                        <div class="according-img">
                            <img src="{{ asset('frontend-assets/img/Services-page/seo/Ecommerce Seo.png') }}"
                                alt="" class="rounded-overflow">
                            <p class="sec-para text">People don’t click what doesn’t connect. So we start with understanding about them and their needs.
                            </p>

                        </div>
                    </div>
                    <div class="according-list hover-item">
                        <div class="accordion-item2">
                            <h3 class="box-title">Dig Into Keywords</h3>
                        </div>
                        <div class="according-img">
                            <img src="{{ asset('frontend-assets/img/Services-page/seo/International Seo.png') }}"
                                alt="" class="rounded-overflow">
                            <p class="sec-para text">Effective <b>sem marketing</b> relies on strong keyword research. We pick high-intent words that lead to results

                            </p>

                        </div>
                    </div>
                    <div class="according-list hover-item">
                        <div class="accordion-item2">
                            <h3 class="box-title">Build Campaigns That Fit</h3>
                        </div>
                        <div class="according-img">
                            <img src="{{ asset('frontend-assets/img/Services-page/seo/Mobile Seo.png') }}" alt=""
                                class="rounded-overflow">
                            <p class="sec-para text">One-size ads don’t perform. From <b>LinkedIn paid ads</b> to dynamic remarketing, we tailor it all.
                            </p>

                        </div>
                    </div>
                    <div class="according-list hover-item">
                        <div class="accordion-item2">
                            <h3 class="box-title">Launch, Monitor, Adapt</h3>
                        </div>
                        <div class="according-img">
                            <img src="{{ asset('frontend-assets/img/Services-page/seo/Local Seo.png') }}" alt=""
                                class="rounded-overflow">
                            <p class="sec-para text"> Campaigns go live with a plan—and a backup. Because digital never sleeps, and neither do we.
                            </p>

                        </div>
                    </div>
                    <div class="according-list hover-item">
                        <div class="accordion-item2">
                            <h3 class="box-title"> Stay On Top </h3>
                        </div>
                        <div class="according-img">
                            <img src="{{ asset('frontend-assets/img/Services-page/seo/Goodle Analytics and Report.png') }}"
                                alt="" class="rounded-overflow">
                            <p class="sec-para text">With ongoing <b>ppc management services</b>, we keep campaigns sharp and in-sync with trends.
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

        <section class="overflow-hidden space" id="about-sec2">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-8" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1200"
                        data-aos-easing="ease-in-out">
                        <div class="title-area mb-20">
                            <h2 class="sec-title mb-md-3 mb-2">
                                Our Paid <span class="text-blue">Advertising Expertise </span>
                            </h2>
                        </div>
                        <p class="sec-para d-none ">Our SEO strategies are designed to improve your website’s ranking on
                            major search engines like Google. By targeting high-intent keywords relevant to your business.
                        </p>
                        <div class="choose-feature-wrap">
                            <div class="choose-feature">
                                <div class="box-icon d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('frontend-assets/img/icon/target.png') }}" width="60"  alt="Icon">
                                </div>
                                <div class="media-body">
                                    <h4 class="sub-sec-title"> Strategy Over Spray</h4>
                                    <p class="sec-para">We don’t throw ads into the wind. As a <b>paid ads agency</b>, each of our campaign starts with intent, insight and ends with tangible results.</p>
                                </div>
                            </div>
                            <div class="choose-feature">
                                <div class="box-icon d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('frontend-assets/img/icon/target.png') }}" width="60"  alt="Icon">
                                </div>
                                <div class="media-body">
                                    <h4 class="sub-sec-title">Platform Power</h4>
                                    <p class="sec-para">From <b>YouTube paid promotion</b> to <b>Facebook paid ads</b>, we know what works where—and why.</p>
                                </div>
                            </div>
                            <div class="choose-feature">
                                <div class="box-icon d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('frontend-assets/img/icon/target.png') }}" width="60"  alt="Icon">
                                </div>
                                <div class="media-body">
                                    <h4 class="sub-sec-title">Always Optimizing</h4>
                                    <p class="sec-para"> Numbers don’t lie. We track, test, tweak, and repeat to keep performance high.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1200"
                        data-aos-easing="ease-in-out">
                        <div class="choose-image">
                            <div class="tilt-active">
                                {{-- <img src="{{ asset('frontend-assets/img/Services-page/Why choose Seo.png') }}"
                                    alt="Choose" class="w-100"> --}}
                                <img src="https://placehold.co/300x400" alt="Choose" class="w-100">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==============================
                Testimonial Area
                ==============================-->
        <section class="space overflow-hidden overflow-hidden">
            <div class="container">
                <div class="title-area text-center">
                    <div class="shadow-title">Testimonial</div>
                    <span class="sub-title sub-title4 ">Testimonials<span></span></span>
                    <h2 class="sec-title  ">What <span class="text-blue">Our Clients Say</span> About Us?</h2>
                </div>
                <div class="slider-area testi-box-area">
                    <div class="swiper th-slider has-shadow testiSlider2" id="testiSlide2"
                        data-slider-options='{"effect":"fade","loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"1"}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-grid">
                                    <div class="box-content">
                                        <div class="testi-logo">
                                            <img src="http://placehold.co/200x80" alt="">
                                        </div>
                                        <h3 class="box-title2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo
                                            iusto repellendus sequi. Velit cumque aut rerum</h3>
                                        <p class="box-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum
                                            corporis ipsam nihil quaerat exercitationem, illum aut cupiditate tempore
                                            laudantium facilis ipsum architecto fugit deserunt laborum suscipit at veritatis
                                            provident doloremque blanditiis. Molestiae?</p>
                                        <h3 class="box-title">Lorem ipsum</h3>
                                        <span class="box-desig">Lorem ipsum</span>
                                    </div>
                                    <div class="box-img">
                                        <img src="http://placehold.co/200x200" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-grid">
                                    <div class="box-content">
                                        <div class="testi-logo">
                                            <img src="http://placehold.co/200x80" alt="">
                                        </div>
                                        <h3 class="box-title2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo
                                            iusto repellendus sequi. Velit cumque aut rerum</h3>
                                        <p class="box-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum
                                            corporis ipsam nihil quaerat exercitationem, illum aut cupiditate tempore
                                            laudantium facilis ipsum architecto fugit deserunt laborum suscipit at veritatis
                                            provident doloremque?</p>
                                        <h3 class="box-title">Lorem ipsum</h3>
                                        <span class="box-desig">Lorem ipsum</span>
                                    </div>
                                    <div class="box-img">
                                        <img src="http://placehold.co/200x200" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-grid">
                                    <div class="box-content">
                                        <div class="testi-logo">
                                            <img src="http://placehold.co/200x80" alt="">
                                        </div>
                                        <h3 class="box-title2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo
                                            iusto repellendus sequi. Velit cumque aut rerum</h3>
                                        <p class="box-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum
                                            corporis ipsam nihil quaerat exercitationem, illum aut cupiditate tempore
                                            laudantium facilis ipsum architecto fugit deserunt laborum suscipit at veritatis
                                            provident doloremque blanditiis.?</p>
                                        <h3 class="box-title">Lorem ipsum</h3>
                                        <span class="box-desig">Lorem ipsum</span>
                                    </div>
                                    <div class="box-img">
                                        <img src="http://placehold.co/200x200" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button data-slider-prev="#testiSlide2" class="slider-arrow style3 slider-prev"><i
                            class="fas fa-arrow-left"></i></button>
                    <button data-slider-next="#testiSlide2" class="slider-arrow style3 slider-next"><i
                            class="fas fa-arrow-right"></i></button>
                </div>
            </div>
        </section>

        <section class="overflow-hidden space" id="Features">
            <div class="container">
                <!-- Header Text -->
                <h2 class="fw-bold mb-5 sec-title text-center" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000" data-aos-easing="ease-in-out">
                    What’s Included in Our <span class="text-blue"> Performance Marketing Package</span>
                </h2>
                <!-- Feature Icons Row 1 -->
                <div class="row justify-content-evenly mt-5">
                    <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                        <div class="icon-img me-3">
                            <img src="https://www.gbim.com/gbim/one_click.webp" alt="One-Click Reports"
                                class="feature-icon">
                        </div>
                        <div class="sub-sec-title">Keyword Research</div>
                    </div>
                    <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                        <div class="icon-img me-3">
                            <img src="	https://www.gbim.com/gbim/traffic.webp" alt="Traffic Performance"
                                class="feature-icon">
                        </div>
                        <div class="sub-sec-title">Competitor Analysis</div>

                    </div>
                    <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                        <div class="icon-img me-3">
                            <img src="https://www.gbim.com/gbim/traffic.webp" alt="CRM Module" class="feature-icon">
                        </div>
                        <div class="sub-sec-title">Link Building</div>

                    </div>
                </div>

                <!-- Feature Icons Row 2 -->
                <div class="row justify-content-evenly mt-3 mt-md-5">
                    <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                        <div class="icon-img me-3">
                            <img src="https://www.gbim.com/gbim/keyword.webp" alt="Keyword Performance"
                                class="feature-icon">
                        </div>
                        <div class="sub-sec-title">On-Page Optimization</div>

                    </div>
                    <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                        <div class="icon-img me-3">
                            <img src="https://www.gbim.com/gbim/marketing.webp" alt="Marketing Activities"
                                class="feature-icon">
                        </div>
                        <div class="sub-sec-title">Technical Audit </div>

                    </div>
                    <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                        <div class="icon-img me-3">
                            <img src="	https://www.gbim.com/gbim/leads.webp" alt="Leads Management" class="feature-icon">
                        </div>
                        <div class="sub-sec-title">Local SEO</div>

                    </div>
                </div>

                <!-- Dashboard Images -->
                <div class="mt-5" data-aos="zoom-in" data-tilt data-tilt-max="10" data-aos-delay="100"
                    data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <img src="https://www.gbim.com/gbim/OurDigitalMarketingSoftware.webp" alt="Dashboard Screenshot"
                        class="dashboard-img">
                </div>
            </div>
        </section>


        @include('Frontend.partial.clientList')

        <div class="overflow-hidden space" id="about-sec6">
            <div class="container">
                <div class="title-area text-center mb-25">
                    <!-- <h2 class="sec-title">Frequently Asked Questions</h2> -->
                    <h2 class="fw-bold sec-title my-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                        Frequently Asked <span class="text-blue"> Questions</span>
                    </h2>
                </div>
                <div class="row justify-content-center align-items-center mt-5">
                    {{-- <div class="col-xl-5">
                    <div class="me-xl-5 pe-xl-3">
                        <div class="title-area mb-30 text-center text-xl-start">
                            <img src="https://www.gbim.com/about-us/sm_faq.png" alt="" data-aos="zoom-in"
                                data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        </div>

                    </div>
                </div> --}}
                    <div class="col-xl-12 mt-35 mt-xl-0 h-auto" id="faqAccordion">
                        <div class="accordion-area accordion">
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-1">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">How
                                        long does it take to see results from SEO?</button>
                                </div>
                                <div id="collapse-1" class="accordion-collapse collapse show"
                                    aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="sec-para-faq">SEO is an ongoing process, but you can expect to see
                                            initial improvements in website traffic and rankings within 3-6 months with a
                                            well-defined strategy. Long-term results and significant traffic growth. We are
                                            a five-star rated holistic full-service digital marketing agencies, serving
                                            thousands of clients. Our digital agency covers all aspects of internet
                                            marketing:</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card ">
                                <div class="accordion-header" id="collapse-item-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">How
                                        will I be kept informed about my SEO progress?</button>
                                </div>
                                <div id="collapse-2" class="accordion-collapse collapse "
                                    aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="sec-para-faq">SEO is an ongoing process, but you can expect to see
                                            initial improvements in website traffic and rankings within 3-6 months with a
                                            well-defined strategy. Long-term results and significant traffic growth. We are
                                            a five-star rated holistic full-service digital marketing agencies, serving
                                            thousands of clients. Our digital agency covers all aspects of internet
                                            marketing:</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card ">
                                <div class="accordion-header" id="collapse-item-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-3" aria-expanded="false"
                                        aria-controls="collapse-3">What kind of SEO techniques do you use?</button>
                                </div>
                                <div id="collapse-3" class="accordion-collapse collapse "
                                    aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="sec-para-faq">SEO is an ongoing process, but you can expect to see
                                            initial improvements in website traffic and rankings within 3-6 months with a
                                            well-defined strategy. Long-term results and significant traffic growth. We are
                                            a five-star rated holistic full-service digital marketing agencies, serving
                                            thousands of clients. Our digital agency covers all aspects of internet
                                            marketing:</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card ">
                                <div class="accordion-header" id="collapse-item-4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-4" aria-expanded="false"
                                        aria-controls="collapse-4">What happens if I don't see results after a
                                        while?</button>
                                </div>
                                <div id="collapse-4" class="accordion-collapse collapse "
                                    aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="sec-para-faq">SEO is an ongoing process, but you can expect to see
                                            initial improvements in website traffic and rankings within 3-6 months with a
                                            well-defined strategy. Long-term results and significant traffic growth. We are
                                            a five-star rated holistic full-service digital marketing agencies, serving
                                            thousands of clients. Our digital agency covers all aspects of internet
                                            marketing:</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card ">
                                <div class="accordion-header" id="collapse-item-5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">How
                                        do I get started with your agency?</button>
                                </div>
                                <div id="collapse-5" class="accordion-collapse collapse "
                                    aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="sec-para-faq">SEO is an ongoing process, but you can expect to see
                                            initial improvements in website traffic and rankings within 3-6 months with a
                                            well-defined strategy. Long-term results and significant traffic growth. We are
                                            a five-star rated holistic full-service digital marketing agencies, serving
                                            thousands of clients. Our digital agency covers all aspects of internet
                                            marketing:</p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card ">
                                <div class="accordion-header" id="collapse-item-6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-6" aria-expanded="false"
                                        aria-controls="collapse-6">What is your process for starting a new
                                        project?</button>
                                </div>
                                <div id="collapse-6" class="accordion-collapse collapse "
                                    aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="sec-para-faq">SEO is an ongoing process, but you can expect to see
                                            initial improvements in website traffic and rankings within 3-6 months with a
                                            well-defined strategy. Long-term results and significant traffic growth. We are
                                            a five-star rated holistic full-service digital marketing agencies, serving
                                            thousands of clients. Our digital agency covers all aspects of internet
                                            marketing:</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        @include('Frontend.partial.blog')


        @include('Frontend/partial/contactUs')
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
