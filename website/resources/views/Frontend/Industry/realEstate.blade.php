@extends('Frontend.layout.app')
<style>
    #industries #about-sec4 {
        background: linear-gradient(to right, #106c97, #1b272c);
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
    /* client section */
   
</style>
@section('content')
<main id="industries">
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend-assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Real Estate</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-seo-agency.html">Home</a></li>
                    <li>Real Estate</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="about-area2 overflow-hidden space" id="about-sec">
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
                        <h2 class="fw-bold sec-title"
                            data-aos="zoom-in"
                            data-aos-delay="100"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-out">
                            Innovative Digital Solutions <span class="text-blue"> for Modern Businesses</span>
                        </h2>
                    </div>
                    <p class="mt-n2 mb-25 sec-para" data-aos="fade-down"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">Established in 1995, Saor has been a leading force in the digital landscape for
                        over two decades. We're a passionate team of designers, developers, and strategists driven by a
                        shared vision. Our digital agency combines innovation, strategy, and expertise to fuel your online
                        success. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, animi voluptatem esse quis tenetur, quidem harum ipsa tempore laborum reprehenderit nam! Voluptatum, hic minima temporibus vero pariatur accusamus ipsam qui?
                    </p>
                </div>
            </div>
        </div>

    </div>
    <div class="choose-area bg-title overflow-hidden space" id="about-sec2" data-mask-src="{{ asset('frontend-assets/img/bg/choose_bg_3.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="title-area mb-20">
                        <!-- <span class="sub-title style1  text-white">Benefits You Can't Ignore</span> -->

                        <h2 class="sec-title text-white"
                            data-aos="fade-right"
                            data-aos-delay="200"
                            data-aos-duration="1200"
                            data-aos-easing="ease-in-out">
                            The Powerful Benefits of Saor SEO
                        </h2>
                    </div>
                    <p class="sec-para text-white mb-35" data-aos="fade-right"
                        data-aos-delay="200"
                        data-aos-duration="1200"
                        data-aos-easing="ease-in-out">In today's digital landscape, a strong online presence is critical for business success. But simply having a website isn't enough.</p>
                    <div class="choose-feature-wrap">
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <!-- <img src="{{ asset('frontend-assets/img/icon/choose_feature_1_1.svg') }}" alt="Icon"> -->
                                <i class="fa-light fa-calendar"></i>
                            </div>
                            <div class="media-body" data-aos="fade-right"
                                data-aos-delay="200"
                                data-aos-duration="1200"
                                data-aos-easing="ease-in-out">

                                <h3 class="box-title">Increased Website Traffic</h3>
                                <p class="box-text">Our SEO strategies will attract more qualified visitors to your website, bringing you closer.</p>
                            </div>
                        </div>
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <!-- <img src="{{ asset('frontend-assets/img/icon/choose_feature_1_2.svg') }}" alt="Icon"> -->
                                <i class="fa-light fa-calendar"></i>
                            </div>
                            <div class="media-body" data-aos="fade-right"
                                data-aos-delay="200"
                                data-aos-duration="1200"
                                data-aos-easing="ease-in-out">

                                <h3 class="box-title">Enhanced Brand Awareness</h3>
                                <p class="box-text">Increased website traffic and the improved rankings naturally lead to greater brand awareness.</p>
                            </div>
                        </div>
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <!-- <img src="{{ asset('frontend-assets/img/icon/choose_feature_1_3.svg') }}" alt="Icon"> -->
                                <i class="fa-light fa-calendar"></i>
                            </div>
                            <div class="media-body" data-aos="fade-right"
                                data-aos-delay="200"
                                data-aos-duration="1200"
                                data-aos-easing="ease-in-out">

                                <h3 class="box-title">More Leads & Conversions</h3>
                                <p class="box-text">By attracting qualified the traffic and optimizing your website for conversions, we'll help you.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="choose-image" data-aos="fade-left"
                        data-aos-delay="200"
                        data-aos-duration="1200"
                        data-aos-easing="ease-in-out">
                        <div class="img1 tilt-active">
                            <img src="{{ asset('frontend-assets/img/normal/choose_1.png') }}" alt="Choose">
                            <div class="choose-shape"><img src="{{ asset('frontend-assets/img/shape/choose-shape.png') }}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend/partial/clientList')
  
    <div class="overflow-hidden space" id="about-sec4">
        <div class="container">
            <div class="title-area text-center">
                <h3 class="box-title text-white fs-5 ls-1">STATISTICS</h3>
                <h2 class="sec-title mt-3 text-white">We are a results driven while label seo agency</h2>
            </div>
            <div class="row gy-4">
                <div class="col-xl-3 col-md-6">
                    <div class="contact-media align-items-center bg-transparent border-0 d-flex flex-column">
                        <div class="icon-btn">
                            <i class="fa-sharp fa-light fa-location-dot text-white"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="box-title text-white text-center fs-4">1 MILLION +</h5>
                            <p class="box-text text-white text-center fs-6">AVERAGE ORGANIC SEARCHES</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="contact-media align-items-center bg-transparent border-0 d-flex flex-column">
                        <div class="icon-btn">
                            <i class="fa-sharp fa-light fa-location-dot text-white"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="box-title text-white text-center fs-4">AED 5</h5>
                            <p class="box-text text-white text-center fs-6">AVERAGE COST PER CLICK</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="contact-media align-items-center bg-transparent border-0 d-flex flex-column">
                        <div class="icon-btn">
                            <i class="fa-sharp fa-light fa-location-dot text-white"></i>
                        </div>
                        <div class="media-body">
                            <h5 class="box-title text-white text-center fs-4"> 25 +</h5>
                            <p class="box-text text-white text-center fs-6">SUCCESSFUL CAMPAIGNS</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="contact-media align-items-center bg-transparent border-0 d-flex flex-column">
                        <div class="icon-btn">
                            <i class="fa-sharp fa-light fa-location-dot text-white"></i>
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