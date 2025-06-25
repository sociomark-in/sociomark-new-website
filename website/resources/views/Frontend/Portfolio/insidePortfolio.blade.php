@extends('Frontend.layout.app')
@section('title', 'Portfolio')
@section('author', 'Your Company Name')
@section('description', 'This is a dynamic description for the home page.')
@section('keywords', 'seo, marketing, agency, web design')
@section('robots', 'INDEX,FOLLOW')

@section('custome-style')
<style>
    #brand .contact-head {
        padding: 3rem 0rem 3rem 0rem;
    }


    #brand .head-text-div {
        margin: 0px;
    }

    @media only screen and (max-width: 600px) {
        #brand .contact-head {
            padding: 2rem 0.5rem;
        }

        #brand .head-text-div {
            margin-bottom: 13px;
        }



        #brand #about-sec2 .th-btn {
            padding: 12px;
            width: 40%;
        }
    }

    /* brand list */
    #brand-list .brand-item {
        height: 160px;
        margin-left: 0px;
    }

    #brand-list .box {
        padding: 7px 14px !important;
    }

    #brand-list .box a {
        width: 100%;
        height: 100%;
        background-color: white;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    #brand-list .box img {
        width: 100%;
        height: 100%;
    }

    #brand-list .box img {
        transition: transform 0.3s ease;
    }

    #brand-list .box:hover img {
        transform: scale(1.1);
    }

    /* brand list end */
</style>
@endsection
@section('content')
<main id="brand">
    <section style="margin-top:68px;">
        <div class="full-width">
            <picture>
                <source media="(min-width: 1400px)" srcset="{{ asset('frontend-assets/img/banners/portfolio.jpg') }}" class="w-100">
                <img src="{{ asset('frontend-assets/img/banners/portfolio.jpg') }}" alt="porfolio" class="w-100">
            </picture>
        </div>
    </section>
    <section class="py-md-5 py-4 d-none" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content breadcrumb-light">
                        <h2 class="breadcumb-title">Portfolios</h2>
                        <ul class="breadcumb-menu d-none">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Portfolios</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="overflow-hidden space contact-head">
        <div class="container">
            <div class="row justify-content-between">
                <div class="title-area text-center text-xl-start col-md-4 head-text-div mt-1">
                    <h1 class="sec-title head-text head-mbl-text" data-aos="fade-right" data-aos-delay="100"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                        Our Work <span class="text-blue">Speaks Louder</span> Than Words
                    </h1>
                </div>
                <div class="text-center text-xl-start col-md-8 pl-40">
                    <p class="sec-para" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000"
                        data-aos-easing="ease-in-out">We love what we do, and it shows in our work. Every project is a chance to create something special. Check out the projects we’ve worked on and see how we help brands grow. Our portfolio reflects our passion for creativity and results. Each project tells a unique story of collaboration and success. We’re proud of what we’ve built and excited for what’s next!
                    </p>

                </div>
            </div>
        </div>

    </div>
    <div class="brand-sec bg-smoke2 overflow-hidden shape-mockup-wrap" id="brand-list">
        <div class="container">
            <div class="row">
                @foreach ($activeClients as $slug => $client)
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => $slug]) }}">
                        <img src="{{ asset($client['portfolio-image']) }}" alt="{{ $client['name'] }} Logo"
                            class="img-fluid">
                    </a>
                </div>
                @endforeach
            </div>


        </div>
    </div>
</main>
@endsection