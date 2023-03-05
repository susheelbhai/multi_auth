<!doctype html>
<html lang="en">

<head>
  <link rel="stylesheet" href="{{ url('storage/css/common.css') }}">
            @relativeInclude('head_tag')
    @if (isset($head_tag))
        {{ $head_tag }}
    @endif

    
</head>

<body data-topbar="dark">

    <div id="layout-wrapper">


        @relativeInclude('header')
        
        @relativeInclude('left_sidebar')

        <div class="main-content">
            <div class="page-content">
                {{ $slot }}
            </div>
            @relativeInclude('footer')

        </div>

    </div>

    <div class="rightbar-overlay"></div>
            @relativeInclude('js')


    <script src="{{ url('storage/js/common.js') }}">  </script>



</body>

</html>
