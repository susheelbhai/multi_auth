<x-user-layout>

    <div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="http://localhost/slist/storage/theme/theme2/images/listing-details/1.jpg"
                        class="grid image-link">
                        <img src="http://localhost/slist/storage/theme/theme2/images/listing-details/1.jpg"
                            class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="http://localhost/slist/storage/theme/theme2/images/listing-details/2.jpg"
                        class="grid image-link">
                        <img src="http://localhost/slist/storage/theme/theme2/images/listing-details/2.jpg"
                            class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="http://localhost/slist/storage/theme/theme2/images/listing-details/3.jpg"
                        class="grid image-link">
                        <img src="http://localhost/slist/storage/theme/theme2/images/listing-details/3.jpg"
                            class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="http://localhost/slist/storage/theme/theme2/images/listing-details/4.jpg"
                        class="grid image-link">
                        <img src="http://localhost/slist/storage/theme/theme2/images/listing-details/4.jpg"
                            class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="http://localhost/slist/storage/theme/theme2/images/listing-details/5.jpg"
                        class="grid image-link">
                        <img src="http://localhost/slist/storage/theme/theme2/images/listing-details/5.jpg"
                            class="img-fluid" alt="#">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="http://localhost/slist/storage/theme/theme2/images/listing-details/6.jpg"
                        class="grid image-link">
                        <img src="http://localhost/slist/storage/theme/theme2/images/listing-details/6.jpg"
                            class="img-fluid" alt="#">
                    </a>
                </div>
            </div>

            <div class="swiper-pagination swiper-pagination-white"></div>

            <div class="swiper-button-next swiper-button-white mr-3"></div>
            <div class="swiper-button-prev swiper-button-white ml-3"></div>
        </div>
    </div>

    <section class="listing blog details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 blog-pots">
                    <!-- Block heading end -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="detail-wrapper">
                                <div class="detail-wrapper-body">
                                    <div class="listing-title-bar">
                                        <h3> {{ $data->business_name ?? '' }} <span class="mrg-l-5 category-tag">
                                                @if (isset($data['category']))
                                                    {{ $data['category']->name ?? 'jh' }}
                                                @endif
                                            </span></h3>
                                        <div class="mt-3">
                                            <a href="#listing-location" class="listing-address">
                                                <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i>
                                                {{ $data->business_address ?? '' }}
                                            </a>
                                            <div class="rating-box mt-3">
                                                <div class="detail-list-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <a href="#" class="detail-rating-count">16 Rating</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-info details overview">
                                <h5 class="mb-4">Overview</h5>
                                {!! $data->long_description ?? '' !!}
                            </div>
                        </div>
                    </div>
                    <!-- cars content -->
                    <div class="homes-content details amenities d-none">
                        <!-- title -->
                        <h5 class="mb-4">Amenities</h5>
                        <!-- cars List -->
                        <div class="ameneniti">
                            <ul class="homes-list amen clearfix">
                                <li>
                                    <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                    <span>Elevator in building</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                    <span>Friendly Workspace</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                    <span>Instant Book</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                    <span>Wireless Internet</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                    <span>Events</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                    <span>Smoking Allowed</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                    <span>Free Parking</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                    <span>Door attendant</span>
                                </li>
                                <li>
                                    <i class="fa fa-check-square mr-2" aria-hidden="true"></i>
                                    <span>Security cameras</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="property-location mp d-none">
                        <div class="departments-details">
                            <h5 class="mb-4">Pricing</h5>
                            <div class="row">
                                <div class="col-md-12 dep-list-1">
                                    <div class="depar-title">
                                        <h4 class="mt-1 ml-2">Menu</h4>
                                        <h4 class="mt-1 mr-2">Price</h4>
                                    </div>
                                    <div class="depart-list">
                                        <ul class="mt-4 ml-4 mb-0">
                                            <li>Hot & Crispy Chicken</li>
                                            <li>Classic Burger</li>
                                            <li>Pizza</li>
                                            <li class="pb-0">Cheddar Burger</li>
                                        </ul>
                                        <ul class="mt-4 mr-4 mb-0">
                                            <li>$50</li>
                                            <li>$60</li>
                                            <li>$30</li>
                                            <li class="pb-0">$80</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="property wprt-image-video w50 pro d-none">
                        <h5>Video</h5>
                        <img alt="image"
                            src="http://localhost/slist/storage/theme/theme2/images/popular-listings/1.jpg">
                        <a class="icon-wrap popup-video popup-youtube"
                            href="https://www.youtube.com/watch?v=14semTlwyUY">
                            <i class="fa fa-play"></i>
                        </a>
                        <div class="iq-waves">
                            <div class="waves wave-1"></div>
                            <div class="waves wave-2"></div>
                            <div class="waves wave-3"></div>
                        </div>
                    </div>
                    <div class="property-location mp">
                        <h5>Location</h5>
                        <div class="divider-fade"></div>
                        <iframe src="{{ $data->map_src }}" width="100%" height="450" style="border:0;"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="property-location mp d-none">
                        <h5>Customer feedback</h5>
                        <div class="review-content-wrap">
                            <div class="review-content">
                                <div class="review-rating-summary">
                                    <div class="review-rating-summary-inner">
                                        <div class="stats-average__count">
                                            <span class="stats-average__count-count"> {{ number_format($reviews->AVG('rating'),2 ) }}</span>
                                        </div>
                                        <!-- end stats-average__count -->
                                        <div class="stats-average__rating p-0">
                                            <ul class="p-0 m-0">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <p class="text-center mb-2">out of 5.0</p>
                                        <!-- end stats-average__rating -->
                                    </div>
                                    <!-- end review-rating-summary-inner -->
                                    <div class="course-rating-text">
                                        <p class="course-rating-text__text">Food Rating</p>
                                    </div>
                                    <!-- end course-rating-text -->
                                </div>
                                <!-- end review-rating-summary -->
                                <div class="review-rating-widget">
                                    <div class="review-rating-rate">
                                        <ul class="rate pl-00">
                                            <li class="review-rating-rate__items">
                                                <div class="review-rating-inner__item">
                                                    <div class="review-rating-rate__item-text">5 stars</div>
                                                    <div class="review-rating-rate__item-fill">
                                                        <span
                                                            class="review-rating-rate__item-fill__fill rating-fill-width1"></span>
                                                    </div>
                                                    <div class="review-rating-rate__item-percent-text">77 %</div>
                                                </div>
                                            </li>
                                            <li class="review-rating-rate__items">
                                                <div class="review-rating-inner__item">
                                                    <div class="review-rating-rate__item-text">4 stars</div>
                                                    <div class="review-rating-rate__item-fill">
                                                        <span
                                                            class="review-rating-rate__item-fill__fill rating-fill-width2"></span>
                                                    </div>
                                                    <div class="review-rating-rate__item-percent-text">54 %</div>
                                                </div>
                                            </li>
                                            <li class="review-rating-rate__items">
                                                <div class="review-rating-inner__item">
                                                    <div class="review-rating-rate__item-text">3 stars</div>
                                                    <div class="review-rating-rate__item-fill">
                                                        <span
                                                            class="review-rating-rate__item-fill__fill rating-fill-width3"></span>
                                                    </div>
                                                    <div class="review-rating-rate__item-percent-text">14 %</div>
                                                </div>
                                            </li>
                                            <li class="review-rating-rate__items">
                                                <div class="review-rating-inner__item">
                                                    <div class="review-rating-rate__item-text">2 stars</div>
                                                    <div class="review-rating-rate__item-fill">
                                                        <span
                                                            class="review-rating-rate__item-fill__fill rating-fill-width4"></span>
                                                    </div>
                                                    <div class="review-rating-rate__item-percent-text">5 %</div>
                                                </div>
                                            </li>
                                            <li class="review-rating-rate__items">
                                                <div class="review-rating-inner__item">
                                                    <div class="review-rating-rate__item-text">1 stars</div>
                                                    <div class="review-rating-rate__item-fill">
                                                        <span
                                                            class="review-rating-rate__item-fill__fill rating-fill-width5"></span>
                                                    </div>
                                                    <div class="review-rating-rate__item-percent-text">2 %</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end review-rating-rate -->
                                </div>
                                <!-- end review-rating-widget -->
                            </div>
                            <!-- end review-content -->
                        </div>
                        <!-- end review-content-wrap -->
                    </div>
                    <!-- START SECTION ASSIGNED AGENTS -->
                    <section class="reviews comments">
                        <h3 class="mb-5"> {{ count($reviews) }} Reviews <span class="float-right">{{ number_format($reviews->AVG('rating'),2 ) }} Out of 5</span> </h3>
                        @foreach ($reviews as $i)
                        <div class="row mb-5">
                            <ul class="col-12 commented pl-0">
                                <li class="comm-inf">
                                    <div class="col-md-2 d-none">
                                        <img src="http://localhost/slist/storage/theme/theme2/images/testimonials/ts-5.jpg"
                                            class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-10 comments-info ml-5">
                                        <div class="conra">
                                            <h5 class="mb-2">{{ $i->name }}</h5>
                                            <div class="rating-box">
                                                <div class="detail-list-rating mr-0">
                                                    
                                                    <i class="fa @if($i->rating<1) fa-star-o @else fa-star @endif"></i>
                                                    <i class="fa @if($i->rating<2) fa-star-o @else fa-star @endif"></i>
                                                    <i class="fa @if($i->rating<3) fa-star-o @else fa-star @endif"></i>
                                                    <i class="fa @if($i->rating<4) fa-star-o @else fa-star @endif"></i>
                                                    <i class="fa @if($i->rating<5) fa-star-o @else fa-star @endif"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mb-4 rest">{{ custom_date($i->created_at) }}</p>
                                        <p>{{$i->review}}
                                        </p>
                                        <div class="rest d-none"><img
                                                src="http://localhost/slist/storage/theme/theme2/images/restaurants/4.jpg"
                                                class="img-fluid" alt=""></div>
                                    </div>
                                </li>
                            </ul>
                        </div> 
                        @endforeach
                        
                    </section>
                    <section class="reviews leve-comments details">
                        <form action="{{ route('submit_review', $data->id) }}" method="POST"
                            enctype="multipart/form-data">
                            <div id="add-review" class="add-review-box">
                                <!-- Add Review -->
                                <h3 class="listing-desc-headline margin-bottom-20 mb-4">Add Review</h3>
                                <span class="leave-rating-title mb-3">Your rating for this listing</span>
                                <!-- Rating / Upload Button -->
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <!-- Leave Rating -->
                                        <div class="clearfix"></div>
                                        <div class="leave-rating margin-bottom-30 mr-2">
                                            <input type="radio" name="rating" id="rating-1" value="5" />
                                            <label for="rating-1" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="rating-2" value="4" />
                                            <label for="rating-2" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="rating-3" value="3" />
                                            <label for="rating-3" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="rating-4" value="2" />
                                            <label for="rating-4" class="fa fa-star"></label>
                                            <input type="radio" name="rating" id="rating-5" value="1" />
                                            <label for="rating-5" class="fa fa-star"></label>
                                        </div>
                                        <div class="clearfix">
                                            <p>0 / 5</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Uplaod Photos -->
                                        <div class="add-review-photos margin-bottom-30">
                                            <div class="photoUpload">
                                                <span><i class="sl sl-icon-arrow-up-circle"></i> Upload Photos</span>
                                                <input type="file" class="upload" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 data">

                                        @csrf
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Full Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="phone" class="form-control"
                                                    placeholder="Phone Number" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <textarea class="form-control" id="exampleTextarea" name="review" rows="8" placeholder="Review" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg mt-2">Submit
                                            Review</button>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                    <!-- END SECTION ASSIGNED AGENTS -->
                </div>
                <aside class="col-lg-4 col-md-12 car">
                    <div class="widget">


                        <!-- Start Agent Information -->
                        <div class="sidebar widget-boxed mt-33 mt-5">
                            <div class="widget-boxed-header">
                                <h4><i class="far fa-user pr-3"></i>Contact Info</h4>
                            </div>
                            <div class="widget-boxed-body">
                                <div class="sidebar-widget author-widget2">
                                    <div class="author-box clearfix">
                                        <img src="http://localhost/slist/storage/theme/theme2/images/testimonials/ts-2.jpg"
                                            alt="author-image" class="author__img">
                                        <h4 class="author__title">{{ $data->contact_person_name }}</h4>
                                        <p class="author__meta">Posted 3 days ago</p>
                                    </div>
                                    <ul class="author__contact">
                                        <li><span class="la la-map-marker"><i
                                                    class="fa fa-map-marker"></i></span>{{ $data->business_address }}
                                        </li>
                                        <li><span class="la la-phone"><i class="fa fa-phone"
                                                    aria-hidden="true"></i></span><a
                                                href="#">{{ maskPhone($data->contact_person_phone ?? '9999999999') }}</a>
                                        </li>
                                        <li><span class="la la-envelope-o"><i class="fa fa-envelope"
                                                    aria-hidden="true"></i></span><a
                                                href="#">{{ maskEmail($data->contact_person_email ?? 'email@example.com') }}</a>
                                        </li>
                                    </ul>
                                    <ul class="author__link">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                    <div class="agent-contact-form-sidebar">
                                        <h4><i class="far fa-envelope pr-3"></i>Contact Seller</h4>
                                        <form name="contact_form" method="post"
                                            action="https://code-theme.com/html/listifind/functions.php">
                                            <input type="text" id="fname" name="full_name"
                                                placeholder="Full Name" required />
                                            <input type="number" id="pnumber" name="phone_number"
                                                placeholder="Phone Number" required />
                                            <input type="email" id="emailid" name="email_address"
                                                placeholder="Email Address" required />
                                            <textarea placeholder="Message" name="message" required></textarea>
                                            <input type="submit" name="sendmessage" class="multiple-send-message"
                                                value="Submit Request" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Agent Information -->

                        <!-- Start: Opening hour -->
                        <div class="widget-boxed mt-5 d-none">
                            <div class="widget-boxed-header">
                                <h4><i class="fa fa-clock-o pr-3 padd-r-10"></i>Opening Hours</h4>
                            </div>
                            <div class="widget-boxed-body">
                                <div class="side-list">
                                    <ul>
                                        <li class="pt-0">Monday <span>9 AM - 5 PM</span></li>
                                        <li>Tuesday <span>9 AM - 5 PM</span></li>
                                        <li>Wednesday <span>9 AM - 5 PM</span></li>
                                        <li>Thursday <span>9 AM - 5 PM</span></li>
                                        <li>Friday <span>9 AM - 5 PM</span></li>
                                        <li>Saturday <span>9 AM - 3 PM</span></li>
                                        <li>Sunday <span>Closed</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End: Opening hour -->

                        <!-- Start: Specials offer -->
                        <div class="recent-post tags mt-5 d-none">
                            <div class="widget-boxed-header">
                                <h4><i class="fas fa-utensils pr-3"></i>Specials of the day</h4>
                            </div>
                            <div class="widget-boxed-body">
                                <div class="banner"><img
                                        src="http://localhost/slist/storage/theme/theme2/images/restaurants/banner.png"
                                        alt=""></div>
                            </div>
                        </div>
                        <!-- End: Specials offer -->

                        <div class="widget widget_listings my-5 d-none">
                            <div class="widget-boxed-header">
                                <h4><i class="fa fa-map-marker pr-3"></i>Latest Listings</h4>
                            </div>
                            <div class="widget-boxed-body">
                                <ul>
                                    <li>
                                        <a href="#"><img
                                                src="http://localhost/slist/storage/theme/theme2/images/popular-listings/1.jpg"
                                                alt=""></a>
                                        <div class="overflow-hidden">
                                            <span class="cat mt-0"><a href="#">Luxury Restaurant</a></span>
                                            <h4><a href="#">New York</a></h4>
                                            <span class="rating__star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#"><img
                                                src="http://localhost/slist/storage/theme/theme2/images/popular-listings/2.jpg"
                                                alt=""></a>
                                        <div class="overflow-hidden">
                                            <span class="cat"><a href="#">Gym in Town</a></span>
                                            <h4><a href="#">Toronto</a></h4>
                                            <span class="rating__star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#"><img
                                                src="http://localhost/slist/storage/theme/theme2/images/popular-listings/3.jpg"
                                                alt=""></a>
                                        <div class="overflow-hidden">
                                            <span class="cat"><a href="#">Elegant Cafe</a></span>
                                            <h4><a href="#">Boston</a></h4>
                                            <span class="rating__star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#"><img
                                                src="http://localhost/slist/storage/theme/theme2/images/popular-listings/4.jpg"
                                                alt=""></a>
                                        <div class="overflow-hidden">
                                            <span class="cat"><a href="#">Car Dealer</a></span>
                                            <h4><a href="#">New York</a></h4>
                                            <span class="rating__star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="recent-post tags">
                            <div class="widget-boxed-header">
                                <h4><i class="fas fa-tags pr-3"></i>Popular Tags</h4>
                            </div>
                            <div class="widget-boxed-body">
                                <div class="tags">
                                    <span><a href="#" class="btn btn-outline-primary mr-2">Business</a></span>
                                    <span><a href="#" class="btn btn-outline-primary">Restaurant</a></span>
                                </div>
                                <div class="tags">
                                    <span><a href="#" class="btn btn-outline-primary mr-2">Cafe</a></span>
                                    <span><a href="#" class="btn btn-outline-primary">Hotels</a></span>
                                </div>
                                <div class="tags">
                                    <span><a href="#" class="btn btn-outline-primary mr-2">Gym</a></span>
                                    <span><a href="#" class="btn btn-outline-primary">Cinema</a></span>
                                </div>
                                <div class="tags">
                                    <span><a href="#" class="btn btn-outline-primary mr-2">Real
                                            Estates</a></span>
                                    <span><a href="#" class="btn btn-outline-primary">Store</a></span>
                                </div>
                                <div class="tags no-mb">
                                    <span><a href="#" class="btn btn-outline-primary mr-2">Conference</a></span>
                                    <span><a href="#" class="btn btn-outline-primary">Places</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 1,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 0,
                },
            }
        });
    </script>

</x-user-layout>
