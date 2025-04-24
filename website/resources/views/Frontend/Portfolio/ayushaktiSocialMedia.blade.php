@extends('frontend.layout.app')
@section('content')
    <section class="port-bann">
        <div class="container-fluid">
            <div class="row mt-60">
                {{-- <h2 class="h2 page-title mb-20 text-center text-uppercase">The <span class="text-blue">Mighty
                    Exposure</span> --}}
                </h2>
                <div class="swiper caseStudySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">

                            <div class="col-12">
                                <img src="	https://www.sociomark.in/assets/img/work/ayushakti/ayu1.jpeg" alt=""
                                    srcset="" class="w-100">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://www.sociomark.in/assets/img/work/ayushakti/ayu2.jpeg" alt=""
                                srcset="" class="w-100">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://www.sociomark.in/assets/img/work/ayushakti/ayu3.jpeg" alt=""
                                srcset="" class="w-100">
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
                <h2 class="text-blue">Ayushakti Ayurved</h2>
                <p><b>About the Brand:</b> Ayushakti is a global leader in providing ayurvedic healthcare services
                    and holistic wellness solutions. Its authentic powerful herbal treatments have successfully helped lakhs
                    of people, around 108 countries for the past 32 years.</p>
                <p><b>Services Offered:</b> Complete Marketing Strategy (Online + Offline), Social Media
                    Management, Print Design, ORM, Content Writing, Social media Ads, Googles Ads, Website Development &
                    Management, Search Engine Optimization(SEO), Email Marketing, Influencer Activity, Blogger Outreach.</p>
                <div class="th-social">
                    <p><b>Page Link:</b>
                        <a href="https://www.facebook.com/Ayushakti" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/ayushakti/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/ayushakti_ind" target="_blank"><i
                                class="fa-brands fa-x-twitter"></i></a>
                </div>
                <div class="header-button mt-3">
                    <a href="#" class="th-btn th-icon">READ OUR CASE STUDY</a>
                </div>
            </div>
        </div>
    </section>
@endsection
