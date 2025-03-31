@extends('Frontend.layout.app')
<style>
    #contact .contact-head {
        padding: 4rem;
    }

    #contact .head-text {
        font-size: 35px;
        line-height: 42px;
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

    #contact .contact-form {
        background: transparent;
        border-radius: 10px;
        padding: 40px 20px;
        box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
        -webkit-box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
        -moz-box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
    }

    #contact .space-bottom .form-head {
        font-size: 2rem;
        line-height: 2.5rem;
    }
    #contact .space-bottom .contact-media{
        border: none;
    }
</style>
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
                <div class="title-area mb-30 text-center text-xl-start col-4">
                    <h2 class="sec-title head-text">Have Any Questions Have Any Questions?</h2>
                </div>
                <div class="text-center text-xl-start col-8">
                    <p class="para-text">We identify the most relevant and high-traffic keywords for your business. Our team conducts thorough research to understand.</p>
                    <p class="para-text">We identify the most relevant and high-traffic keywords for your business. Our team conducts thorough research to understand yourer.</p>
                </div>
            </div>
        </div>
        <hr>
    </div>


    <div class="space-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-4">
                    <div class="title-area text-center">
                    </div>
                    <div class="row gy-4 flex-column">
                        <div class="col-xl-12 col-md-12">
                            <div class="contact-media">
                                <div class="icon-btn">
                                    <i class="fa-sharp fa-light fa-location-dot"></i>
                                </div>
                                <div class="media-body">
                                    <h5 class="box-title">Our Address</h5>
                                    <p class="box-text">374 William S Canning Blvd, Fall River MA 2721, USA</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <div class="contact-media">
                                <div class="icon-btn">
                                    <i class="fa-light fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <h5 class="box-title">Contact Number</h5>
                                    <p class="box-text">
                                        <a href="tel:+13217322978">Mobile: +13217322978</a>
                                        <a href="mailto:saorhelp@gmail.com">Email: saorhelp@gmail.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <div class="contact-media">
                                <div class="icon-btn">
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
                <div class="col-8">
                    <div class="">
                        <h3 class="text-center mb-20 form-head">Please Fill In The Form Below</h3>

                        <form action="mail.php" method="POST" class="contact-form style2 ajax-contact">

                            <div class="row">

                                <div class="form-group col-md-6">
                                    <i class="far fa-user"></i>
                                    <label for="nameInput">Your Name</label>
                                    <input type="text" class="form-control" name="nameInput" id="nameInput" placeholder="Enter your Name">
                                </div>

                                <div class="form-group col-md-6">
                                    <i class="far fa-envelope"></i>
                                    <label for="emailInput">Email</label>
                                    <input type="text" class="form-control" name="emailInput" id="emailInput" placeholder="Enter your Email">
                                </div>



                                <div class="form-group col-md-6">
                                    <i class="fal fa-phone"></i>
                                    <label for="phoneInput">Phone</label>
                                    <input type="text" class="form-control" name="phoneInput" id="phoneInput" placeholder="Enter your Phone">
                                </div>

                                <div class="form-group col-md-6">

                                    <label for="serviceSelect">Service you want?</label>
                                    <select class="form-select" id="serviceSelect">
                                        <option selected disabled>Choose an option</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>


                                </div>

                                <div class="form-group col-md-6">

                                    <label for="budgetSelect">Marketing Budget</label>
                                    <select class="form-select" id="budgetSelect">
                                        <option selected disabled>Choose an option</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>


                                </div>

                                <div class="form-group col-md-6">

                                    <label for="aboutUsSelect">How did you hear about Us?</label>
                                    <select class="form-select" id="aboutUsSelect">
                                        <option selected disabled>Choose an option</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>


                                </div>
                                <div class="form-group col-12">

                                    <label for="messageforus">Your Message</label>
                                    <textarea class="form-control" id="messageforus" placeholder="Enter your message" rows="4"></textarea>
                                    <i class="fal fa-pencil"></i>
                                    <!-- <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Write a message*"></textarea> -->

                                </div>
                                <div class="col-12 form-group mb-0 text-center">
                                    <button class="th-btn th-radius">Submit Message</button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection