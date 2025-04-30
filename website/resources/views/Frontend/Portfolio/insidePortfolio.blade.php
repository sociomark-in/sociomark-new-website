@extends('Frontend.layout.app')
@section('title', 'Portfolio')
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
        overflow: hidden;
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
    <section>
        <div class="full-width">
            <picture>
                <source media="(min-width: 1400px)" srcset="{{ asset('frontend-assets/img/banners/portfolio.jpg') }}">
                <img src="{{ asset('frontend-assets/img/banners/portfolio.jpg')}}" alt="">
            </picture>
        </div>
    </section>
    <section class="overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content breadcrumb-light">
                        <h1 class="breadcumb-title">Portfolios</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Portfolios</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="overflow-hidden space contact-head" id="about-sec1">
        <div class="container">
            <div class="row">
                <div class="title-area text-center text-xl-start col-md-4 head-text-div">
                    <h2 class="sec-title head-text head-mbl-text" data-aos="fade-right" data-aos-delay="100"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                        Don’t hesitate to <span class="text-blue"> contact us</span> for any information.
                    </h2>
                </div>
                <div class="text-center text-xl-start col-md-8">
                    <p class="sec-para" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000"
                        data-aos-easing="ease-in-out">We identify the most relevant and high-traffic keywords for your
                        business. Our
                        team conducts thorough research to understand.</p>
                    <p class="sec-para" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000"
                        data-aos-easing="ease-in-out">We identify the most relevant and high-traffic keywords for your
                        business. Our
                        team conducts thorough research to understand yourer.</p>
                </div>
            </div>
        </div>

    </div>

    <div class="brand-sec bg-smoke2 overflow-hidden space shape-mockup-wrap" id="brand-list">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'euro']) }}">
                        <img src="{{ asset('frontend-assets/img/work/euro/Euro.jpg') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'the-professional-couriers']) }}">
                        <img src="{{ asset('frontend-assets/img/work/the prfessional courier/The Professional Couriers.jpg') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'bulid-track']) }}">
                        <img src="{{ asset('frontend-assets/img/work/build track/Buildtrack.jpg') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>

                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'ayu-health']) }}">
                        <img src="{{ asset('frontend-assets/img/work/ayu health/ayu health.jpg') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'bem']) }}">
                        <img src="{{ asset('frontend-assets/img/work/bem/BEM.png') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'cyber-power']) }}">
                        <img src="{{ asset('frontend-assets/img/work/cyberpwer/Cyberpower.jpg') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>

                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'jivana']) }}">
                        <img src="{{ asset('frontend-assets/img/work/jivana/Jivana.jpg') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>

                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'m4u']) }}">
                        <img src="{{ asset('frontend-assets/img/work/banner/market4you.jpg') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>

                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'nhss']) }}">
                        <img src="{{ asset('frontend-assets/img/work/banner/NHS.jpg') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>

                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'shahenaz']) }}">
                        <img src="{{ asset('frontend-assets/img/work/banner/Shahenaz.jpg') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'nodwin-gaming']) }}">
                        <img src="{{ asset('frontend-assets/img/work/nodwin/1.jpg') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'grill-box']) }}">
                        <img src="{{ asset('frontend-assets/img/work/grill-box/1.jpg') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'road-to-safety']) }}">
                        <img src="{{ asset('frontend-assets/img/work/rts/1.jpg') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'ayushakti']) }}">
                        <img src="{{ asset('frontend-assets/img/clients/ayushakti.jpg') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'lime']) }}">
                        <img src="{{ asset('frontend-assets/img/case-study/lime_logo.png') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'button-dabao-desh-banao']) }}">
                        <img src="{{ asset('frontend-assets/img/case-study/bddb.png') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'castrol']) }}">
                        <img src="{{ asset('frontend-assets/img/work/castrol/1.jpg') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'mission-insure-india']) }}">
                        <img src="{{ asset('frontend-assets/img/work/mission-insure-india/1.jpg') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'real-estate-awards']) }}">
                        <img src="{{ asset('frontend-assets/img/case-study/rea.png') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'cosplay-genie']) }}">
                        <img src="{{ asset('frontend-assets/img/work/cosplay-genie/1.jpg') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'smarter-india']) }}">
                        <img src="{{ asset('frontend-assets/img/case-study/smarter-logo.png') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'mahindra-first-choice-services']) }}">
                        <img src="{{ asset('frontend-assets/img/work/mahindra-first-choice-services/1.jpg') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'team-cashless-india']) }}">
                        <img src="{{ asset('frontend-assets/img/work/team-cashless-india/1.jpg') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>

                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'sportz-consult']) }}">
                        <img src="{{ asset('frontend-assets/img/work/sportz-consult/1.jpg') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'ai-awards']) }}">
                        <img src="{{ asset('frontend-assets/img/work/ai-awards/1.jpg') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'grill-box']) }}">
                        <img src="{{ asset('frontend-assets/img/work/grill-box/grill1.jpeg') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'kolkata-rolls']) }}">
                        <img src="{{ asset('frontend-assets/img/work/kolkata-rolls/1.jpg') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>

                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'hollywood-opticians']) }}">
                        <img src="{{ asset('frontend-assets/img/work/hollywood-opticians/1.jpg') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'foresight-opticals']) }}">
                        <img src="{{ asset('frontend-assets/img/work/foresight-opticals/1.jpg') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'inifd-vashi']) }}">
                        <img src="{{ asset('frontend-assets/img/work/inifd-vashi/1.jpg') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'repute']) }}">
                        <img src="https://placehold.co/400" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'ism']) }}">
                        <img src="https://placehold.co/400" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client'=>'qubero']) }}">
                        <img src="https://placehold.co/400" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>

            </div>
        </div>
    </div>
</main>
@endsection