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

    #seo-service #about-sec3 .according-img img {
        border-radius: 10px;

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
        .according-list-area {
            margin-bottom: 600px;
        }

        .accordion-item2 {
            max-width: 100%;
        }

        .according-list .according-img {
            position: absolute;
            top: 110%;
            max-width: 100%;
            border: 0;
            padding: 0;
        }

        .according-list {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .accordion-item2 {
            width: 100%;
            text-align: center;
        }

        #seo-service #about-sec3 .according-list .according-img {
            max-width: 100%;
            display: flex;
            flex-direction: column;
        }

        .according-list .according-img {
            max-width: 530px;
            padding-left: 30px;
        }
    }

    /* services tab end */
</style>
@endsection

@section('content')
<main id="seo-service">
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend-assets/img/Services-page/Services_Main.png') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">SEO</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Seo</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="overflow-hidden py-5" id="about-sec">
        <div class="container">
            <div class="row align-items-end justify-content-center">
                <div class="col-lg-9 col-12 d-flex justify-content-center align-items-center flex-column">
                    <div class="title-area mb-md-3 mb-2 mt-n1">
                        <h2 class="text-center fw-bold sec-title my-3" data-aos="zoom-in" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            Expand Your Global Reach with <span class="text-blue"> Our Comprehensive
                                International</span> SEO Solutions
                        </h2>
                    </div>
                </div>
                <div class="col-lg-12 col-12 d-flex justify-content-center align-items-center flex-column">
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">SEO stands for <b>Search Engine
                            Optimization</b>. It involves optimizing a website to rank higher in search engine results by
                        inculcating relevant keywords and improving content quality. It also includes technical
                        improvements like enhancing a website’s speed and mobile friendliness. Additionally, building
                        high-quality backlinks helps increase your site’s authority and visibility.
                    </p>
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">The main goal of optimization is to have
                        your website rank up in the search results. The higher the page appears, people are more likely
                        to visit the website, and your business generate sales. SEO is one of the major marketing
                        strategies that businesses opt for in order to increase their business. No matter the size of
                        the company of the stage, whether it is a small startup or a big well-established Multi National
                        Company, SEO is needed for all. It helps your business to have a competitive advantage over
                        others.
                        Search Engine Optimization enhances the impact of <strong>Content Marketing Social Media
                            Marketing</strong> and <strong> Website Development</strong> making it an essential strategy
                        for any business.

                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="overflow-hidden space" id="about-sec2">
        <div class="container">
            <div class="row">
                <div class="col-xl-6" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1200"
                    data-aos-easing="ease-in-out">
                    <div class="title-area mb-20">
                        <h2 class="sec-title mb-md-3 mb-2">
                            Why Choose Our <span class="text-blue">SEO Services?</span>
                        </h2>
                    </div>
                    <p class="sec-para d-none ">Our SEO strategies are designed to improve your website’s ranking on
                        major search engines like Google. By targeting high-intent keywords relevant to your business.
                    </p>
                    <div class="choose-feature-wrap">
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="https://placehold.co/80x80" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h4 class="sub-sec-title">Higher ROI</h4>
                                <p class="sec-para">Cost-effective lead generation. Long-term value vs paid ads. Higher
                                    conversion rates from qualified traffic</p>
                            </div>
                        </div>
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="https://placehold.co/80x80" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h4 class="sub-sec-title">Transparent Reporting</h4>
                                <p class="sec-para">Monthly SEO performance reports. Keyword ranking updates. Clear,
                                    jargon-free analytics</p>
                            </div>
                        </div>
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="https://placehold.co/80x80" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h4 class="sub-sec-title">Technical & On-Page SEO</h4>
                                <p class="sec-para">Improved site performance & crawlability. Optimized user experience.
                                    Better indexing and faster ranking</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1200"
                    data-aos-easing="ease-in-out">
                    <div class="choose-image">
                        <div class="img1 tilt-active">
                            <img src="{{ asset('frontend-assets/img/Services-page/Why choose Seo.png') }}" alt="Choose">
                           
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="overflow-hidden space" id="work-flow">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="title-area text-center">
                        <h2 class="fw-bold mb-5 sec-title" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            Our Approach For
                            <span class="text-blue"> Online Presence</span>.
                        </h2>
                        <p class="sec-para">Here are a few of the SEO strategies that we as a Leading Digital Marketing Agency in Mumbai
                            implement, so that the website that we build for our clients stand out from the rest. This
                            in turn gives them a major advantage over its competitors.</p>
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
                        <div class="benefit-block border-start border-4 border-danger">
                            <h4 class="sub-sec-title">Content Strategy</h4>
                            <p class="sec-para">Creating relevant, relatable and creative content as per the clients
                                and their niche, that resonates with the target audience and thus help building a strong
                                community around the brand.</p>
                        </div>
                        <div class="benefit-block border-start border-4 border-secondary">
                            <h4 class="sub-sec-title">Competitor Analysis</h4>
                            <p class="sec-para">Conducting research of the competitors to understand their strategies
                                and methods. An in-depth competitor analysis to identify opportunities and create a
                                winning strategy. </p>
                        </div>
                        <div class="benefit-block border-start border-4 border-primary">
                            <h4 class="sub-sec-title">Technical SEO Audit</h4>
                            <p class="sec-para">A comprehensive audit to identify areas for improvement. Closely
                                examine your website's structure, content, and technical aspects to pinpoint
                                opportunities for optimization.</p>
                        </div>
                        <div class="benefit-block border-start border-4 border-info">
                            <h4 class="sub-sec-title">On Page SEO </h4>
                            <p class="sec-para">Creating compelling content that both users and search engines love.
                                Further we optimize it with relevant keywords and engaging writing styles to improve
                                search rankings and keep visitors interested.</p>
                        </div>
                        <div class="benefit-block border-start border-4 border-muted">
                            <h4 class="sub-sec-title">Off-Page SEO</h4>
                            <p class="sec-para">Building a strong online reputation with valuable backlinks from
                                trusted and reputed sources. Implementing strategies to increase your website’s
                                authority and credibility through external platforms.</p>
                        </div>
                        <div class="benefit-block border-start border-4 border-muted">
                            <h4 class="sub-sec-title">GMB Optimisation</h4>
                            <p class="sec-para">We ensure that your Google My Business listing is correct, complete and
                                optimized to rank higher in the search result, thus enhancing your business’s online
                                visibility and attracting local customers.</p>
                        </div>
                        <div class="benefit-block border-start border-4 border-muted">
                            <h4 class="sub-sec-title">Traffic Analysis</h4>
                            <p class="sec-para">Uncover valuable insights about your website visitors. Analyse website
                                traffic to understand user behaviour, identify trends, and discover opportunities to
                                enhance user experience and conversions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="overflow-hidden space" id="about-sec3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="title-area text-center">
                        <h2 class="fw-bold mb-5 sec-title" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            Best Industry-Specific
                            <span class="text-blue"> SEO Company Mumbai</span> Strategies.
                        </h2>
                    </div>
                </div>
            </div>
            <div class="according-list-area">
                <div class="according-list hover-item item-active">
                    <div class="accordion-item2">
                        <h3 class="box-title">Ecommerce SEO</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/normal/ser_2_1.jpg') }}" alt="">
                        <p class="sec-para text">Transform passive visitors into engaged customers.
                            Our strategies are designed to boost website traffic and conversions through a combination
                            of content optimization, in-depth website audits, and keyword research.
                            We'll help you dominate search engine results and attract quality leads.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title">International SEO</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/normal/ser_2_2.jpg') }}" alt="">
                        <p class="sec-para text">We excel in international SEO. Our strategies focus on key elements
                            like multilingual keyword research, in-depth audience analysis, and optimized website
                            structure. We also specialize in geo-targeting, ensuring your content reaches the right
                            people in the right places.

                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title">Mobile SEO</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/normal/ser_2_3.jpg') }}" alt="">
                        <p class="sec-para text"> It plays an essential role in any business. Our strategies focus on
                            optimizing your website for mobile devices, including improving loading speed, enhancing
                            user experience, and optimizing for local search. This ensures your business stands out in
                            the competitive mobile landscape.

                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title">Local SEO</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/normal/ser_2_4.jpg') }}" alt="">
                        <p class="sec-para text">We focus on enhancing customer engagement at the offline stores,
                            increasing their online audience who are often unaware of their local presence, and getting
                            them on the map with Google Listings.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title">Google Analytics and Reports </h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/normal/ser_2_5.jpg') }}" alt="">
                        <p class="sec-para text">Our Google Analytics and reporting services transform raw data into a
                            strategic advantage. We delve deep into your website's performance, identifying trends, user
                            behaviour, and conversion opportunities.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title">SEO Audit</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/normal/ser_2_6.jpg') }}" alt="">
                        <p class="sec-para text">Our SEO audits provide a deep dive into your online presence,
                            identifying strengths, weaknesses, and opportunities for growth. We scrutinize every aspect,
                            from technical SEO to content optimization, delivering actionable insights to boost your
                            search rankings and drive organic traffic.
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


    <div class="overflow-hidden space" id="Features">
        <div class="container">
            <!-- Header Text -->
            <h2 class="fw-bold mb-5 sec-title text-center" data-aos="fade-up" data-aos-delay="100"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                What’s Included in Our <span class="text-blue"> SEO Package</span>
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
            <div class="mt-5" data-aos="zoom-in" data-tilt data-tilt-max="10" data-aos-delay="100" data-aos-duration="1000"
                data-aos-easing="ease-in-out">
                <img src="https://www.gbim.com/gbim/OurDigitalMarketingSoftware.webp" alt="Dashboard Screenshot"
                    class="dashboard-img">
            </div>
        </div>
    </div>

    <!-- <section class="overflow-hidden space" id="services-tab">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="title-area mb-md-3 mb-2">
                                    <h2 class="fw-bold mb-5 sec-title text-center"
                                        data-aos="fade-up"
                                        data-aos-delay="100"
                                        data-aos-duration="1000"
                                        data-aos-easing="ease-in-out">
                                        International Seo <span class="text-blue"> Roadmap</span>
                                    </h2>
                                </div>

                                <div class="d-lg-flex ps-0">
                                    <div class="col-lg-3 col-12" data-aos="fade-right"
                                        data-aos-delay="200"
                                        data-aos-duration="1200"
                                        data-aos-easing="ease-in-out">
                                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                            aria-orientation="vertical">
                                            <button class="nav-link p-3 fs-5 " data-bs-toggle="pill"
                                                data-bs-target="#" type="button" role="tab"
                                                aria-controls="v-pills-profile" aria-selected="false"><span class="border-bottom border-4 d-inline-block">Services</span></button>
                                            <button class="nav-link active p-3 fs-5" id="v-pills-home-tab" data-bs-toggle="pill"
                                                data-bs-target="#v-pills-home" type="button" role="tab"
                                                aria-controls="v-pills-home" aria-selected="true">Education institutions</button>
                                            <button class="nav-link p-3 fs-5" id="v-pills-profile-tab" data-bs-toggle="pill"
                                                data-bs-target="#v-pills-profile" type="button" role="tab"
                                                aria-controls="v-pills-profile" aria-selected="false">Healthcare industry</button>
                                            <button class="nav-link p-3 fs-5" id="v-pills-messages-tab" data-bs-toggle="pill"
                                                data-bs-target="#v-pills-messages" type="button" role="tab"
                                                aria-controls="v-pills-messages" aria-selected="false">Technology companies</button>
                                            <button class="nav-link p-3 fs-5" id="v-pills-settings-tab" data-bs-toggle="pill"
                                                data-bs-target="#v-pills-settings" type="button" role="tab"
                                                aria-controls="v-pills-settings" aria-selected="false">Publication</button>
                                            <button class="nav-link p-3 fs-5" id="v-pills-settings-tab" data-bs-toggle="pill"
                                                data-bs-target="#v-pills-settings" type="button" role="tab"
                                                aria-controls="v-pills-settings" aria-selected="false">E-commerce businesses</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-12">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                                aria-labelledby="v-pills-home-tab" tabindex="0">
                                                <div class="row ">
                                                    <div class="col-lg-6 col-12 text-center side-padding-mbl" data-aos="zoom-in"
                                                        data-aos-delay="200"
                                                        data-aos-duration="1200"
                                                        data-aos-easing="ease-in-out">
                                                        <div class="page-img mt-md-0 mt-3">
                                                            <img class="w-50" src="https://www.gbim.com/seo/local_seo.webp" alt="service">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12 side-padding-mbl" data-aos="fade-left"
                                                        data-aos-delay="200"
                                                        data-aos-duration="1200"
                                                        data-aos-easing="ease-in-out">
                                                        <h4 class="mb-20 text-blue">How We Can Help</h4>
                                                        <p class="mt-n1 mb-4 blog-text sec-para">Our designers translate your brand identity into a captivating visual language, ensuring consistency across all
                                                            touchpoints.
                                                        </p>
                                                        <div class="checklist style4 mb-20">
                                                            <ul>
                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Increased User
                                                                    Engagement &
                                                                    Conversion Rates</li>
                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Enhanced Brand
                                                                    Perception
                                                                </li>
                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Improved Global Reach &
                                                                    Accessibility</li>
                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Reduced Development
                                                                    Costs
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                                aria-labelledby="v-pills-profile-tab" tabindex="0">

                                                <div class="row ">
                                                    <div class="col-lg-6 col-12 text-center side-padding-mbl">
                                                        <div class="row mt-md-0 mt-3">
                                                            <div class="col-lg-6 col-6 page-img" data-aos="fade-right" data-aos-duration="5000">
                                                                <img class="w-75" src="https://www.gbim.com/seo/local_seo.webp" alt="service">
                                                            </div>
                                                            <div class="col-lg-6 col-6 page-img side-padding-mbl" data-aos="fade-right" data-aos-duration="5000">
                                                                <img class="w-75" src="https://www.gbim.com/seo/local_seo.webp" alt="service">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-12 side-padding-mbl">
                                                        <h4 class="mb-20 text-blue">How We Can Help</h4>
                                                        <p class="mt-n1 mb-4 blog-text sec-para">Our designers translate your brand identity into a captivating visual language, ensuring consistency across all
                                                            touchpoints.
                                                        </p>
                                                        <div class="checklist style4 mb-20">
                                                            <ul>
                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Increased User
                                                                    Engagement &
                                                                    Conversion Rates</li>
                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Enhanced Brand
                                                                    Perception
                                                                </li>
                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Improved Global Reach &
                                                                    Accessibility</li>
                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Reduced Development
                                                                    Costs
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                  

                                                </div>

                                            </div>
                                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                                aria-labelledby="v-pills-messages-tab" tabindex="0">
                                                <div class="row ">
                                                    <div class="col-lg-6 col-12 text-center side-padding-mbl">
                                                        <div class="page-img mt-md-0 mt-3">
                                                            <img class="w-50" src="https://www.gbim.com/seo/local_seo.webp" alt="service">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-12 side-padding-mbl">
                                                        <h4 class="mb-20 text-blue">How We Can Help</h4>
                                                        <p class="mt-n1 mb-4 blog-text sec-para">Our designers translate your brand identity into a captivating visual language, ensuring consistency across all
                                                            touchpoints.
                                                        </p>
                                                        <div class="checklist style4 mb-20">
                                                            <ul>
                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Increased User
                                                                    Engagement &
                                                                    Conversion Rates</li>
                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Enhanced Brand
                                                                    Perception
                                                                </li>
                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Improved Global Reach &
                                                                    Accessibility</li>
                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Reduced Development
                                                                    Costs
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                                aria-labelledby="v-pills-settings-tab" tabindex="0">

                                                <div class="row ">
                                                    <div class="col-lg-6 col-12 text-center side-padding-mbl">
                                                        <div class="row mt-md-0 mt-3">
                                                            <div class="col-lg-6 col-6 page-img" data-aos="fade-right" data-aos-duration="5000">
                                                                <img class="w-75" src="https://www.gbim.com/seo/local_seo.webp" alt="service">
                                                            </div>
                                                            <div class="col-lg-6 col-6 page-img" data-aos="fade-right" data-aos-duration="5000">
                                                                <img class="w-75" src="https://www.gbim.com/seo/local_seo.webp" alt="service">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6 col-12 side-padding-mbl">
                                                        <h4 class="mb-20 text-blue">How We Can Help</h4>
                                                        <p class="mt-n1 mb-4 blog-text sec-para">Our designers translate your brand identity into a captivating visual language, ensuring consistency across all
                                                            touchpoints.
                                                        </p>
                                                        <div class="checklist style4 mb-20">
                                                            <ul>
                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Increased User
                                                                    Engagement &
                                                                    Conversion Rates</li>
                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Enhanced Brand
                                                                    Perception
                                                                </li>
                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Improved Global Reach &
                                                                    Accessibility</li>
                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Reduced Development
                                                                    Costs
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                  

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> -->
    @include('Frontend.partial.clientList')
    @include('Frontend.partial.blog')
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
                <div class="col-xl-5">
                    <div class="me-xl-5 pe-xl-3">
                        <div class="title-area mb-30 text-center text-xl-start">
                            <img src="https://www.gbim.com/about-us/sm_faq.png" alt="" data-aos="zoom-in"
                                data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        </div>

                    </div>
                </div>
                <div class="col-xl-7 mt-35 mt-xl-0" id="faqAccordion">
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