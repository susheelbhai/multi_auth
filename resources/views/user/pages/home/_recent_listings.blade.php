<section class="popular portfolio freelancers">
    <div class="container">
        <div class="sec-title">
            <h2><span>Recent </span>Listings</h2>
            <p>What are you interested.</p>
        </div>
        <div class="portfolio col-xl-12">
            <div class="slick-lancers">
                @foreach ($recent_listings as $i)
                <div class="agents-grid" data-aos="fade-up">
                    <div class="landscapes">
                        <div class="project-single">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="{{ route('listingDetail',$i->id) }}" class="homes-img hover-effect">
                                        <div class="homes-tag button alt featured f1">Fetured</div>
                                        <div class="homes-tag button sale rent"><i class="fa fa-heart-o"></i>
                                            <p>163</p>
                                        </div>
                                        <div class="homes-price">
                                            <ul class="starts text-left mb-0">
                                                <li class="mb-0"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="mb-0"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="mb-0"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="mb-0"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="mb-0"><i class="fa fa-star"></i>
                                                </li>
                                                <li class="ml-1">( 6 Reviews )</li>
                                            </ul>
                                        </div>
                                        <img src="{{ url('storage/business/images',$i->display_img)  }}" alt="home-1" class="img-responsive">
                                        <div class="overlay"></div>
                                    </a>
                                </div>
                                <div class="fr-grid-thumb">
                                    <a href="{{ route('listingDetail',$i->id) }}">
                                        <div class="overall-rate"><i class="fas fa-check"></i></div>
                                        <img src="{{ url('storage/business/images',$i->logo)  }}" class="img-fluid mx-auto" alt="" />
                                    </a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <a href="storage/theme/theme2/listing-details.html"><h3>{{ $i->business_name }}</h3></a>
                                <!-- homes List -->
                                <ul class="homes-list clearfix">
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        <span>{{ $i->business_address }}</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <span>{{ maskPhone($i->contact_person_phone ?? '9999999999') }}</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <span> {{ maskEmail($i->contact_person_email ?? 'aa@example.com'); }} </span>
                                    </li>
                                </ul>
                                <div class="footer mt-3 img-2">
                                    <a href="storage/theme/theme2/listing-details.html">
                                        <img src="storage/theme/theme2/images/icons/2.png" width="20" class="mr-2" alt=""> {{ $i['category']->name ?? ''.', '. $i['subCategory']->name ?? ''}}
                                    </a>
                                    <span>
                        <i class="fas fa-lock-open"></i> Open Now
                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
</section>