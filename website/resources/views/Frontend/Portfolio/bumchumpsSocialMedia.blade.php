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

    <section class="porfolio-text overflow-hidden space ">
        <div class="container">
            <div class="row">
                <h2 class="text-blue">Ayushakti Ayurved</h2>
                <p><b>About the Brand:</b> Ayushakti is a global leader in providing ayurvedic healthcare services
                    and holistic wellness solutions. Its authentic powerful herbal treatments have successfully helped lakhs
                    of people, around 108 countries for the past 32 years.</p>
                <p><b>Services Offered:</b> Complete Marketing Strategy (Online + Offline), Social Media
                    Management, Print Design, ORM, Content Writing, Social media Ads, Googles Ads, Website Development &
                    Management, Search Engine Optimization(SEO), Email Marketing, Influencer Activity, Blogger Outreach.</p>
                    {{-- <p><b>Page Link:</b></p> --}}


            </div>
        </div>
    </section>
@endsection
