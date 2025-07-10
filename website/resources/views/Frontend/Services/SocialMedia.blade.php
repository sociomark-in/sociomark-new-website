@extends('Frontend.layout.app')
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
@section('custome-style')
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "What is social media marketing?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "SEO involves optimizing a website to rank higher in search engine results, enhancing visibility and attracting organic traffic."
            }
        }, {
            "@type": "Question",
            "name": "Which social media platforms should my business use?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Platform choice depends on your target audience; for instance, LinkedIn for B2B, Instagram for visual content, and Facebook for broad reach."
            }
        }, {
            "@type": "Question",
            "name": "How often should I post on social media?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Consistency is key; posting frequency varies by platform and audience engagement levels."
            }
        }, {
            "@type": "Question",
            "name": "What type of content performs best on social media?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Engaging content like videos, infographics, and interactive posts often yield higher engagement rates."
            }
        }, {
            "@type": "Question",
            "name": "How do I measure social media marketing success?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Metrics include engagement rates, follower growth, website traffic from social channels, and conversion rates."
            }
        }, {
            "@type": "Question",
            "name": "Should I use paid advertising on social media?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Paid ads can enhance reach and targeting capabilities, especially for specific campaigns or promotions."
            }
        }, {
            "@type": "Question",
            "name": "What is a social media strategy?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "It's a plan outlining goals, target audience, content types, posting schedules, and metrics for success on social platforms"
            }
        }]
    }
</script>

@endsection
@section('content')
<main id="seo-service">
    <div class="breadcumb-wrapper p-0" style="margin-top: 66px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <img src="{{ asset('frontend-assets/img/ServicePages/Social Media Marketing/hero.png') }}" alt="social media" srcset="" width="100%">
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
                            Boost Your Brand’s Voice with Expert <span class="text-blue"> Social Media Marketing Agency</span>
                        </h1>
                    </div>
                </div>
                <div class="col-lg-12 col-12 d-flex justify-content-center align-items-center flex-column">
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out"> In the current world, your audience is
                        scrolling, and your brand should be part of that conversation. We help businesses stand out with
                        creative, effective social media marketing agency in Ajman strategies tailored for a global audience,
                        including markets like the UAE.
                    </p>
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">No two brands are the same, and that’s
                        why we don’t follow one-size-fits-all plans. Our approach to social media management is
                        hands-on, thoughtful, and data-driven. From curating a strong content mix to posting at the
                        right times, we ensure your message lands with impact.
                    </p>
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">Need to launch a campaign or keep your
                        feed consistent? We’ve got it covered. Our team focuses on building real engagement—not just
                        likes, but loyal followers who care about your brand. We combine smart visuals, crisp messaging,
                        and performance tracking to deliver results.
                    </p>
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">As your digital partner, we’ll help you
                        make the most of every platform—while keeping your voice authentic and relatable. From planning
                        to execution, we take care of it all so you can focus on what matters: growing your business.
                    </p>
                </div>
            </div>
        </div>
    </section>


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
    </style>
    <section class="overflow-hidden space bg-grey" id="work-flow">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="title-area text-center">
                        <h2 class="fw-bold mb-5 sec-title" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            The secret sauce to the magic
                            <span class="text-blue"> Our Approach</span>
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
                            <img src="{{ asset('frontend-assets/img/ServicePages/Social Media Marketing/Impact.png') }}"
                                alt="Key" class="key-image mt-3">
                        </div>
                    </div>
                </div>

                <!-- Right Side -->
                <div class="col-md-6 mt-4 mt-md-0">
                    <div id="benefits">
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Understanding the Segment and the Audience</h4>
                            <p class="sec-para">We begin by learning everything regarding your audience. Knowing what
                                resonates with them helps us make creatives that are relatable and connects with your
                                people.</p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Competitor Research</h4>
                            <p class="sec-para">We analyse what your competitors activities are and how we can
                                outperform them. This helps us spot opportunities so that your brand shines bright in
                                the crowed market.
                            </p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Develop a Social Media Calendar</h4>
                            <p class="sec-para"> Planning is essential. We build a schedule that keeps your content
                                consistent and your audience engaged, no matter the time zone, allowing for effective
                                social media marketing strategy.
                            </p>
                        </div>


                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Create Personalized Content </h4>
                            <p class="sec-para">We don’t believe in one-size-fits-all posts. Every piece of content we create is shaped by your brand’s voice and made to truly speak to your audience. With a deep understanding of your customer’s needs and smart strategies in marketing through social media, we make sure your brand doesn’t just show up, but stands out.</p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Engage & Interact Regularly</h4>
                            <p class="sec-para">Social media is all about building relationships. We ensure your brand
                                is always present in conversations by replying to the messages and the comments in a
                                prompt and regular manner.</p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Track and Adjust Performance</h4>
                            <p class="sec-para"> We don’t just post and forget. With every post, we track performance
                                and make adjustments to keep improving, so your brand continues to achieve <a href="{{ route('portfolio') }}"><b>social
                                        media growth</b> </a>and long-term success.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="overflow-hidden space mb-md-5 mb-3" id="about-sec3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="title-area text-center">
                        <h2 class="fw-bold mb-5 sec-title" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            How we deliver <span class="text-blue">significant results</span> with each post
                            Strategies.
                        </h2>
                    </div>
                </div>
            </div>
            <div class="according-list-area">
                <div class="according-list hover-item item-active">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Discovery & Goal Setting</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Social Media Marketing/Services/Discovery & Goal Setting.png') }}"
                            alt="Discovery & Goal Setting" class="rounded-overflow">
                        <p class="sec-para text">We begin by learning about your business, audience, and your end
                            goal. It’s all about setting a clear direction from day one.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Strategy That Fits You </h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Social Media Marketing/Services/Strategy That Fits You.png') }}"
                            alt="Strategy That Fits You" class="rounded-overflow">
                        <p class="sec-para text">No copy-paste templates here. We craft a custom plan to match your
                            voice, values, and vision—so your brand feels consistent across platforms.

                        </p>
                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Visuals + Voice, together</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Social Media Marketing/Services/Visuals + Voice, together.png') }}" alt="Visuals + Voice, together"
                            class="rounded-overflow">
                        <p class="sec-para text"> Our creative team builds content that looks great and sounds like you. From graphics to captions, we focus on creating scroll-stopping posts.
                        </p>
                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Smart Campaign Execution</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Social Media Marketing/Services/Smart Campaign Execution.png') }}" alt="Smart Campaign Execution"
                            class="rounded-overflow">
                        <p class="sec-para text">Once the plan is ready, we bring it to life. With targeted <a href="{{ route('sem') }}"><b>social media advertising,</b> </a>we help you reach the people that matter to your brand aka your target audience..
                        </p>
                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Track, Learn, improve </h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Social Media Marketing/Services/Track, Learn, improve.png') }}"
                            alt="Track, Learn, improve" class="rounded-overflow">
                        <p class="sec-para text">We monitor performance closely and make regular adjustments. As a
                            social media management company in Dubai, we ensure every step moves you closer to your goals.
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
                            Why Brands Swipe Right on <span class="text-blue">Our Social Media</span> Skills
                        </h2>
                    </div>
                    <p class="sec-para d-none ">Our SEO strategies are designed to improve your website’s ranking on
                        major search engines like Google. By targeting high-intent keywords relevant to your business.
                    </p>
                    <div class="choose-feature-wrap">
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/ServicePages/Social Media Marketing/Icons/Brand.png') }}" width="60" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h4 class="sub-sec-title">Brand-First Planning</h4>
                                <p class="sec-para"> Social media works best when it’s aligned with your goals. We
                                    understand your work, your audience, and what you want to achieve. Then we create a
                                    plan that fits just right.</p>
                            </div>
                        </div>
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/ServicePages/Social Media Marketing/Icons/Global.png') }}" width="60" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h4 class="sub-sec-title">Global, Local Fit</h4>
                                <p class="sec-para">As a social media marketing agency in Ajman we work with brands
                                    across different regions across the globe. So, we know how to keep your content
                                    relevant no matter where your audience is. Every post is shaped to reflect your
                                    voice and your market.</p>
                            </div>
                        </div>
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/ServicePages/Social Media Marketing/Icons/Posting.png') }}" width="60" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h4 class="sub-sec-title">Purposeful Posting</h4>
                                <p class="sec-para"> Our approach to social media planning focuses on regular
                                    updates, clear messaging, and long-term growth. Every posting that we do is inspired
                                    by a purpose rather than just to keep the ball rolling.
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
                            <img src="{{ asset('frontend-assets/img/ServicePages/Social Media Marketing/skills.png') }}" alt="Choose" class="w-100">

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
                        <h3 class="box-number text-orange"><span class="counter-number">1</span>B<span class="plus">+</span>
                        </h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Impressions</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">10</span>M<span class="plus">+</span>
                        </h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Engagement</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">1.4</span>B<span class="plus">+</span>
                        </h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Community</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">3</span>B<span class="plus">+</span></h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Video Views</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

            </div>
        </div>
    </div>

    <section class="overflow-hidden space bg-grey" id="Features">
        <div class="container">
            <!-- Header Text -->
            <h2 class="fw-bold mb-5 sec-title text-center" data-aos="fade-up" data-aos-delay="100"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                What’s Included in Our <span class="text-blue"> Social Media Package</span>
            </h2>
            <!-- Feature Icons Row 1 -->
            <div class="row justify-content-evenly mt-5">
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Social Media Marketing/Icons/ideation.png') }}" alt="One-Click Reports"
                            class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Ideation</div>
                </div>
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Social Media Marketing/Icons/Strategy.png') }}" alt="Traffic Performance"
                            class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Strategy</div>

                </div>
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Social Media Marketing/Icons/Caption.png') }}" alt="CRM Module" class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Captions</div>

                </div>
            </div>

            <!-- Feature Icons Row 2 -->
            <div class="row justify-content-evenly mt-3 mt-md-5">
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Social Media Marketing/Icons/Calander.png') }}" alt="Keyword Performance"
                            class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Calendar</div>

                </div>
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Social Media Marketing/Icons/Campaings.png') }}" alt="Marketing Activities"
                            class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Campaigns </div>

                </div>
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Social Media Marketing/Icons/Shoot.png') }}" alt="Leads Management" class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Shoot</div>

                </div>
            </div>

            <!-- Dashboard Images -->
            <div class="mt-5" data-aos="zoom-in" data-tilt data-tilt-max="10" data-aos-delay="100"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <img src="{{ asset('frontend-assets/img/ServicePages/Social Media Marketing/Package.png') }}" alt="Dashboard Screenshot"
                    class="dashboard-img rounded-overflow">
            </div>
        </div>
    </section>

    <!-- <section class="overflow-hidden space" id="services-tab">
                                                <div class="container-fluid">
                                                    <div class="row">

                                                        <div class="title-area mb-md-3 mb-2">
                                                            <h2 class="fw-bold mb-5 sec-title text-center"
                                                                data-aos="fade-up"
                                                                data-aos-delay="100"
                                                                data-aos-duration="1000"
                                                                data-aos-easing="ease-in-out">
                                                                International Seo <span class="text-blue"> Roadmap</span>
                                                            </h2>
                                                        </div>

                                                        <div class="d-lg-flex ps-0">
                                                            <div class="col-lg-3 col-12" data-aos="fade-right"
                                                                data-aos-delay="200"
                                                                data-aos-duration="1200"
                                                                data-aos-easing="ease-in-out">
                                                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                                                    aria-orientation="vertical">
                                                                    <button class="nav-link p-3 fs-5 " data-bs-toggle="pill"
                                                                        data-bs-target="#" type="button" role="tab"
                                                                        aria-controls="v-pills-profile" aria-selected="false"><span class="border-bottom border-4 d-inline-block">Services</span></button>
                                                                    <button class="nav-link active p-3 fs-5" id="v-pills-home-tab" data-bs-toggle="pill"
                                                                        data-bs-target="#v-pills-home" type="button" role="tab"
                                                                        aria-controls="v-pills-home" aria-selected="true">Education institutions</button>
                                                                    <button class="nav-link p-3 fs-5" id="v-pills-profile-tab" data-bs-toggle="pill"
                                                                        data-bs-target="#v-pills-profile" type="button" role="tab"
                                                                        aria-controls="v-pills-profile" aria-selected="false">Healthcare industry</button>
                                                                    <button class="nav-link p-3 fs-5" id="v-pills-messages-tab" data-bs-toggle="pill"
                                                                        data-bs-target="#v-pills-messages" type="button" role="tab"
                                                                        aria-controls="v-pills-messages" aria-selected="false">Technology companies</button>
                                                                    <button class="nav-link p-3 fs-5" id="v-pills-settings-tab" data-bs-toggle="pill"
                                                                        data-bs-target="#v-pills-settings" type="button" role="tab"
                                                                        aria-controls="v-pills-settings" aria-selected="false">Publication</button>
                                                                    <button class="nav-link p-3 fs-5" id="v-pills-settings-tab" data-bs-toggle="pill"
                                                                        data-bs-target="#v-pills-settings" type="button" role="tab"
                                                                        aria-controls="v-pills-settings" aria-selected="false">E-commerce businesses</button>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-9 col-12">
                                                                <div class="tab-content" id="v-pills-tabContent">
                                                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                                                        aria-labelledby="v-pills-home-tab" tabindex="0">
                                                                        <div class="row ">
                                                                            <div class="col-lg-6 col-12 text-center side-padding-mbl" data-aos="zoom-in"
                                                                                data-aos-delay="200"
                                                                                data-aos-duration="1200"
                                                                                data-aos-easing="ease-in-out">
                                                                                <div class="page-img mt-md-0 mt-3">
                                                                                    <img class="w-50" src="https://www.gbim.com/seo/local_seo.webp" alt="service">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12 side-padding-mbl" data-aos="fade-left"
                                                                                data-aos-delay="200"
                                                                                data-aos-duration="1200"
                                                                                data-aos-easing="ease-in-out">
                                                                                <h4 class="mb-20 text-blue">How We Can Help</h4>
                                                                                <p class="mt-n1 mb-4 blog-text sec-para">Our designers translate your brand identity into a captivating visual language, ensuring consistency across all
                                                                                    touchpoints.
                                                                                </p>
                                                                                <div class="checklist style4 mb-20">
                                                                                    <ul>
                                                                                        <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Increased User
                                                                                            Engagement &
                                                                                            Conversion Rates</li>
                                                                                        <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Enhanced Brand
                                                                                            Perception
                                                                                        </li>
                                                                                        <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Improved Global Reach &
                                                                                            Accessibility</li>
                                                                                        <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Reduced Development
                                                                                            Costs
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                                                        aria-labelledby="v-pills-profile-tab" tabindex="0">

                                                                        <div class="row ">
                                                                            <div class="col-lg-6 col-12 text-center side-padding-mbl">
                                                                                <div class="row mt-md-0 mt-3">
                                                                                    <div class="col-lg-6 col-6 page-img" data-aos="fade-right" data-aos-duration="5000">
                                                                                        <img class="w-75" src="https://www.gbim.com/seo/local_seo.webp" alt="service">
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-6 page-img side-padding-mbl" data-aos="fade-right" data-aos-duration="5000">
                                                                                        <img class="w-75" src="https://www.gbim.com/seo/local_seo.webp" alt="service">
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="col-lg-6 col-12 side-padding-mbl">
                                                                                <h4 class="mb-20 text-blue">How We Can Help</h4>
                                                                                <p class="mt-n1 mb-4 blog-text sec-para">Our designers translate your brand identity into a captivating visual language, ensuring consistency across all
                                                                                    touchpoints.
                                                                                </p>
                                                                                <div class="checklist style4 mb-20">
                                                                                    <ul>
                                                                                        <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Increased User
                                                                                            Engagement &
                                                                                            Conversion Rates</li>
                                                                                        <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Enhanced Brand
                                                                                            Perception
                                                                                        </li>
                                                                                        <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Improved Global Reach &
                                                                                            Accessibility</li>
                                                                                        <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Reduced Development
                                                                                            Costs
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>


                                                                        </div>

                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                                                        aria-labelledby="v-pills-messages-tab" tabindex="0">
                                                                        <div class="row ">
                                                                            <div class="col-lg-6 col-12 text-center side-padding-mbl">
                                                                                <div class="page-img mt-md-0 mt-3">
                                                                                    <img class="w-50" src="https://www.gbim.com/seo/local_seo.webp" alt="service">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6 col-12 side-padding-mbl">
                                                                                <h4 class="mb-20 text-blue">How We Can Help</h4>
                                                                                <p class="mt-n1 mb-4 blog-text sec-para">Our designers translate your brand identity into a captivating visual language, ensuring consistency across all
                                                                                    touchpoints.
                                                                                </p>
                                                                                <div class="checklist style4 mb-20">
                                                                                    <ul>
                                                                                        <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Increased User
                                                                                            Engagement &
                                                                                            Conversion Rates</li>
                                                                                        <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Enhanced Brand
                                                                                            Perception
                                                                                        </li>
                                                                                        <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Improved Global Reach &
                                                                                            Accessibility</li>
                                                                                        <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Reduced Development
                                                                                            Costs
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                                                        aria-labelledby="v-pills-settings-tab" tabindex="0">

                                                                        <div class="row ">
                                                                            <div class="col-lg-6 col-12 text-center side-padding-mbl">
                                                                                <div class="row mt-md-0 mt-3">
                                                                                    <div class="col-lg-6 col-6 page-img" data-aos="fade-right" data-aos-duration="5000">
                                                                                        <img class="w-75" src="https://www.gbim.com/seo/local_seo.webp" alt="service">
                                                                                    </div>
                                                                                    <div class="col-lg-6 col-6 page-img" data-aos="fade-right" data-aos-duration="5000">
                                                                                        <img class="w-75" src="https://www.gbim.com/seo/local_seo.webp" alt="service">
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="col-lg-6 col-12 side-padding-mbl">
                                                                                <h4 class="mb-20 text-blue">How We Can Help</h4>
                                                                                <p class="mt-n1 mb-4 blog-text sec-para">Our designers translate your brand identity into a captivating visual language, ensuring consistency across all
                                                                                    touchpoints.
                                                                                </p>
                                                                                <div class="checklist style4 mb-20">
                                                                                    <ul>
                                                                                        <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Increased User
                                                                                            Engagement &
                                                                                            Conversion Rates</li>
                                                                                        <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Enhanced Brand
                                                                                            Perception
                                                                                        </li>
                                                                                        <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Improved Global Reach &
                                                                                            Accessibility</li>
                                                                                        <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Reduced Development
                                                                                            Costs
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section> -->

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
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <div class="box-content">
                                    <div class="testi-logo">
                                        <img src="{{ asset('frontend-assets/img/clients/worldgrad.jpg') }}"
                                            alt="project image" style="height: 80px">
                                    </div>
                                    {{-- <h3 class="box-title2">"Sociomark's Exceptional Ability to Capture and Visualize Brand
                                        Voice"</h3> --}}
                                    <p class="box-text">Working with Sociomark has been an absolute pleasure. They have
                                        consistently exceeded my expectations in handling The WorldGrad's social media
                                        creative needs, from stunning static images to engaging reels and videos. Their
                                        creativity and attention to detail have truly brought our brand's vision to life
                                        across all platforms.</p>
                                    <p class="box-text">We highly recommend Sociomark to anyone in need of top-notch
                                        creative services!</p>
                                    <h3 class="box-title">Suyash Birje</h3>
                                    <span class="box-desig">The WorldGrad</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <div class="box-content">
                                    <div class="testi-logo">
                                        <img src="{{ asset('frontend-assets/img/clients/network18.jpg') }}"
                                            alt="project image" style="height: 80px">
                                    </div>
                                    {{-- <h3 class="box-title2">"A Rewarding 3-Year Journey with the Team at SocioMark"</h3> --}}
                                    <p class="box-text">
                                        Working with SocioMark for about 3 years now. Lovely people to
                                        work with. They have hardly ever missed any deadlines.The best part about them
                                        is that they no longer feel like an external agency but someone who
                                        is a part of Network18 group.We know whenever we are in trouble or
                                        that late night call for an urgent creative SocioMark will always be
                                        there.They have set benchmarks for others by their creative work
                                        done for the Road to safety campaign.
                                    </p>
                                    <h3 class="box-title">Apurva Shah</h3>
                                    <span class="box-desig">AGM, Marketing, Network18</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <div class="box-content">
                                    <div class="testi-logo">
                                        <img src="{{ asset('frontend-assets/img/clients/tpc01.jpg') }}"
                                            alt="project image" style="height: 80px">
                                    </div>
                                    {{-- <h3 class="box-title2">"The Sociomark team is professional, flexible, and committed to their work"</h3> --}}
                                    <p class="box-text">
                                        Sociomark team is absolutely very professional in their work yet
                                        bring in high flexibility in terms of ownership in delivery.
                                        <br>
                                        All the tasks and works are delivered with utmost commitment and
                                        dedication and on time. they never said no and always valued and
                                        worked on our feedbacks we have had a long term engagement with them
                                        and they are an absolute pleasure to work with!
                                    </p>
                                    <h3 class="box-title">Siju Thomas</h3>
                                    <span class="box-desig">CEO, The Professional Couriers</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-grid">
                                <div class="box-content">
                                    <div class="testi-logo">
                                        <img src="{{ asset('frontend-assets/img/clients/grillbox.jpg') }}"
                                            alt="project image" style="height: 80px">
                                    </div>
                                    {{-- <h3 class="box-title2">"Effective Facebook & Instagram Marketing by Sociomark for GrillBox"</h3> --}}
                                    <p class="box-text">
                                        Its a pleasure working with Sociomark for social media marketing of
                                        our brand GrillBox through Facebook and Instagram.
                                        <br>
                                        Sociomark helped us to reach many users through their creative
                                        contents. They were easy to work with and were flexible with meeting
                                        our needs.
                                    </p>
                                    <h3 class="box-title">Shafeeq Mareen</h3>
                                    <span class="box-desig">Founder, GrillBox</span>
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
                                    data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1"> What is social media marketing?
                                </button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show"
                                aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">It's the use of social media platforms to promote products or services, engage with audiences, and build brand awareness.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">Which social media platforms should my business use?
                                </button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">Platform choice depends on your target audience; for instance, LinkedIn for B2B, Instagram for visual content, and Facebook for broad reach.</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-3" aria-expanded="false"
                                    aria-controls="collapse-3">How often should I post on social media?
                                </button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">Consistency is key; posting frequency varies by platform and audience engagement levels.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-4" aria-expanded="false"
                                    aria-controls="collapse-4"> What type of content performs best on social media?
                                </button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">Engaging content like videos, infographics, and interactive posts often yield higher engagement rates.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">How do I measure social media marketing success?
                                </button>
                            </div>
                            <div id="collapse-5" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">Metrics include engagement rates, follower growth, website traffic from social channels, and conversion rates.</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-6" aria-expanded="false"
                                    aria-controls="collapse-6">Should I use paid advertising on social media?
                                </button>
                            </div>
                            <div id="collapse-6" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">Paid ads can enhance reach and targeting capabilities, especially for specific campaigns or promotions.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-6" aria-expanded="false"
                                    aria-controls="collapse-6">What is a social media strategy?
                                </button>
                            </div>
                            <div id="collapse-6" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">It's a plan outlining goals, target audience, content types, posting schedules, and metrics for success on social platforms.
                                    </p>
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