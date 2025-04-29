@extends('Frontend.layout.app')
@section('content')
    <main>
        <section class="p-0" style="margin-top: 66px;">
            <div class="full-width">
                <img src="{{ asset('frontend-assets/img/industry/Home & Interior.png') }}" alt="" srcset="" class="w-100">
            </div>
        </section>
        <section class="overflow-hidden space" id="about-sec">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content breadcrumb-light">
                            <h1 class="breadcumb-title">Public Sector Industry</h1>
                            <ul class="breadcumb-menu">
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
