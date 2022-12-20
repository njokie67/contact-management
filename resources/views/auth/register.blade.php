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
                <form method="POST" action="{{ route('register') }}">
                 @csrf
                 <h5>Sign Up</h5>
                   <div class="form-outline mb-4 ">

                        <label class="form-label" for="name">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>


                  <div class="form-outline mb-4 ">
                        <label class="form-label" for="email">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                              @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                  </div>

                  <div class="form-outline mb-4">

                    <label class="form-label" for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                  </div>


                  <div class="text-center pt-1 mb-3 pb-1">
                  <button type="submit" class="btn btn-primary fa-lg mb-3">  {{ __('Sign Up') }} </button>
                    
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-2">
                    <p class="mb-0 me-2">Already have an account?</p>
                    <a href="{{ route('login') }}" class="btn btn-outline-primary">{{ __('Sign In') }}</a>
                  </div>

                </form>

              </div>
        
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
