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
                        <img src="{{ asset('frontend-assets/img/work/nodwin/1.jpg') }}" alt="nodwin gaming" srcset=""
                            class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <div class="col-12">
                            <img src="{{ asset('frontend-assets/img/work/nodwin/N2.jpg') }}" alt="nodwin gaming Creative"
                                srcset="" class="w-100">
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/nodwin/N3.jpg') }}" alt="nodwin gaming Creative" srcset=""
                            class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/nodwin/N4.jpeg') }}" alt="nodwin gaming Creative" srcset=""
                            class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/nodwin/N5.jpeg') }}" alt="nodwin gaming Creative" srcset=""
                            class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/nodwin/N7.jpg') }}" alt="nodwin gaming Creative" srcset=""
                            class="w-100">
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
            <h1 class="text-blue sec-title mb-20">NODWIN Gaming ( India, Africa)</h1>
            <p class="sec-para"><b>About the Brand:</b> NODWIN Gaming is a powerhouse in the <strong>Esports industry,</strong> shaping the future of digital entertainment across emerging markets. At the forefront of <strong>Competitive gaming,</strong> the brand brings together the worlds of esports, music, anime, comics, and comedy to create immersive experiences for youth audiences. With operations spanning 20+ global locations and a dynamic portfolio of 15+ companies, NODWIN Gaming continues to redefine how the next generation connects with entertainment.
            </p>
            <p class="sec-para"><b>Services Offered: </b>Social Media Management <br>
                Videography(in-house shoots for humanized reels)
            </p>
            @include('Frontend.partial.socialMediaLinkInPortfolio')
            </p>

            <div class="mt-3">
                <a href="{{ route('nodwinGaming') }}" class="th-btn th-icon">READ OUR CASE STUDY</a>
            </div>
        </div>
    </div>
</section>
<section class="port-bann overflow-hidden space bg-grey">
    <div class="container-fluid">
        <div class="row">
            <h2 class=" sec-title text-center">The Mighty <span class="text-blue">Creative</span></h2>
            </h2>
            <div class="swiper creativeSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/nodwin/1.png') }}" alt="nodwin gaming Creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/nodwin/2.png') }}" alt="nodwin gaming Creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/nodwin/3.png') }}" alt="nodwin gaming Creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/nodwin/4.png') }}" alt="nodwin gaming Creative"
                            srcset="" class="w-100">
                    </div>
                </div>
                <!--<div class="swiper-button-next"></div>-->
                <!--<div class="swiper-button-prev"></div>-->
                {{-- <div class="swiper-pagination"></div> --}}
            </div>
            <div class="header-button mt-3 justify-content-center">
                <a href="{{ route('nodwinGaming') }}" class="th-btn th-icon">VIEW OUR CASE STUDY</a>
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
@include('Frontend.partial.portfolio.similarIndustry')
<!-- <section class="porfolio-text overflow-hidden space ">
    <div class="container">
        <div class="row">
            <h2 class="sec-title">Similar Industry,<br><span class="text-blue">We Worked On</span> </h2>
            <div class="col lg-4 col-md-4 col-12">
                <a href="{{ route('social_media', ['client'=>'cyber-power']) }}">
                    <img src="{{ asset('frontend-assets/img/work/cyberpwer/Cyberpower.jpg') }}" alt="cyber power" srcset="" class="w-100">
                    <p class="sec-para text-center text-blue mt-2"><b>Cyber Power</b></p>
                </a>
            </div>
        </div>
    </div>
</section> -->
@endsection