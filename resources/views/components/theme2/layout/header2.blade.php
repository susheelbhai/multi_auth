<header id="header-container" class="header head-tr">
    <!-- Header -->
    <div id="header" class="head-tr bottom">
        <div class="container container-header">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="{{ route('home') }}"><img src="{{ asset('storage/common/images/logo/' . $settings->dark_logo) }}" alt=""></a>
                </div>
                <!-- Mobile Navigation -->
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
                <!-- Main Navigation -->
                <nav id="navigation" class="style-1 head-tr">
                    <ul id="responsive">
                        @foreach ($menu as $i)
                        <li><a href="{{ $i['href']}}">{{ $i['name'] }}</a>
                            @if (isset($i['menu2']))
                                <ul>
                                    @foreach ($i['menu2'] as $j)
                                        <li>  <a href="{{ $j['href']}}">{{ $j['name'] }}</a>
                                            @if (isset($j['menu3']))
                                                <ul>
                                                    @foreach ($j['menu3'] as $k)
                                                    <li> <a href="{{ $k['href']}}">{{ $k['name'] }}</a> </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </nav>
                <!-- Main Navigation / End -->
            </div>
            <!-- Left Side Content / End -->

            <!-- Right Side Content / End -->
            <div class="right-side d-none d-none d-lg-none d-xl-flex">
                <!-- Header Widget -->
                <div class="header-widget">
                    <a href="{{ route('partner.business.index') }}" class="button border">Add Listing<i class="fas fa-laptop-house ml-2"></i></a>
                </div>
                <!-- Header Widget / End -->
            </div>
            <!-- Right Side Content / End -->

            @guest('partner')
            <div style="width: 140px" class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                <!-- Header Widget -->
                <div class="header-widget sign-in">
                    <div class="show-reg-form modal-open"><a href="storage/theme/theme2/#">Partner Login</a></div>
                </div>
                <!-- Header Widget / End -->
            </div>
            @else
            <div class="header-user-menu user-menu add">
                <div class="header-user-name">
                    <span><img src="{{ url('storage/partner/images/profile/').'/'. Auth::guard('partner')->user()->profile_pic }}" alt=""></span> {{ Auth::guard('partner')->user()->name }}
                </div>
                <ul>
                    <li><a href="{{ route('partner.profile.edit') }}">Edit profile</a></li>
                    <li><a href="{{ route('partner.business.index') }}">Add Listing</a></li>
                    <li>
                        <form action="{{ route('partner.logout') }}" method="post">
                            @csrf
                            <button type="submit">Log Out</button>
                        </form>
                </ul>
            </div>
            @endguest


        </div>
    </div>
    <!-- Header / End -->

</header>