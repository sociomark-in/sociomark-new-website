@extends('Frontend.layout.app')
@section('content')
<main id="industries">
    <section class="p-0" style="margin-top: 66px;">
        <div class="full-width">
            <img src="{{ asset('frontend-assets/img/industry/Travel.png') }}" alt="travel industry" srcset="" class="w-100" loading="lazy">
        </div>
    </section>
    <section class="overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content breadcrumb-light">
                        <h1 class="breadcumb-title">Travel Industry</h1>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- About --}}
    <section class="about-area2 overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 mb-30 mb-xl-0">
                    <div class="imgBox img-box2 me-xl-4 mt-lg-60">
                        <div class="img1 mb-35">
                            <img src="{{ asset('frontend-assets/img/industry/images/Travel Industry.jpg') }}"
                                class="w-100" alt="About">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="title-area mb-25 mt-n1">
                        <h2 class="fw-bold sec-title" data-aos="zoom-in" data-aos-delay="100">
                            Driving Results for Travel Agencies in the <span class="text-blue">Digital Lane</span>
                        </h2>
                    </div>
                    <p class="mt-n2 mb-25 sec-para" data-aos="fade-down" data-aos-delay="100">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta soluta obcaecati consequuntur
                        beatae reiciendis? Sed consectetur alias cupiditate doloribus placeat, perferendis voluptatum
                        totam, voluptas dicta cum ducimus saepe, aliquam ipsam?
                    </p>
                    <a href="#" class="th-btn th-icon" data-bs-toggle="modal" data-bs-target="#getAQuoteModal">Get
                        A Quote <i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>

    </section>

    {{-- Counters --}}
    <section class="overflow-hidden space counters d-none">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="title-area text-center">
                        <div class="shadow-title">Achievements</div>
                        <span class="sub-title sub-title4">Lorem, ipsum.<span></span></span>
                        {{-- <h2 class="sec-title ">Lorem ipsum <span class="text-blue">dolor sit amet.</span></h2> --}}
                    </div>
                </div>
            </div>
            <div class="">
                <div class="row justify-content-around">
                    <div class="col-xxl-auto col-xl-3 col-lg-6 col-12">
                        <div class="counter-box">
                            <div class="box-icon"><img src="{{ asset('frontend-assets/img/icon/target.png') }}"
                                    width="60" alt="Organic Traffic"></div>
                            <h3 class="box-number"><span class="counter-number">95</span>K<sup>+</sup></h3>
                            <div class="media-body">
                                <p class=" counter-text mb-n1">Organic Traffic</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-auto col-xl-3 col-lg-6 col-12">
                        <div class="counter-box">
                            <div class="box-icon"><img src="{{ asset('frontend-assets/img/icon/target.png') }}"
                                    width="60" alt="Organic Keywords"></div>
                            <h3 class="box-number"><span class="counter-number">20</span>K<sup>+</sup></h3>
                            <div class="media-body">
                                <p class=" counter-text mb-n1">Organic Keywords</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-auto col-xl-3 col-lg-6 col-12">
                        <div class="counter-box">
                            <div class="box-icon"><img src="{{ asset('frontend-assets/img/icon/target.png') }}"
                                    width="60" alt="Leads"></div>
                            <h3 class="box-number"><span class="counter-number">40</span>K<sup>+</sup></h3>
                            <div class="media-body">
                                <p class=" counter-text mb-n1">Leads</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-auto col-xl-3 col-lg-6 col-12">
                        <div class="counter-box">
                            <div class="box-icon"><img src="{{ asset('frontend-assets/img/icon/target.png') }}"
                                    width="60" alt="Organic Reach"></div>
                            <h3 class="box-number"><span class="counter-number">38</span>K<sup>+</sup></h3>
                            <div class="media-body">
                                <p class=" counter-text mb-n1">Organic Reach</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-auto col-xl-3 col-lg-6 col-12">
                        <div class="counter-box">
                            <div class="box-icon"><img src="{{ asset('frontend-assets/img/icon/target.png') }}"
                                    width="60" alt="Engagement"></div>
                            <h3 class="box-number"><span class="counter-number">30</span>K<sup>+</sup></h3>
                            <div class="media-body">
                                <p class=" counter-text mb-n1">Engagement</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-auto col-xl-3 col-lg-6 col-12">
                        <div class="counter-box">
                            <div class="box-icon"><img src="{{ asset('frontend-assets/img/icon/target.png') }}"
                                    width="60" alt="Community Growth"></div>
                            <h3 class="box-number"><span class="counter-number">100</span>K<sup>+</sup></h3>
                            <div class="media-body">
                                <p class=" counter-text mb-n1">Community Growth</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonials --}}
    @include('Frontend.partial.testimonial.layout-02')


    <section class="overflow-hidden bg-smoke2 space d-none">
        <div class="container">
            <div class="row gy-5 align-items-end">
                <div class="col-xl-6">
                    <div class="">
                        <div class="title-area mb-35">
                            {{-- <div class="shadow-title style3">Choose Us</div> --}}
                            <span class="sub-title sub-title4 style1 mb-4 mb-md-5">Why Choose Us</span>
                            <h2 class="sec-title ">Your Trusted Partner for <span class="text-blue">Global Digital
                                    Success</span></h2>
                            <p class="mb-30">With over 29 years of experience, Saor has a deep understanding of the
                                digital landscape and a proven track record of success. Conveys a collaborative
                                approach, suggesting that the agency works closely with clients.</p>
                        </div>
                        <div class="choose-wrapper">
                            <div class="circle-counter">
                                <div class="feature-circle">
                                    <svg class="radial-progress" data-countervalue="80" viewBox="0 0 80 80">
                                        <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                        <circle class="bar--animated" cx="40" cy="40" r="35"
                                            style="stroke-dashoffset: 43.9823px;">
                                        </circle>
                                        <text class="countervalue" x="50%" y="57%"
                                            transform="matrix(0, 1, -1, 0, 80, 0)">85%</text>
                                    </svg>

                                    <h3 class="feature-circle_title">Management success</h3>
                                </div>
                                <div class="feature-circle">
                                    <svg class="radial-progress" data-countervalue="80" viewBox="0 0 80 80">
                                        <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                        <circle class="bar--animated" cx="40" cy="40" r="35"
                                            style="stroke-dashoffset: 43.9823px;">
                                        </circle>
                                        <text class="countervalue" x="50%" y="57%"
                                            transform="matrix(0, 1, -1, 0, 80, 0)">95%</text>
                                    </svg>

                                    <h3 class="feature-circle_title">SEO Optimization</h3>
                                </div>
                                <div class="feature-circle">
                                    <svg class="radial-progress" data-countervalue="80" viewBox="0 0 80 80">
                                        <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                        <circle class="bar--animated" cx="40" cy="40" r="35"
                                            style="stroke-dashoffset: 43.9823px;">
                                        </circle>
                                        <text class="countervalue" x="50%" y="57%"
                                            transform="matrix(0, 1, -1, 0, 80, 0)">80%</text>
                                    </svg>

                                    <h3 class="feature-circle_title">Marketing Automation</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="counter-box-wrap">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="counter-box">
                                    <div class="box-icon"><img
                                            src="{{ asset('frontend-assets/img/icon/target.png') }}" width="60"
                                            alt="Experienced Team"></div>
                                    <h3 class="box-number"><span class="counter-number">200</span><sup>+</sup></h3>
                                    <div class="media-body">
                                        <p class=" counter-text mb-n1">Experienced Team</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="counter-box">
                                    <div class="box-icon"><img
                                            src="{{ asset('frontend-assets/img/icon/target.png') }}" width="60"
                                            alt="Experienced Team"></div>
                                    <h3 class="box-number"><span class="counter-number">200</span><sup>+</sup></h3>
                                    <div class="media-body">
                                        <p class=" counter-text mb-n1">Experienced Team</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="counter-box">
                                    <div class="box-icon"><img
                                            src="{{ asset('frontend-assets/img/icon/target.png') }}" width="60"
                                            alt="Experienced Team"></div>
                                    <h3 class="box-number"><span class="counter-number">200</span><sup>+</sup></h3>
                                    <div class="media-body">
                                        <p class=" counter-text mb-n1">Experienced Team</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="counter-box">
                                    <div class="box-icon"><img
                                            src="{{ asset('frontend-assets/img/icon/target.png') }}" width="60"
                                            alt="Experienced Team"></div>
                                    <h3 class="box-number"><span class="counter-number">200</span><sup>+</sup></h3>
                                    <div class="media-body">
                                        <p class=" counter-text mb-n1">Experienced Team</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="divider"></div>

                    </div>
                </div>
                {{-- <div class="col-xl-6">
                        <div class="accordion-area accordion style2" id="faqAccordion">

                            <div class="accordion-wrapp">
                                <span class="number">01</span>
                                <div class="accordion-card style2 ">
                                    <div class="accordion-header" id="collapse-item-1">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                            What services do you offer?</button>
                                    </div>
                                    <div id="collapse-1" class="accordion-collapse collapse " aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">We start with a comprehensive analysis of your business,
                                                industry,
                                                target audience, and current digital presence. Through this process, we
                                                identify
                                                opportunities and tailor a strategy that aligns with your specific goals and
                                                budget.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-wrapp">
                                <span class="number">02</span>
                                <div class="accordion-card style2 active">
                                    <div class="accordion-header" id="collapse-item-2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                            What are your pricing models?</button>
                                    </div>
                                    <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion" style="">
                                        <div class="accordion-body">
                                            <p class="faq-text">We start with a comprehensive analysis of your business,
                                                industry,
                                                target audience, and current digital presence. Through this process, we
                                                identify
                                                opportunities and tailor a strategy that aligns with your specific goals and
                                                budget.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-wrapp">
                                <span class="number">03</span>
                                <div class="accordion-card style2 ">
                                    <div class="accordion-header" id="collapse-item-3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                            What sets your agency apart from others?</button>
                                    </div>
                                    <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">We start with a comprehensive analysis of your business,
                                                industry,
                                                target audience, and current digital presence. Through this process, we
                                                identify
                                                opportunities and tailor a strategy that aligns with your specific goals and
                                                budget.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-wrapp">
                                <span class="number">04</span>
                                <div class="accordion-card style2 ">
                                    <div class="accordion-header" id="collapse-item-4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                            How do I get started with your agency?</button>
                                    </div>
                                    <div id="collapse-4" class="accordion-collapse collapse " aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">We start with a comprehensive analysis of your business,
                                                industry,
                                                target audience, and current digital presence. Through this process, we
                                                identify
                                                opportunities and tailor a strategy that aligns with your specific goals and
                                                budget.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
            </div>
        </div>
    </section>

    {{-- Clients Portfolio --}}
    <section class="overflow-hidden space garally" id="portfolio-sec">
        <div class="container">
            <div class="title-area text-center mb-25">
                <h2 class="fw-bold sec-title my-3" data-aos="fade-up" data-aos-delay="100">
                    Clients We've <span class="text-blue"> Worked With</span>
                </h2>
            </div>
            @include('Frontend.partial.industry.commonIndustry')
            <div class="filter-menu d-none filter-menu-active mt-md-5 mb-md-4">
                <button data-filter="*" class="tab-btn active" type="button">All</button>
                <button data-filter=".cat1" class="tab-btn" type="button">Digital Marketing</button>
                <button data-filter=".cat2" class="tab-btn" type="button">Search Engine Optimization</button>
                <button data-filter=".cat3" class="tab-btn" type="button">Social Media Marketing</button>
                <button data-filter=".cat4" class="tab-btn" type="button">Website Development</button>
                <button data-filter=".cat5" class="tab-btn" type="button">Content Marketing</button>
                <button data-filter=".cat6" class="tab-btn" type="button">Performance Marketing</button>
                <button data-filter=".cat6" class="tab-btn" type="button">Production & Photography</button>

            </div>
            <div class="portfolio-area" data-aos="zoom-in" data-aos-delay="200">
                <div class="row gy-4 filter-active garally-row-height mt-md-0 mt-4">
                    <div class="col-md-3 col-6 col-xl-auto filter-item cat4 cat6">
                        <a href="javascript:void(0)" class="project-item d-block">
                            <div class="box-img global-img">
                                <img src="{{ asset('frontend-assets/img/clients/tfn.jpg') }}"
                                    alt="project image w-100">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection