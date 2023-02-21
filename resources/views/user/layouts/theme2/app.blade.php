<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('user.layouts.' . $settings->user_theme . '.head_tag')
    @if(isset($head)) {{ $head }} @endif
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

@php
if (url()->current() == route('home')) {
    // $body_class = 'hp-9 hd-white';
    $body_class = 'inner-pages listing agents hd-white';
} elseif (url()->current() == route('about')) {
    $body_class = 'inner-pages about p-bl';
} elseif (url()->current() == route('contact')) {
    $body_class = 'inner-pages p-bl';
}else {
    $body_class = 'inner-pages listing agents hd-white';
    # code...
}

    @endphp
    
<body class="{{ $body_class }}">

    <div id="wrapper">
        @include('user.layouts.' . $settings->user_theme . '.header')
        <div class="clearfix"></div>
        {{ $slot }}
        @include('user.layouts.' . $settings->user_theme . '.footer')
        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up"
                aria-hidden="true"></i></a>
        @include('user.layouts.' . $settings->user_theme . '.register')
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        @include('user.layouts.' . $settings->user_theme . '.js')
        @if(isset($custom_js)) {{ $custom_js }} @endif
    </div>
</body>

</html>
