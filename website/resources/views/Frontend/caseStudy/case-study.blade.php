@extends('Frontend.layout.app')

@section('custome-style')
<style>
    /* gallary :start */



    .tab-icon-img {
        width: 40px;
        height: 40px;
        object-fit: contain;
        margin-bottom: 5px;
    }

    .nav-tabs .nav-link {
        text-align: center;
        border: none;
        color: #333;
        margin: 12px 15px;
        background: transparent;
        border-radius: 50px !important;
    }

    .nav-tabs .nav-link.active {
        background-color: #106c97;
        color: #fff !important;
    }

    .nav-tabs .nav-link.active .sec-para {
        color: #fff !important;
        padding: 3px 5px;
    }

    /* gallary end */

    /* card  */
    .card__article {
        position: static !important;
        height: 280px !important;
    }

    .card__img {
        border-radius: 10px;
    }

    .card__data {
        width: auto;
        background-color: white;
        padding: 1.5rem 2rem;
        border-radius: 1rem;
        bottom: -9rem;
        left: 0;
        right: 0;
        margin-inline: auto;
        opacity: 0;
        transition: opacity 1s 1s;
        box-shadow: 0 4px 8px #ff900b;
        ;
    }

    /* Naming animations in hover */
    .card__article .card__data {
        animation: show-data 1s forwards;
        opacity: 1;
        transition: opacity .3s;
    }

    /* Card animation */
    @keyframes show-data {
        50% {
            transform: translateY(-10rem);
        }

        100% {
            transform: translateY(-7rem);
        }
    }

    /* card :end */
    #portfolio-sec i {
        font-size: 45px;
    }

    .img-fluid {
        object-fit: contain;
    }
</style>
@endsection

@section('content')
<main id="case-study">
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend-assets/img/case-study/ace tatto.png') }}">
        <div class="container">
            <div class="breadcumb-content">

            </div>
        </div>
    </div>
    <section class="overflow-hidden garally space" id="portfolio-sec">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="title-area text-center">
                        <h2 class="fw-bold mb-5 sec-title"
                            data-aos="fade-up"
                            data-aos-delay="100"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-out">
                            How Our SEO Process <span class="text-blue"> Delivers Results</span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="filter-menu filter-menu-active nav nav-tabs justify-content-center mb-4">


                <button data-filter="*" class=" nav-link active d-flex flex-column justify-content-around align-items-center" type="button">
                    <div class="tab-label sec-para">Social Media</div>
                </button>

                <button data-filter=".cat1" class="nav-link d-flex flex-column justify-content-around align-items-center" type="button">
                    <div class="tab-label sec-para">Search Engine Optimization</div>
                </button>

                <button data-filter=".cat2" class="nav-link d-flex flex-column justify-content-around align-items-center" type="button">
                    <div class="tab-label sec-para">Performance marketing</div>
                </button>
            </div>

            <!-- Tab Content -->
            <div class="portfolio-container">
                <div class="filter-active row h-auto g-4">
                    <article class="card__article filter-item cat1 cat3 col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="{{ asset('frontend-assets/img/case-study/new.png') }}" alt="image" class="card__img img-fluid w-100 h-100">
                        <div class="card__data">
                            <h4 class="sub-sec-title">StemRx Bioscience</h4>
                            <a href="{{ route('stemrxbio') }}" class="card__button text-blue">Read More</a>
                        </div>
                    </article>
                    <article class="card__article filter-item cat2 cat1 col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="{{ asset('frontend-assets/img/case-study/E4T.png') }}" alt="image" class="card__img img-fluid w-100 h-100">
                        <div class="card__data">
                            <h4 class="sub-sec-title">Expert4travel</h4>
                            <a href="{{ route('expert4travel') }}" class="card__button text-blue">Read More</a>
                        </div>
                    </article>

                    <article class="card__article filter-item cat3 col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="{{ asset('frontend-assets/img/case-study/EDUAURAA.png') }}" alt="image" class="card__img img-fluid w-100 h-100">
                        <div class="card__data">
                            <h4 class="sub-sec-title">Eduauraa</h4>
                            <a href="{{ route('eduauraa') }}" class="card__button text-blue">Read More</a>
                        </div>
                    </article>

                    <article class="card__article filter-item cat1 col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="{{ asset('frontend-assets/img/case-study/shahenaz.png') }}" alt="image" class="card__img img-fluid w-100 h-100">
                        <div class="card__data">
                            <h4 class="sub-sec-title">Shahenaz</h4>
                            <a href="{{ route('shahenaz') }}" class="card__button text-blue">Read More</a>
                        </div>
                    </article>

                    <article class="card__article filter-item cat2 col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="{{ asset('frontend-assets/img/case-study/OKINAWA.png') }}" alt="image" class="card__img img-fluid w-100 h-100">
                        <div class="card__data">
                            <h4 class="sub-sec-title">Okinawa scooters</h4>
                            <a href="{{ route('okinawascooters') }}" class="card__button text-blue">Read More</a>
                        </div>
                    </article>

                    <article class="card__article filter-item cat1 cat3 col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="{{ asset('frontend-assets/img/case-study/theprofessional.png') }}" alt="image" class="card__img img-fluid w-100 h-100">
                        <div class="card__data">
                            <h4 class="sub-sec-title">The Professional Couriers</h4>
                            <a href="{{ route('the-professional-couriers') }}" class="card__button text-blue">Read More</a>
                        </div>
                    </article>

                    <article class="card__article filter-item cat3 cat2 col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="{{ asset('frontend-assets/img/case-study/ayushakti.png') }}" alt="image" class="card__img img-fluid w-100 h-100">
                        <div class="card__data">
                            <h4 class="sub-sec-title">Ayushakti Ayurved</h4>
                            <a href="{{ route('ayushakti') }}" class="card__button text-blue">Read More</a>
                        </div>
                    </article>

                    <article class="card__article filter-item cat1 cat3 cat2 col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="{{ asset('frontend-assets/img/case-study/nodwin-gaming.jpg') }}" alt="image" class="card__img img-fluid w-100 h-100">
                        <div class="card__data">
                            <h4 class="sub-sec-title">Nodwin Gaming</h4>
                            <a href="{{ route('nodwinGaming') }}" class="card__button text-blue">Read More</a>
                        </div>
                    </article>

                    <article class="card__article filter-item cat3 col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="{{ asset('frontend-assets/img/case-study/bddb.png') }}" alt="image" class="card__img img-fluid w-100 h-100">
                        <div class="card__data">
                            <h4 class="sub-sec-title">Button Dabao Desh Banao</h4>
                            <a href="{{ route('buttondabaodeshbanao') }}" class="card__button text-blue">Read More</a>
                        </div>
                    </article>

                    <article class="card__article filter-item cat2 col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="{{ asset('frontend-assets/img/case-study/rts.png') }}" alt="image" class="card__img img-fluid w-100 h-100">
                        <div class="card__data">
                            <h4 class="sub-sec-title">Road To Safty Initiative</h4>
                            <a href="{{ route('roadtosafetyinitiative') }}" class="card__button text-blue">Read More</a>
                        </div>
                    </article>

                    <article class="card__article filter-item cat2 col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="{{ asset('frontend-assets/img/case-study/lime_logo.png') }}" alt="image" class="card__img img-fluid w-100 h-100">
                        <div class="card__data">
                            <h4 class="sub-sec-title">Lime XII</h4>
                            <a href="{{ route('lime') }}" class="card__button text-blue">Read More</a>
                        </div>
                    </article>

                    <article class="card__article filter-item cat2 col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="{{ asset('frontend-assets/img/case-study/ace tatto.png') }}" alt="image" class="card__img img-fluid w-100 h-100">
                        <div class="card__data">
                            <h4 class="sub-sec-title">Ace Tattooz</h4>
                            <a href="{{ route('acetattoz') }}" class="card__button text-blue">Read More</a>
                        </div>
                    </article>

                    <article class="card__article filter-item cat2 col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="{{ asset('frontend-assets/img/case-study/smarter-logo.png') }}" alt="image" class="card__img img-fluid w-100 h-100">
                        <div class="card__data">
                            <h4 class="sub-sec-title">Smarter India</h4>
                            <a href="{{ route('smarterIndia') }}" class="card__button text-blue">Read More</a>
                        </div>
                    </article>

                    <article class="card__article filter-item cat1 col-12 col-sm-6 col-md-4 col-lg-3">
                        <img src="{{ asset('frontend-assets/img/case-study/rea.png') }}" alt="image" class="card__img img-fluid w-100 h-100">
                        <div class="card__data">
                            <h4 class="sub-sec-title">Real Estate Awards</h4>
                            <a href="{{ route('realestateawards') }}" class="card__button text-blue">Read More</a>
                        </div>
                    </article>

                </div>
            </div>
        </div>
    </section>

    <section class="space" style="background-color: #f5f5f5;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="title-area text-center">
                        <h2 class="fw-bold mb-5 sec-title"
                            data-aos="fade-up"
                            data-aos-delay="100"
                            data-aos-duration="1000"
                            data-aos-easing="ease-in-out">
                            View Our <span class="text-blue"> Portfolio</span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="swiper caseStudySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">

                            <div class="col-12">
                                <a href="{{ route('roadToSafety') }}">
                                <img src="{{ asset('frontend-assets/img/project/rts-600.jpg') }}" alt=""
                                    srcset="" class="w-100">
                                    </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                        <a href="{{ route('roadToSafety') }}">
                            <img src="{{ asset('frontend-assets/img/project/Euro_600x600.jpg') }}" alt=""
                                srcset="" class="w-100">
                                </a>
                        </div>
                        <div class="swiper-slide">
                        <a href="{{ route('roadToSafety') }}">
                            <img src="{{ asset('frontend-assets/img/project/Euro_600x600.jpg') }}" alt=""
                                srcset="" class="w-100">
                                </a>
                        </div>
                        <div class="swiper-slide">
                        <a href="{{ route('roadToSafety') }}">
                            <img src="{{ asset('frontend-assets/img/project/Euro_600x600.jpg') }}" alt=""
                                srcset="" class="w-100">
                                </a>
                        </div>
                        <div class="swiper-slide">
                        <a href="{{ route('roadToSafety') }}">
                            <img src="{{ asset('frontend-assets/img/project/Euro_600x600.jpg') }}" alt=""
                                srcset="" class="w-100">
                                </a>
                        </div>
                        <div class="swiper-slide">
                        <a href="{{ route('roadToSafety') }}">
                            <img src="{{ asset('frontend-assets/img/project/Euro_600x600.jpg') }}" alt=""
                                srcset="" class="w-100">
                                </a>
                        </div>
                        <div class="swiper-slide">
                        <a href="{{ route('roadToSafety') }}">
                            <img src="{{ asset('frontend-assets/img/project/Euro_600x600.jpg') }}" alt=""
                                srcset="" class="w-100">
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
        </div>
    </section>

</main>

@endsection