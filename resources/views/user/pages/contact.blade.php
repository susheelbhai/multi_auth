<x-user-layout>

    <div class="clearfix"></div>
        <!-- Header Container / End -->

        <section class="headings" style="">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>Contact Us</h1>
                    <h2><a href="index.html">Home </a> &nbsp;/&nbsp; Contact Us</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

    <!-- START SECTION CONTACT US -->
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h3 class="mb-4">Contact Us</h3>
                    <form id="" class="contact-form" name="contactform" method="post" action="{{ route('contact') }}">
                        @csrf
                        <div id="success" class="successform">
                            <p class="alert alert-success font-weight-bold" role="alert">Your message was sent successfully!</p>
                        </div>
                        <div id="error" class="errorform">
                            <p>Something went wrong, try refreshing and submitting the form again.</p>
                        </div>
                        <div class="form-group">
                            <input type="text" required class="form-control input-custom input-full" name="name" placeholder=" Name">
                        </div>
                        <div class="form-group">
                            <input type="text" required class="form-control input-custom input-full" name="phone" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-custom input-full" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control textarea-custom input-full" id="ccomment" name="message" required rows="8" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" id="submit-contact" class="btn btn-primary btn-lg">Send Message</button>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="our-lo property-location mb-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14009.494968557474!2d77.0248827!3d28.6185587!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa4a84b9fff3fdffa!2sMRS%20Global%20Institute%20Of%20Technology!5e0!3m2!1sen!2sin!4v1674232704488!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="contact_us_details d-none">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="c_details_item">
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="media-body">
                                    <p>{{ Config::get('settings')->address }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 email-area mt-44">
                        <div class="c_details_item">
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#">{{ Config::get('settings')->email }}</a>
                                    {{-- <a href="#">info@listifind.com</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 phone-area mt-44">
                        <div class="c_details_item">
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#">{{ Config::get('settings')->phone }}</a>
                                    {{-- <a href="#">+ 1800 456 0300</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION CONTACT US -->


</x-user-layout>
