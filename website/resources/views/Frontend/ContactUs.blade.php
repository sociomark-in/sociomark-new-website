@extends('Frontend.layout.app')
@section('title', 'Contact Us')
@section('author', 'Your Company Name')
@section('description', 'This is a dynamic description for the home page.')
@section('keywords', 'seo, marketing, agency, web design')
@section('robots', 'INDEX,FOLLOW')

@section('custome-style')
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

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "LocalBusiness",
          "name": "Sociomark",
          "image": "https://www.sociomark.ae/public/frontend-assets/img/logo/sociomark-new-logo.png",
          "@id": "https://www.sociomark.ae/",
          "url": "https://www.sociomark.ae/",
          "telephone": "9819988640",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "C1 - 1F - SF10283, Ajman Free Zone C1 Building, Business district - Ajman Free Zone Makani No. 4442612247",
            "addressLocality": "Ajman",
            "postalCode": "00000",
            "addressCountry": "AE"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 25.4191054,
            "longitude": 55.4529209
          } ,
          "sameAs": [
            "https://www.facebook.com/Sociomarkin",
            "https://twitter.com/sociomarkin",
            "https://www.instagram.com/sociomarkin/",
            "https://www.youtube.com/@sociomarkdigitalmarketing",
            "https://www.linkedin.com/company/sociomark/",
            "https://in.pinterest.com/Sociomarkin/",
            "https://www.sociomark.ae/"
          ]
        }
        </script>
@endsection
@section('content')
    <main id="contact">
        <section style="margin-top: 66px;">
            <div class="full-width">
                <picture>
                    <source media="(min-width: 1400px)" srcset="{{ asset('frontend-assets/img/banners/contact-us.jpg') }}">
                    <img src="{{ asset('frontend-assets/img/banners/contact-us.jpg') }}" alt="" class="w-100">
                </picture>
            </div>
        </section>
       
        <div class="overflow-hidden space contact-head">
            <div class="container">
                <div class="row">
                    <div class="title-area text-center text-xl-start col-md-4 head-text-div">
                        <!-- <h2 class="sec-title head-text head-mbl-text">Don’t hesitate to contact us for any information.</h2> -->

                        <h2 class="sec-title head-text head-mbl-text" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            Don’t hesitate to <span class="text-blue"> contact us</span> for any information.
                        </h2>
                    </div>
                    <div class="text-center text-xl-start col-md-8">
                        <p class="sec-para" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000"
                            data-aos-easing="ease-in-out">We identify the most relevant and high-traffic keywords for your
                            business. Our
                            team conducts thorough research to understand.</p>
                        <p class="sec-para" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000"
                            data-aos-easing="ease-in-out">We identify the most relevant and high-traffic keywords for your
                            business. Our
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
                                        <h4 class="sub-sec-title">Our Address</h4>
                                        <p class="sec-para">C1 - 1F - SF10283, Ajman Free Zone C1 Building,
                                            Business district - Ajman Free Zone</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="contact-media">
                                    <div class="icon-btn d-flex justify-content-center align-items-center">
                                        <i class="fa-light fa-phone"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="sub-sec-title">Contact Number</h4>
                                        <h6 class="business-contact">For Business</h6>
                                        <p class="sec-para">
                                            Mobile: <a href="tel:+971504266118">+971 50 426 6118</a><br>
                                            Email: <a href="mailto:business@sociomark.in">business@sociomark.in</a>
                                        </p>
                                        <!-- <h6 class="careers-contact">For Careers</h6>
                                        <p class="sec-para">
                                            Mobile: <a href="tel:+971504266118">+971 50 426 6118</a><br>
                                            Email: <a href="mailto:hr@sociomark.in">hr@sociomark.in</a>
                                        </p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-md-12">
                                <div class="contact-media">
                                    <div class="icon-btn d-flex justify-content-center align-items-center">
                                        <i class="fa-light fa-clock"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="sub-sec-title">Opening Hour</h4>
                                        <p class="sec-para">Monday - Friday: 10:00 - 19:00</p>
                                        <p class="sec-para">Saturday - Sunday: Closed</p>
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
                                        <label class="form-label" for="name">Your Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" id="name" placeholder="Enter your Name"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        {{-- <i class="fas fa-envelope"></i> --}}
                                        <label class="form-label" for="email">Email</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            name="email" id="email" placeholder="Enter your Email"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        {{-- <i class="fal fa-phone"></i> --}}
                                        <label class="form-label" for="phone">Phone</label>
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                            name="phone" id="phone" placeholder="Enter your Phone"
                                            value="{{ old('phone') }}" maxlength="10" pattern="\d{10}">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">

                                        <label class="form-label" for="service">Service you want?</label>
                                        <select class="form-select @error('service') is-invalid @enderror" id="service"
                                            name="service">
                                            <option selected disabled>Choose an option</option>
                                            <option value="Search Engine Optimization">Search Engine Optimization</option>
                                            <option value="Website Development">Website Development</option>
                                            <option value="Social Media">Social Media</option>
                                            <option value="Digital Marketing">Digital Marketing</option>
                                            <option value="Conetnt Marketing">Conetnt Marketing</option>
                                            <option value="SEM">Performance Marketing</option>
                                            <option value="Photography & Video Production">Photography & Video Production
                                            </option>
                                        </select>

                                        @error('service')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">

                                        <label class="form-label" for="budget">Marketing Budget</label>
                                        <select class="form-select @error('budget') is-invalid @enderror" id="budget"
                                            name="budget">
                                            <option selected disabled>Choose an option</option>
                                            <option value="Under ₹ 50,000">Under ₹ 50,000</option>
                                            <option value="₹ 50,000 - ₹ 1,00,000">₹ 50,000 - ₹ 1,00,000</option>
                                            <option value="Above ₹ 1,00,000">Above ₹ 1,00,000</option>
                                            <option value="Have not Estimated Yet">Have not Estimated Yet</option>
                                        </select>
                                        @error('budget')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">

                                        <label class="form-label" for="aboutUs">How did you hear about Us?</label>
                                        <select class="form-select @error('aboutUs') is-invalid @enderror" id="aboutUs"
                                            name="aboutUs">
                                            <option selected disabled>Choose an option</option>
                                            <option value="Through Search Engines(Google, Bing etc.)">Through Search
                                                Engines(Google, Bing etc.)</option>
                                            <option value="Social Media(Facebook, Instagram etc.)">Social Media(Facebook,
                                                Instagram etc.)</option>
                                            <option value="Word of Mouth/ Referral">Word of Mouth/ Referral</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        @error('aboutUs')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-12">

                                        <label class="form-label" for="messageforus">Your Message</label>
                                        <textarea class="form-control @error('messageforus') is-invalid @enderror" id="messageforus"
                                            placeholder="Enter your message" rows="4" name="messageforus"></textarea>
                                        {{-- <i class="fal fa-pencil"></i> --}}
                                        @error('messageforus')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 form-group mb-0 text-center">
                                        <button type="submit" class="th-btn th-radius">Submit Message</button>
                                    </div>
                                </div>

                            </form>
                            <script type="text/javascript">
                                $.validator.addMethod("emailregex", function(value, element) {
                                    return this.optional(element) || /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/i.test(value);
                                })
                                $.validator.addMethod("letters", function(value, element) {
                                    return this.optional(element) || /^[a-zA-Z \s']*$/i.test(value);
                                });
                                $.validator.addMethod("numbers", function(value, element) {
                                    return this.optional(element) || /^[0-9]{10}$/.test(value);
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
                                            minlength: 10,
                                            maxlength: 10,
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
                                            numbers: 'Please enter exactly 10 digits',
                                            minlength: 'Phone number must be 10 digits',
                                            maxlength: 'Phone number must be 10 digits',
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
                    {{-- <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7542.256306381804!2d72.998308!3d19.0581023!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c3b0d769ff69%3A0xf839749e6fda79fc!2sSociomark!5e0!3m2!1sen!2sin!4v1743758528511!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe> --}}

                    <iframe src="https://www.google.com/maps/d/embed?mid=1bY2NcKFXkbZaH1vzvSDwY51bT_fXqDo&ehbc=2E312F"
                        width="640" height="480"></iframe>
                </div>
            </div>
        </div>
    </main>



@endsection
