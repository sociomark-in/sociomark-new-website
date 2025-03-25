@extends('Frontend.layout.app')
@section('title', 'Home Page')
@section('author', 'Your Company Name')
@section('description', 'This is a dynamic description for the home page.')
@section('keywords', 'seo, marketing, agency, web design')
@section('robots', 'INDEX,FOLLOW')

@section('content')
<div class="th-hero-wrapper hero-1 bg-white" id="hero" data-bg-src="{{ asset('frontend-assets/img/bg/hero_bg_1.png') }}">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xl-6">
                <div class="hero-style1">
                    <span class="sub-title ">socio & Marketing Agency</span>
                    <h1 class="hero-title ">Empowering Growth Unlock SEO Solutions</h1>
                    <p class="hero-text">At Saor, we are dedicated to helping businesses navigate the complex digital
                        landscape with ease. We specialize in providing a full spectrum of SEO.</p>
                    <div class="btn-group">
                        <a href="contact.html" class="th-btn th-icon th-black2">Get Started Now<i class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="hero-wrapp">
                    <div class="hero-img">
                        <img class="movingX" src="{{ asset('frontend-assets/img/hero/hero_1_1.png') }}" alt="Hero Image">
                        <div class="th-hero-shape"></div>
                        <div class="th-hero-shape2"></div>
                        <div class="th-hero-shape3"></div>
                    </div>
                    <div class="client-box mb-sm-0 mb-3">
                        <h4 class="box-title">SEO & Digital Marketing Agency</h4>
                        <div class="client-thumb-group">
                            <div class="thumb"><img src="{{ asset('frontend-assets/img/shape/client-1-1.png') }}" alt="avater"></div>
                            <div class="thumb"><img src="{{ asset('frontend-assets/img/shape/client-1-2.png') }}" alt="avater"></div>
                            <div class="thumb"><img src="{{ asset('frontend-assets/img/shape/client-1-3.png') }}" alt="avater"></div>
                            <div class="thumb icon"><i class="fa-regular fa-plus"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup spin  d-none d-xl-block" data-top="30%" data-left="45%"><img src="{{ asset('frontend-assets/img/shape/shape-1.png') }}" alt=""></div>
    <div class="shape-mockup moving  d-none d-xl-block" data-top="34%" data-right="13%"><img src="{{ asset('frontend-assets/img/shape/shape-2.png') }}" alt=""></div>
    <div class="shape-mockup jump d-none d-xxl-block" data-bottom="16%" data-right="47%"><img src="{{ asset('frontend-assets/img/shape/shape-3.png') }}" alt=""></div>
    <div class="shape-mockup d-none d-xxl-block" data-bottom="13%" data-left="43%"><img src="{{ asset('frontend-assets/img/shape/shape-4.png') }}" alt=""></div>
</div>

@endsection