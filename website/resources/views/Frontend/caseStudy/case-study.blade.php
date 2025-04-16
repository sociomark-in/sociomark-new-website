@extends('frontend.layout.app')

@section('custome-style')
<style>
    #case-study #portfolio-sec .sec-title {
        font-size: 32px;
        line-height: 42px;
    }

    /* gallary :start */

    #portfolio-sec {
        padding-top: 20px;
    }

    .tab-icon-img {
        width: 40px;
        height: 40px;
        object-fit: contain;
        margin-bottom: 5px;
    }

    .nav-tabs .nav-link {
        text-align: center;
        border: none;
        /* padding: 10px 25px; */
        width: 150px;
        color: #333;
        margin: 12px 15px;
        background: transparent;
    }

    .nav-tabs .nav-link.active {
        background-color: #106c97;
        color: #fff;
        border-radius: 8px;
    }

    .tab-label {
        font-size: 16px;
    margin-top: 5px;
    font-weight: 600;
    }

    .checkmark {
        color: #106c97;
        margin-right: 5px;
    }

    .feature-image {
        max-width: 100%;
        border-radius: 10px;
        margin-top: 20px;
    }

    /* gallary end */
</style>
@endsection

@section('content')
<main id="case-study">
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend-assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Case Study</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-seo-agency.html">Home</a></li>
                    <li>Case Study</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="overflow-hidden position-relative space-extra-top space-bottom garally mt-md-5" id="portfolio-sec">
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
            <!-- Tab Icons -->
            <ul class="nav nav-tabs justify-content-center mb-4" id="seoTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="seo-tab" data-bs-toggle="tab" data-bs-target="#seo" type="button" role="tab">
                        <img src="https://cdn-icons-png.flaticon.com/512/854/854878.png" alt="SEO" class="tab-icon-img">
                        <div class="tab-label">SEO</div>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="keyword-tab" data-bs-toggle="tab" data-bs-target="#keyword" type="button" role="tab">
                        <img src="https://cdn-icons-png.flaticon.com/512/1388/1388999.png" alt="Keyword" class="tab-icon-img">
                        <div class="tab-label">Keyword</div>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="analyzer-tab" data-bs-toggle="tab" data-bs-target="#analyzer" type="button" role="tab">
                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828911.png" alt="Page Analyzer" class="tab-icon-img">
                        <div class="tab-label">Page Analyzer</div>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="agency-tab" data-bs-toggle="tab" data-bs-target="#agency" type="button" role="tab">
                        <img src="https://cdn-icons-png.flaticon.com/512/2920/2920322.png" alt="Digital Agency" class="tab-icon-img">
                        <div class="tab-label">Digital Agency</div>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="content-tab" data-bs-toggle="tab" data-bs-target="#content" type="button" role="tab">
                        <img src="https://cdn-icons-png.flaticon.com/512/2913/2913461.png" alt="Content" class="tab-icon-img">
                        <div class="tab-label">Content</div>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="tracker-tab" data-bs-toggle="tab" data-bs-target="#tracker" type="button" role="tab">
                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828843.png" alt="Rank Tracker" class="tab-icon-img">
                        <div class="tab-label">Rank Tracker</div>
                    </button>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content" id="seoTabContent">
                <div class="tab-pane fade show active" id="seo" role="tabpanel">
                    <h3>Empower Your SEO Strategy With Cutting</h3>
                    <ul class="list-unstyled">
                        <li><span class="checkmark">✔</span> <strong>Keyword Explorer:</strong> Uncover valuable keywords and insights.</li>
                        <li><span class="checkmark">✔</span> <strong>Page Analyzer:</strong> Optimize your SEO effortlessly.</li>
                        <li><span class="checkmark">✔</span> <strong>Rank Tracker:</strong> Track rankings and adjust strategy in real-time.</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Try It Free Now</a>
                    <img src="https://via.placeholder.com/700x350?text=SEO+Dashboard+Image" alt="Dashboard" class="feature-image">
                </div>

                <!-- Placeholder for other tabs -->
                <div class="tab-pane fade" id="keyword" role="tabpanel">
                    <h3>Keyword Research Tool</h3>
                    <p>Explore relevant keywords with competition data and trends.</p>
                </div>
                <div class="tab-pane fade" id="analyzer" role="tabpanel">
                    <h3>Page Analyzer Tool</h3>
                    <p>Analyze any webpage to get SEO performance insights.</p>
                </div>
                <div class="tab-pane fade" id="agency" role="tabpanel">
                    <h3>Digital Agency Suite</h3>
                    <p>Manage clients and SEO campaigns efficiently in one place.</p>
                </div>
                <div class="tab-pane fade" id="content" role="tabpanel">
                    <h3>Content Optimization</h3>
                    <p>Create SEO-optimized content that drives traffic and engagement.</p>
                </div>
                <div class="tab-pane fade" id="tracker" role="tabpanel">
                    <h3>Rank Tracker</h3>
                    <p>Track keyword performance across multiple search engines.</p>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection