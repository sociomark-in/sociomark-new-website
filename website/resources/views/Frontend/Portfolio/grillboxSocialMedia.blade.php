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
                            <img src="{{ asset('frontend-assets/img/work/grill-box/grill1.jpeg') }}" alt=""
                                srcset="" class="w-100">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/grill-box/grill2.jpeg') }}" alt=""
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/grill-box/grill3.jpeg') }}" alt=""
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/grill-box/4.jpg') }}" alt=""
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/grill-box/grill5.jpeg') }}" alt=""
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
            <h2 class="text-blue sec-title">RR Kabel & CNBC-Awaaz Presents’ Real Estate Awards</h2>
            <p class="sec-para"><b>About the Brand:</b> Grill Box is the place to head to when you want to indulge your taste buds with some good Barbeque. It’s styled in a forest/cave theme and is absolutely fun. It is a celebration of traditional charcoal & fire-based cooking with some incredible ingredients. Their menu consists of a huge variety of Vegetarian and Non-Vegetarian dishes consisting of Starters, Soups, Salads, Main Course, Fruits and Desserts.</p>
            <p class="sec-para"><b>Services Offered:</b> Complete Marketing Strategy (Online + Offline), Social Media Management, ORM, Content Writing, In store branding includes - Flyers, Danglers.</p>
            <div class="th-social">
                <p class="sec-para"><b>Page Link: </b>
                    <a href="https://www.facebook.com/grillboxrestaurant" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/grillbox_chennai/" target="_blank"><i class="fab fa-instagram"></i></a>
                   

            </div>
           
        </div>
    </div>
</section>
@endsection
