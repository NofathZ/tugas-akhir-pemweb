@extends('layouts.navbar')
@push('styles')
    <link rel="stylesheet" href="css/login.css">
@endpush
@push('menu-items')
<li class="nav-item">
    <a class="nav-link" href="/home">{{ __('Home') }}</a>
</li>
@guest
@if (Route::has('login'))
    <li class="nav-item">
        <a class="nav-link active" href="{{ route('login') }}">{{ __('Login') }}</a>
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
@endpush


@section('content')
<section id="login-form">
  <div class="whitespace"></div>
  <div class="form-signin border shadow p-3 mb-5 bg-body rounded-3">
      <form class="needs-validation mx-3 my-3" action="{{ route('login') }}" method="POST" novalidate>
      @csrf
          <h1 class="h4 mb-5 fw-bold text-center">Login</h1>
          <div>
              <div class="mb-3 mx-auto">
                  <div class="mb-2">Login as:</div>
                  <div class="mb-4">
                      <input type="radio" class="btn-check" name="user_type" id="mentee" value="mentee" autocomplete="off">
                      <label class="btn btn-outline-primary py-2 px-3" for="mentee">Mentee</label>

                      <input type="radio" class="btn-check" name="user_type" id="mentor" value="mentor"
                          autocomplete="off">
                      <label class="btn btn-outline-primary py-2 px-3" for="mentor">Mentor</label>

                  </div>
              </div>
              <br>
              <div class="form-floating mb-4">
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
                  <label for="email" class="form-label">Email</label>
                  <div class="invalid-feedback" role="alert">
                      Please enter a valid email!
                  </div>
              </div>
              <div class="form-floating mb-4">
                  <input id="password" type="password" class="form-control" name="password" placeholder="Password" minlength="8" pattern="(?=^.{1,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required autocomplete="new-password">
                  <label for="password">Password</label>
                  <div class="invalid-feedback" role="alert">
                      You must enter a password that contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters!
                  </div>
              </div>
          </div>
          <a href="" class="text-end text-decoration-none ">
              <p class="fw-light">Forgot password?</p>
          </a>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <button class="btn btn-primary btn-lg mb-3 col-12 p-3" type="submit">LOGIN</button>
          </div>
          <p class="fw-light fs-6 text-center">Don't have account yet? <a href="/register"
                  class="text-decoration-none">Sign up now!</a></p>
      </form>
  </div>
</section>
@endsection