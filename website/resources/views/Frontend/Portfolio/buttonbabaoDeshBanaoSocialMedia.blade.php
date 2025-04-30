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
                            <img src="{{ asset('frontend-assets/img/work/button-dabao-desh-banao/1.jpg') }}" alt=""
                                srcset="" class="w-100">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/button-dabao-desh-banao/2.jpg') }}" alt=""
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/button-dabao-desh-banao/3.jpg') }}" alt=""
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/button-dabao-desh-banao/4.jpg') }}" alt=""
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/button-dabao-desh-banao/5.jpg') }}" alt=""
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
            <h2 class="text-blue sec-title">RP Sanjiv Goenka & Network18 presents Button Dabao Desh Banao</h2>
            <p class="sec-para"><b>About the Brand:</b> The Right to Vote is a right given to the people by democracy. It’s a responsibility of every citizen to vote in elections. It’s our right to determine who will govern the country. Network18 take up this initiative for encouraging voters to exercise their right in general elections. This initiative was executed with an idea of <b>ButtonDabaoDeshBanao</b>.</p>
            <p class="sec-para"><b>Services Offered:</b> Social media creatives and Content Writing ( Static, gif and Animated Videos),Twitter Trending.</p>
            <div class="header-button mt-3">
                <a href="{{ route('buttondabaodeshbanao') }}" class="th-btn th-icon">READ OUR CASE STUDY</a>
            </div>
        </div>
    </div>
</section>
<section class="porfolio-text section-margin">
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
