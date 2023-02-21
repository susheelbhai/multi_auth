<!doctype html>
<html lang="en">

<head>
  <link rel="stylesheet" href="{{ url('storage/css/common.css') }}">
    @include('components.'.$settings->admin_theme.'.head_tag')
    @if (isset($head_tag))
        {{ $head_tag }}
    @endif

    
</head>

<body data-topbar="dark">

    <div id="layout-wrapper">


        @include('admin.layouts.'.$settings->admin_theme.'.header')
        
        @include('admin.layouts.'.$settings->admin_theme.'.left_sidebar')

        <div class="main-content">
            <div class="page-content">
                {{ $slot }}
            </div>
            @include('admin.layouts.'.$settings->admin_theme.'.footer')

        </div>

    </div>

    <div class="rightbar-overlay"></div>
    @include('components.'.$settings->admin_theme.'.js')


    <script src="{{ url('storage/js/common.js') }}">  </script>



</body>

</html>
