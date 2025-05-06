<div class="th-blog-wrapper overflow-hidden space" id="contact">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-5 pe-md-5">
                <div class="title-area mb-20">
                    <h2 class="sec-title " data-aos="fade-right" data-aos-delay="100">Start the <span class="highlight-orange">Conversation</span>, <span class="text-blue"> Spark the <span class="big-font">Change</span> </span></h2>
                </div>
                <p class="sec-para mb-35 " data-aos="fade-right" data-aos-delay="100">Whether it’s a big brief or a tiny thought, we’d love to hear what’s on your mind.
                </p>

            </div>
            <div class="col-xl-7">
                <form action="{{ route('contact.store') }}" method="POST" class="contact-form style2" id="contactform">
                    @csrf
                    <input type="hidden" name="utm_source" value="{{ request()->get('utm_source') }}">
                    <input type="hidden" name="utm_medium" value="{{ request()->get('utm_medium') }}">
                    <input type="hidden" name="utm_campaign" value="{{ request()->get('utm_campaign') }}">
                    <input type="hidden" name="utm_term" value="{{ request()->get('utm_term') }}">
                    <input type="hidden" name="utm_content" value="{{ request()->get('utm_content') }}">

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="name">Your Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Enter your Name" value="{{ old('name') }}">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <i class="fas fa-envelope"></i>
                            <label class="form-label" for="email">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Enter your Email" value="{{ old('email') }}">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <i class="fal fa-phone"></i>
                            <label class="form-label" for="phone">Phone</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Enter your Phone" value="{{ old('phone') }}">
                            @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">

                            <label class="form-label" for="service">Service you want?</label>
                            <select class="form-select @error('service') is-invalid @enderror" id="service" name="service">
                                <option selected disabled>Choose an option</option>
                                <option value="Search Engine Optimization">Search Engine Optimization</option>
                                <option value="Website Development">Website Development</option>
                                <option value="Social Media">Social Media</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="Conetnt Marketing">Conetnt Marketing</option>
                                <option value="Performance Marketing">Performance Marketing</option>
                                <option value="Photography & Video Production">Photography & Video Production</option>
                            </select>

                            @error('service')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">

                            <label class="form-label" for="budget">Marketing Budget</label>
                            <select class="form-select @error('budget') is-invalid @enderror" id="budget" name="budget">
                                <option selected disabled>Choose an option</option>
                                <option value="Under ₹ 25000">Under ₹ 25000</option>
                                <option value="₹ 25,000 - ₹ 1,00,000">₹ 25,000 - ₹ 1,00,000</option>
                                <option value="Above ₹ 1,00,000">Above ₹ 1,00,000</option>
                                <option value="Have not Estimated Yet">Have not Estimated Yet</option>
                            </select>
                            @error('budget')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">

                            <label class="form-label" for="aboutUs">How did you hear about Us?</label>
                            <select class="form-select @error('aboutUs') is-invalid @enderror" id="aboutUs" name="aboutUs">
                                <option selected disabled>Choose an option</option>
                                <option value="Through Search
                                        Engines(Google, Bing etc.)">Through Search
                                    Engines(Google, Bing etc.)</option>
                                <option value="Social Media(Facebook,
                                        Instagram etc.)">Social Media(Facebook,
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
                            <textarea class="form-control @error('messageforus') is-invalid @enderror" id="messageforus" placeholder="Enter your message" rows="4" name="messageforus"></textarea>
                            <i class="fal fa-pencil"></i>
                            @error('messageforus')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 form-group mb-0 text-center">
                            <button class="th-btn th-radius">Submit Message</button>
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