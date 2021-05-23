<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <link href="{{ asset('css/argon.css') }}" rel="stylesheet">
  @stack('styles')
  <link href="{{ asset('libexfile/fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('libexfile/nucleo/css/nucleo.css') }}" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>

<body>
  <!-- Sidenav -->
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="header bg-default">
                  <div class="container-fluid">
                    <div class="header-body">
                      <div class="row align-items-center py-2">
                        <div class="col-lg-6 col-7">
                          <h6 class="h2 text-white"><a href="/home">Ajarin.id</a></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            {{-- @guest
            @else    
            <li class="nav-item">
              <a href="/mentee/list-mentor">List Mentor</a>
            </li>
            @endguest --}}
            
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
                @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name}}
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <span class="dropdown-item">Money: Rp {{ number_format(Auth::user()->money, $decimals = 0, $decimal_separator=",", $thousand_separator = ".")  }}</span> 
                        <a href="/mentee/redeem-voucher" class="dropdown-item">Redeem Voucher</a> 
                        <a href="/mentee/list-mentor" class="dropdown-item">List Mentor</a> 
                        <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>
    <!-- Page content -->
    {{-- <div class="container-fluid mt-0 mx">
      @yield('content')
    </div> --}}
  </div>

  @yield('content')

  
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script> --}}
  <script src="{{ asset('libexfile/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('libexfile/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('libexfile/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('libexfile/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('libexfile/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>
  {{-- <script src="{{ asset('libexfile/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('libexfile/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('libexfile/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('libexfile/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('libexfile/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <script src="{{ asset('js/form-validation.js') }}"></script> --}}
</body>
</html>
