@extends('Frontend.layout.app')
@section('content')
<section class="port-bann">
    <div class="container-fluid p-0">
        <div class="row mt-60">
            <div class="swiper caseStudySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="col-12">
                            <img src="{{ asset('frontend-assets/img/portfolio/pare/banner.jpg') }}" alt=""
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

<section class="porfolio-text overflow-hidden space ">
    <div class="container">
        <div class="row">
            <h2 class="text-blue sec-title">Pare</h2>
            <p class="sec-para"><b>About the Brand:</b> PARÉ Innovations is a standout name in the <strong>building materials</strong> industry, offering premium solutions tailored for modern architecture. Specializing in advanced <strong>wall and ceiling panels</strong> and facade systems, PARÉ is known for bringing pathbreaking surface technologies to India. With a strong emphasis on design and performance, the brand continues to redefine what’s possible in surface innovation.
            </p>
            <p class="sec-para"><b>Services Offered:</b> Search Engine Optimization (SEO)
            </p>
            <div class="th-social">
                <p class="sec-para"><b>Page Link:</b>
                    <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
            </div>
            <div class="mt-3">
                <a href="#" class="th-btn th-icon">READ OUR CASE STUDY</a>
            </div>
        </div>
    </div>
</section>
<section class="porfolio-text overflow-hidden space bg-grey">
    <div class="container">
        <div class="row">
            <h2 class="sec-title">Similar Industry,<br><span class="text-blue">We Worked On</span> </h2>

            <div class="col lg-4 col-md-4 col-12">
                <a href="{{ route('social_media', ['client'=>'ayushakti']) }}">
                    <img src="{{ asset('frontend-assets/img/work/ayushakti/ayu1.jpeg') }}" alt="" srcset="" class="w-100">
                    <p class="sec-para text-center text-blue mt-2"><b>Ayushakti</b></p>
                </a>
            </div>
            <div class="col lg-4 col-md-4 col-12">
                <a href="{{ route('social_media', ['client'=>'jivana']) }}">
                    <img src="{{ asset('frontend-assets/img/work/jivana/Jivana.jpg') }}" alt="" srcset="" class="w-100">
                    <p class="sec-para text-center text-blue mt-2"><b>Jivana</b></p>
                </a>
            </div>
            <div class="col lg-4 col-md-4 col-12">
                <a href="{{ route('social_media', ['client'=>'cyber-power']) }}">
                    <img src="{{ asset('frontend-assets/img/work/cyberpwer/Cyberpower.jpg') }}" alt="" srcset="" class="w-100">
                    <p class="sec-para text-center text-blue mt-2"><b>Cyber Power</b></p>
                </a>
            </div>

        </div>
    </div>
</section>
@endsection