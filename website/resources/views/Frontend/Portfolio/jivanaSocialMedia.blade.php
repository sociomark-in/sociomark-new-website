@extends('Frontend.layout.app')
@section('content')
    <section class="port-bann">
        <div class="container-fluid p-0">
            <div class="row mt-60">
                <div class="swiper caseStudySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="col-12">
                                <img src="{{ asset('frontend-assets/img/work/banner/Jivana.jpg') }}" alt=""
                                    srcset="" class="w-100">
                            </div>
                        </div>
                    </div>
                    <!--<div class="swiper-button-next"></div>-->
                    <!--<div class="swiper-button-prev"></div>-->
                    {{-- <div class="swiper-pagination"></div> --}}
                </div>
                <!-- Link Swiper's CSS -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
                <!-- Swiper JS -->
                <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
                <script>
                    var swiper = new Swiper(".caseStudySwiper", {
                        spaceBetween: 30,
                        centeredSlides: true,
                        slidesPerView: 1,
                        loop: true,
                        autoplay: {
                            delay: 2500,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: ".caseStudySwiper .swiper-pagination",
                            clickable: true,
                        },
                        // 	navigation: {
                        // 		nextEl: ".caseStudySwiper .swiper-button-next",
                        // 		prevEl: ".caseStudySwiper .swiper-button-prev",
                        // 	},
                    });
                </script>
            </div>
        </div>
    </section>
    <style>
        .porfolio-text b {
            font-weight: 600;
        }

        .porfolio-text h2 {
            font-weight: 600;
        }

        @media only screen and (min-width: 767px) {
            .section-margin {
                margin-top: 120px;
                margin-bottom: 120px;
            }
        }

        @media only screen and (max-width: 767px) {
            .port-bann {
                margin-top: 68px;
            }
        }
    </style>
    <section class="porfolio-text section-margin">
        <div class="container">
            <div class="row">
                <h2 class="text-blue sec-title">Jivana</h2>
                <p class="sec-para"><b>About the Brand:</b> </p>
                <p class="sec-para"><b>Services Offered:</b> </p>
                <div class="th-social">
                    <p class="sec-para"><b>Page Link:</b>
                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="port-bann section-margin">
        <div class="container-fluid">
            <div class="row mt-60">
                <h2 class=" sec-title text-center">The Mighty <span class="text-blue">Creative</span></h2>
                </h2>
                <div class="swiper creativeSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/img/portfolio/jivana/1.png') }}" alt=""
                                srcset="" class="w-100">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/img/portfolio/jivana/2.png') }}" alt=""
                                srcset="" class="w-100">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/img/portfolio/jivana/3.png') }}" alt=""
                                srcset="" class="w-100">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/img/portfolio/jivana/4.png') }}" alt=""
                                srcset="" class="w-100">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/img/portfolio/jivana/5.png') }}" alt=""
                                srcset="" class="w-100">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/img/portfolio/jivana/6.png') }}" alt=""
                                srcset="" class="w-100">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/img/portfolio/jivana/7.png') }}" alt=""
                                srcset="" class="w-100">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/img/portfolio/jivana/8.png') }}" alt=""
                                srcset="" class="w-100">
                        </div>
                    </div>
                    <!--<div class="swiper-button-next"></div>-->
                    <!--<div class="swiper-button-prev"></div>-->
                    {{-- <div class="swiper-pagination"></div> --}}
                </div>

                <script>
                    var swiper = new Swiper(".creativeSwiper", {
                        spaceBetween: 30,
                        centeredSlides: true,
                        slidesPerView: 1,
                        loop: true,
                        autoplay: {
                            delay: 2500,
                            disableOnInteraction: false,
                        },
                        breakpoints: {
                            375: {
                                slidesPerView: 1,
                                spaceBetween: 20,
                            },
                            768: {
                                slidesPerView: 2,
                                spaceBetween: 40,
                            },
                            1024: {
                                slidesPerView: 3,
                                spaceBetween: 50,
                            },
                        },
                        pagination: {
                            el: ".creativeSwiper .swiper-pagination",
                            clickable: true,
                        },
                    });
                </script>
            </div>
        </div>
    </section>

    <section class="porfolio-text section-margin">
    <div class="container">
        <div class="row">
            <h2 class="sec-title">Similar Industry,<br><span class="text-blue">We Worked On</span> </h2>

            <div class="col lg-4 col-md-4 col-12">
                <img src="{{ asset('frontend-assets/img/work/ayushakti/ayu1.jpeg') }}" alt="" srcset="" class="w-100">
                <p class="sec-para text-center text-blue mt-2"><b>Ayuhealth</b></p>
            </div>
            <div class="col lg-4 col-md-4 col-12">
                <img src="{{ asset('frontend-assets/img/work/jivana/Jivana.jpg') }}" alt="" srcset="" class="w-100">
                <p class="sec-para text-center text-blue mt-2"><b>Shehanaz</b></p>
            </div>
            <div class="col lg-4 col-md-4 col-12">
                <img src="{{ asset('frontend-assets/img/work/cyberpwer/Cyberpower.jpg') }}" alt="" srcset="" class="w-100">
                <p class="sec-para text-center text-blue mt-2"><b>Cyber Power</b></p>
            </div>

        </div>
    </div>
</section>
@endsection
