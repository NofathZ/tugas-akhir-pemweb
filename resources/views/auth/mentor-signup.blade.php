@extends('layouts.navbar')
@push('styles')
    <link rel="stylesheet" href="css/roles-signup.css">
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
<section id="signup-form">
    <div class="whitespace"></div>
    <div class="form-signup border shadow p-3 mb-5 bg-body rounded-3">
        <form class="needs-validation mx-3 my-3 " action="{{ route('register') }}" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
            <h1 class="h4 mb-5 fw-bold text-center">Sign Up as Mentor</h1>
            <div class="form-row">
                <div class="mb-4">
                    <div class="picture-container">
                        <div class="picture">
                            <img src="img/user-circle-solid.svg" class="picture-src" id="profilePreview">
                            <input type="file" name="image" id="imageUpload" accept="image/*">
                        </div>
                    </div>
                </div>
                <div class="form-floating mb-4">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full Name" required autocomplete="name">
                    <label for="name" class="form-label">Full name</label>
                    <div class="invalid-feedback">
                        Please enter a valid name!
                    </div>
                </div>
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

                <div class="form-floating mb-4">
                    <input type="tel" class="form-control" name="phone_number" id="validationPhone" placeholder="Telephone"
                        pattern="\+?([ -]?\d+)+|\(\d+\)([ -]\d+)"
                        required>
                    <label for="validationPhone" class="form-label">Phone number</label>
                    <div class="invalid-feedback">
                        Please enter a valid phone number!
                    </div>
                </div>

                <div class="mb-4">
                    <label for="validationPrice" class="form-label">Price for a Session</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">Rp</span>
                        <input type="text" class="form-control" name="price" id="validationPrice" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                        Please enter the right amount
                    </div>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label for="validationSubjects" class="form-label">Subjects</label>
                    <select class="form-control selectpicker" name="subjects[]" id="validationSubjects" multiple data-actions-box="true" data-selected-text-format="count" required>
                        <option value="1">SD - Matematika</option>
                        <option value="2">SD - IPA</option>
                        <option value="3">SD - IPS</option>
                        <option value="4">SD - Bahasa Inggris</option>
                        <option value="5">SD - Bahasa Indonesia</option>
                        <option value="6">SMP - Matematika</option>
                        <option value="7">SMP - IPA</option>
                        <option value="8">SMP - IPS</option>
                        <option value="9">SMP - Bahasa Inggris</option>
                        <option value="10">SMP - Bahasa Indonesia</option>
                        <option value="11">SMA - Matematika</option>
                        <option value="12">SMA - Biologi</option>
                        <option value="13">SMA - Fisika</option>
                        <option value="14">SMA - Kimia</option>
                        <option value="15">SMA - Geografi</option>
                        <option value="16">SMA - Sejarah</option>
                        <option value="17">SMA - Sosiologi</option>
                        <option value="18">SMA - Ekonomi</option>
                        <option value="19">SMA - Bahasa Inggris</option>
                        <option value="20">SMA - Bahasa Indonesia</option>
                    </select>
                    
                </div>
                <div class="mb-4">
                    <label class="form-label">Required files</label>
                    <input type="file" name="req_files" class="form-control" accept=".zip,.rar,.7zip" required>
                    <div class="invalid-feedback">
                        Please upload the required file!
                    </div>
                </div>
            </div>
            <div class="form-floating mb-4">
                <textarea class="form-control" placeholder="Describe yourself" name="description" id="floatingDescribe" style="height: 150px" required></textarea>
                <label for="floatingDescribe">Describe yourself</label>
                <div class="invalid-feedback">
                    Please describe yourself!
                </div>
            </div>
            <input type="hidden" name="role" value="mentor">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary btn-lg mb-3 col-12 p-3" type="submit">SIGN UP</button>
            </div>
            <p class="fw-light fs-6 text-center">Already have an account? <a href="/login"
                    class="text-decoration-none">Login</a>
            </p>
        </form>
    </div>
</section>
@endsection