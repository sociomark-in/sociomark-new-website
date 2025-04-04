@extends('Frontend.layout.app')
<style>
    #industries #about-sec .sec-title,
    #industries #about-sec2 .sec-title,
    #industries #about-sec3 .sec-title,
    #industries #about-sec4 .sec-title {
        font-size: 35px;
        line-height: 42px;
    }

    #industries #about-sec4 .sec-title {
        color: white;
    }

    #industries #about-sec2 .sec-para {
        color: white;
        font-size: 18px;
    }

    #industries #about-sec .sec-para,
    #industries #about-sec2 .sec-para,
    #industries #about-sec3 .sec-para {
        line-height: 28px;
        font-size: 20px;
        letter-spacing: .10px;
    }

    #industries #about-sec2 {
        padding: 6rem 0 6rem 0;
    }

    #industries #about-sec4 {
        background: linear-gradient(to right, #106c97, #1b272c);
    }

    #industries #about-sec4 .contact-media {
        background: transparent;
        border: none;
        flex-direction: column;
    }

    #industries #about-sec4 .contact-media .icon-btn {
        width: 125px;
        height: 125px;
        font-size: 74px;
        background: transparent;
        border-radius: 87px;
        padding: 30px;
    }

    #industries #about-sec4 .contact-media .icon-btn .fa-light,
    .fal {
        color: white;
        font-size: 66px;
    }
</style>
@section('content')
<main id="industries">
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend-assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Industry</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-seo-agency.html">Home</a></li>
                    <li>Industry</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="about-area2 mb-md-3 mt-md-3 mt-0 md-0 pt-5 pb-5 overflow-hidden overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row ">
                <div class="col-lg-4 mb-30 mb-xl-0">
                    <div class="imgBox img-box2 me-xl-4 mt-lg-60">
                        <div class="img1 th-anim mb-35">
                            <img src="{{ asset('frontend-assets/img/normal/about_2_1.png') }}" alt="About">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="title-area mb-25 mt-n1">
                        <h2 class="sec-title ">Innovative Digital Solutions for Modern Businesses</h2>
                    </div>
                    <p class="mt-n2 mb-25 sec-para">Established in 1995, Saor has been a leading force in the digital landscape for
                        over two decades. We're a passionate team of designers, developers, and strategists driven by a
                        shared vision. Our digital agency combines innovation, strategy, and expertise to fuel your online
                        success. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, animi voluptatem esse quis tenetur, quidem harum ipsa tempore laborum reprehenderit nam! Voluptatum, hic minima temporibus vero pariatur accusamus ipsam qui?
                    </p>
                </div>
            </div>
        </div>

    </div>
    <div class="choose-area bg-title overflow-hidden mb-md-3 mt-md-3 mt-0 md-0" id="about-sec2" data-mask-src="{{ asset('frontend-assets/img/bg/choose_bg_3.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="title-area mb-20">
                        <span class="sub-title style1  text-white">Benefits You Can't Ignore</span>
                        <h2 class="sec-title  text-white">The Powerful Benefits of Saor SEO</h2>
                    </div>
                    <p class="sec-para mb-35">In today's digital landscape, a strong online presence is critical for business success. But simply having a website isn't enough.</p>
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
                <div class="col-xl-6">
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
    <div class="about-area2 mb-md-5 mt-md-5 mt-0 md-0 pt-5 pb-5 overflow-hidden overflow-hidden space" id="about-sec3">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8 pe-4">
                    <div class="title-area mb-25 mt-n1">
                        <h2 class="sec-title ">Innovative Digital Solutions for Modern Businesses</h2>
                    </div>
                    <p class="mt-n2 mb-25 sec-para">Established in 1995, Saor has been a leading force in the digital landscape for
                        over two decades. We're a passionate team of designers, developers, and strategists driven by a
                        shared vision. Our digital agency combines innovation, strategy, and expertise to fuel your online
                        success. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, animi voluptatem esse quis tenetur.
                    </p>
                    <p class="mt-n2 mb-25 sec-para">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nam rerum ea similique placeat odio harum, libero inventore tempora quam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi veniam enim ea amet iste necessitatibus fugiat tempora aut id praesentium accusantium, dolores inventore suscipit impedit eius. Molestias corporis autem aperiam?
                    </p>
                </div>
                <div class="col-lg-4 mb-30 mb-xl-0">
                    <div class="imgBox img-box2 me-xl-4 mt-lg-60 w-100 h-100">
                        <div class="img1 th-anim mb-35 w-100 h-100">
                            <img src="{{ asset('frontend-assets/img/normal/about_2_1.png') }}" alt="About">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="space mb-md-3 mt-md-3 mt-0 md-0" id="about-sec4">
        <div class="container">
            <div class="title-area text-center">
            <h3 class="box-title text-white fs-5 ls-1">STATISTICS</h3>
                <h2 class="sec-title mt-3">We are a results driven while label seo agency</h2>
            </div>
            <div class="row gy-4">
                <div class="col-xl-3 col-md-6">
                    <div class="contact-media align-items-center">
                        <div class="icon-btn">
                            <i class="fa-sharp fa-light fa-location-dot"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="box-title text-white text-center fs-4">1 MILLION +</h5>
                            <p class="box-text text-white text-center fs-6">AVERAGE ORGANIC SEARCHES</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="contact-media align-items-center">
                        <div class="icon-btn">
                            <i class="fa-light fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="box-title text-white text-center fs-4">AED 5</h5>
                            <p class="box-text text-white text-center fs-6">AVERAGE COST PER CLICK</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="contact-media align-items-center">
                        <div class="icon-btn">
                            <i class="fa-light fa-clock"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="box-title text-white text-center fs-4"> 25 +</h5>
                            <p class="box-text text-white text-center fs-6">SUCCESSFUL CAMPAIGNS</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="contact-media align-items-center">
                        <div class="icon-btn">
                            <i class="fa-light fa-clock"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="box-title text-white text-center fs-4">1 MILLION +</h5>
                            <p class="box-text text-white text-center fs-6">POTENTIAL SOCIAL REACH</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection