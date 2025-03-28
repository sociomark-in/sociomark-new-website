    <!--==============================
     Preloader
  ==============================-->
    <div class="preloader ">
        <button class="th-btn style1 preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <img src="{{ asset('assets/img/logo.svg') }}" alt="Rasm">
            <span class="loader"></span>
        </div>
    </div>
    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div><!--==============================
Mobile Menu
============================== -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="home-seo-agency.html"><img src="{{ asset('assets/img/logo.svg') }}" alt="Saor"></a>
            </div>

            <div class="th-mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="home-seo-agency.html">Home</a>
                        <ul class="mega-menu mega-menu-content allow-natural-scroll">
                            <li>
                                <div class="container">
                                    <div class="row gy-4">
                                        <div class="col-lg-4">
                                            <div class="mega-menu-box">
                                                <div class="mega-menu-img">
                                                    <img src="{{ asset('assets/img/pages/home-seo-agency.jpg') }}"
                                                        alt="Home One">
                                                </div>
                                                <h3 class="mega-menu-title"><a href="home-seo-agency.html">Home SEO
                                                        Agency</a></h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mega-menu-box">
                                                <div class="mega-menu-img">
                                                    <img src="{{ asset('assets/img/pages/home-digital-agency.jpg') }}"
                                                        alt="Home Two">
                                                </div>
                                                <h3 class="mega-menu-title"><a href="home-digital-agency.html">Home
                                                        Digital Agency</a></h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mega-menu-box">
                                                <div class="mega-menu-img">
                                                    <img src="{{ asset('assets/img/pages/home-seo-Analysis.jpg') }}"
                                                        alt="Home Three">
                                                </div>
                                                <h3 class="mega-menu-title"><a href="home-seo-analysis.html">Home SEO
                                                        Analysis Agency</a></h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mega-menu-box">
                                                <div class="mega-menu-img">
                                                    <img src="{{ asset('assets/img/pages/home-seo-marketing.jpg') }}"
                                                        alt="Home four">
                                                </div>
                                                <h3 class="mega-menu-title"><a href="home-seo-marketing.html">Home SEO
                                                        Analysis Agency</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li><a href="about.html">About Us</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Header Area
==============================-->
    <header class="th-header header-layout1 header-absolute">
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="container-fluid th-container">
                <!-- <div class="menu-area"> -->
                <div class="">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="#"><img src="https://placehold.co/100x100" alt="Saor"></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu style2 d-none d-lg-inline-block">
                                <ul>
                                    <li class="">
                                        <a href="#">Home</a>
                                    </li>
                                    <li><a href="#">About Us</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Services</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Case Studies</a>
                                    </li>
                                    <li><a href="{{ route('blog') }}">Blog</a></li>
                                    <li><a href="#">Carrers</a></li>
                                    <li><a href="#">Work Culture</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </nav>
                            <div class="header-button">
                                <button type="button" class="th-menu-toggle d-inline-block d-lg-none"><i
                                        class="far fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <div class="header-button">
                                <!-- <button type="button" class="icon-btn searchBoxToggler"><i class="fal fa-search"></i></button> -->
                                <a href="#" class="th-btn th-icon" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Get A Quote <i
                                        class="fa-regular fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- popup modal  start-->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Let's schedule a Call & Explore.</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- popup modal  end-->
    <style>
        .modal {
            position: fixed;
            z-index: 99;
        }
    </style>
