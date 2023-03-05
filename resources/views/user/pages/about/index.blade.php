<x-user.app-layout>

    <x-slot name="head">
        <meta name="description" content="html 5 template">
        <meta name="author" content="">
        <title>TaxTDS</title>
    </x-slot>

    <section class="headings">
        <div class="text-heading text-center">
            <div class="container">
                <h1>About Us</h1>
                <h2><a href="http://localhost/slist/storage/theme/theme2/index.html">Home </a> &nbsp;/&nbsp; About Us</h2>
            </div>
        </div>
    </section>

    @include('user.pages.about._about-us')
    @include('user.pages.about._vision')
    @include('user.pages.about._counterup')
    {{-- @include('user.pages.about._team') --}}
    @include('user.pages.about._testimonials')
    @include('user.pages.about._partners')

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

        <script src="http://localhost/slist/storage/theme/theme2/js/inner.js"></script>
    </x-slot>
</x-user.app-layout>


