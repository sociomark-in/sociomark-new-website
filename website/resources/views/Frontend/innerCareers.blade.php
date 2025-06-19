@extends('Frontend.layout.app')

@section('content')
    <main id="contact">
        <section style="margin-top: 66px;">

        </section>

        <div class="overflow-hidden space contact-head">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="title-area text-center text-xl-start col-md-12 head-text-div mt-1 pl-0">
                        <h2 class="sec-title head-text head-mbl-text text-blue" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            Business Development (UAE)
                        </h2>
                    </div>
                    <div class="text-center text-xl-start col-md-12 pl-0">

                        <p class="sec-para text-blue"><b> Preferred Cities:-</b> </p>
                        <p class="sec-para">Mumbai, Navi Mumbai</p>
                        <p class="sec-para text-blue"><b> Business Development Job Summary:-</b></p>
                        <p class="sec-para">As a <b>Business Development</b>, you will be an integral part of our dynamic
                            team, assisting in the growth and expansion of our business. This internship offers a hands-on
                            opportunity to gain valuable experience in various aspects of business development, sales, and
                            strategic planning.</p>
                        <br>
                        <p class="sec-para text-blue"><b> Responsibilities and Duties:-</b></p>
                        <ul>
                            <li class="sec-para"><b class="text-blue">Market Research:</b> Conduct comprehensive market
                                research to identify potential clients, market trends, and competitor analysis.</li>
                            <li class="sec-para"><b class="text-blue">Lead Generation:</b> Assist in generating leads
                                through various channels such as cold calling, email campaigns, and networking events.</li>
                            <li class="sec-para"><b class="text-blue">Client Outreach:</b> Communicate with potential
                                clients to introduce our products/services, understand their needs, and schedule meetings or
                                demos for our sales team.</li>
                            <li class="sec-para"><b class="text-blue">Sales Support:</b> Provide support to the sales team
                                by preparing presentations, proposals, and sales contracts.</li>
                            <li class="sec-para"><b class="text-blue">Data Analysis:</b> Analyze sales data and performance
                                metrics to identify areas for improvement and make data-driven recommendations.</li>
                            <li class="sec-para"><b class="text-blue">Strategy Development:</b> Collaborate with the
                                business development team to develop strategic initiatives for expanding our market reach
                                and increasing revenue.</li>
                            <li class="sec-para"><b class="text-blue">Relationship Management:</b> Build and maintain
                                positive relationships with existing clients to ensure satisfaction and identify upsell
                                opportunities.</li>
                            <li class="sec-para"><b class="text-blue">Administrative Tasks:</b> Assist with administrative
                                tasks such as maintaining CRM databases, organizing documents, and scheduling meetings.</li>
                        </ul><br>
                        <p class="sec-para text-blue"><b>Required Qualifications and Skills:-</b></p>

                        <ul>
                            <li class="sec-para">Currently enrolled in a Bachelor's or Master's degree program in Business
                                Administration, Marketing, Economics, or related field.</li>
                            <li class="sec-para">Strong analytical and research skills with the ability to interpret data
                                and draw insights.</li>
                            <li class="sec-para">Excellent communication and interpersonal skills, both written and verbal.
                            </li>
                            <li class="sec-para">Highly organized with the ability to manage multiple tasks and prioritize
                                deadlines.</li>
                            <li class="sec-para">Proficiency in Microsoft Office Suite (Word, Excel, PowerPoint) and CRM
                                software (e.g., Salesforce).</li>
                            <li class="sec-para">Previous experience in sales, marketing, or business development is a plus.
                            </li>
                        </ul><br>
                        <p class="sec-para text-blue"><b> Benefits:-</b></p>

                        <ul>
                            <li class="sec-para">Hands-on experience in business development within a fast-paced and
                                innovative environment.</li>
                            <li class="sec-para">Mentorship from experienced professionals in the industry.</li>
                            <li class="sec-para">Networking opportunities with industry leaders and professionals.</li>
                            <li class="sec-para">Potential for career advancement and full-time employment opportunities
                                based on performance.</li>
                        </ul>

                        <p class="sec-para text-blue"><b> Duration:- </b></p>
                        <p class="sec-para">Duration of the internship-6 months</p>

                        <p class="sec-para text-blue"><b>Industry:-</b></p>
                        <p class="sec-para">Digital Marketing</p>

                        <p class="sec-para text-blue"><b>Role:-</b></p>
                        <p class="sec-para">Business Development Role</p>

                        <p class="sec-para text-blue"><b>Employment Type:-</b></p>
                        <p class="sec-para">Full Time</p>
                        <a href="#" class="th-btn th-icon" data-bs-toggle="modal"
                            data-bs-target="#getAQuoteModal">Apply Now<i class="fa-solid fa-arrow-right ms-2"></i></a>

                    </div>
                </div>
            </div>

        </div>
        <!-- popup modal  start-->
        <!-- Modal -->
        <div class="modal fade" id="getAQuoteModal" tabindex="-1" aria-labelledby="getAQuoteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content contact-form style2" style="padding: 10px 10px;">
                    <div class="modal-header">
                        <h2 class="modal-title fs-5 text-blue" id="getAQuoteModalLabel">Apply Now</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <!-- Contact Popup Form -->
                            <!-- Contact Popup Form -->
                            <form action="{{ route('jobStore') }}" method="POST" id="popupForm"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name"><b>Your Name</b><span
                                            class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" id="popName" placeholder="Enter your Name"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="email"><b>Email</b><span
                                            class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            name="email" id="popEmail" placeholder="Enter your Email"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="phone"><b>Phone</b><span
                                            class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                            name="phone" id="popPhone" placeholder="Enter your Phone"
                                            value="{{ old('phone') }}" maxlength="10" pattern="\d{10}">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="cv"><b>Upload CV</b><span
                                            class="text-danger">*</span></label>
                                        <input type="file" class="form-control @error('cv') is-invalid @enderror"
                                            name="cv" id="cv">
                                        @error('cv')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="plinks"><b>Profile Links</b></label>
                                        <input type="text" class="form-control @error('plinks') is-invalid @enderror"
                                            name="plinks" id="plinks" placeholder="Enter your Profile Links"
                                            value="{{ old('plinks') }}">
                                        @error('plinks')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-12 form-group mb-0 text-center">
                                        <button type="submit" class="th-btn th-radius">Send</button>
                                    </div>
                                </div>
                            </form>

                            <script type="text/javascript">
                                $.validator.addMethod("emailregex", function(value, element) {
                                    return this.optional(element) || /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/i.test(value);
                                });

                                $.validator.addMethod("letters", function(value, element) {
                                    return this.optional(element) || /^[a-zA-Z\s']*$/i.test(value);
                                });

                                $.validator.addMethod("numbers", function(value, element) {
                                    return this.optional(element) || /^[0-9]{10}$/.test(value);
                                });

                                $('#popupForm').validate({
                                    rules: {
                                        name: {
                                            required: true,
                                            letters: true,
                                        },
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

                                    },
                                    messages: {
                                        name: {
                                            required: 'This Name field is required',
                                            letters: 'Only Letters & Spaces are Allowed.'
                                        },
                                        phone: {
                                            required: 'This Phone field is required',
                                            numbers: 'Please enter 10 digits',
                                            minlength: 'Phone number must be 10 digits',
                                            maxlength: 'Phone number must be 10 digits',
                                        },

                                        email: 'Please enter a Valid Email Id',

                                    },
                                    submitHandler: function(form) {
                                        form.submit();
                                    }
                                });
                            </script>


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
    </main>
@endsection
