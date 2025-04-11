@extends('Frontend.layout.app')
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
@section('custome-style')
<style>
    #seo-service #about-sec3,
    #seo-service #about-sec5,
    #seo-service #contact {
        background-color: #F5F5F5 !important;
    }

    #seo-service #about-sec {
        padding: 8px;
    }

    #seo-service .about-area2 .imgBox {
        top: 40px;
    }

    #seo-service .about-area2 .sec-title,
    #seo-service #about-sec2 .sec-title,
    #seo-service #about-sec3 .sec-title,
    #portfolio-sec .sec-title,
    #seo-service #about-sec5 .sec-title,
    #seo-service #about-sec6 .sec-title,
    #seo-service #services-tab .sec-title,
    #seo-service #contact .sec-title {
        font-size: 35px;
        line-height: 42px;
    }

    #seo-service .about-area2 .sec-title {
        width: 67rem;
    }

    #seo-service .about-area2 .sec-para,
    #seo-service #about-sec2 .sec-para,
    #seo-service #about-sec3 .sec-para,
    #seo-service #about-sec6 .sec-para,
    #seo-service #services-tab .sec-para,
    #seo-service #contact .sec-para {
        line-height: 28px;
        font-size: 20px;
        letter-spacing: .10px;
        color: #797E88;
    }

    @media (max-width: 576px) {

        #seo-service .about-area2 .sec-title,
        #seo-service #about-sec2 .sec-title,
        #seo-service #about-sec3 .sec-title,
        #portfolio-sec .sec-title,
        #seo-service #about-sec5 .sec-title,
        #seo-service #about-sec6 .sec-title,
        #seo-service #services-tab .sec-title,
        #seo-service #contact .sec-title {
            padding-bottom: 0.5rem;
            font-size: 24px;
            font-weight: 600;
            line-height: 26px;
            width: auto;
            text-align: center;
        }

        #seo-service .about-area2 .sec-para,
        #seo-service #about-sec2 .sec-para,
        #seo-service #about-sec3 .sec-para,
        #seo-service #about-sec6 .sec-para,
        #seo-service #services-tab .sec-para,
        #seo-service #contact .sec-para,
        #seo-service #about-sec3 .box-title {
            font-size: 16px !important;
            line-height: 20px !important;
            text-align: center;
        }

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

    #seo-service #about-sec4 .sec-title {
        color: white;
    }

    #seo-service #about-sec2 .box-title {
        color: #121212;
    }

    #seo-service #about-sec2 .box-text {
        color: #797E88;
    }

    #seo-service #about-sec2 {
        padding: 6rem 0 6rem 0;
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
    .according-list.item-active .according-img {
        transform: scale(1);
        /* height: auto; */
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

    /* #seo-service #about-sec3 .sec-para{
        font-weight: 400;
    } */
    #seo-service #about-sec3 .accordion-item2 {
        max-width: 510px;
    }

    #seo-service #about-sec3 .according-list .according-img {
        max-width: 700px;
    }

    #seo-service #about-sec3 .accordion-item2 {
        padding-bottom: 5px;
    }

    #seo-service #about-sec3 .accordion-item2 .box-title:before {
        width: 0px;

    }

    #seo-service #about-sec3 .according-list.hover-item.item-active .accordion-item2 {
        border-bottom-color: #106c97;
    }

    /* section3 end */

    /* gallary :start */

    #portfolio-sec {
        padding-top: 20px;
    }

    #seo-service .filter-menu .tab-btn:hover,
    #seo-service .garally .filter-menu .tab-btn.active {
        padding: 10px 25px !important;
        font-weight: 500;
        border-bottom: 3px solid #106c97;
        background: transparent;
        border-radius: 0px;
        border-left: none;
        color: #106c97;
        border-bottom: 4px solid #106c97;
    }

    #seo-service .garally .filter-menu .tab-btn {
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
    /* blog */
    #seo-service #about-sec5 .box {
        padding: 28px 20px;
        border-radius: 10px;
    }

    #seo-service #about-sec5 .blog-single.has-post-thumbnail {
        background-color: white !important;
    }

    #seo-service #about-sec5 .box-blog,
    #seo-service #about-sec5 .box-blog img {
        border-radius: 10px;
        box-shadow: 0px -2px 12px -1px rgba(0, 0, 0, 0.17);
        -webkit-box-shadow: 0px -2px 12px -1px rgba(0, 0, 0, 0.17);
        -moz-box-shadow: 0px -2px 12px -1px rgba(0, 0, 0, 0.17);
        border: none
    }

    #seo-service #about-sec5 .content-padding {
        padding: 20px;
    }

    #seo-service #about-sec5 .recent_post_title {
        font-size: 16px;
        line-height: 18px;
    }

    #seo-service #about-sec5 .th-btn {
        padding: 15px 18px;
    }

    #seo-service #about-sec5 .swiper-slide {
        height: auto;
    }

    #seo-service #about-sec5 .category-filter {
        display: grid !important;
    }

    #seo-service #about-sec5 .blog-title-text {
        font-size: 23px;
        margin-bottom: 6px;
    }

    .swiper-pagination {
        bottom: -30px;
        /* Position at the bottom */
    }

    .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background-color: #ccc;
        opacity: 1;
    }

    .swiper-pagination-bullet-active {
        background-color: #106c97;
    }

    .swiper-pagination-bullets .swiper-pagination-bullet {
        width: 15px !important;
        height: 15px !important;
    }

    .swiper-pagination-bullets .swiper-pagination-bullet.swiper-pagination-bullet-active {
        background-color: #106c97 !important;
    }

    .swiper-wrapper {
        height: auto !important;
    }

    .swiper-pagination-bullets {
        margin: 0px !important;
    }

    /* blog end */

    /* faq */
    #seo-service #about-sec6 .accordion-card {
        border-radius: 10px;
        box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
        -webkit-box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
        -moz-box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
        border: none;
    }

    #seo-service #about-sec6 #faqAccordion {
        height: 500px;
        overflow-y: auto;
        overflow-x: hidden;
    }

    #seo-service #about-sec6 #faqAccordion::-webkit-scrollbar {
        width: 3px;
        height: 30px;
    }

    /* Track */
    #seo-service #about-sec6 #faqAccordion::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 10px;
    }

    /* Handle */
    #seo-service #about-sec6 #faqAccordion::-webkit-scrollbar-thumb {
        background: #106c97;
        border-radius: 10px;
    }

    /* Handle on hover */
    #seo-service #about-sec6 #faqAccordion::-webkit-scrollbar-thumb:hover {
        background: #106c97;
    }

    /* #seo-service #about-sec6 .accordion-card .accordion-button {
        background-color: #106c97 !important;
        color: white !important;
    } */
    .accordion-button:not(.collapsed) {
        background-color: #106c97 !important;
        color: white !important;
    }

    /* end faq */

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

    /* services tab end */
    /* contact form */
    #seo-service #contact {
        padding: 30px;
    }

    #contact .contact-form input,
    #contact .contact-form textarea,
    #contact .contact-form select {
        border-radius: 10px;
    }

    #contact .contact-form .form-group {
        position: relative;
        margin-bottom: 2.5rem;
    }

    #contact .contact-form .form-group input,
    #contact .contact-form .form-group select,
    #contact .contact-form .form-group textarea {
        padding: 15px 10px 10px 15px;
    }

    #contact .contact-form .form-group label {
        position: absolute;
        top: 3px;
        left: 24px;
        font-weight: 500;
        font-size: 18px;
        transform: translateY(-50%);
        background-color: white;
        padding: 0px 12px;
        pointer-events: none;
        z-index: 2;
    }

    #contact .space-bottom {
        padding-bottom: 35px;
    }

    #contact .contact-form {
        background: white;
        border-radius: 10px;
        padding: 55px 30px;
        border: 1px solid black;
        /* box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        border: 2px solid transparent; */
        box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
        -webkit-box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
        -moz-box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
    }

    /* contact form end */
</style>
@endsection

@section('content')
<main id="seo-service">
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend-assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Seo</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-seo-agency.html">Home</a></li>
                    <li>Seo</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="about-area2 mb-md-5 mt-md-5 mt-5 md-5 overflow-hidden overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-12 d-flex justify-content-center align-items-center flex-column">
                    <div class="title-area mb-md-3 mb-2 mt-n1">
                        <h2 class="text-center fw-bold sec-title my-3"
                            data-aos="zoom-in"
                            data-aos-delay="100"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-out">
                            Expand Your Global Reach with <span class="text-blue"> Our Comprehensive International</span> SEO Solutions
                        </h2>
                    </div>
                    <p class="mt-n2 mb-25 sec-para text-center" data-aos="fade-down"
                        data-aos-delay="200"
                        data-aos-duration="1200"
                        data-aos-easing="ease-in-out">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis voluptas doloremque culpa reiciendis repellendus vel quasi ad blanditiis sint doloribus incidunt, asperiores mollitia atque, expedita quisquam nemo eos consequatur deserunt. Ipsam repudiandae ab fuga cupiditate? Odit exercitationem ea culpa dignissimos. Lorem ipsum dolor sit, amet consectetur.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="choose-area overflow-hidden mb-md-3 mt-md-3 mt-0 md-0" id="about-sec2">
        <div class="container">
            <div class="row">
                <div class="col-xl-6" data-aos="fade-left"
                    data-aos-delay="300"
                    data-aos-duration="1200"
                    data-aos-easing="ease-in-out">
                    <div class="title-area mb-20">
                        <span class="sub-title style1">Benefits You Can't Ignore</span>
                        <h2 class="sec-title ">The Powerful Benefits of Saor SEO</h2>
                    </div>
                    <p class="sec-para mb-35 ">In today's digital landscape, a strong online presence is critical for business success. But simply having a website isn't enough.</p>
                    <div class="choose-feature-wrap">
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/icon/choose_feature_1_1.svg') }}" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Increased Website Traffic</h3>
                                <p class="box-text">Our SEO strategies will attract more qualified visitors to your website, bringing you closer.</p>
                            </div>
                        </div>
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/icon/choose_feature_1_2.svg') }}" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Enhanced Brand Awareness</h3>
                                <p class="box-text">Increased website traffic and the improved rankings naturally lead to greater brand awareness.</p>
                            </div>
                        </div>
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/icon/choose_feature_1_3.svg') }}" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">More Leads & Conversions</h3>
                                <p class="box-text">By attracting qualified the traffic and optimizing your website for conversions, we'll help you.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6" data-aos="fade-right"
                    data-aos-delay="300"
                    data-aos-duration="1200"
                    data-aos-easing="ease-in-out">
                    <div class="choose-image">
                        <div class="img1 tilt-active">
                            <img src="{{ asset('frontend-assets/img/normal/choose_1.png') }}" alt="Choose">
                            <div class="choose-shape"><img src="{{ asset('frontend-assets/img/shape/choose-shape.png') }}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="overflow-hidden bg-smoke2 space" id="about-sec3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="title-area text-center">
                        <h2 class="fw-bold mb-5 sec-title"
                            data-aos="fade-up"
                            data-aos-delay="100"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-out">
                            International Seo <span class="text-blue"> Roadmap</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="according-list-area">
                <div class="according-list hover-item item-active">
                    <div class="accordion-item2">
                        <h3 class="box-title">Keyword research and localization</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/normal/ser_2_1.jpg') }}" alt="">
                        <p class="sec-para text">Appeals to clients looking for innovative and creative digital
                            solutions,
                            positioning the agency as a leader in creativity. Conveys a collaborative approach,
                            suggesting that the agency works closely with clients to achieve their digital
                            goals.
                        </p>

                    </div>

                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title">International website structure and URL optimization</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/normal/ser_2_2.jpg') }}" alt="">
                        <p class="sec-para text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde reiciendis nesciunt perferendis dignissimos accusantium nostrum, laboriosam cupiditate dolores tenetur blanditiis.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title">Multilingual content creation and translation</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/normal/ser_2_3.jpg') }}" alt="">
                        <p class="sec-para text">Appeals to clients looking for innovative and creative digital
                            solutions,
                            positioning the agency as a leader in creativity. Conveys a collaborative approach,
                            suggesting that the agency works closely with clients to achieve their digital
                            goals.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title">Hreflang implementation</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/normal/ser_2_4.jpg') }}" alt="">
                        <p class="sec-para text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo tempora adipisci provident, magnam cupiditate quod voluptatibus consequuntur eaque voluptatem, animi totam repudiandae facilis facere quo tempore, ad laudantium ducimus sunt?
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title">Country-specific domain or subdomain strategy</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/normal/ser_2_5.jpg') }}" alt="">
                        <p class="sec-para text">Appeals to clients looking for innovative and creative digital
                            solutions,
                            positioning the agency as a leader in creativity. Conveys a collaborative approach,
                            suggesting that the agency works closely with clients to achieve their digital
                            goals.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title">International link building and outreach</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/normal/ser_2_6.jpg') }}" alt="">
                        <p class="sec-para text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam similique modi accusantium odit recusandae laudantium, vel, illo rerum cum sequi, minima eaque mollitia quos odio beatae iste nam temporibus accusamus.
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

    <section class="overflow-hidden space" id="services-tab">
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
                                    <!-- <div class="col-lg-4 col-12">
                                        <div class="page-img" data-aos="fade-left" data-aos-duration="3000">
                                            <img class="w-50" src="https://placehold.co/400x800" alt="service">
                                        </div>
                                    </div> -->

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
                                    <!-- <div class="col-lg-4 col-12">
                                        <div class="page-img" data-aos="fade-left" data-aos-duration="3000">
                                            <img class="w-50" src="https://placehold.co/400x800" alt="service">
                                        </div>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="overflow-hidden position-relative space-extra-top space-bottom garally mt-md-5" id="portfolio-sec">
        <div class="container">
            <div class="title-area text-center mb-25">
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
                <div class="row gy-4 filter-active garally-row-height mt-md-0 mt-4">
                    <div class="col-md-6 col-xl-3 filter-item cat1 cat5 cat7 cat3">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="https://www.gbim.com/clientele/Technology/tech_1.webp" alt="project image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 filter-item cat5 cat5 cat8 cat1">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="https://www.gbim.com/clientele/Technology/tech_1.webp" alt="project image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 filter-item cat5 cat3 cat2">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="https://www.gbim.com/clientele/Technology/tech_1.webp" alt="project image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 filter-item cat4 cat1 cat6">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="https://www.gbim.com/clientele/Technology/tech_1.webp" alt="project image">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3 filter-item cat4 cat6">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="https://www.gbim.com/clientele/Technology/tech_1.webp" alt="project image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 filter-item cat4 cat6">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="https://www.gbim.com/clientele/Technology/tech_1.webp" alt="project image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 filter-item cat4 cat6">
                        <div class="project-item">
                            <div class="box-img global-img">
                                <img src="https://www.gbim.com/clientele/Technology/tech_1.webp" alt="project image">
                            </div>
                        </div>
                    </div>

                </div>
                <!-- <div class="project-btn mt-60"><a href="portfolio.html" class="th-btn th-radius">View All Portfolio</a>
                </div> -->
            </div>
        </div>
    </div>

    <section class="th-blog-wrapper space-top space-extra-bottom" id="about-sec5">
        <div class="container">
            <div class="title-area text-center mb-25">
                <h2 class="fw-bold sec-title my-3"
                    data-aos="fade-up"
                    data-aos-delay="100"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                    From The Blog: Blogs worth binging on. <span class="text-blue"> Dive in!</span>
                </h2>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach($blogs as $blog)
                    <div class="swiper-slide">
                        <div class="box-blog th-blog blog-single has-post-thumbnail">
                            <div class="blog-img box-blog">
                                <a href="{{ route('blog-inner', ['slug' => $blog->slug]) }}">
                                    <img src="{{ url('storage/app/public/' . ($blog->images[0] ?? 'default.jpg')) }}" alt="Blog Image" width="100%" style="height: 270px; object-fit: cover; margin-right: 5px;">
                                </a>
                            </div>
                            <div class="blog-content content-padding">
                                <div class="blog-meta">
                                    <a href="#"><i class="fa-light fa-calendar"></i> {{ $blog->created_at ? $blog->created_at->format('F d, Y') : 'Unpublished' }}</a>
                                    <a href="#"><i class="fa-light fa-tags"></i> {{ implode(', ', $blog->getCategoryNames()) ?? 'No Category' }}</a>
                                </div>
                                <h3 class="blog-title blog-title-text">
                                    <a href="{{ route('blog-inner', ['slug' => $blog->slug]) }}">
                                        {{ Str::limit($blog->blog_name, 20) }}
                                    </a>
                                </h3>

                                <p class="blog-text">{{ Str::limit(strip_tags($blog->content), 80) }}</p>
                                <a href="{{ route('blog-inner', ['slug' => $blog->slug]) }}" class="th-btn black-border th-icon th-radius">
                                    Read More <i class="fa-regular fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <div class="overflow-hidden space" id="about-sec6">
        <div class="container">
            <div class="title-area text-center mb-25">
                <!-- <h2 class="sec-title">Frequently Asked Questions</h2> -->
                <h2 class="fw-bold sec-title my-3"
                    data-aos="fade-up"
                    data-aos-delay="100"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                    Frequently Asked <span class="text-blue"> Questions</span>
                </h2>
            </div>
            <div class="row justify-content-center align-items-center mt-5">
                <div class="col-xl-5">
                    <div class="me-xl-5 pe-xl-3">
                        <div class="title-area mb-30 text-center text-xl-start">
                            <img src="https://www.gbim.com/about-us/sm_faq.png" alt="" data-aos="zoom-in"
                                data-aos-delay="200"
                                data-aos-duration="1000"
                                data-aos-easing="ease-in-out">
                        </div>

                    </div>
                </div>
                <div class="col-xl-7 mt-35 mt-xl-0" id="faqAccordion">
                    <div class="accordion-area accordion">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">How long does it take to see results from SEO?</button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">SEO is an ongoing process, but you can expect to see initial improvements in website traffic and rankings within 3-6 months with a well-defined strategy. Long-term results and significant traffic growth. We are a five-star rated holistic full-service digital marketing agencies, serving thousands of clients. Our digital agency covers all aspects of internet marketing:</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">How will I be kept informed about my SEO progress?</button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">SEO is an ongoing process, but you can expect to see initial improvements in website traffic and rankings within 3-6 months with a well-defined strategy. Long-term results and significant traffic growth. We are a five-star rated holistic full-service digital marketing agencies, serving thousands of clients. Our digital agency covers all aspects of internet marketing:</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">What kind of SEO techniques do you use?</button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">SEO is an ongoing process, but you can expect to see initial improvements in website traffic and rankings within 3-6 months with a well-defined strategy. Long-term results and significant traffic growth. We are a five-star rated holistic full-service digital marketing agencies, serving thousands of clients. Our digital agency covers all aspects of internet marketing:</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">What happens if I don't see results after a while?</button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse " aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">SEO is an ongoing process, but you can expect to see initial improvements in website traffic and rankings within 3-6 months with a well-defined strategy. Long-term results and significant traffic growth. We are a five-star rated holistic full-service digital marketing agencies, serving thousands of clients. Our digital agency covers all aspects of internet marketing:</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">How do I get started with your agency?</button>
                            </div>
                            <div id="collapse-5" class="accordion-collapse collapse " aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">SEO is an ongoing process, but you can expect to see initial improvements in website traffic and rankings within 3-6 months with a well-defined strategy. Long-term results and significant traffic growth. We are a five-star rated holistic full-service digital marketing agencies, serving thousands of clients. Our digital agency covers all aspects of internet marketing:</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">What is your process for starting a new project?</button>
                            </div>
                            <div id="collapse-6" class="accordion-collapse collapse " aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">SEO is an ongoing process, but you can expect to see initial improvements in website traffic and rankings within 3-6 months with a well-defined strategy. Long-term results and significant traffic growth. We are a five-star rated holistic full-service digital marketing agencies, serving thousands of clients. Our digital agency covers all aspects of internet marketing:</p>
                                </div>
                            </div>
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
                    <form action="{{ route('contact.store') }}" method="POST" class="contact-form style2">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Enter your Name" value="{{ old('name') }}">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <i class="far fa-envelope"></i>
                                <label for="email">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Enter your Email" value="{{ old('email') }}">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <i class="fal fa-phone"></i>
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Enter your Phone" value="{{ old('phone') }}">
                                @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">

                                <label for="service">Service you want?</label>
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

                                <label for="budget">Marketing Budget</label>
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

                                <label for="aboutUs">How did you hear about Us?</label>
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

                                <label for="messageforus">Your Message</label>
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