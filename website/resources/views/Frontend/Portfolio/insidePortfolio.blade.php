@extends('Frontend.layout.app')
@section('title', 'brand')
@section('author', 'Your Company Name')
@section('description', 'This is a dynamic description for the home page.')
@section('keywords', 'seo, marketing, agency, web design')
@section('robots', 'INDEX,FOLLOW')

@section('custome-style')
<style>
    #brand .contact-head {
        padding: 3rem 0rem 3rem 0rem;
    }

    #brand .head-text {
        font-size: 35px;
        line-height: 42px;
    }

    #brand .head-text-div {
        margin: 0px;
    }

    #brand .sec-para {
        line-height: 28px !important;
        font-size: 20px !important;
        letter-spacing: .10px !important;
        color: #797E88 !important;
    }

    @media only screen and (max-width: 600px) {
        #brand .contact-head {
            padding: 2rem 0.5rem;
        }

        #brand .head-text-div {
            margin-bottom: 13px;
        }

        #brand .head-mbl-text,
        #brand .space-bottom .head-mbl-text {
            font-size: 30px;
            line-height: 31px;
        }

        #brand #about-sec2 .th-btn {
            padding: 12px;
            width: 40%;
        }
    }

    /* brand list */
    #brand-list .brand-item {
        height: 160px;
        margin-left: 0px;
    }

    #brand-list .box {
        padding: 7px 14px !important;
    }

    #brand-list .box a {
        width: 100%;
        height: 100%;
        background-color: white;
        padding: 20px 50px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    #brand-list .box img {
        width: 100%;
        height: 100%;
    }

    #brand-list .box img {
        transition: transform 0.3s ease;
    }

    #brand-list .box:hover img {
        transform: scale(1.1);
    }

    /* brand list end */
</style>
@endsection
@section('content')
<main id="brand">
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend-assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">brand</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-seo-agency.html">Home</a></li>
                    <li>brand</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="overflow-hidden space contact-head" id="about-sec1">
        <div class="container">
            <div class="row">
                <div class="title-area text-center text-xl-start col-md-4 head-text-div">
                    <h2 class="sec-title head-text head-mbl-text"
                        data-aos="fade-right"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                        Don’t hesitate to <span class="text-blue"> contact us</span> for any information.
                    </h2>
                </div>
                <div class="text-center text-xl-start col-md-8">
                    <p class="sec-para" data-aos="fade-left"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">We identify the most relevant and high-traffic keywords for your business. Our
                        team conducts thorough research to understand.</p>
                    <p class="sec-para" data-aos="fade-left"
                        data-aos-delay="200"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">We identify the most relevant and high-traffic keywords for your business. Our
                        team conducts thorough research to understand yourer.</p>
                </div>
            </div>
        </div>

    </div>

    <div class="brand-sec bg-smoke2 overflow-hidden space shape-mockup-wrap" id="brand-list">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                    <a href="#">
                        <img src="{{ asset('frontend-assets/img/brand/brand_1_1.svg') }}" alt="Brand Logo" class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                    <a href="#">
                        <img src="{{ asset('frontend-assets/img/brand/brand_1_2.svg') }}" alt="Brand Logo" class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                    <a href="#">
                        <img src="{{ asset('frontend-assets/img/brand/brand_1_3.svg') }}" alt="Brand Logo" class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                    <a href="#">
                        <img src="{{ asset('frontend-assets/img/brand/brand_1_4.svg') }}" alt="Brand Logo" class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                    <a href="#">
                        <img src="{{ asset('frontend-assets/img/brand/brand_1_5.svg') }}" alt="Brand Logo" class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                    <a href="#">
                        <img src="{{ asset('frontend-assets/img/brand/brand_1_6.svg') }}" alt="Brand Logo" class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                    <a href="#">
                        <img src="{{ asset('frontend-assets/img/brand/brand_1_5.svg') }}" alt="Brand Logo" class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100"
                    data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                    <a href="#">
                        <img src="{{ asset('frontend-assets/img/brand/brand_1_5.svg') }}" alt="Brand Logo" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>



</main>
@endsection