@php
    $settings = Config::get('settings');
@endphp
<!-- START FOOTER -->
<footer class="first-footer">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="netabout">
                        <a href="{{ route('home') }}" class="logo">
                            <img src="{{ asset('storage/common/images/logo/' . $settings->light_logo) }}" alt="netcom">
                        </a>
                        <p> {{ $settings->short_description }}</p>
                    </div>
                    <div class="contactus">
                        <ul>
                            <li>
                                <div class="info">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p class="in-p">{{ $settings->address }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <p class="in-p">{{ $settings->phone }}</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <p class="in-p ti">{{ $settings->email }}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget quick-link clearfix">
                        <h3 class="widget-title">Free listing to all over cities</h3>
                        <div class="quick-links">
                            <ul class="one-half mr-5">
                                <li><a href="{{ route('home') }}">Ahmedabad</a></li>
                                <li><a href="{{ route('home') }}">Bangalore</a></li>
                                <li><a href="{{ route('home') }}">Chandigarh</a></li>
                                <li><a href="{{ route('home') }}">Chennai</a></li>
                                <li><a href="{{ route('home') }}">Coimbatore</a></li>
                                <li><a href="{{ route('home') }}">Delhi-NCR</a></li>
                            </ul>
                            <ul class="one-half">
                                <li><a href="#">Hyderabad</a></li>
                                <li><a href="{{ route('contact') }}">Goa</a></li>
                                <li><a href="{{ route('privacy') }}">Indore</a></li>
                                <li><a href="{{ route('tnc') }}">Jaipur</a></li>
                                <li><a href="{{ route('tnc') }}">Kolkata</a></li>
                                <li><a href="{{ route('tnc') }}">Mumbai</a></li>
                                <li><a href="{{ route('tnc') }}">Mysore</a></li>
                                <li><a href="{{ route('tnc') }}">Nagpur </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget">
                        <h3>Instagram</h3>
                        <ul class="photo">
                            <li class="hover-effect">
                                <figure>
                                    <a href="#"><img src="storage/theme/theme2/images/instagram/inst-1.jpg" alt=""></a>
                                </figure>
                            </li>
                            <li class="hover-effect">
                                <figure>
                                    <a href="#"><img src="storage/theme/theme2/images/instagram/inst-2.jpg" alt=""></a>
                                </figure>
                            </li>
                            <li class="hover-effect">
                                <figure>
                                    <a href="#"><img src="storage/theme/theme2/images/instagram/inst-3.jpg" alt=""></a>
                                </figure>
                            </li>
                            <li class="hover-effect">
                                <figure>
                                    <a href="#"><img src="storage/theme/theme2/images/instagram/inst-4.jpg" alt=""></a>
                                </figure>
                            </li>
                            <li class="hover-effect">
                                <figure>
                                    <a href="#"><img src="storage/theme/theme2/images/instagram/inst-5.jpg" alt=""></a>
                                </figure>
                            </li>
                            <li class="hover-effect">
                                <figure>
                                    <a href="#"><img src="storage/theme/theme2/images/instagram/inst-6.jpg" alt=""></a>
                                </figure>
                            </li>
                            <li class="hover-effect mb-0">
                                <figure>
                                    <a href="#"><img src="storage/theme/theme2/images/instagram/inst-7.jpg" alt=""></a>
                                </figure>
                            </li>
                            <li class="hover-effect mb-0">
                                <figure>
                                    <a href="#"><img src="storage/theme/theme2/images/instagram/inst-8.jpg" alt=""></a>
                                </figure>
                            </li>
                            <li class="hover-effect mb-0">
                                <figure>
                                    <a href="#"><img src="storage/theme/theme2/images/instagram/inst-9.jpg" alt=""></a>
                                </figure>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="newsletters">
                        <h3>Newsletters</h3>
                        <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive news in your inbox.</p>
                    </div>
                    <form class="bloq-email mailchimp form-inline" method="post">
                        <label for="subscribeEmail" class="error"></label>
                        <div class="email">
                            <input type="email" id="subscribeEmail" name="EMAIL" placeholder="Enter Your Email">
                            <input type="submit" value="Subscribe">
                            <p class="subscription-success"></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="second-footer">
        <div class="container">
            <p>{{ $settings->app_name }} ©2021 All rights reserved. </p>
            <ul class="netsocials">
                <li><a href="{{ $settings->facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="{{ $settings->twitter }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="{{ $settings->instagram }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="{{ $settings->linkedin }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</footer>