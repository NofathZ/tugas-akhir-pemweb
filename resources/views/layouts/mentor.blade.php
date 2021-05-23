<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajarin.id</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/css/bootstrap-select.min.css">
    <link href="{{ asset('css/argon.css') }}" rel="stylesheet">
    <link href="{{ asset('libexfile/fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libexfile/nucleo/css/nucleo.css') }}" rel="stylesheet">
</head>

<body>
  
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative input-group-merge">
              <div class="header bg-default">
                <div class="container-fluid">
                  <div class="header-body">
                    <div class="row align-items-center py-2">
                      <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white"><a href="/home">Ajarin.id Mentor</a></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="{{ asset('storage/avatars/'.Auth::user()->id.'/'.Auth::user()->image) }}">
                    {{-- <img alt="Image placeholder" src="{{ asset('img/theme/team-1.jpg')}}"> Pake ini untuk dummy data --}}
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name}}</span>
                    {{-- <span class="mb-0 text-sm  font-weight-bold">Nofath</span> Pake ini untuk dummy data --}}
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="/mentor/setting" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="/mentor/list-mentee" class="dropdown-item">
                  <i class="ni ni-tv-2 text-primary"></i>
                  <span class="nav-link-text">List Mentee</span>
                </a>
                <div class="dropdown-divider"></div>

                <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    
    <!-- Page content -->
    <div class="container-fluid mt-4">
      @yield('content')
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>
  <script src="{{ asset('libexfile/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('libexfile/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('libexfile/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('libexfile/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('libexfile/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <script src="{{ asset('js/form-validation.js') }}"></script>
</body>

</html>
