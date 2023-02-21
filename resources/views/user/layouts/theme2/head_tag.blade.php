<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<style>
    :root {
        --color1: {{ Config::get('settings')['color1'] }};
        --color2: {{ Config::get('settings')['color2'] }};
        --color3: {{ Config::get('settings')['color3'] }};
    }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- FAVICON -->
<link rel="shortcut icon" type="image/x-icon"
    href="{{ asset('storage/common/images/logo/' . Config::get('settings')['favicon']) }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/jquery-ui.css') }}">
<!-- GOOGLE FONTS -->
<link href="https://fonts.googleapis.com/css?family=Asap:400,400i%7CMontserrat:600,700,800" rel="stylesheet">
<!-- FONT AWESOME -->
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/fontawesome-all.min.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/fontawesome-5-all.min.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/font-awesome.min.css') }}">
<!-- Slider Revolution CSS Files -->
<link rel="stylesheet" href="{{ url('storage/theme/theme2/revolution/css/settings.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/revolution/css/layers.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/revolution/css/navigation.css') }}">
<!-- ARCHIVES CSS -->
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/search-form.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/search.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/animate.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/aos.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/aos2.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/lightcase.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/owl-carousel.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/menu.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/slick.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/map-animation.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/styles.css') }}">
<link rel="stylesheet" id="color" href="{{ url('storage/theme/theme2/css/default.css') }}">

<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/colors.css') }}">
<link rel="stylesheet" href="{{ url('storage/theme/theme2/css/swiper.min.css') }}">

<script src="{{ url('storage/theme/theme2/js/jquery-3.5.1.min.js') }}"></script>

<script src="{{ url('storage/theme/theme2/js/swiper.min.js') }}"></script>
