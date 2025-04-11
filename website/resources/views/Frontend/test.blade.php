@extends('frontend.layout.app')
@section('content')

<section class="business-section" style="background-image: url(assets/images/background/pattern-4.png)">
        <div class="container">
            <!-- Sec Title / Centered -->
            <div class="sec-title text-center">
                <h2>Explore Our <span>Business</span> <br> New Features</h2>
            </div>
            <div class="row clearfix">

                <!-- Left Column -->
                <div class="left-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">

                        <!-- Business Block -->
                        <div class="business-block">
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
                        <div class="business-block">
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
                        <div class="business-block">
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
                <div class="image-column col-lg-4 col-md-12 col-sm-12">
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
                        <div class="business-block">
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
                        <div class="business-block">
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
                        <div class="business-block">
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
    <!-- End Business Section -->

    <style>
     
    </style>
@endsection


@section()
 <!-- <div class="choose-area overflow-hidden mb-md-3 mt-md-3 mt-0 md-0 " id="about-sec2">
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
    </div> -->
@endsection

