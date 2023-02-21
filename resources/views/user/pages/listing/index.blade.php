<x-user-layout>

    <style>
        section.popular.portfolio{padding-top: 0 !important}
    </style>

    <!-- START SECTION LISTING RIGHT -->
    <section class="listings-right popular list featured portfolio blog ">
        <div class="container">
            @include('user.pages.listing._header_ad')
            @include('user.pages.listing._header')


            <div class="row">
                <div class="col-lg-8 col-md-12 blog-pots listing-list">
                    <!-- Block heading Start-->
                    @include('user.pages.listing._headings')

                    <!-- Block heading end -->
                    <div class="row featured portfolio-items">


                        @foreach ($data as $i)
                            <div class="item col-lg-5 col-md-12 col-xs-12 landscapes sale pr-0 pb-0 my-1 ft">
                                <div class="project-single mb-0 bb-0" data-aos="fade-up">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="#" class="homes-img hover-effect">
                                                <div class="homes-tag button alt featured f2">Popular</div>
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
                                                <img src="{{ url('storage/business/images', $i->display_img) }}"
                                                    alt="home-1" class="img-responsive">
                                                <div class="overlay"></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="col-lg-7 col-md-12 homes-content pb-0 my-1 ft mb-44" data-aos="fade-up">
                                <!-- homes address -->
                                <div class="enty">
                                    <a href="{{ route('listingDetail', $i->id) }}">
                                        <h3 class="mb-4">{{ $i->business_name ?? '' }}</h3>
                                    </a>
                                    <ul class="homes-list clearfix">
                                        <li>
                                            <i class="fa fa-map-marker"></i>
                                            <span>{{ $i->business_address }}</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <span>{{ maskPhone($i->business_phone ?? '9999999999') }}</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <span>{{ maskEmail($i->business_email ?? 'aaa@aaa.aaa') }}</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Price -->
                                <div class="price-properties">
                                    <ul class="starts text-left mb-0">
                                        <li class="mt-3"><img src="storage/theme/theme2/images/icons/8.png"
                                                width="20" class="mr-2" alt="">
                                            @if (isset($i['category']))
                                                {{ $i['category']->name }}
                                            @endif {{ $i['subCategory']->name ?? '' }}
                                        </li>
                                    </ul>
                                    <div class="fr-grid-thumb">
                                        <a href="#">
                                            <div class="overall-rate"><i class="fas fa-check"></i></div>
                                            <img src="{{ url('storage/business/images', $i->logo) }}"
                                                class="img-fluid mx-auto" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>

                </div>

                @include('user.pages.listing._asside')

            </div>
            @include('user.pages.listing._partners')

        </div>
    </section>
    <!-- END SECTION LISTING RIGHT -->

    <x-slot name="custom_js">
        <script>
            $(window).on('scroll load', function() {
                $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
            });

        </script>
        <script>
            $('.style1').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: false,
                autoplayTimeout: 5000,
                responsive: {
                    0: {
                        items: 1
                    },
                    400: {
                        items: 1,
                        margin: 20
                    },
                    500: {
                        items: 1,
                        margin: 20
                    },
                    768: {
                        items: 2,
                        margin: 20
                    },
                    991: {
                        items: 2,
                        margin: 20
                    },
                    1000: {
                        items: 3,
                        margin: 20
                    }
                }
            });

        </script>
        <script>
            $('.style2').owlCarousel({
                loop: true,
                margin: 0,
                dots: false,
                autoWidth: false,
                autoplay: true,
                autoplayTimeout: 5000,
                responsive: {
                    0: {
                        items: 2,
                        margin: 20
                    },
                    400: {
                        items: 2,
                        margin: 20
                    },
                    500: {
                        items: 3,
                        margin: 20
                    },
                    768: {
                        items: 4,
                        margin: 20
                    },
                    992: {
                        items: 5,
                        margin: 20
                    },
                    1000: {
                        items: 6,
                        margin: 20
                    }
                }
            });

        </script>

<script>
    $('.owl_ad').owlCarousel({
        loop: true,
        margin: 0,
        dots: true,
        autoWidth: false,
        autoplay: true,
        autoplayTimeout: 5000,
        items:1
    });

</script>
        <script src="http://localhost/slist/storage/theme/theme2/js/inner.js"></script>
    </x-slot>

</x-user-layout>
