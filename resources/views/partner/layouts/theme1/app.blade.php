<!doctype html>
<html lang="en">

<head>
  <link rel="stylesheet" href="{{ url('storage/css/common.css') }}">
    @include('components.'.$settings->partner_theme.'.head_tag')
    @if (isset($head_tag))
        {{ $head_tag }}
    @endif

    
</head>

<body data-topbar="dark">

    <div id="layout-wrapper">


        @include('partner.layouts.'.$settings->partner_theme.'.header')
        
        @include('partner.layouts.'.$settings->partner_theme.'.left_sidebar')

        <div class="main-content">
            <div class="page-content">
                {{ $slot }}
            </div>
            @include('partner.layouts.'.$settings->partner_theme.'.footer')

        </div>

    </div>

    <div class="rightbar-overlay"></div>
    @include('components.'.$settings->partner_theme.'.js')


    <script src="{{ url('storage/js/common.js') }}">  </script>



</body>

</html>
