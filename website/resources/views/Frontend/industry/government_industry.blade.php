@extends('Frontend.layout.app')
@section('content')
    <main>
        <section class="p-0" style="margin-top: 66px;">
            <div class="full-width">
                <img src="{{ asset('frontend-assets/img/industry/government_bodies.png') }}" alt="government" srcset="" class="w-100" loading="lazy">
            </div>
        </section>
        <section class="py-md-5 py-4" id="about-sec">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content breadcrumb-light">
                            <h1 class="breadcumb-title text-center text-md-start">Public Sector Industry</h1>
                            <ul class="breadcumb-menu d-none">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('industry_home') }}">Industries</a></li>
                                <li>Public Sector Industry</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
