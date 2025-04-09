    <!--==============================
     Preloader
  ==============================-->
    <div class="preloader ">
        <button class="th-btn style1 preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <img src="{{ asset('frontend-assets/img/logo/sociomark-new-logo.png') }}" alt="Sociomark" height="200">
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
                <a href="{{ route('home') }}"><img src="{{ asset('frontend-assets/img/logo/sc-white-horizontal.png') }}" alt="Sociomark"></a>
            </div>

            <div class="th-mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Header Area
==============================-->
    <header class="th-header header-layout1 bg-white header-absolute">
        <div class="sticky-wrapper">
            <!-- Main Menu Area -->
            <div class="container-fluid th-container">
                <!-- <div class="menu-area"> -->
                <div class="">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('frontend-assets/img/logo/sociomark-new-logo.png') }}" alt="Sociomark" height="80"></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu style2 d-none d-lg-inline-block">
                              
                                <ul>
                                    <li class="">
                                      <a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li class="menu-item-has-children">
                                      <a href="{{ route('services') }}">Services</a>
                                      <ul class="sub-menu">
                                        <li><a href="#">Digital Marketing</a></li>
                                        <li><a href="{{ route('seo') }}">SEO</a></li>
                                        <li><a href="#">Social Media Marketing</a></li>
                                        <li><a href="#">Website Development</a></li>
                                        <li><a href="#">Content Marketing</a></li>
                                        <li><a href="#">SEM</a></li>
                                        <li><a href="#">Photography & Video Production</a></li>
                                      </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                      <a href="#">Industries</a>
                                      <ul class="sub-menu">
                                        <li><a href="{{ route('industry') }}">Education</a></li>
                                        <li><a href="#">Healthcare</a></li>
                                        <li><a href="#">FMCG</a></li>
                                        <li><a href="#">News & Media</a></li>
                                        <li><a href="#">Real Estate</a></li>
                                        <li><a href="#">Logistics</a></li>
                                        <li><a href="#">Fashion & Lifestyle</a></li>
                                        <li><a href="#">Gaming</a></li>
                                        <li><a href="#">Home & Interior</a></li>
                                        <li><a href="#">Automobile</a></li>
                                      </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                      <a href="#">Case Studies</a>
                                    </li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="{{ route('blog') }}">Blog</a></li>
                                    <li><a href="#">Carrers</a></li>
                                    <li><a href="{{ route('workculture') }}">Work Culture</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
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
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-none">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Let's schedule a Call & Explore.</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <h3 class="text-center mb-15 form-head head-mbl-text">Please Fill In The Form Below</h3>
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif


                        <form action="{{ route('contact.store') }}" method="POST" class="contact-form style2">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Enter your Name" value="{{ old('name') }}">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Enter your Email" value="{{ old('email') }}">
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Enter your Phone" value="{{ old('phone') }}">
                                    @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">

                                    <label for="service">Service you want?</label>
                                    <select class="form-select @error('service') is-invalid @enderror" id="service" name="service">
                                        <option selected disabled>Choose an option</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>

                                    @error('service')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">

                                    <label for="budget">Marketing Budget</label>
                                    <select class="form-select @error('budget') is-invalid @enderror" id="budget" name="budget">
                                        <option selected disabled>Choose an option</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                                    @error('budget')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">

                                    <label for="aboutUs">How did you hear about Us?</label>
                                    <select class="form-select @error('aboutUs') is-invalid @enderror" id="aboutUs" name="aboutUs">
                                        <option selected disabled>Choose an option</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                                    @error('aboutUs')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-12">
                                    <label for="messageforus">Your Message</label>
                                    <textarea class="form-control @error('messageforus') is-invalid @enderror" id="messageforus" placeholder="Enter your message" rows="4" name="messageforus"></textarea>
                                    @error('messageforus')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 form-group mb-0 text-center">
                                    <button class="th-btn th-radius">Submit Message</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer d-none">
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
