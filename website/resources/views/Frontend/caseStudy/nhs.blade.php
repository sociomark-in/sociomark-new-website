@extends('Frontend.layout.app')
@section('custome-style')
<style>
    .sub-sec-title {
        font-size: 25px;
    }

    .breadcumb-wrapper {
        margin-top: 4.3rem;
        background-color: #e2e2e2;
        background-size: contain;
    }

    #portfolioCommon {
        background-color: white !important;
    }

    th {
        background-color: #106c97;
        color: white;

    }

    td {
        border: none;
    }
</style>

@endsection

@section('content')
<main>
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend-assets/img/case-study/stembio.png') }}">
        <div class="container">
            <div class="breadcumb-content">

            </div>
        </div>
    </div>
    <div class="container space">

        <h1 class="sec-title text-center">Educational <span class="text-blue">Brand</span></h1>

        <h2 class="mt-4 sub-sec-title text-blue">About the Brand:</h2>

        <p class="sec-para">
            New Horizon Group of School’s is an <strong>educational institution</strong> committed to providing holistic education to its students. With <strong>seven schools across Mumbai,</strong> they are dedicated to foster <strong>academic excellence, character building, and the overall development</strong> of its students.

        </p>
        <h2 class="mt-4 sub-sec-title text-blue">The Problem they had:</h2>
        <h3 class="fs-5 text-blue">Less Admission</h3>
        <ol type="1">
            <li class="sec-para">
                <h3 class="fs-5">Weak Social Media Engagement</h3>
                <p class="sec-para">Social media feed was not appealing to the target audience with no brand identity .</p>
            </li>
            <li class="sec-para">
                <h3 class="fs-5">Lack of SEO based content on website</h3>
                <p class="sec-para">Website content was missing .</p>
            </li>
            <li class="sec-para">
                <h3 class="fs-5">Inconsistent Admissions</h3>
                <p class="sec-para">Schools struggled to attract admissions because they didn't effectively used advertising platforms like Meta and Google Ads, missing chances to reach and convert prospective parents and students efficiently </p>
            </li>
        </ol>

        <h2 class="mt-4 sub-sec-title text-blue">Our Solution:</h2>
        <h3 class="fs-5 text-blue">90-Day Game Plan</h3>
        <div class="row">
            <div class="col-md-4 col-6">
                <table>
                    <tr>
                        <th>Our Mission</th>
                    </tr>
                    <tr>
                        <td>To increase admissions and brand awareness for New Horizon Schools by highlighting the nurturing and inclusive educational experience that fosters intellectual growth and creativity.</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4 col-6">
                <table>
                    <tr>
                        <th>Our Vision</th>
                    </tr>
                    <tr>
                        <td>To increase admissions and brand awareness for New Horizon Schools by highlighting the nurturing and inclusive educational experience that fosters intellectual growth and creativity.</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4 col-6">
                <table>
                    <tr>
                        <th>Our Goals</th>
                    </tr>
                    <tr>
                        <td>To Achieve significant student enrollment and build a strong brand in the education sector by promoting high-quality, innovative learning experiences. </td>
                    </tr>
                </table>
            </div>
        </div>


        <h2 class="mt-4 sub-sec-title text-blue">From Ordinary to Extraordinary </h2>


        <div class="row">
            <div class="col-md-4 col-12">
                <h3 class="text-blue fs-5">Instagram Grid </h3>
                <p class="sec-para">We focused on creating a dedicated feed for each school to make it look appealing thereby improving the brand awareness .
                </p>
            </div>
            <div class="col-md-4 col-12">
                <h3 class="text-blue fs-5">Before</h3>
                <img src="{{ asset('frontend-assets/img/case-study/shahenaz/sheanaz_3.png') }}" alt="shahenaz">
            </div>
            <div class="col-md-4 col-12">
                <h3 class="text-blue fs-5">After</h3>
                <img src="{{ asset('frontend-assets/img/case-study/shahenaz/1 (11).jpeg') }}" alt="shahenaz">
            </div>
        </div>
        <h2 class="mt-4 sub-sec-title text-blue">Around 120 Catchy Admission Open Creatives!
        </h2>

        <div class="row">
            <div class="col-md-4 col-6">
                <img src="{{ asset('frontend-assets/img/case-study/shahenaz/1 (14).jpeg') }}" alt="shahenaz">
            </div>
            <div class="col-md-4 col-6">
                <img src="{{ asset('frontend-assets/img/case-study/shahenaz/1 (17).jpeg') }}" alt="shahenaz">
            </div>
            <div class="col-md-4 col-6">
                <img src="{{ asset('frontend-assets/img/case-study/shahenaz/1 (15).jpeg') }}" alt="shahenaz">
            </div>
        </div>

        <h2 class="mt-4 sub-sec-title text-blue">Problems faced by the Brand:</h2>

        <ul>
            <li class="sec-para">Website was not SEO optimized.</li>
            <li class="sec-para">Zero orders on marketplace</li>
            <li class="sec-para">Social media was inactive</li>
        </ul>


        <h2 class="mt-4 sub-sec-title text-blue">Our Stategy:</h2>
        <p class="sec-para">We Worked On A 90 Day Game Plan</p>

        <p class="sec-para">We Analyzed The Problem</p>
        <p class="sec-para">We Created The Solution</p>
        <p class="sec-para">Put That Into Execution</p>

        <h2 class="mt-4 sub-sec-title text-blue">The Solutions We Gave:</h2>
        <p class="sec-para">Focused On Our Main Marketplace- Amazon Modifications We Made On Amazon</p>

        <ul>
            <li class="sec-para">High Ranked Keyword Optimization</li>
            <li class="sec-para">Enhanced Product Titles & Descriptions</li>
            <li class="sec-para">High-Quality Images With Their Specifications</li>
            <li class="sec-para">Use of Amazon FBA</li>
        </ul>

        <h2 class="mt-4 sub-sec-title text-blue">Changed Title On Amazon</h2>
        <p class="sec-para">We Worked On A 90 Day Game Plan</p>

        <ul>
            <li class="sec-para">Simplified Content</li>
            <li class="sec-para">SEO-Friendly Content</li>
            <li class="sec-para">High-Ranked Keywords</li>
        </ul>


        <h2 class="mt-4 sub-sec-title text-blue">Changed Title On Amazon</h2>
        <p class="sec-para">We Worked On A 90 Day Game Plan</p>
        <div class="row">
            <div class="col-md-3 col-6">
                <ul>
                    <li class="sec-para">Simplified Content</li>
                    <li class="sec-para">SEO-Friendly Content</li>
                    <li class="sec-para">High-Ranked Keywords</li>
                </ul>
            </div>
            <div class="col-md-4 col-6">
                <img src="{{ asset('frontend-assets/img/case-study/stemrx/sale_growth.png') }}" alt="">
            </div>
        </div>

        <h2 class="mt-4 sub-sec-title text-blue">Listings Were Eligible For Fulfilment By Amazon</h2>
        <h2 class="mt-4 sub-sec-title text-blue">Social Media Analysis</h2>

        <p class="sec-para">We added Influencer videos on a website to leverage the influencer's credibility & reach to build trust and engage with the audience.</p>


        <div class="row">
            <div class="col-md-6 col-6">
                <h2 class="mt-4 sub-sec-title text-blue">Before</h2>
                <p class="sec-para">
                    Before the brand came to us, their feed was lacking vibrant colors and focus on the ingredients of the product.
                </p>
                <p class="sec-para">
                    Their posts were more of inforgraohic we transformed it to product centric in visually appealing way
                </p>
                <img src="{{ asset('frontend-assets/img/case-study/stemrx/before_sm.png') }}" alt="">
            </div>
            <div class="col-md-6 col-6">
                <h2 class="mt-4 sub-sec-title text-blue">After</h2>
                <p class="sec-para">
                    We added more vibrant colors and focused on the ingredients of the products.
                </p>
                <p class="sec-para">
                    We made it more quirky and visually appealing.
                </p>
                <img src="{{ asset('frontend-assets/img/case-study/stemrx/after_sm.png') }}" alt="">
            </div>
        </div>


        <h2 class="mt-4 sub-sec-title text-blue">9Days9Benefits- Campaign For Navratri</h2>
        <div class="row">
            <div class="col-md-3 col-6 mt-3">
                <img src="{{ asset('frontend-assets/img/case-study/stemrx/vit_c.png') }}" alt="">
            </div>
            <div class="col-md-3 col-6 mt-3">
                <img src="{{ asset('frontend-assets/img/case-study/stemrx/pqq.png') }}" alt="">
            </div>
            <div class="col-md-3 col-6 mt-3">
                <img src="{{ asset('frontend-assets/img/case-study/stemrx/Phospha.png') }}" alt="">
            </div>
            <div class="col-md-3 col-6 mt-3">
                <img src="{{ asset('frontend-assets/img/case-study/stemrx/coenzy (1).png') }}" alt="">
            </div>
            <div class="col-md-3 col-6 mt-3">
                <img src="{{ asset('frontend-assets/img/case-study/stemrx/heart_armour (1).png') }}" alt="">
            </div>
            <div class="col-md-3 col-6 mt-3">
                <img src="{{ asset('frontend-assets/img/case-study/stemrx/berberine (1).png') }}" alt="">
            </div>
            <div class="col-md-3 col-6 mt-3">
                <img src="{{ asset('frontend-assets/img/case-study/stemrx/sabuck.png') }}" alt="">
            </div>
            <div class="col-md-3 col-6 mt-3">
                <img src="{{ asset('frontend-assets/img/case-study/stemrx/joint_armour.png') }}" alt="">
            </div>
        </div>
        <h2 class="mt-4 sub-sec-title text-blue">Created A Unique Organ-Led Post To Promote The Efficacy Of The Product.</h2>
        <div class="row">
            <div class="col-md-6 col-6 mt-3">
                <img src="{{ asset('frontend-assets/img/case-study/stemrx/summer.png') }}" alt="">
            </div>
            <div class="col-md-6 col-6 mt-3">
                <img src="{{ asset('frontend-assets/img/case-study/stemrx/upset_stomach.png') }}" alt="">
            </div>
            <div class="col-md-6 col-6 mt-3">
                <img src="{{ asset('frontend-assets/img/case-study/stemrx/fisten.png') }}" alt="">
            </div>
            <div class="col-md-6 col-6 mt-3">
                <img src="{{ asset('frontend-assets/img/case-study/stemrx/mitochondrial.png') }}" alt="">
            </div>
        </div>

        <h2 class="mt-4 sub-sec-title text-blue">We Used The Ingredient Of The Product To Showcase Our Benefits</h2>

        <div class="row">
            <div class="col-md-6 col-6 mt-3">
                <img src="{{ asset('frontend-assets/img/case-study/stemrx/vita_c.png') }}" alt="">
            </div>
            <div class="col-md-6 col-6 mt-3">
                <img src="{{ asset('frontend-assets/img/case-study/stemrx/avocado.png') }}" alt="">
            </div>
        </div>
        <h2 class="mt-4 sub-sec-title text-blue">Topical Days Posts</h2>

        <div class="row">
            <div class="col-md-6 col-6 mt-3">
                <img src="{{ asset('frontend-assets/img/case-study/stemrx/mental.png') }}" alt="">
            </div>
            <div class="col-md-6 col-6 mt-3">
                <img src="{{ asset('frontend-assets/img/case-study/stemrx/republic.png') }}" alt="">
            </div>
        </div>
        <h2 class="mt-4 sub-sec-title text-blue"> We Also Worked On Human-Based Reels As The Page Was Missing Any Human-Based Content.</h2>
        <p class="sec-para">Which resulted in a growth in views from two digits to six digits, boosting the sales of the website.</p>
        <img src="{{ asset('frontend-assets/img/case-study/stemrx/stem1.png') }}" alt="">
    </div>
    <div class="header-button mb-5 d-flex align-items-center justify-content-center">
        <a href="{{ route('social_media', ['client'=>'stemrx-bioscience']) }}" class="th-btn th-icon">View Portfolio</a>
    </div>
    @include('Frontend/partial/commonCaseStudy')

    @include('Frontend/partial/portfolioCommon')
</main>
@endsection