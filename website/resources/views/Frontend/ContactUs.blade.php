@extends('Frontend.layout.app')
@section('title', 'Contact')
@section('author', 'Your Company Name')
@section('description', 'This is a dynamic description for the home page.')
@section('keywords', 'seo, marketing, agency, web design')
@section('robots', 'INDEX,FOLLOW')

@section('custom_head')
    <style>
        #contact .contact-head {
            padding: 4rem 4rem 1rem 4rem;
        }

        #contact .head-text {
            font-size: 35px;
            line-height: 42px;
        }

        #contact .head-text-div {
            margin: 0px;
        }

        #contact .para-text {
            font-size: 17px;
            line-height: 24px;
        }

        #contact .contact-form input,
        #contact .contact-form textarea,
        #contact .contact-form select {
            border-radius: 10px;
        }

        #contact .contact-form .form-group {
            position: relative;
            margin-bottom: 2.5rem;
        }

        #contact .contact-form .form-group input,
        #contact .contact-form .form-group select,
        #contact .contact-form .form-group textarea {
            padding: 15px 10px 10px 15px;
        }

        #contact .contact-form .form-group label {
            position: absolute;
            top: 3px;
            left: 24px;
            font-weight: 500;
            font-size: 18px;
            transform: translateY(-50%);
            background-color: white;
            padding: 0px 12px;
            pointer-events: none;
            z-index: 2;
        }

        #contact .space-bottom {
            padding-bottom: 35px;
        }

        #contact .contact-form {
            background: transparent;
            border-radius: 10px;
            padding: 45px 23px;
            /* box-shadow: 0 4px 8px rgba(0,0,0,0.1);
                border: 2px solid transparent; */
            box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
            -webkit-box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
            -moz-box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
        }

        #contact .space-bottom .form-head {
            font-size: 2rem;
            line-height: 2.5rem;
        }

        #contact .space-bottom .contact-media {
            border: none;
            padding: 20px;
        }

        #contact .contact-media .icon-btn {
            width: 46px;
            height: 46px;
            border-radius: 10px;
            background: #106c97;
            color: white;
        }

        #contact .business-contact,
        #contact .careers-contact {
            font-size: 17px;
            margin-bottom: 2px;
            font-weight: 500;
        }

        #contact #map {
            margin: 0px 0px 2rem 0px;
        }

        @media only screen and (max-width: 600px) {
            #contact .contact-head {
                padding: 2rem 0.5rem;
            }

            #contact .head-text-div {
                margin-bottom: 13px;
            }

            #contact .head-mbl-text,
            #contact .space-bottom .head-mbl-text {
                font-size: 30px;
                line-height: 31px;
            }
        }

        .invalid-feedback {
            color: red;
            display: block;
        }
    </style>
    <!-- form 2 start Plugin: JQuery Validator  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"
        integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/additional-methods.min.js"
        integrity="sha512-TiQST7x/0aMjgVTcep29gi+q5Lk5gVTUPE9XgN0g96rwtjEjLpod4mlBRKWHeBcvGBAEvJBmfDqh2hfMMmg+5A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Plugin: JQuery Validator  -->
@endsection
@section('content')
    <main id="contact">
        <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend-assets/img/bg/breadcumb-bg.jpg') }}">
            <div class="container">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Contact Us</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="home-seo-agency.html">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="overflow-hidden space contact-head">
            <div class="container">
                <div class="row">
                    <div class="title-area text-center text-xl-start col-md-4 head-text-div">
                        <h2 class="sec-title head-text head-mbl-text">Don’t hesitate to contact us for any information.</h2>
                    </div>
                    <div class="text-center text-xl-start col-md-8">
                        <p class="para-text">We identify the most relevant and high-traffic keywords for your business. Our
                            team conducts thorough research to understand.</p>
                        <p class="para-text">We identify the most relevant and high-traffic keywords for your business. Our
                            team conducts thorough research to understand yourer.</p>
                    </div>
                </div>
            </div>
            <hr>
        </div>


        <div class="space-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <!-- <div class="title-area text-center">
                                    </div> -->
                        <div class="row gy-4 flex-column">
                            <div class="col-xl-12 col-md-12">
                                <div class="contact-media">
                                    <div class="icon-btn d-flex justify-content-center align-items-center">
                                        <i class="fa-sharp fa-light fa-location-dot"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="box-title">Our Address</h5>
                                        <p class="box-text">The Affaires, 6th Floor, 603, Sector 17, Palm Beach Road,
                                            Sanpada,Navi Mumbai 400705</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="contact-media">
                                    <div class="icon-btn d-flex justify-content-center align-items-center">
                                        <i class="fa-light fa-phone"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="box-title">Contact Number</h5>
                                        <h6 class="business-contact">For Business</h6>
                                        <p class="box-text">
                                            <a href="tel:+918169482831">Mobile: +918169482831</a>
                                            <a href="mailto:
                                        business@sociomark.in">Email:
                                                business@sociomark.in</a>
                                        </p>
                                        <h6 class="careers-contact">For Careers</h6>
                                        <p class="box-text">
                                            <a href="tel:+13217322978">Mobile: +13217322978</a>
                                            <a href="mailto:hr@sociomark.in">Email:
                                                hr@sociomark.in</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="contact-media">
                                    <div class="icon-btn d-flex justify-content-center align-items-center">
                                        <i class="fa-light fa-clock"></i>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="box-title">Opening Hour</h5>
                                        <p class="box-text">Monday - Saturday: 9:00 - 18:00 Sunday: Closed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 mt-sm-2">
                        <div class="">
                            <h3 class="text-center mb-15 form-head head-mbl-text">Please Fill In The Form Below</h3>
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif


                            <form action="{{ route('contact.store') }}" method="POST" class="contact-form style2"
                                id="contactform">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Your Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" id="name" placeholder="Enter your Name"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <i class="far fa-envelope"></i>
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            name="email" id="email" placeholder="Enter your Email"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <i class="fal fa-phone"></i>
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                            name="phone" id="phone" placeholder="Enter your Phone"
                                            value="{{ old('phone') }}">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">

                                        <label for="service">Service you want?</label>
                                        <select class="form-select @error('service') is-invalid @enderror" id="service"
                                            name="service">
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
                                        <select class="form-select @error('budget') is-invalid @enderror" id="budget"
                                            name="budget">
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
                                        <select class="form-select @error('aboutUs') is-invalid @enderror" id="aboutUs"
                                            name="aboutUs">
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
                                        <textarea class="form-control @error('messageforus') is-invalid @enderror" id="messageforus"
                                            placeholder="Enter your message" rows="4" name="messageforus"></textarea>
                                        <i class="fal fa-pencil"></i>
                                        @error('messageforus')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 form-group mb-0 text-center">
                                        <button type="submit" class="th-btn th-radius">Submit Message</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="map">
            <div class="container text-center">
                <div class="ratio ratio-16x9 ">
                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.8354345093706!2d-122.41941548468129!3d37.77492927975967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809c5a2ff8fb%3A0xe4c2f0cfe65f3f3!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1617843256256!5m2!1sen!2sus"
                    allowfullscreen="" loading="lazy"></iframe> --}}
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7542.256306381804!2d72.998308!3d19.0581023!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c3b0d769ff69%3A0xf839749e6fda79fc!2sSociomark!5e0!3m2!1sen!2sin!4v1743758528511!5m2!1sen!2sin"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $.validator.addMethod("emailregex", function(value, element) {
                return this.optional(element) || /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/i.test(value);
            })
            $.validator.addMethod("letters", function(value, element) {
                return this.optional(element) || /^[a-zA-Z \s']*$/i.test(value);
            });
            $.validator.addMethod("numbers", function(value, element) {
                return this.optional(element) || /^[0-9 ]*$/i.test(value);
            });
            $('#contactform').validate({
                rules: {
                    name: {
                        required: true,
                        letters: true,
                    },
                    lastname: 'required',
                    organisation: 'required',
                    email: {
                        required: true,
                        emailregex: true,
                    },
                    phone: {
                        required: true,
                        numbers: true,
                    },
                    message: {
                        required: true,
                    }
                },
                messages: {
                    name: {
                        required: 'This Name field is required',
                        letters: 'Only Letters & Spaces are Allowed.'
                    },
                    phone: {
                        required: 'This Phone field is required',
                        maxlength: 'Please enter a Valid Mobile Number',
                        minlength: 'Please enter a Valid Mobile Number',
                    },
                    lastname: 'This Last Name field is required',
                    organisation: 'This Organisation field is required',
                    email: 'Please enter a Valid Email Id',
                    message: 'This message field is required',
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        </script>



        <section class="business-section" style="background-image: url(assets/images/background/pattern-4.png)">
            <div class="container">
                <!-- Sec Title / Centered -->
                <div class="sec-title text-center">
                    <h2>Explore Our <span>Business</span> <br> New Features</h2>
                </div>
                <div class="row clearfix">

                    <!-- Left Column -->
                    <div class="left-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-column">

                            <!-- Business Block -->
                            <div class="business-block">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="content">
                                        <div class="icon-box">
                                            <span class="icon fa fa-phone"></span>
                                        </div>
                                        <h4><a href="service-detail.html">Security Managment</a></h4>
                                        <div class="text">Lorem ipsum, or lipsum as some known, is dummy text used</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Business Block -->
                            <div class="business-block">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
                                    <div class="content">
                                        <div class="icon-box">
                                            <span class="icon fa fa-phone"></span>
                                        </div>
                                        <h4><a href="service-detail.html">Customer strategy</a></h4>
                                        <div class="text">Lorem ipsum, or lipsum as some known, is dummy text used</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Business Block -->
                            <div class="business-block">
                                <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="content">
                                        <div class="icon-box">
                                            <span class="icon fa fa-phone"></span>
                                        </div>
                                        <h4><a href="service-detail.html">seo & Content Writting</a></h4>
                                        <div class="text">Lorem ipsum, or lipsum as some known, is dummy text used</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="circle-layer"></div>
                            <div class="circle-layer-two"></div>
                            <div class="pattern-layer"
                                style="background-image: url(assets/images/background/pattern-5.png)"></div>
                            <div class="image" data-tilt data-tilt-max="4">
                                <img src="https://html.themexriver.com/aginco/assets/images/resource/business-1.jpg" alt="" />
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="right-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-column">

                            <!-- Business Block -->
                            <div class="business-block">
                                <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="content">
                                        <div class="icon-box">
                                            <span class="icon fa fa-phone"></span>
                                        </div>
                                        <h4><a href="service-detail.html">analytic optimization</a></h4>
                                        <div class="text">Lorem ipsum, or lipsum as some known, is dummy text used</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Business Block -->
                            <div class="business-block">
                                <div class="inner-box wow fadeInRight" data-wow-delay="150ms" data-wow-duration="1500ms">
                                    <div class="content">
                                        <div class="icon-box">
                                            <span class="icon fa fa-phone"></span>
                                        </div>
                                        <h4><a href="service-detail.html">digitals products</a></h4>
                                        <div class="text">Lorem ipsum, or lipsum as some known, is dummy text used</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Business Block -->
                            <div class="business-block">
                                <div class="inner-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <div class="content">
                                        <div class="icon-box">
                                            <span class="icon fa fa-phone"></span>
                                        </div>
                                        <h4><a href="service-detail.html">Link Building & Content</a></h4>
                                        <div class="text">Lorem ipsum, or lipsum as some known, is dummy text used</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Business Section -->

        <style>
            .business-section {
                position: relative;
                overflow: hidden;
                padding: 120px 0px 70px;
                background-repeat: repeat;
                background-color: white;
            }

            .business-section .auto-container {
                max-width: 1440px;
            }

            .business-section .left-column {
                position: relative;
                margin-bottom: 30px;
            }

            .business-section .left-column .inner-column {
                position: relative;
            }

            .business-section .left-column .business-block:nth-child(2) {
                transform: translateX(-50px);
            }

            .business-block {
                position: relative;
                margin-bottom: 70px;
            }

            .business-block .inner-box {
                position: relative;
                padding: 30px 35px;
                border-radius: 8px;
                background-color: white;
                box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.07);
            }

            .business-block .inner-box:before {
                position: absolute;
                content: '';
                right: 15px;
                bottom: 15px;
                width: 42px;
                height: 35px;
                background: url(../images/icons/business-arrow.png) no-repeat;
            }

            .business-block .inner-box .content {
                position: relative;
                padding-left: 85px;
            }

            .business-block .inner-box .icon-box {
                position: absolute;
                left: 0px;
                top: 12px;
                display: inline-block;
                transition: all 600ms ease;
                -moz-transition: all 600ms ease;
                -webkit-transition: all 600ms ease;
                -ms-transition: all 600ms ease;
                -o-transition: all 600ms ease;
            }

            .business-block .inner-box:hover .icon-box {
                -webkit-transform: scale(-1) rotate(180deg);
                -moz-transform: scale(-1) rotate(180deg);
                -ms-transform: scale(-1) rotate(180deg);
                -o-transform: scale(-1) rotate(180deg);
                transform: scale(-1) rotate(180deg);
            }

            .business-block .inner-box .icon-box:before {
                position: absolute;
                content: '';
                left: 20px;
                top: 10px;
                width: 50px;
                height: 24px;
                opacity: 0.10;
                border-radius: 50px;
                transform: rotate(135deg);
                background-color: var(--main-color);
            }

            .business-block .inner-box .icon-box .icon {
                position: relative;
                line-height: 1em;
                color: red;
                font-size: 50px;
            }

            .business-block .inner-box h4 {
                font-weight: 500;
                text-transform: uppercase;
                font-size: 20px;
            }

            .business-block .inner-box h4 a {
                color: var(--heading-color);
            }

            .business-block .inner-box:hover h4 a {
                color: var(--main-color);
            }

            .business-block .inner-box .text {
                opacity: 0.90;
                max-width: 240px;
                font-size: var(--font-14);
                margin-top: 5px;
            }

            .business-section .image-column {
                position: relative;
                margin-bottom: 30px;
            }

            .business-section .image-column .inner-column {
                position: relative;
                text-align: center;
                padding-top: 60px;
            }

            .business-section .image-column .image {
                position: relative;
                overflow: hidden;
                display: inline-block;
                border-radius: 80px 0px 80px 0px;
            }

            .business-section .image-column .circle-layer {
                position: absolute;
                left: 10px;
                top: 0px;
                width: 167px;
                height: 167px;
                border-radius: 50%;
                background-color: orangered;
            }

            .business-section .image-column .circle-layer-two {
                position: absolute;
                right: 20px;
                bottom: -30px;
                width: 161px;
                height: 166px;
                border-radius: 15px;
                background-color: blanchedalmond;
            }

            .business-section .image-column .pattern-layer {
                position: absolute;
                left: 0px;
                bottom: -40px;
                width: 289px;
                height: 236px;
                background: no-repeat;
            }

            .business-section .right-column {
                position: relative;
                margin-bottom: 30px;
            }

            .business-section .right-column .inner-column {
                position: relative;
            }

            .business-section .right-column .business-block:nth-child(2) {
                transform: translateX(50px);
            }



            @media only screen and (max-width: 767px){
	
	
	
	.business-block .inner-box .content{
		text-align:center;
		padding-left:var(--padding-zero);
	}
	
	.business-block .inner-box .icon-box{
		position:relative;
		top:0px;
		margin-bottom:var(--margin-bottom-20);
	}
	
	.business-block .inner-box .text{
		max-width:100%;
		margin-top:var(--margin-top-10);
	}
	
	.team-section .more-members{
		margin-left:var(--margin-left-20);
		margin-top:var(--margin-top-10);
	}
	
	.team-section .sec-title .pull-right{
		width:100%;
	}
	
	.cta-section .pull-left,
	.cta-section .pull-right{
		width:100%;
		text-align:center;
	}
	
	.cta-section h3{
		margin-top:var(--margin-zero);
		margin-bottom:var(--margin-bottom-20);
	}
	
	.testimonial-block .inner-box .text{
		line-height:1.7em;
		font-size:var(--font-18);
	}
	
	.page-title .bread-crumb li{
		font-size:var(--font-16);
	}
	
	.main-footer .footer-bottom .social-column .social-box,
	.main-footer .footer-bottom{
		text-align:center;
	}
	
	.feature-block .inner-box .number{
		right:0px;
	}
	
	.about-section-two .images-column .video-box-three{
		left:140px;
	}
	
	.services-tabs .tabs-content{
		padding:var(--padding-zero);
	}
	
	.services-tabs .tab-btns{
		position:relative;
		width:100%;
		margin-bottom:var(--margin-bottom-30);
	}
	
	.support-section .content-column .inner-column::before{
		transform:skewX(0deg);
	}
	
	.main-footer .footer-bottom-two .copyright{
		text-align:center;
		margin-bottom:var(--margin-bottom-20);
	}
	
	.main-footer .footer-bottom-two .footer-nav{
		text-align:center;
	}
	
	.agency-section .blocks-column .business-block-two:nth-child(2n){
		transform:translateY(0px);
	}
	
	
	
	
}
        </style>

    </main>



@endsection
