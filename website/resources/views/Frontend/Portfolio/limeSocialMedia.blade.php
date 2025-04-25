@extends('Frontend.layout.app')
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
                            <img src="{{ asset('frontend-assets/img/work/lime/1.jpg') }}" alt=""
                                srcset="" class="w-100">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/lime/2.jpg') }}" alt=""
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/lime/3.jpg') }}" alt=""
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/lime/4.jpg') }}" alt=""
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/lime/5.jpg') }}" alt=""
                            srcset="" class="w-100">
                    </div>
                </div>
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
            <h2 class="text-blue">HUL & CNBC-TV18 presents L.I.M.E.</h2>
            <p class="sec-para"><b>About the Brand:</b> L.I.M.E. (Lessons in Marketing Excellence) is the country’s biggest and most keenly contested B-school challenge which is televised on CNBC-TV18 in association with HUL. Every year, top B-schools in India take part in a marketing case-study competition for management students. It gives students a platform to work on real-life & live business challenges, as well as gives companies the opportunity to interact with India’s brightest MBAs, and to share their unique experience.</p>
            <p class="sec-para"><b>Services Offered:</b> Complete Marketing Strategy (Online + Offline), Social Media Management,ORM, Content Writing, Search Engine Optimization(SEO), Social media Ads, Googles Ads,Influencer Activity, Twitter Trending, OOH& Print Design, Website Management.</p>
            <div class="th-social">
                <p><b>Page Link:</b>
                    <a href="https://www.facebook.com/LimeDiaries" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/limediaries/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/LimeDiaries" target="_blank"><i
                            class="fa-brands fa-x-twitter"></i></a>
                    <a href="https://www.linkedin.com/showcase/limediaries/" target="_blank"><i class="fab fa-linkedin"></i></a>
            </div>
            <div class="header-button mt-3">
                <a href="{{ route('lime') }}" class="th-btn th-icon">READ OUR CASE STUDY</a>
            </div>
        </div>
    </div>
</section>
@endsection
