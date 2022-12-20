@extends('layouts.app')

@section('content')

  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-5">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
         
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="{{ url('/contact/images/contact.png') }}"
                    style="width: 120px;" alt="logo">
                  <h4 class="mt-1 mb-3 pb-1">Contact Manager</h4>
                </div>
                <form method="POST" action="{{ route('login') }}">
                 @csrf
                   <h5>Sign In</h5>

                  <div class="form-outline mb-4 ">
                        <label class="form-label" for="email">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                  </div>
                  <div class="row mb-3">
                            <div class="col-md-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                    </div>

                  <div class="text-center pt-1 mb-3 pb-1">
                  <button type="submit" class="btn btn-primary mb-3">  {{ __('Sign In') }} </button>
                    @if (Route::has('password.request'))
                      <a class="btn btn-link text-muted " href="{{ route('password.request') }}"> {{ __('Forgot Your Password?') }} </a>
                     @endif
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <a href="{{ route('register') }}" class="btn btn-outline-primary">{{ __('Create New') }}</a>
                  </div>

                </form>

              </div>
        
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
