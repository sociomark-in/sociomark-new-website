@extends('Frontend.layout.app')
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

@section('content')
<main id="seo-service">
    <div class="breadcumb-wrapper p-0" style="margin-top: 66px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/web_development.png') }}"
                        alt="website development" srcset="" width="100%">
                </div>
            </div>
        </div>
    </div>

    <section class="overflow-hidden mb-md-5 md-2 pt-5" id="about-sec">
        <div class="container">
            <div class="row align-items-end justify-content-center">
                <div class="col-lg-10 col-12 d-flex justify-content-center align-items-center flex-column">
                    <div class="title-area mb-md-3 mb-2 mt-n1">
                        <h1 class="text-center fw-bold sec-title my-3" data-aos="zoom-in" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            Your Trusted Website Development Agency for
                            <span class="text-blue">Seamless Online Solutions</span>
                        </h1>
                    </div>
                </div>
                <div class="col-lg-12 col-12 d-flex justify-content-center align-items-center flex-column">
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">A website isn’t just a display or a showpiece, it’s a tool that works for your brand 24/7, by attracting visitors, guiding them, and leaving an impression. That’s why partnering with a skilled website development company in Mumbai matters.
                    </p>
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">At Sociomark, we build ideas into functional experiences for our esteemed clients. We blend clean design with practical features. Every part of the site is built to function efficiently and look good. From simple landing pages to full-featured platforms, our focus remains the same: design with purpose, build with intent.
                    </p>
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">Think of your website as your brand’s first impression online. It should be clear, easy to navigate, and optimized for the best performance. Mobile-first layouts, smooth navigation, and user-focused design keep visitors engaged.
                    </p>
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">The best websites are those that balance style and functionality. Using modern tools and techniques, we ensure your site isn’t just a page, it’s an experience your audience enjoys coming back to. Along with digital marketing services, SEO company support, and social media marketing, your website becomes a key part of your brand’s growth.
                    </p>

                </div>
            </div>
        </div>
    </section>
    <section class="bg-grey space services px-0 px-lg-5">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <h2 class="sec-title mb-20" data-aos="fade-right" data-aos-duration="1000">Create More
                        <span class="text-blue">Awareness</span>
                    </h2>
                    <p class="sec-para mb-35" data-aos="fade-right" data-aos-duration="2000">Overall, A 360 degree approach, facilitating a
                        complete coverage
                        of all possible digital mediums. You know we can mark all possibilities!</p>
                </div>
                <div class="col-lg-8">
                    <div class="service-process-wrap service-process-wrap-inner">
                        <div class="service-process" data-aos="fade-left" data-aos-duration="1000">
                            <div class="align-content-center service-process_img"><img
                                    src="{{ asset('frontend-assets/img/ServicePages/Website Developement/tech/tech_work_1.png') }}" class="w-100 h-100"
                                    alt="HTML">
                            </div>
                            <a href="#">
                                <div class="service-process_centent">
                                    <h5 class="sub-sec-title">HTML</h5>

                                </div>
                            </a>
                        </div>
                        <div class="service-process" data-aos="fade-left" data-aos-duration="2000">
                            <div class="align-content-center service-process_img"><img
                                    src="{{ asset('frontend-assets/img/ServicePages/Website Developement/tech/tech_work_2.png') }}" class="w-100 h-100"
                                    alt="SEO">
                            </div>
                            <a href="#">
                                <div class="service-process_centent">
                                    <h5 class="sub-sec-title">CSS </h5>

                                </div>
                            </a>
                        </div>
                        <div class="service-process" data-aos="fade-left" data-aos-duration="1000">
                            <div class="align-content-center service-process_img"><img
                                    src="{{ asset('frontend-assets/img/ServicePages/Website Developement/tech/tech_work_3.png') }}" class="w-100 h-100"
                                    alt="Website Development">
                            </div>
                            <a href="#">
                                <div class="service-process_centent">
                                    <h5 class="sub-sec-title">Javascript</h5>

                                </div>
                            </a>
                        </div>
                        <div class="service-process" data-aos="fade-left" data-aos-duration="1000">
                            <div class="align-content-center service-process_img"><img
                                    src="{{ asset('frontend-assets/img/ServicePages/Website Developement/tech/tech_work_4.png') }}" class="w-100 h-100"
                                    alt="Digital Marketing">
                            </div>
                            <a href="#">
                                <div class="service-process_centent">
                                    <h5 class="sub-sec-title">PHP</h5>

                                </div>
                            </a>
                        </div>
                        <div class="service-process" data-aos="fade-left" data-aos-duration="2000">
                            <div class="align-content-center service-process_img"><img
                                    src="{{ asset('frontend-assets/img/ServicePages/Website Developement/tech/tech_work_10.png') }}" class="w-100 h-100"
                                    alt="Performance Marketing">
                            </div>
                            <a href="#">
                                <div class="service-process_centent">
                                    <h5 class="sub-sec-title">React</h5>

                                </div>
                            </a>
                        </div>
                        <div class="service-process" data-aos="fade-left" data-aos-duration="3000">
                            <div class="align-content-center service-process_img"><img
                                    src="{{ asset('frontend-assets/img/ServicePages/Website Developement/tech/tech_work_12.png') }}" class="w-100 h-100"
                                    alt="Content Marketing">
                            </div>
                            <a href="#">
                                <div class="service-process_centent">
                                    <h5 class="sub-sec-title">WordPress</h5>

                                </div>
                            </a>
                        </div>
                        {{-- <div class="service-process">
                                    <div class="align-content-center service-process_img"><img
                                            src="{ asset('frontend-assets/img/icon/service/Social.png') }}"
                        height="50" alt="">
                    </div>
                    <div class="service-process_centent">
                        <h5 class="service-process_title">Photography & Video Production</h5>
                        <p class="service-process_text">Creating a face for the brand with seamless
                            integration, that helps build a connect with your audience.</p>
                    </div>
                </div> --}}
            </div>
        </div>
        </div>
        </div>
    </section>

    <section class="about-area2 overflow-hidden space garally pb-lg-0" id="portfolio-sec">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="title-area text-center">
                        <h2 class="fw-bold mb-5 sec-title" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            How Our Website Process <span class="text-blue"> Delivers Results</span>
                        </h2>
                    </div>
                </div>
            </div>

            <!-- Tab Content -->
            <div class="portfolio-container">
                <div class="filter-active row h-auto g-4">
                    <article class="card__article filter-item cat1 cat3 col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="w-100">
                            <a href="#">
                                <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/website/aainos.png') }}" alt="image"
                                    class="card__img img-fluid w-100" loading="lazy">
                            </a>
                        </div>

                    </article>
                    <article class="card__article filter-item cat1 cat3 col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="w-100">
                            <a href="#">
                                <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/website/ayushakti-usa.jpg') }}" alt="image"
                                    class="card__img img-fluid w-100" loading="lazy">
                            </a>
                        </div>

                    </article>
                    <article class="card__article filter-item cat1 cat3 col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="w-100">
                            <a href="#">
                                <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/website/ayushakti.jpg') }}" alt="image"
                                    class="card__img img-fluid w-100" loading="lazy">
                            </a>
                        </div>

                    </article>
                    <article class="card__article filter-item cat1 cat3 col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="w-100">
                            <a href="#">
                                <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/website/barebones.jpg') }}" alt="image"
                                    class="card__img img-fluid w-100" loading="lazy">
                            </a>
                        </div>

                    </article>
                    {{-- <article class="card__article filter-item cat1 cat3 col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="w-100">
                            <img src="{{ asset('frontend-assets/img/case-study/thumbs/m4u.png') }}" alt="image"
                    class="card__img img-fluid w-100" loading="lazy">
                </div>
                <div class="card__data">
                    <h4 class="sub-sec-title">Markets4you</h4>
                    <a href="{{ route('nhs') }}" class="card__button text-blue">Read More</a>
                </div>
                </article> --}}
                <article class="card__article filter-item cat1 cat3 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="#">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/website/dr-smita-naram.jpg') }}" alt="image"
                                class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>

                </article>
                <article class="card__article filter-item cat2 cat1 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="#">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/website/electro.jpg') }}"
                                alt="image" class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>

                </article>

                <article class="card__article filter-item cat3 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="#">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/website/grab.jpg') }}" alt="image"
                                class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>

                </article>

                <article class="card__article filter-item cat1 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="#">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/website/kinnal collection.jpg') }}" alt="image"
                                class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>

                </article>
                <article class="card__article filter-item cat1 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="#">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/website/kolkatarolls.png') }}" alt="image"
                                class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>

                </article>
                <article class="card__article filter-item cat1 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="#">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/website/lime.jpg') }}" alt="image"
                                class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>

                </article>
                <article class="card__article filter-item cat1 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="#">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/website/of the hook nanamio.jpg') }}" alt="image"
                                class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>

                </article>
                <article class="card__article filter-item cat1 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="#">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/website/portraiturebypari.png') }}" alt="image"
                                class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>

                </article>
                <article class="card__article filter-item cat1 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="#">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/website/profinet.jpg') }}" alt="image"
                                class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>

                </article>
                <article class="card__article filter-item cat1 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="#">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/website/real-estate-awards.jpg') }}" alt="image"
                                class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>

                </article>
                <article class="card__article filter-item cat1 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="#">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/website/realestateawards.jpg') }}" alt="image"
                                class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>

                </article>
                <article class="card__article filter-item cat1 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="#">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/website/sincerelyfinance.png') }}" alt="image"
                                class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>

                </article>
                <article class="card__article filter-item cat1 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="#">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/website/springville.png') }}" alt="image"
                                class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>

                </article>
                <article class="card__article filter-item cat1 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="#">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/website/thegrandlegacy.png') }}" alt="image"
                                class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>

                </article>
                <article class="card__article filter-item cat1 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="#">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/website/theunitedemperors.png') }}" alt="image"
                                class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>

                </article>
                <article class="card__article filter-item cat1 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="#">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/website/trollers mac.jpg') }}" alt="image"
                                class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>

                </article>
            </div>
        </div>
        </div>
    </section>

    <section class="overflow-hidden space bg-grey" id="work-flow">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="title-area text-center">
                        <h2 class="fw-bold mb-5 sec-title" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            How We Deploy
                            <span class="text-blue"> Ideas into Action</span>
                        </h2>
                        {{-- <p class="sec-para">Here are a few of the SEO strategies that we as a Leading Digital Marketing
                                Agency in Mumbai
                                implement, so that the website that we build for our clients stand out from the rest. This
                                in turn gives them a major advantage over its competitors.</p> --}}
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <!-- Left Side -->
                <div class="col-md-6 text-center">
                    <div class="circle-wrapper" data-aos="fade-right" data-aos-delay="200" data-tilt data-tilt-max="10">
                        <div class="circle" data-tilt data-tilt-max="10">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/Code with us.png') }}"
                                alt="Key" class="mt-3">
                        </div>
                    </div>
                </div>

                <!-- Right Side -->
                <div class="col-md-6 mt-4 mt-md-0">
                    <div id="benefits">
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Define the objective</h4>
                            <p class="sec-para"> We begin by getting to know your brand and the outcomes you want to achieve.</p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Outline the Path</h4>
                            <p class="sec-para">We design the full user journey, from the first interaction to the desired action, ensuring a seamless experience throughout.
                            </p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Design with Intent</h4>
                            <p class="sec-para"> With thoughtful UI/UX design, we enhance the ease and enjoyment of every user interaction.
                            </p>
                        </div>


                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Build with Precision </h4>
                            <p class="sec-para"> Our web development approach focuses on clean code, fast loading, and a secure structure to deliver reliable results.</p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Test and Optimize</h4>
                            <p class="sec-para">We thoroughly check every interaction, button, form, and scroll to make sure everything works flawlessly before launch.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="overflow-hidden space " id="about-sec3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="title-area text-center">
                        <h2 class="fw-bold mb-5 sec-title" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            Our process from concept to completion of the
                            <span class="text-blue">website</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="according-list-area">
                <div class="according-list hover-item item-active">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Understand the Users</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/Services/Know your Audience.png') }}"
                            alt="Know Your Audience" class="rounded-overflow">
                        <p class="sec-para text">Gain insight into your audience to create a website that meets their needs.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Analyse the Market</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/Services/Study the competition.png') }}"
                            alt="Study the Competition" class="rounded-overflow">
                        <p class="sec-para text">Study competitors and trends to position your brand effectively.
                        </p>
                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Design Your Site Layout</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/Services/Plan your website structure.png') }}"
                            alt="Plan Your Website Structure" class="rounded-overflow">
                        <p class="sec-para text">Plan a clear and intuitive structure for a seamless user experience.
                        </p>
                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Develop with Purpose</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/Services/Create with Strategy.png') }}"
                            alt="Create with Strategy" class="rounded-overflow">
                        <p class="sec-para text">A Build a functional, fast, and secure website tailored to your goals.
                        </p>
                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Go Live with Assistance</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/Services/Launch with support.png') }}"
                            alt="Launch with Support" class="rounded-overflow">
                        <p class="sec-para text">Once your site is live, we stay involved to update, improve, and expand it.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="shape-mockup spin d-none d-lg-block" data-top="5%" data-right="2%"><img
                src="assets/img/shape/shape-9.png" alt=""></div>
        <div class="shape-mockup d-none d-lg-block" data-top="2%" data-left="0%"><img
                src="assets/img/shape/shape-13.png" alt=""></div>
        <div class="shape-mockup d-none d-lg-block" data-bottom="0%" data-left="50%"><img
                src="assets/img/shape/shape-14.png" alt=""></div> -->

    </section>

    <section class="overflow-hidden space bg-grey" id="about-sec2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1200"
                    data-aos-easing="ease-in-out">
                    <div class="title-area mb-20">
                        <h2 class="sec-title mb-md-3 mb-2">
                            Why Teams Trust Our <span class="text-blue">Code</span>
                        </h2>
                    </div>
                    <p class="sec-para d-none ">Our SEO strategies are designed to improve your website’s ranking on
                        major search engines like Google. By targeting high-intent keywords relevant to your business.
                    </p>
                    <div class="choose-feature-wrap">
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/Icons/Design + Function.png') }}"
                                    width="60" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h4 class="sub-sec-title">Form plus Function</h4>
                                <p class="sec-para">Our web design services create websites that are visually appealing and fully functional, no compromises.</p>
                            </div>
                        </div>
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/Icons/Built for you.png') }}"
                                    width="60" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h4 class="sub-sec-title">Custom-Made for Your Brand</h4>
                                <p class="sec-para">Every business is unique. As a website design company, we craft every element to reflect your story.</p>
                            </div>
                        </div>
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/Icons/Reliable Team.png') }}"
                                    width="60" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h4 class="sub-sec-title">Dependable Team</h4>
                                <p class="sec-para"> We’re responsive, inventive, and genuinely invested in your success. Whether it’s an ecommerce site, a portfolio, or a website for a small business or multinational, our web design company delivers consistent, high-quality results every time.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1200"
                    data-aos-easing="ease-in-out">
                    <div class="choose-image">
                        <div class="tilt-active">
                            {{-- <img src="{{ asset('frontend-assets/img/Services-page/Why choose Seo.png') }}"
                            alt="Choose" class="w-100"> --}}
                            <img src="{{ asset('frontend-assets/img/ServicePages/Website Developement/Deliver.png') }}"
                                alt="Choose" class="w-100">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="space-extra2-bottom">
        <div class="container">
            <div class="row text-center">
                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">50</span><span
                                class="plus">+</span>
                        </h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Projects</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">10</span><span
                                class="plus">+</span>
                        </h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Technologies/Frameworks</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">10</span><span
                                class="plus">+</span>
                        </h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>CMS Panels</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">80</span><span
                                class="plus">+</span></h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Happy Clients</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

            </div>
        </div>
    </div>

    <section class="overflow-hidden space bg-grey d-none" id="Features">
        <div class="container">
            <!-- Header Text -->
            <h2 class="fw-bold mb-5 sec-title text-center" data-aos="fade-up" data-aos-delay="100"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                What’s Included in Our <span class="text-blue"> Website Package</span>
            </h2>
            <!-- Feature Icons Row 1 -->
            <div class="row justify-content-evenly mt-5">
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="https://www.gbim.com/gbim/one_click.webp" alt="One-Click Reports"
                            class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Keyword Research</div>
                </div>
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="	https://www.gbim.com/gbim/traffic.webp" alt="Traffic Performance"
                            class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Competitor Analysis</div>

                </div>
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="https://www.gbim.com/gbim/traffic.webp" alt="CRM Module" class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Link Building</div>

                </div>
            </div>

            <!-- Feature Icons Row 2 -->
            <div class="row justify-content-evenly mt-3 mt-md-5">
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="https://www.gbim.com/gbim/keyword.webp" alt="Keyword Performance"
                            class="feature-icon">
                    </div>
                    <div class="sub-sec-title">On-Page Optimization</div>

                </div>
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="https://www.gbim.com/gbim/marketing.webp" alt="Marketing Activities"
                            class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Technical Audit </div>

                </div>
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="	https://www.gbim.com/gbim/leads.webp" alt="Leads Management" class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Local SEO</div>

                </div>
            </div>

            <!-- Dashboard Images -->
            <div class="mt-5" data-aos="zoom-in" data-tilt data-tilt-max="10" data-aos-delay="100"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <img src="https://www.gbim.com/gbim/OurDigitalMarketingSoftware.webp" alt="Dashboard Screenshot"
                    class="dashboard-img">
            </div>
        </div>
    </section>

    @include('Frontend.partial.clientList')
    {{-- Testimonials --}}
    <section class="space-bottom overflow-hidden arrow-wrap space bg-grey">
        <div class="container">
            <div class="title-area text-center">
                <!-- <div class="shadow-title">Testimonials</div> -->
                <!-- <span class="sub-title sub-title4 mb-4 mb-md-5">Testimonials<span></span></span> -->
                <h2 class="sec-title  ">What <span class="text-blue">Our Clients Say</span> About Us?</h2>
            </div>
            <div class="slider-area testi-box-area">
                <div class="swiper testimonialSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <div class="box-content">
                                    <div class="testi-logo">
                                        <img src="{{ asset('frontend-assets/img/clients/times.jpg') }}" alt="project image"
                                            style="height: 80px">
                                    </div>
                                    {{-- <h3 class="box-title2">"Seamless Call for Entries Thanks to Sociomark!"</h3> --}}
                                    <p class="box-text">
                                        Sociomark, particularly Heta, Vivek, and Hemant, is highly appreciated for their
                                        excellent work in developing and managing the Leaders of Tomorrow website. Their
                                        efforts ensured a smooth and efficient awards process, especially in managing the
                                        Call for Entries, which was previously problematic. Hemant is specifically
                                        acknowledged for his problem-solving skills and timely execution. Heta and Vivek are
                                        thanked for their leadership and support. Overall, the collaboration was a success,
                                        and there's anticipation for future partnerships.
                                    </p>
                                    <p class="box-text">
                                        Thank you once again for your outstanding contributions! We look forward to working
                                        with you again in the future.
                                    </p>
                                    <h3 class="box-title">Shubhankar Jadhav</h3>
                                    <span class="box-desig">Manager, Times Network</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <div class="box-content">
                                    <div class="testi-logo">
                                        <img src="{{ asset('frontend-assets/img/clients/ayushakti.jpg') }}"
                                            style="height: 80px" alt="project image">
                                    </div>
                                    {{-- <h3 class="box-title2">"Sociomark is literally our partner in Digital Marketing"</h3> --}}
                                    <p class="box-text">
                                        Ever since we started working with Sociomark, <strong>our return on
                                            investment on marketing have significantly improved, almost
                                            doubled</strong>.
                                    </p>
                                    <div class="d-none d-md-block">
                                        <p class="box-text">
                                            They help us in creating a robust marketing strategy. They also
                                            create those creatives which raise people's eyeballs when they watch
                                            it on social media and the likes are only increasing month and month
                                            because of that. Sociomark is so committed that they always deliver
                                            what they promise each month. I am extremely happy working with
                                            them. <strong> Best of luck Sociomark! </strong>
                                        </p>
                                    </div>
                                    <h3 class="box-title">Dr. Smita Naram</h3>
                                    <span class="box-desig">Founder, Ayushakti Ayurveda</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
                <button data-slider-prev=".testimonialSlider" class="slider-arrow style3 slider-prev"><i
                        class="fas fa-arrow-left"></i></button>
                <button data-slider-next=".testimonialSlider" class="slider-arrow style3 slider-next"><i
                        class="fas fa-arrow-right"></i></button>
            </div>
            @push('scripts')
            <script>
                new Swiper('.testi-box-area .testimonialSlider', {
                    loop: true,
                    navigation: {
                        nextEl: ".testi-box-area .slider-next",
                        prevEl: ".testi-box-area .slider-prev",
                    },
                })
            </script>
            @endpush
        </div>
    </section>

    <div class="overflow-hidden space" id="about-sec6">
        <div class="container">
            <div class="title-area text-center mb-25">
                <!-- <h2 class="sec-title">Frequently Asked Questions</h2> -->
                <h2 class="fw-bold sec-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                    Frequently Asked <span class="text-blue"> Questions</span>
                </h2>
            </div>
            <div class="row justify-content-center align-items-center mt-5">
                {{-- <div class="col-xl-5">
                    <div class="me-xl-5 pe-xl-3">
                        <div class="title-area mb-30 text-center text-xl-start">
                            <img src="https://www.gbim.com/about-us/sm_faq.png" alt="" data-aos="zoom-in"
                                data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        </div>

                    </div>
                </div> --}}
                <div class="col-xl-12 mt-35 mt-xl-0 h-auto" id="faqAccordion">
                    <div class="accordion-area accordion">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                    What is website development?
                                </button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show"
                                aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">It involves building and maintaining websites, encompassing
                                        aspects like web design, content creation, and coding.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">Why
                                    is a website important for my business?
                                </button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">A website establishes online presence, credibility, and
                                        provides a platform for customer engagement and sales.</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3"> What are 3 types of web development?
                                </button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">The three types of web development are front-end (visual design), back-end (server and data), and full-stack (both front-end and back-end).
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">How
                                    long does it take to build a website?
                                </button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">Development time depends on project scope, typically
                                        ranging from a few weeks to several months.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-5" aria-expanded="false"
                                    aria-controls="collapse-5">What is responsive web design?</button>
                            </div>
                            <div id="collapse-5" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">It's an approach ensuring websites function well on various
                                        devices and screen sizes.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-6" aria-expanded="false"
                                    aria-controls="collapse-6">What is the difference between web design and web
                                    development?
                                </button>
                            </div>
                            <div id="collapse-6" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">Web design focuses on aesthetics and user experience, while
                                        development involves coding and functionality.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('Frontend.partial.blog')


    @include('Frontend/partial/contactUs')
</main>
@endsection
@push('styles')
<style>
    .benefit-block:hover {
        border-left: 5px solid #106c97 !important;
    }

    .benefit-block:hover .sub-sec-title {
        color: #106c97 !important;
    }

    #benefits {
        max-height: 60vh;
    }

    .service-process:hover {
        background-color: antiquewhite;
    }

    .service-process-wrap-inner {
        grid-template-columns: repeat(4, 1fr);
    }

    .service-process_img {
        margin-left: 45%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1) !important;
        border-width: 1px;
        border: 1px solid transparent !important;
        margin-top: -43px;
        width: 80px;
        height: 80px;
    }

    @media (max-width: 575px) {
        .service-process-wrap-inner {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>
@endpush
@push('scripts')
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            // when window width is >= 0px
            0: {
                slidesPerView: 1,
            },
            // when window width is >= 768px
            768: {
                slidesPerView: 2,
            },
            // when window width is >= 992px
            992: {
                slidesPerView: 3,
            }
        }
    });
    // services tab
    const tabTriggers = document.querySelectorAll('[data-bs-toggle="pill"]');

    tabTriggers.forEach(trigger => {
        trigger.addEventListener('shown.bs.tab', (event) => {
            const targetPaneId = event.target.getAttribute('data-bs-target');
            const targetPane = document.querySelector(targetPaneId);

            // Animate text content
            const textCols = targetPane.querySelectorAll('.col-lg-6.col-12.side-padding-mbl');
            textCols.forEach(col => {
                col.classList.remove('animate-slide-in-right');
                void col.offsetWidth;
                col.classList.add('animate-slide-in-right');
            });

            // Animate images
            const images = targetPane.querySelectorAll('.page-img img');
            if (images.length === 1) {
                images[0].classList.remove('animate-zoom-in');
                void images[0].offsetWidth;
                images[0].classList.add('animate-zoom-in');
            } else if (images.length === 2) {
                images[0].classList.remove('animate-slide-in-left');
                images[1].classList.remove('animate-slide-in-right');
                void images[0].offsetWidth; // force reflow
                void images[1].offsetWidth;
                images[0].classList.add('animate-slide-in-left');
                images[1].classList.add('animate-slide-in-right');
            }
        });
    });
    // services tab end
</script>
@endpush