@extends('Frontend.layout.app')
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
@section('custome-style')
<style>
    #home .about-area2 .sec-title,
    #home #about-sec2 .sec-title,
    #home #about-sec3 .sec-title,
    #home #about-sec4 .sec-title,
    #portfolio-sec .sec-title,
    #home #about-sec5 .sec-title,
    #home #about-sec6 .sec-title,
    #home #services-tab .sec-title,
    #home #testi-sec .sec-title,
    #home #contact .sec-title {
        font-size: 35px;
        line-height: 42px;
    }

    #home .about-area2 .sec-title {
        width: 67rem;
    }

    #home .about-area2 .sec-para,
    #home #about-sec2 .sec-para,
    #home #about-sec3 .sec-para,
    #home #about-sec6 .sec-para,
    #home #portfolio-sec .sec-para,
    #home #testi-sec .sec-para,
    #home #services-tab .sec-para,
    #home #contact .sec-para {
        line-height: 28px;
        font-size: 20px;
        letter-spacing: .10px;
        color: #797E88;
    }

    @media (max-width: 576px) {

        #home .about-area2 .sec-title,
        #home #about-sec2 .sec-title,
        #home #about-sec3 .sec-title,
        #portfolio-sec .sec-title,
        #home #about-sec5 .sec-title,
        #home #about-sec6 .sec-title,
        #home #services-tab .sec-title,
        #home #contact .sec-title {
            padding-bottom: 0.5rem;
            font-size: 24px;
            font-weight: 600;
            line-height: 26px;
            width: auto;
            text-align: center;
        }

        #home .about-area2 .sec-para,
        #home #about-sec2 .sec-para,
        #home #about-sec3 .sec-para,
        #home #about-sec6 .sec-para,
        #home #services-tab .sec-para,
        #home #contact .sec-para,
        #home #about-sec3 .box-title {
            font-size: 16px !important;
            line-height: 20px !important;
            text-align: center;
        }

        #home #about-sec2,
        #home #portfolio-sec,
        #home #services-tab {
            padding: 3rem 0 3rem 0 !important;
        }

        .according-list-area {
            margin-bottom: 290px;
        }

        #home #services-tab .side-padding-mbl {
            padding: 0px 1.5rem;
        }

        #home #services-tab .sec-para {
            text-align: left;
        }

        #home #contact {
            padding: 40px 2px !important;
        }
    }

    /* section 2 */
    #home #about-sec2 {
        /* background-color: #F5F5F5; */
        background: radial-gradient(ellipse at top, #fff, transparent), radial-gradient(40% 40% at 50% 25%, #75b4d1, transparent), radial-gradient(ellipse at bottom, #fff, transparent);
    }

    #home #about-sec2 .choose-image .img1 {
        min-width: 100%;
    }

    #home #about-sec2 .box-title {
        color: #121212;
    }

    #home #about-sec2 .box-text {
        color: #797E88;
    }

    #home #about-sec2,
    #home #portfolio-sec {
        padding: 6rem 0 6rem 0;
    }

    #home #portfolio-sec h4 {
        line-height: 28px;
        font-size: 22px;
        letter-spacing: .10px;
        /* color: #797E88; */
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

    #home #about-sec3 .box-title {
        line-height: 32px;
        font-size: 25px;
        letter-spacing: .10px;
        font-weight: 500;
        padding-left: 0px;
    }

    #home #about-sec3 .according-list {
        width: 50%;
    }

    #home #about-sec3 .th-btn,
    #home #about-sec5 .th-btn {
        padding: 15px 18px;
    }

    /* #home #about-sec3 .sec-para{
        font-weight: 400;
    } */
    #home #about-sec3 .accordion-item2 {
        max-width: 510px;
    }

    #home #about-sec3 .according-list .according-img {
        max-width: 700px;
    }

    #home #about-sec3 .accordion-item2 {
        padding-bottom: 15px;
    }

    #home #about-sec3 .accordion-item2 .box-title:before {
        width: 0px;

    }

    #home #about-sec3 .according-list.hover-item.item-active .accordion-item2 {
        border-bottom-color: #106c97;
    }

    /* section3 end */

    /* gallary :start */

    #portfolio-sec {
        padding-top: 20px;
    }

    #home #portfolio-sec .th-btn {
        padding: 0px 18px !important;
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
    #home #about-sec5 .box {
        padding: 28px 20px;
        border-radius: 10px;
    }

    #home #about-sec5 .blog-single.has-post-thumbnail {
        background-color: white !important;
    }

    #home #about-sec5 .box-blog,
    #home #about-sec5 .box-blog img {
        border-radius: 10px;
        box-shadow: 0px -2px 12px -1px rgba(0, 0, 0, 0.17);
        -webkit-box-shadow: 0px -2px 12px -1px rgba(0, 0, 0, 0.17);
        -moz-box-shadow: 0px -2px 12px -1px rgba(0, 0, 0, 0.17);
        border: none
    }

    #home #about-sec5 .content-padding {
        padding: 20px;
    }

    #home #about-sec5 .recent_post_title {
        font-size: 16px;
        line-height: 18px;
    }

    #home #about-sec5 .swiper-slide {
        height: auto;
    }

    #home #about-sec5 .category-filter {
        display: grid !important;
    }

    #home #about-sec5 .blog-title-text {
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

    #home #services-tab .nav-pills .nav-link {
        border-radius: 0.25rem;
        background-color: #106c97;
        color: white;
        border: none;
        border-radius: 0px;
        text-align: left;
        padding-left: 35px !important;
    }

    #home #services-tab .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        background-color: white !important;
        color: #106c97 !important;
    }

    #home #services-tab #v-pills-tab {
        padding: 20px 20px 20px 0px;
        background-color: #106c97;
    }

    #home #services-tab .sec-para-list,
    #home #about-sec6 .sec-para-faq {
        font-size: 17px;
        color: #797E88;
        line-height: 28px;
        letter-spacing: .10px;
    }

    /* services tab end */
    /* contact form */
    #home #contact {
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

    .business-section {
        position: relative;
        overflow: hidden;
        padding: 120px 0px 70px;
        background-repeat: repeat;
        background-color: white;
    }

    .business-section .auto-container {
        max-width: 1440px;
    }

    .business-section .left-column {
        position: relative;
        margin-bottom: 30px;
    }

    .business-section .left-column .inner-column {
        position: relative;
    }

    .business-section .left-column .business-block:nth-child(2) {
        transform: translateX(-50px);
    }

    .business-block {
        position: relative;
        margin-bottom: 70px;
        width: 370px;
    }

    .business-block .inner-box {
        position: relative;
        padding: 30px 35px;
        border-radius: 8px;
        background-color: white;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.07);
    }

    .business-block .inner-box:before {
        position: absolute;
        content: '';
        right: 15px;
        bottom: 15px;
        width: 42px;
        height: 35px;
        background: url(../images/icons/business-arrow.png) no-repeat;
    }

    .business-block .inner-box .content {
        position: relative;
        padding-left: 65px;
    }

    .business-block .inner-box .icon-box {
        position: absolute;
        left: 0px;
        top: 12px;
        display: inline-block;
        transition: all 600ms ease;
        -moz-transition: all 600ms ease;
        -webkit-transition: all 600ms ease;
        -ms-transition: all 600ms ease;
        -o-transition: all 600ms ease;
    }

    .business-block .inner-box:hover .icon-box {
        -webkit-transform: scale(-1) rotate(180deg);
        -moz-transform: scale(-1) rotate(180deg);
        -ms-transform: scale(-1) rotate(180deg);
        -o-transform: scale(-1) rotate(180deg);
        transform: scale(-1) rotate(180deg);
    }

    .business-block .inner-box .icon-box:before {
        position: absolute;
        content: '';
        left: 20px;
        top: 10px;
        width: 50px;
        height: 24px;
        opacity: 0.10;
        border-radius: 50px;
        transform: rotate(135deg);
        background-color: var(--main-color);
    }

    .business-block .inner-box .icon-box .icon {
        position: relative;
        line-height: 1em;
        color: #106c97;
        font-size: 40px;
    }

    .business-block .inner-box h4 {
        font-weight: 500;
        text-transform: uppercase;
        font-size: 20px;
    }

    .business-block .inner-box h4 a {
        color: var(--heading-color);
    }

    .business-block .inner-box:hover h4 a {
        color: var(--main-color);
    }

    .business-block .inner-box .text {
        line-height: 28px;
        font-size: 18px;
        letter-spacing: .10px;
        color: #797E88;
    }

    .business-section .image-column {
        position: relative;
        margin-bottom: 30px;
    }

    .business-section .image-column .inner-column {
        position: relative;
        text-align: center;
        padding-top: 60px;
    }

    .business-section .image-column .image {
        position: relative;
        overflow: hidden;
        display: inline-block;
        border-radius: 80px 0px 80px 0px;
    }

    .business-section .image-column .circle-layer {
        position: absolute;
        left: 10px;
        top: 0px;
        width: 167px;
        height: 167px;
        border-radius: 50%;
        background-color: #106c97;
    }

    .business-section .image-column .circle-layer-two {
        position: absolute;
        right: 20px;
        bottom: -30px;
        width: 161px;
        height: 166px;
        border-radius: 15px;
        background-color: rgb(169, 209, 228);
    }

    .business-section .image-column .pattern-layer {
        position: absolute;
        left: 0px;
        bottom: -40px;
        width: 289px;
        height: 236px;
        background: no-repeat;
    }

    .business-section .right-column {
        position: relative;
        margin-bottom: 30px;
    }

    .business-section .right-column .inner-column {
        position: relative;
    }

    .business-section .right-column .business-block:nth-child(2) {
        transform: translateX(50px);
    }



    @media only screen and (max-width: 767px) {



        .business-block .inner-box .content {
            text-align: center;
            padding-left: var(--padding-zero);
        }

        .business-block .inner-box .icon-box {
            position: relative;
            top: 0px;
            margin-bottom: var(--margin-bottom-20);
        }

        .business-block .inner-box .text {
            max-width: 100%;
            margin-top: var(--margin-top-10);
        }

        .team-section .more-members {
            margin-left: var(--margin-left-20);
            margin-top: var(--margin-top-10);
        }

        .team-section .sec-title .pull-right {
            width: 100%;
        }

        .cta-section .pull-left,
        .cta-section .pull-right {
            width: 100%;
            text-align: center;
        }

        .cta-section h3 {
            margin-top: var(--margin-zero);
            margin-bottom: var(--margin-bottom-20);
        }

        .testimonial-block .inner-box .text {
            line-height: 1.7em;
            font-size: var(--font-18);
        }

        .page-title .bread-crumb li {
            font-size: var(--font-16);
        }

        .main-footer .footer-bottom .social-column .social-box,
        .main-footer .footer-bottom {
            text-align: center;
        }

        .feature-block .inner-box .number {
            right: 0px;
        }

        .about-section-two .images-column .video-box-three {
            left: 140px;
        }

        .services-tabs .tabs-content {
            padding: var(--padding-zero);
        }

        .services-tabs .tab-btns {
            position: relative;
            width: 100%;
            margin-bottom: var(--margin-bottom-30);
        }

        .support-section .content-column .inner-column::before {
            transform: skewX(0deg);
        }

        .main-footer .footer-bottom-two .copyright {
            text-align: center;
            margin-bottom: var(--margin-bottom-20);
        }

        .main-footer .footer-bottom-two .footer-nav {
            text-align: center;
        }

        .agency-section .blocks-column .business-block-two:nth-child(2n) {
            transform: translateY(0px);
        }




    }
</style>
@endsection

@section('content')
<main id="home">
    <div class="about-area" id="about-sec">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 p-0">
                    <div class="img">
                        <iframe width="100%" height="800"
                            src="https://www.youtube.com/embed/fUcECL2KLeg?controls=0&autoplay=1&mute=1"
                            title="Sociomark Showreel" frameborder="0" allow="autoplay;  picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="choose-area overflow-hidden mb-md-3 mt-md-3 mt-0 md-0 " id="about-sec2">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 pe-5" data-aos="fade-left"
                    data-aos-delay="300"
                    data-aos-duration="1200"
                    data-aos-easing="ease-in-out">
                    <div class="title-area mb-20">
                        <h2 class="sec-title ">The Powerful Lorem ipsum dolor sit amet, consectetur adipisicing. <span class="text-blue"> Benefits of</span> Saor SEO Lorem, ipsum.</h2>
                    </div>
                    <p class="sec-para ">In today's digital landscape, a strong online presence is critical for business success. But simply having a website isn't enough. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <div class="row mb-35 ">
                        <div class="col-6">
                            <p class="sec-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus perspiciatis ratione, minus nobis nam doloremque. </p>
                        </div>
                        <div class="col-6">
                            <p class="sec-para">Lorem ipsum dolor sit amet doloremque. Nesciunt quae debitis in autem?</p>
                        </div>
                    </div>
                    <a href="" class="th-btn black-border th-icon th-radius">
                        Read More <i class="fa-regular fa-arrow-right ms-2"></i>
                    </a>
                </div>
                <div class="col-xl-5" data-aos="fade-right"
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
                            Services We Provide To <span class="text-blue"> Grow Your Brand’s</span>
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
                        <a href="" class="th-btn black-border th-icon th-radius">
                            Read More
                        </a>
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
                        <a href="" class="th-btn black-border th-icon th-radius">
                            Read More </a>
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
                        <a href="" class="th-btn black-border th-icon th-radius">
                            Read More </a>
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
                        <a href="" class="th-btn black-border th-icon th-radius">
                            Read More </a>
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
                        <a href="" class="th-btn black-border th-icon th-radius">
                            Read More </a>
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
                        <a href="" class="th-btn black-border th-icon th-radius">
                            Read More </a>
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


    <div class="overflow-hidden position-relative space-extra-top space-bottom garally " id="portfolio-sec">
        <div class="container-fluid">
            <div class="title-area text-center mb-25">
                <h2 class="fw-bold mb-5 sec-title"
                    data-aos="fade-up"
                    data-aos-delay="100"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                    Our <span class="text-blue"> Portfolio</span>
                </h2>
            </div>
            <div class="filter-menu filter-menu-active mt-5 mb-4">
                <button data-filter="*" class="tab-btn active" type="button">All</button>
                <button data-filter=".cat1" class="tab-btn" type="button">Social Media</button>
                <button data-filter=".cat2" class="tab-btn" type="button">Development</button>
                <button data-filter=".cat3" class="tab-btn" type="button">Digital Creatives</button>
            </div>
            <div class="portfolio-area">
                <div class="row gy-4 justify-content-center filter-active">
                    <div class="col-12 col-md-6 col-xl-3 filter-item  cat5 cat7 cat3" data-aos="zoom-in"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <img src="https://www.sociomark.in/assets/img/project/mastercard.jpg"
                                        alt="Lorum Ipsum" class="w-100" />
                                </div>
                                <div class="flip-box-back">
                                    <h4>Mastercard</h4>
                                    <p class="sec-para">Lorum Ipsum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3 filter-item cat1 cat5 cat7 cat3" data-aos="zoom-in"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <img src="https://www.sociomark.in/assets/img/project/castrol600.jpg"
                                        alt="Lorum Ipsum" />
                                </div>
                                <div class="flip-box-back">
                                    <h4>Castrol</h4>
                                    <p class="sec-para">Lorum Ipsum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3 filter-item cat1 cat5 cat7 cat3" data-aos="zoom-in"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <img src="https://www.sociomark.in/assets/img/project/Button-Dabo-Desh-Bano.jpg"
                                        alt="Lorum Ipsum" />
                                </div>
                                <div class="flip-box-back">
                                    <h4>Button Dabo Desh Bano</h4>
                                    <p class="sec-para">Lorum Ipsum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3 filter-item cat1 cat2 cat5 cat7 cat3" data-aos="zoom-in"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <img src="https://www.sociomark.in/assets/img/project/nodwin-600.jpg"
                                        alt="Lorum Ipsum" />
                                </div>
                                <div class="flip-box-back">
                                    <h4>Nodwin Gaming</h4>
                                    <p class="sec-para">Lorum Ipsum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3 filter-item cat1 cat2 cat5 cat7 cat3" data-aos="zoom-in"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <img src="https://www.sociomark.in/assets/img/project/Euro_600x600.jpg"
                                        alt="Lorum Ipsum" />
                                </div>
                                <div class="flip-box-back">
                                    <h4>Euro</h4>
                                    <p class="sec-para">Lorum Ipsum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3 filter-item cat1 cat5 cat7 cat3" data-aos="zoom-in"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                        <div class="flip-box">
                            <div class="flip-box-inner">
                                <div class="flip-box-front">
                                    <img src="https://www.sociomark.in/assets/img/project/tpc.jpeg"
                                        alt="Lorum Ipsum" />
                                </div>
                                <div class="flip-box-back">
                                    <h4>TPC</h4>
                                    <p class="sec-para">Lorum Ipsum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="business-section bg-smoke2" style="background-image: url(assets/images/background/pattern-4.png)" id="about-sec4">
        <div class="container">
            <div class="title-area text-center mb-25">
                <h2 class="fw-bold mb-5 sec-title"
                    data-aos="fade-up"
                    data-aos-delay="100"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                    Why Should You <span class="text-blue"> Choose Us</span>
                </h2>
            </div>
            <div class="row clearfix">

                <!-- Left Column -->
                <div class="left-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">

                        <!-- Business Block -->
                        <div class="business-block" class="fw-bold mb-5 sec-title"
                            data-aos="fade-right"
                            data-aos-delay="100"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-out">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-phone"></span>
                                    </div>
                                    <h4><a href="service-detail.html">Security Managment</a></h4>
                                    <div class="text">Lorem ipsum, or lipsum as some known, is dummy text used</div>
                                </div>
                            </div>
                        </div>

                        <!-- Business Block -->
                        <div class="business-block" data-aos="fade-right"
                            data-aos-delay="100"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-out">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-phone"></span>
                                    </div>
                                    <h4><a href="service-detail.html">Customer strategy</a></h4>
                                    <div class="text">Lorem ipsum, or lipsum as some known, is dummy text used</div>
                                </div>
                            </div>
                        </div>

                        <!-- Business Block -->
                        <div class="business-block" data-aos="fade-right"
                            data-aos-delay="100"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-out">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-phone"></span>
                                    </div>
                                    <h4><a href="service-detail.html">seo & Content Writting</a></h4>
                                    <div class="text">Lorem ipsum, or lipsum as some known, is dummy text used</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-4 col-md-12 col-sm-12" data-aos="zoom-in"
                    data-aos-delay="100"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                    <div class="inner-column">
                        <div class="circle-layer"></div>
                        <div class="circle-layer-two"></div>
                        <div class="pattern-layer"
                            style="background-image: url(assets/images/background/pattern-5.png)"></div>
                        <div class="image" data-tilt data-tilt-max="4">
                            <img src="https://html.themexriver.com/aginco/assets/images/resource/business-1.jpg" alt="" />
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="right-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">

                        <!-- Business Block -->
                        <div class="business-block" data-aos="fade-left"
                            data-aos-delay="100"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-out">
                            <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-phone"></span>
                                    </div>
                                    <h4><a href="service-detail.html">analytic optimization</a></h4>
                                    <div class="text">Lorem ipsum, or lipsum as some known, is dummy text used</div>
                                </div>
                            </div>
                        </div>

                        <!-- Business Block -->
                        <div class="business-block" data-aos="fade-left"
                            data-aos-delay="100"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-out">
                            <div class="inner-box wow fadeInRight" data-wow-delay="150ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-phone"></span>
                                    </div>
                                    <h4><a href="service-detail.html">digitals products</a></h4>
                                    <div class="text">Lorem ipsum, or lipsum as some known, is dummy text used</div>
                                </div>
                            </div>
                        </div>

                        <!-- Business Block -->
                        <div class="business-block" data-aos="fade-left"
                            data-aos-delay="100"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-out">
                            <div class="inner-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-phone"></span>
                                    </div>
                                    <h4><a href="service-detail.html">Link Building & Content</a></h4>
                                    <div class="text">Lorem ipsum, or lipsum as some known, is dummy text used</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="th-blog-wrapper bg-smoke2 space-top space-extra-bottom" id="about-sec5">
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

    <section class="overflow-hidden position-relative space-extra-top space-bottom garally" id="testi-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-area text-center">
                        <h2 class="fw-bold sec-title my-3"
                            data-aos="fade-up"
                            data-aos-delay="100"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-out">
                            60+ Happy Clients Said To <span class="text-blue"> Us They Are Satisfied</span>
                        </h2>

                    </div>
                </div>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider has-shadow" id="testiSlide1"
                    data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1300":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="box-review">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i>
                                </div>
                                <p class="sec-para">“Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s,”</p>
                                <div class="box-wrapp">
                                    <div class="box-profile">
                                        <div class="box-author">
                                            <img src="https://placehold.co/44x44" alt="Avater">
                                        </div>
                                        <div class="box-info">
                                            <h3 class="box-title">Lorem Ipsum</h3>
                                            <span class="box-desig">Lorem Ipsum.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="box-review">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i>
                                </div>
                                <p class="sec-para">“Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s,
                                </p>
                                <div class="box-wrapp">
                                    <div class="box-profile">
                                        <div class="box-author">
                                            <img src="https://placehold.co/44x44" alt="Avater">
                                        </div>
                                        <div class="box-info">
                                            <h3 class="box-title">Lorem Ipsum</h3>
                                            <span class="box-desig">Lorem Ipsum.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="box-review">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i>
                                </div>
                                <p class="sec-para">“Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s,”</p>
                                <div class="box-wrapp">
                                    <div class="box-profile">
                                        <div class="box-author">
                                            <img src="https://placehold.co/44x44" alt="Avater">
                                        </div>
                                        <div class="box-info">
                                            <h3 class="box-title">Lorem Ipsum</h3>
                                            <span class="box-desig">Lorem Ipsum.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="box-review">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i>
                                </div>
                                <p class="sec-para">“Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s,”</p>
                                <div class="box-wrapp">
                                    <div class="box-profile">
                                        <div class="box-author">
                                            <img src="https://placehold.co/44x44" alt="Avater">
                                        </div>
                                        <div class="box-info">
                                            <h3 class="box-title">Lorem Ipsum</h3>
                                            <span class="box-desig">Lorem Ipsum.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="box-review">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i>
                                </div>
                                <p class="sec-para">“Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s,”</p>
                                <div class="box-wrapp">
                                    <div class="box-profile">
                                        <div class="box-author">
                                            <img src="https://placehold.co/44x44" alt="Avater">
                                        </div>
                                        <div class="box-info">
                                            <h3 class="box-title">Lorem Ipsum</h3>
                                            <span class="box-desig">Lorem Ipsum.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="box-review">
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                        class="fa-solid fa-star"></i>
                                </div>
                                <p class="sec-para">“Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                                    1500s,”</p>
                                <div class="box-wrapp">
                                    <div class="box-profile">
                                        <div class="box-author">
                                            <img src="https://placehold.co/44x44" alt="Avater">
                                        </div>
                                        <div class="box-info">
                                            <h3 class="box-title">Lorem Ipsum</h3>
                                            <span class="box-desig">Lorem Ipsum.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <button data-slider-prev="#testiSlide1" class="slider-arrow slider-prev"><i
                        class="far fa-arrow-left"></i></button>
                <button data-slider-next="#testiSlide1" class="slider-arrow slider-next"><i
                        class="far fa-arrow-right"></i></button>
            </div>
        </div>
        {{-- <div class="shape-mockup" data-top="0" data-right="0">
                <div class="particle-3" id="particle-3"></div>
            </div> --}}
        {{-- <div class="shape-mockup spin  d-none d-xl-block" data-top="20%" data-left="12%"><img
                    src="{{ asset('frontend-assets/img/shape/shape-1.png') }}" alt="">
        </div>
        <div class="shape-mockup moving  d-none d-xl-block" data-bottom="40%" data-left="5%"><img
                src="{{ asset('frontend-assets/img/shape/shape-7.png') }}" alt=""></div> --}}
    </section>
    <div class="th-blog-wrapper bg-smoke2 space-top space-extra-bottom" id="contact">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-5 pe-md-5">
                    <div class="title-area mb-20">
                        <h2 class="fw-bold sec-title"
                            data-aos="fade-right"
                            data-aos-delay="100"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-out">
                            The Powerful Benefits of <span class="text-blue"> Saor SEO</span>
                        </h2>

                    </div>
                    <p class="sec-para mb-35 " data-aos="fade-right"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">In today's digital landscape, a strong online presence is critical for business success. But simply having a website isn't enough.</p>

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