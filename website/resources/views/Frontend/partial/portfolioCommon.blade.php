<section class="space bg-grey" id="portfolioCommon">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="title-area text-center">
                    <h2 class="fw-bold sec-title"
                        data-aos="fade-up"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                        View Our <span class="text-blue"> Portfolio</span>
                    </h2>
                    <p class="sec-para" data-aos="fade-up"
                        data-aos-delay="200"
                        data-aos-duration="1200"
                        data-aos-easing="ease-in-out">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci recusandae expedita ex quam quod a nulla rerum suscipit aut ad.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="swiper caseStudySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="{{ route('roadToSafety') }}" class="portfolio-item">
                            <img src="{{ asset('frontend-assets/img/project/rts-600.jpg') }}" alt="" class="w-100">
                            <div class="portfolio-title d-flex justify-content-center align-items-center d-flex justify-content-center align-items-center">
                                <h4 class="sub-sec-title text-white">Road to Safety</h4>
                            </div>
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="{{ route('euro') }}" class="portfolio-item">
                            <img src="{{ asset('frontend-assets/img/project/Euro_600x600.jpg') }}" alt=""
                                srcset="" class="w-100">
                            <div class="portfolio-title d-flex justify-content-center align-items-center">
                                <h4 class="sub-sec-title text-white">Road to Safety</h4>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="{{ route('nodwin') }}" class="portfolio-item">
                            <img src="{{ asset('frontend-assets/img/project/nodwin-600.jpg') }}" alt=""
                                srcset="" class="w-100">
                            <div class="portfolio-title d-flex justify-content-center align-items-center">
                                <h4 class="sub-sec-title text-white">Road to Safety</h4>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ route('lime') }}" class="portfolio-item">
                            <img src="{{ asset('frontend-assets/img/project/lime-600.jpg') }}" alt=""
                                srcset="" class="w-100">
                            <div class="portfolio-title d-flex justify-content-center align-items-center">
                                <h4 class="sub-sec-title text-white">Road to Safety</h4>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ route('realEstateAwardsocio') }}" class="portfolio-item">
                            <img src="{{ asset('frontend-assets/img/project/real-estate-awards.jpg') }}" alt=""
                                srcset="" class="w-100">
                            <div class="portfolio-title d-flex justify-content-center align-items-center">
                                <h4 class="sub-sec-title text-white">Road to Safety</h4>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ route('theProffessionalCouriers') }}" class="portfolio-item">
                            <img src="{{ asset('frontend-assets/img/project/tpc.jpeg') }}" alt=""
                                srcset="" class="w-100">
                            <div class="portfolio-title d-flex justify-content-center align-items-center">
                                <h4 class="sub-sec-title text-white">Road to Safety</h4>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ route('buttonbabaoDeshBanaoSocio') }}" class="portfolio-item">
                            <img src="{{ asset('frontend-assets/img/project/Button-Dabo-Desh-Bano.jpg') }}" alt=""
                                srcset="" class="w-100">
                            <div class="portfolio-title d-flex justify-content-center align-items-center">
                                <h4 class="sub-sec-title text-white">Road to Safety</h4>
                            </div>
                        </a>
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
                        el: ".caseStudySwiper .swiper-pagination",
                        clickable: true,
                    },
                });
            </script>
        </div>

        <div class="header-button mt-5 d-flex align-items-center justify-content-center">
            <a href="{{ route('portfolio') }}" class="th-btn th-icon">View all Portfolio</a>
        </div>
    </div>
</section>