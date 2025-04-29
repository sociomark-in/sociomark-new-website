@extends('Frontend.layout.app')
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
@section('custome-style')
<style>
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

    #Features .icon-img {
        width: 80px !important;
        height: 80px !important;
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
                    <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/hero.png') }}" alt="" srcset="" width="100%">
                </div>
            </div>
        </div>
    </div>
    <div class="space-extra2-bottom">
        <div class="container">
            <div class="row text-center">
                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">1.2</span>B<span
                                class="plus">+</span>
                        </h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Video Views</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">70</span><span
                                class="plus">+</span>
                        </h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Events Covered</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">25</span><span
                                class="plus">+</span>
                        </h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Product Shoot</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">30</span><span
                                class="plus">+</span></h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Happy Customers</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

            </div>
        </div>
    </div>
    <section class="overflow-hidden mb-md-5 md-2" id="about-sec">
        <div class="container">
            <div class="row align-items-end justify-content-center">
                <div class="col-lg-9 col-12 d-flex justify-content-center align-items-center flex-column">
                    <div class="title-area mb-md-3 mb-2 mt-n1">
                        <h2 class="text-center fw-bold sec-title my-3" data-aos="zoom-in" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            Stories that <span class="text-blue"> shine through the lens</span>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-12 col-12 d-flex justify-content-center align-items-center flex-column">
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">People remember emotions and feelings
                        over mere facts. And nothing captures those better than powerful visuals. At Sociomark, we help
                        brands speak the visual language of today through striking <b>Photography</b> and high-impact
                        <b>Video Production</b>.
                    </p>
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">No matter if you are launching a product,
                        hosting an event, or building a brand from the start—visual content plays a starring role. More
                        than looking good, It’s about creating content that connects, converts, and stays with your
                        audience. Every frame we craft is rooted in your brand’s story and goals.
                    </p>
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">From the plan to the final shot, we mix
                        creativity with intent. Need crisp shots for your next catalogue? Or a brand film that tells
                        your journey in 60 seconds? We’ve got the lens for it. With an eye for detail and a love for
                        stories, we create visuals that don’t just get seen—they get remembered.
                    </p>
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">Let’s skip the stock footage and go for
                        something real. Real moments, real people, and real results. Because the right shot at the right
                        time? It’s more powerful than a paragraph.
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
    <section class="overflow-hidden space bg-grey " id="work-flow">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="title-area text-center">
                        <h2 class="fw-bold mb-5 sec-title" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            Our Approach to
                            <span class="text-blue"> Visual Storytelling</span>.
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
                            <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/storytelling.png') }}"
                                alt="Key" class="key-image mt-3">
                        </div>
                    </div>
                </div>

                <!-- Right Side -->
                <div class="col-md-6">
                    <div id="benefits">
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Understand the Brand Vibe</h4>
                            <p class="sec-para">We find out what makes your brand tick. So, your visuals feel like an
                                extension of your personality.
                            </p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Scout and Prep Like Pros</h4>
                            <p class="sec-para">The right lighting and location matter. Our team preps everything in
                                advance, so shoot day runs smooth.
                            </p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Capture Moments That Matter</h4>
                            <p class="sec-para">It’s not just about poses—it’s about presence. We look for
                                authenticity, movement, and energy in every shot.</p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Use the Right Gear and People</h4>
                            <p class="sec-para">From studio setups to drone shots, we use the latest tools and skilled
                                talent for crisp, pro-level quality.
                            </p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Tailor the Story for Your Audience</h4>
                            <p class="sec-para"> Visuals aren't one-size-fits-all. Whether it’s <b>commercial
                                    photography</b> or <b>brand storytelling through video</b>, we shape each piece for
                                impact.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="overflow-hidden space mb-md-5 mb-3" id="about-sec3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="title-area text-center">
                        <h2 class="fw-bold mb-5 sec-title" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            How We Deliver
                            <span class="text-blue"> Stand-Out Visuals</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="according-list-area">
                <div class="according-list hover-item item-active">
                    <div class="accordion-item2">
                        <h3 class="box-title">Creative Discovery </h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/Services/Creative Discovery.png') }}"
                            alt="" class="rounded-overflow">
                        <p class="sec-para text">Every great visual begins with a great brief. Understanding your
                            story, your audience, and your goals is our first step.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title">Concept Planning</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/Services/Concept Planning.png') }}"
                            alt="" class="rounded-overflow">
                        <p class="sec-para text">We map out what the visuals will look like and feel like—from mood
                            boards to shot lists—so there are no surprises on set.
                        </p>
                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title">Production with Purpose</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/Services/production with Purpose.png') }}" alt=""
                            class="rounded-overflow">
                        <p class="sec-para text">Our team captures content with intention, whether it’s for a short ad,
                            event, or long-form campaign.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title">Post-Production Magic</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/Services/Post-Production Magic.png') }}" alt=""
                            class="rounded-overflow">
                        <p class="sec-para text">From editing to colour correction, our finishing touches bring clarity
                            and polish to every frame.
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

    <section class="overflow-hidden space bg-grey" id="about-sec2">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-8" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1200"
                    data-aos-easing="ease-in-out">
                    <div class="title-area mb-20">
                        <h2 class="sec-title mb-md-3 mb-2">
                            Why Brands <span class="text-blue">Trust Our Lens</span>
                        </h2>
                    </div>
                    <p class="sec-para d-none ">Our SEO strategies are designed to improve your website’s ranking on
                        major search engines like Google. By targeting high-intent keywords relevant to your business.
                    </p>
                    <div class="choose-feature-wrap">
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/icons/Vision.png') }}" width="60"
                                    alt="Icon">
                            </div>
                            <div class="media-body">
                                <h4 class="sub-sec-title">Visuals That Resonate </h4>
                                <p class="sec-para">We don’t just take pictures or shoot videos. We frame emotion,
                                    energy, and purpose into every project.</p>
                            </div>
                        </div>
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/icons/storytelling.png') }}" width="60"
                                    alt="Icon">
                            </div>
                            <div class="media-body">
                                <h4 class="sub-sec-title">Strategic Storytelling</h4>
                                <p class="sec-para">Our work reflects your voice. Each piece is tailored to deliver the
                                    right message to the right audience.</p>
                            </div>
                        </div>
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/icons/brand.png') }}" width="60"
                                    alt="Icon">
                            </div>
                            <div class="media-body">
                                <h4 class="sub-sec-title">Always on Brand</h4>
                                <p class="sec-para"> Whether it's sleek <b>product photography</b> or immersive
                                    <b>corporate video production</b>, consistency is key—and we nail it every time.
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
                            <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/Trust.png') }}" alt="Choose" class="w-100">

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

    <section class="overflow-hidden space bg-grey" id="Features">
        <div class="container">
            <!-- Header Text -->
            <h2 class="fw-bold mb-5 sec-title text-center" data-aos="fade-up" data-aos-delay="100"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                What’s Included in Our <span class="text-blue"> Photography& Videography Package</span>
            </h2>
            <!-- Feature Icons Row 1 -->
            <div class="row justify-content-evenly mt-5">
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/icons/Product Shoots_.png') }}" alt="One-Click Reports"
                            class="feature-icon">
                    </div>

                    <div class="sub-sec-title">Product Shoots </div>
                </div>
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/icons/Event.png') }}" alt="Traffic Performance"
                            class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Event Coverages</div>

                </div>
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/icons/Model Shoots_.png') }}" alt="CRM Module" class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Model Shoots</div>

                </div>
            </div>

            <!-- Feature Icons Row 2 -->
            <div class="row justify-content-evenly mt-3 mt-md-5">
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/icons/Lives_.png') }}" alt="Keyword Performance"
                            class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Lives </div>

                </div>
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/icons/Podcast.png') }}" alt="Marketing Activities"
                            class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Podcasts </div>

                </div>
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/icons/Walkthrough Videos.png') }}" alt="Leads Management" class="feature-icon">
                    </div>
                    <div class="sub-sec-title">
                        -Walkthrough Videos</div>

                </div>
            </div>

            <!-- Dashboard Images -->
            <div class="mt-5" data-aos="zoom-in" data-tilt data-tilt-max="10" data-aos-delay="100"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/Package.png') }}" alt="Dashboard Screenshot"
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
                                    data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">What is photography marketing?
                                </button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show"
                                aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">Photography marketing involves promoting your photography services to attract and engage clients. It encompasses a range of activities, from showcasing your portfolio and using social media marketing to networking and implementing targeted advertising.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">What is 3D photography?
                                </button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">3D photography is a method of capturing images that simulate depth, making them appear three-dimensional. It usually involves combining two slightly offset photos to mimic human binocular vision.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-3" aria-expanded="false"
                                    aria-controls="collapse-3">What are the four main types of photographs?
                                </button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">The most popular types of photography are portrait, landscape, long exposure, and macro photography.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-4" aria-expanded="false"
                                    aria-controls="collapse-4">How does photography work?</button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">Photography works by capturing light through a camera lens onto a light-sensitive surface like film or a digital sensor. The amount and focus of light determine how the image is recorded.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">Is photography part of advertising?
                                </button>
                            </div>
                            <div id="collapse-5" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">Yes, photography is a key part of advertising as it visually showcases products, services, or ideas to attract and persuade customers. It helps create strong, memorable brand messages.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-6" aria-expanded="false"
                                    aria-controls="collapse-6">What is photography used for?
                                </button>
                            </div>
                            <div id="collapse-6" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">Photography is used to capture moments, tell stories, document events, promote products, express creativity, and communicate ideas in fields like art, journalism, advertising, and science.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-6" aria-expanded="false"
                                    aria-controls="collapse-6">What are the benefits of photography?
                                </button>
                            </div>
                            <div id="collapse-6" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">Photography is a visual art that captures moments, emotions, and stories through images. Benefits of photography extend far beyond mere documentation. The practice allows for self-expression, preserves memories, fosters creativity, and serves as a powerful communication tool.
                                    </p>
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