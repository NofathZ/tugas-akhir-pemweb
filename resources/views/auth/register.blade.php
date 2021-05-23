@extends('layouts.navbar')
@push('styles')
    <link rel="stylesheet" href="css/signup.css">
@endpush
@push('menu-items')
<li class="nav-item">
    <a class="nav-link me-3" href="/home">{{ __('Home') }}</a>
</li>
@guest
@if (Route::has('login'))
    <li class="nav-item">
        <a class="nav-link me-3" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
@endif

@if (Route::has('register'))
    <li class="nav-item">
        <a class="nav-link active " href="{{ route('register') }}">{{ __('Register') }}</a>
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
<section id="signup">
    <div class="whitespace"></div>
    <div class="text-center title-text">
        <h6>We're glad you're here!</h6>
        <p>First of all, what do you want to do?</p>
    </div>
    <div id="signup">
        <div class="row flex-center-md">
            <div class="col-md-2"></div>
            <div class="col-md-3 border shadow p-5 mb-5 bg-body rounded-3">
                <div class="panel panel-shadowed text-center">
                    <div class="panel-body">
                        <h5>I am looking for a mentor</h5>
                        <p>Create a <b>mentee</b> account.</p><br>
                        <div><a href="{{ route('mentee-register') }}" type="button" class="btn btn-primary btn-lg">Find a mentor</a></div>
                    </div>
                </div>

            </div>
            <div class="col-md-2 p-5 align-self-center">
                <div class="divider ">
                    <p class="text-center fw-bold">OR</p>
                </div>
            </div>
            <div class="col-md-3 border shadow p-5 mb-5 bg-body rounded-3">
                <div class="panel panel-shadowed text-center">
                    <div class="panel-body">
                        <h5 class="text-heavy">I want to be a mentor</h5>
                        <p translate="signup.sort_description.recruiter">Create a <b>mentor</b> account.</p><br>
                        <div><a href="{{ route('mentor-register') }}" class="btn btn-lg btn-success">Become a Mentor</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection