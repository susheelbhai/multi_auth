<header class="header-area">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <!-- Navbar Brand --><a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('storage/themes/theme2') }}/img/core-img/logo-white.png" alt=""></a>
        <!-- Navbar Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#saasboxNav" aria-controls="saasboxNav" aria-expanded="false" aria-label="Toggle navigation"><i class="bi bi-grid"></i></button>
        <!-- Navbar Nav -->
        <div class="collapse navbar-collapse" id="saasboxNav">
          <ul class="navbar-nav navbar-nav-scroll">
            @foreach ($menu as $i)
            
                        <li class="@if (isset($i['menu2'])) sb-dropdown @endif"><a href="{{ $i['href']}}">{{ $i['name'] }}</a>
                            @if (isset($i['menu2']))
                                <ul class="sb-dropdown-menu">
                                    @foreach ($i['menu2'] as $j)
                                        <li class="@if (isset($j['menu3'])) sb-dropdown @endif">  <a href="{{ $j['href']}}">{{ $j['name'] }}</a>
                                            @if (isset($j['menu3']))
                                                <ul class="sb-dropdown-menu">
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
          <!-- Login Button -->
          <div class="ms-auto mb-3 mb-lg-0"><a class="btn btn-warning btn-sm" href="{{ route('login') }}">Log In</a></div>
        </div>
      </div>
    </nav>
  </header>