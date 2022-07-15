@extends('layouts.app')

@section('content')
  <!-- login breadcrumb -->
  <section class="w3l-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
      <div class="container pt-lg-5 pt-3 p-lg-4 pb-3">
        <h2 class="title mt-5 pt-lg-5 pt-sm-3">Masuk</h2>
        <ul class="breadcrumbs-custom-path pb-sm-5 pb-4 mt-2 text-center mb-md-5">
          <li><a href="/">Home</a></li>
          <li class="active"> / Login </li>
        </ul>
      </div>
    </div>
    <div class="waveWrapper waveAnimation">
      <svg viewBox="0 0 500 150" preserveAspectRatio="none">
        <path d="M-5.07,73.52 C149.99,150.00 299.66,-102.13 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
          style="stroke: none;"></path>
      </svg>
    </div>
  </section>
  <!-- //login breadcrumb -->
  <!-- login block -->
  <!-- login -->
  <section class="w3l-contact-1 pb-5" id="contact">
    <div class="contacts-9 py-lg-5 py-md-4">
        <div class="container">
                <div class="map-content-9">
                    <h5 class="mb-sm-4 mb-3">Login</h5>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="twice">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="twice">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="text-left">
                                <!-- <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" value="{{ old('remember') ? 'checked' : '' }}">

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div> -->

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary btn-style mt-4">{{ __('Login') }}</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
  </section>
  <!-- /login -->
  <!-- //login block -->
@endsection
