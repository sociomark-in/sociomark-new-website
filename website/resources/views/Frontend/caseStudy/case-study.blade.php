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

    /* card  */
    .card__container {
        display: grid;
        row-gap: 3.5rem;
    }

    .card__article {
        position: relative;
        overflow: hidden;
    }

    .card__img {
        width: 328px;
        border-radius: 10px;
    }

    .card__data {
        width: 280px;
        background-color: white;
        padding: 1.5rem 2rem;
        /* box-shadow: 0 8px 24px hsla(0, 0%, 0%, .15); */
        border-radius: 1rem;
        /* position: absolute; */
        bottom: -9rem;
        left: 0;
        right: 0;
        margin-inline: auto;
        opacity: 0;
        transition: opacity 1s 1s;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card__description {
        display: block;
        font-size: 14px;
        margin-bottom: .25rem;
    }

    .card__title {
        font-size: 20px;
        font-weight: 500;
        color: black;
        margin-bottom: .75rem;
    }

    .card__button {
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
        color: black;
    }

    .card__button {
        text-decoration: underline;
    }

    /* Naming animations in hover */
    .card__article .card__data {
        animation: show-data 1s forwards;
        opacity: 1;
        transition: opacity .3s;
    }

    /* .card__article {
        animation: remove-overflow 2s forwards;
    } */

    .card__article {
    animation: show-overflow 2s forwards;
}

.card__data {
    animation: remove-data 1s forwards;
}

    /* Card animation */
    @keyframes show-data {
        50% {
            transform: translateY(-10rem);
        }

        100% {
            transform: translateY(-7rem);
        }
    }

    @keyframes remove-overflow {
        to {
            overflow: initial;
        }
    }

    @keyframes remove-data {
        0% {
            transform: translateY(-7rem);
        }

        50% {
            transform: translateY(-10rem);
        }

        100% {
            transform: translateY(.5rem);
        }
    }

    @keyframes show-overflow {
        0% {
            overflow: initial;
            pointer-events: none;
        }

        50% {
            overflow: hidden;
        }
    }

    /*=============== BREAKPOINTS ===============*/
    /* For small devices */
    @media screen and (max-width: 340px) {
        .portfolio-container {
            margin-inline: 1rem;
        }

        .card__data {
            width: 250px;
            padding: 1rem;
        }
    }

    /* For medium devices */
    @media screen and (min-width: 768px) {
        .card__container {
            grid-template-columns: repeat(2, 1fr);
            column-gap: 1.5rem;
        }
    }

    /* For large devices */
    @media screen and (min-width: 1120px) {
        

        .card__img {
            width: 348px;
        }

        .card__data {
            width: 250px;
            padding-inline: 1.5rem;
        }
    }

    /* card :end */
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


            <div class="filter-menu filter-menu-active nav nav-tabs justify-content-center mb-4">


                <button data-filter="*" class=" nav-link active" type="button">
                    <img src="https://cdn-icons-png.flaticon.com/512/854/854878.png" alt="SEO" class="tab-icon-img">
                    <div class="tab-label">All</div>
                </button>

                <button data-filter=".cat1" class="nav-link" type="button">
                    <img src="https://cdn-icons-png.flaticon.com/512/1388/1388999.png" alt="Keyword" class="tab-icon-img">
                    <div class="tab-label">SEO</div>
                </button>

                <button data-filter=".cat2" class="nav-link" type="button">
                    <img src="https://cdn-icons-png.flaticon.com/512/1828/1828911.png" alt="Page Analyzer" class="tab-icon-img">
                    <div class="tab-label">Website</div>
                </button>

                <button data-filter=".cat3" class="nav-link" type="button">
                    <img src="https://cdn-icons-png.flaticon.com/512/2920/2920322.png" alt="Digital Agency" class="tab-icon-img">
                    <div class="tab-label">Social Media</div>
                </button>

                <!-- <button data-filter=".cat4" class="nav-link" type="button">
                    <img src="https://cdn-icons-png.flaticon.com/512/2913/2913461.png" alt="Content" class="tab-icon-img">
                    <div class="tab-label"></div>
                </button> -->


            </div>

            <!-- Tab Content -->

            <div class="portfolio-container">
                <div class="card__container filter-active row">
                    <article class="card__article filter-item cat1 cat5 cat7 cat3 col-md-3 col-12">
                        <img src="http://127.0.0.1:5501/assets/img/landscape-1.png" alt="image" class="card__img">

                        <div class="card__data">
                            <span class="card__description">Boosted Organic Traffic by 200%</span>
                            <h2 class="card__title">Ayushakti</h2>
                            <a href="#" class="card__button">Read More</a>
                        </div>
                    </article>

                    <article class="card__article filter-item cat5 cat5 cat8 cat1 col-md-3 col-12">
                        <img src="http://127.0.0.1:5501/assets/img/landscape-1.png" alt="image" class="card__img">

                        <div class="card__data">
                            <span class="card__description">Poon Hill, Nepal</span>
                            <h2 class="card__title">Starry Night</h2>
                            <a href="#" class="card__button">Read More</a>
                        </div>
                    </article>

                    <article class="card__article filter-item cat5 cat3 cat2 col-md-3 col-12">
                        <img src="http://127.0.0.1:5501/assets/img/landscape-1.png" alt="image" class="card__img">

                        <div class="card__data">
                            <span class="card__description">Bojcin Forest, Serbia</span>
                            <h2 class="card__title">Path Of Peace</h2>
                            <a href="#" class="card__button">Read More</a>
                        </div>
                    </article>
                    <article class="card__article filter-item cat5 cat3 cat2 col-md-3 col-12">
                        <img src="http://127.0.0.1:5501/assets/img/landscape-1.png" alt="image" class="card__img">

                        <div class="card__data">
                            <span class="card__description">Bojcin Forest, Serbia</span>
                            <h2 class="card__title">Path Of Peace</h2>
                            <a href="#" class="card__button">Read More</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection