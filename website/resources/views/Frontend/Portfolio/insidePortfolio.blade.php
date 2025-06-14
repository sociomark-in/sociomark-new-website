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


    #brand .head-text-div {
        margin: 0px;
    }

    @media only screen and (max-width: 600px) {
        #brand .contact-head {
            padding: 2rem 0.5rem;
        }

        #brand .head-text-div {
            margin-bottom: 13px;
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
    <section style="margin-top:68px;">
        <div class="full-width">
            <picture>
                <source media="(min-width: 1400px)" srcset="{{ asset('frontend-assets/img/banners/portfolio.jpg') }}" class="w-100">
                <img src="{{ asset('frontend-assets/img/banners/portfolio.jpg') }}" alt="porfolio" class="w-100">
            </picture>
        </div>
    </section>
    <section class="py-md-5 py-4 d-none" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content breadcrumb-light">
                        <h2 class="breadcumb-title">Portfolios</h2>
                        <ul class="breadcumb-menu d-none">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Portfolios</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="overflow-hidden space contact-head">
        <div class="container">
            <div class="row justify-content-between">
                <div class="title-area text-center text-xl-start col-md-4 head-text-div mt-1">
                    <h1 class="sec-title head-text head-mbl-text" data-aos="fade-right" data-aos-delay="100"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                        Our Work <span class="text-blue">Speaks Louder</span> Than Words
                    </h1>
                </div>
                <div class="text-center text-xl-start col-md-8 pl-40">
                    <p class="sec-para" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000"
                        data-aos-easing="ease-in-out">We love what we do, and it shows in our work. Every project is a chance to create something special. Check out the projects we’ve worked on and see how we help brands grow. Our portfolio reflects our passion for creativity and results. Each project tells a unique story of collaboration and success. We’re proud of what we’ve built and excited for what’s next!
                    </p>

                </div>
            </div>
        </div>

    </div>
    <div class="brand-sec bg-smoke2 overflow-hidden shape-mockup-wrap" id="brand-list">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box d-none" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'adi-arogyam']) }}">
                        <img src="{{ asset('frontend-assets/img/work/banner/adi_arogyam.png') }}" alt="Adi Arogyam Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'tata-play']) }}">
                        <img src="{{ asset('frontend-assets/img/work/banner/tata_play.png') }}" alt="TATA PLAY Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'stemrx-bioscience']) }}">
                        <img src="{{ asset('frontend-assets/img/work/banner/stemrx.jpg') }}" alt="Stemrx Bioscience Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box d-none" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'vedco']) }}">
                        <img src="{{ asset('frontend-assets/img/work/banner/vedco.png') }}" alt="Vedco Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'jop']) }}">
                        <img src="{{ asset('frontend-assets/img/work/banner/jop.png') }}" alt="JOP Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'euro']) }}">
                        <img src="{{ asset('frontend-assets/img/work/euro/Euro.jpg') }}" alt="Euro"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'nmmc']) }}">
                        <img src="{{ asset('frontend-assets/img/portfolio/nmmc/banner.jpg') }}" alt="NMMC"
                            class="img-fluid">
                    </a>
                </div>

                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box d-none"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'pare']) }}">
                        <img src="{{ asset('frontend-assets/img/portfolio/pare/banner.jpg') }}" alt="PARE"
                            class="img-fluid">
                    </a>
                </div>

                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'the-professional-couriers']) }}">
                        <img src="{{ asset('frontend-assets/img/work/the prfessional courier/The Professional Couriers.jpg') }}"
                            alt="TPC" class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'bulid-track']) }}">
                        <img src="{{ asset('frontend-assets/img/work/build track/Buildtrack.jpg') }}" alt="BUILD TRACK"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'ism']) }}">
                        <img src="{{ asset('frontend-assets/img/work/banner/ism.jpg') }}" alt="ISM"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'qubero']) }}">
                        <img src="{{ asset('frontend-assets/img/work/banner/qubero.jpg') }}" alt="Qubero"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'tmc']) }}">
                        <img src="{{ asset('frontend-assets/img/work/banner/tmc.jpg') }}" alt="TMC"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'repute']) }}">
                        <img src="{{ asset('frontend-assets/img/work/banner/repute.jpg') }}" alt="REPUTE"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'ayu-health']) }}">
                        <img src="{{ asset('frontend-assets/img/work/ayu health/ayu health.jpg') }}" alt="AYUHEALTH"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'bem']) }}">
                        <img src="{{ asset('frontend-assets/img/work/bem/BEM.png') }}" alt="BEM"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'cyber-power']) }}">
                        <img src="{{ asset('frontend-assets/img/work/cyberpwer/Cyberpower.jpg') }}" alt="Cyber Power"
                            class="img-fluid">
                    </a>
                </div>

                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'jivana']) }}">
                        <img src="{{ asset('frontend-assets/img/work/jivana/Jivana.jpg') }}" alt="JIVANA"
                            class="img-fluid">
                    </a>
                </div>

                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'm4u']) }}">
                        <img src="{{ asset('frontend-assets/img/work/banner/market4you.jpg') }}" alt="M4U"
                            class="img-fluid">
                    </a>
                </div>

                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'nhss']) }}">
                        <img src="{{ asset('frontend-assets/img/work/banner/NHS.jpg') }}" alt="NHSS"
                            class="img-fluid">
                    </a>
                </div>

                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'shahenaz']) }}">
                        <img src="{{ asset('frontend-assets/img/work/banner/Shahenaz.jpg') }}" alt="Shahenaz"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'nodwin-gaming']) }}">
                        <img src="{{ asset('frontend-assets/img/work/nodwin/1.jpg') }}" alt="Nodwin"
                            class="img-fluid">
                    </a>
                </div>
                <!-- <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                            data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <a href="{{ route('social_media', ['client' => 'grill-box']) }}">
                                <img src="{{ asset('frontend-assets/img/work/grill-box/1.jpg') }}" alt="Brand Logo"
                                    class="img-fluid">
                            </a>
                        </div> -->
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'road-to-safety']) }}">
                        <img src="{{ asset('frontend-assets/img/work/rts/1.jpg') }}" alt="Road To Safety"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'ayushakti']) }}">
                        <img src="{{ asset('frontend-assets/img/clients/ayushakti.jpg') }}" alt="ayushakti"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'lime']) }}">
                        <img src="{{ asset('frontend-assets/img/case-study/lime_logo.png') }}" alt="lime"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'button-dabao-desh-banao']) }}">
                        <img src="{{ asset('frontend-assets/img/case-study/bddb.png') }}" alt="Brand Logo"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'castrol']) }}">
                        <img src="{{ asset('frontend-assets/img/work/castrol/1.jpg') }}" alt="castrol"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'mission-insure-india']) }}">
                        <img src="{{ asset('frontend-assets/img/work/mission-insure-india/1.jpg') }}"
                            alt="Mission Insure India" class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'real-estate-awards']) }}">
                        <img src="{{ asset('frontend-assets/img/case-study/rea.png') }}" alt="Real Estate"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'cosplay-genie']) }}">
                        <img src="{{ asset('frontend-assets/img/work/cosplay-genie/1.jpg') }}" alt="Cosplay"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'smarter-india']) }}">
                        <img src="{{ asset('frontend-assets/img/case-study/smarter-logo.png') }}" alt="Smarter India"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'mahindra-first-choice-services']) }}">
                        <img src="{{ asset('frontend-assets/img/work/mahindra-first-choice-services/1.jpg') }}"
                            alt="Mahindra First Choice" class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'team-cashless-india']) }}">
                        <img src="{{ asset('frontend-assets/img/work/team-cashless-india/1.jpg') }}" alt="Team Cashleass India"
                            class="img-fluid">
                    </a>
                </div>

                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'sportz-consult']) }}">
                        <img src="{{ asset('frontend-assets/img/work/sportz-consult/1.jpg') }}" alt="Sports"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'ai-awards']) }}">
                        <img src="{{ asset('frontend-assets/img/work/ai-awards/1.jpg') }}" alt="AI Awards"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'grill-box']) }}">
                        <img src="{{ asset('frontend-assets/img/work/grill-box/grill1.jpeg') }}" alt="Grill Box"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'kolkata-rolls']) }}">
                        <img src="{{ asset('frontend-assets/img/work/kolkata-rolls/1.jpg') }}" alt="Kolkata Rolls"
                            class="img-fluid">
                    </a>
                </div>

                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'hollywood-opticians']) }}">
                        <img src="{{ asset('frontend-assets/img/work/hollywood-opticians/1.jpg') }}" alt="Hollywood Opticians"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'foresight-opticals']) }}">
                        <img src="{{ asset('frontend-assets/img/work/foresight-opticals/1.jpg') }}" alt="Foresight"
                            class="img-fluid">
                    </a>
                </div>
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box"
                    data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => 'inifd-vashi']) }}">
                        <img src="{{ asset('frontend-assets/img/work/inifd-vashi/1.jpg') }}" alt="Inifd"
                            class="img-fluid">
                    </a>
                </div>



            </div>
        </div>
    </div>
</main>
@endsection