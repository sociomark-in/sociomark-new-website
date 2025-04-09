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
            padding-left: 85px;
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
            color: red;
            font-size: 50px;
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
            opacity: 0.90;
            max-width: 240px;
            font-size: var(--font-14);
            margin-top: 5px;
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
            background-color: orangered;
        }

        .business-section .image-column .circle-layer-two {
            position: absolute;
            right: 20px;
            bottom: -30px;
            width: 161px;
            height: 166px;
            border-radius: 15px;
            background-color: blanchedalmond;
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