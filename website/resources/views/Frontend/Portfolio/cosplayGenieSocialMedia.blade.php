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
                            <img src="{{ asset('frontend-assets/img/work/cosplay-genie/1.jpg') }}" alt=""
                                srcset="" class="w-100">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/cosplay-genie/2.jpg') }}" alt=""
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/cosplay-genie/3.jpg') }}" alt=""
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

<section class="porfolio-text overflow-hidden space ">
    <div class="container">
        <div class="row">
            <h2 class="text-blue sec-title">Cosplay Genie</h2>
            <p class="sec-para"><b>About the Brand:</b> CosplayGenie is your one-stop-site to the magical realm of Cosplay. It’s a unique art form about the characters, the craft and your favorite cosplayers!</p>
            <p class="sec-para"><b>Services Offered:</b> Social media Management Content Writing, Script Writing, Graphic Designs with 2D Animated Videos, ORM.</p>
            <div class="th-social">
                <p class="sec-para"><b>Page Link: </b>
                    <a href="https://www.facebook.com/cosplaygenie" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/officialcosplaygenie/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            
        </div>
    </div>
</section>
@endsection
