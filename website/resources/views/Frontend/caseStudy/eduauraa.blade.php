@extends('frontend.layout.app')
@section('custome-style')
<style>
    .sub-sec-title {
        font-size: 25px;
    }

    th {
        background-color: #106c97;
        color: white;
    }
</style>

@endsection

@section('content')
<main>
    <div class="breadcumb-wrapper " data-bg-src="https://placehold.co/1920x520">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">eduauraa</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-seo-agency.html">Home</a></li>
                    <li>eduauraa</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container space">

        <!-- <h1 class="sec-title text-blue text-center">StemRx Bioscience: Transforming Market Presence with a 90-Day Game Plan for Success</h1> -->

        <h2 class="mt-4 sub-sec-title text-blue">The Problem:</h2>
        <p class="sec-para">When Eduauraa came to Sociomark, they had two problems:</p>
        <ul>
            <li class="sec-para">They had extremely low website visitors.</li>
            <li class="sec-para">They’d had poor experiences with other SEO agencies.</li>

        </ul>
        <p class="sec-para">Eduauraa Technologies wants to empower kids with one of the best interactive learning experiences, give wings to their dreams through #SapnoKiAzadi our goal of affordable high-quality education makes us the 'favorite' among children & parents.</p>
        <p class="sec-para">
            Their issue was that they worked with other agencies before. They promised them that they’d do optimization tweaks, or other “magic” fixes that would lead to big results.
        </p>

        <h2 class="mt-4 sub-sec-title text-blue">The Strategy:</h2>
        <p class="sec-para">Our first step was finding the appropriate keywords for Eduauraa. We decided to target two separate groups of keywords:</p>
        <ul>
            <li class="sec-para">Free Education Solutions</li>
            <li class="sec-para">“WH” Blog Topics</li>
        </ul>

        <p class="sec-para">
            Free Education Resources would be focused on keywords like “ncert exemplar for neet,” “class 6 maths icse syllabus,” and “icse 7th class maths syllabus”.

        </p>
        <p class="sec-para">
            “WH Question” Blog topics would be focused on more specific keywords, like “who discovered studies,” and “what is magnitude in physics.”
        </p>
        <p class="sec-para">
            We then took these types of keywords, examined the search behavior behind them, and wrote website and blog copy to target the search intent behind the people using them.
        </p>

        <h2 class="mt-4 sub-sec-title text-blue">The Results:</h2>
        <p class="sec-para">
            Let’s compare — April 2022 to Sept 2022.
        </p>

        <table>
            <tr>
                <th>Month</th>
                <th>August 2021</th>
                <th>Sept 2021</th>
                <th>Octomber 2021</th>
            </tr>
            <tr>
                <td class="sec-para">
                    Organic Users
                </td>
                <td class="sec-para">
                    20,800
                </td>
                <td class="sec-para">
                    30,458
                </td>
                <td class="sec-para">
                    48,300
                </td>
            </tr>
        </table>
        
        <h2 class="mt-4 sub-sec-title text-blue">Growth Snapshots:</h2>
        <div class="row">
            <div class="col-6"><img src="{{ asset('frontend-assets/img/case-study/organic1.png') }}" alt=""></div>
            <div class="col-6"><img src="{{ asset('frontend-assets/img/case-study/organic2.png') }}" alt=""></div>
        </div>
    </div>
</main>
@endsection