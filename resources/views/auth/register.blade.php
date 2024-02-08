@extends('layouts.app')

@section('content')

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5 ">
          <div class="card  text-white" style="border-radius: 1rem; background-image: url('{{ asset('assets/images/wall.png') }}') ">
            <div class="card-body p-5 text-center">

                <form method="POST" action="{{ route('register') }}">
                @csrf

              <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase">{{ __('register') }}</h2>
                <p class="text-white-50 mb-5">Please create your account here!</p>

                {{-- username --}}
                <div class="form-outline form-white mb-4">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                     <label class="form-label" for="name">{{ __('Name') }}</label>


                       @error('name')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                       @enderror



                   </div>



                {{-- Email --}}
                <div class="form-outline form-white mb-4">
                 <input type="email" id="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  />
                  <label class="form-label" for="email">{{ __('Email Address') }}</label>


                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror



                </div>




                {{-- Password --}}
                <div class="form-outline form-white mb-4">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />
                  <label class="form-label" for="password">{{ __('Password') }}</label>

                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror


                </div>

                {{-- confirm password --}}
                <div class="form-outline form-white mb-4">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" />
                  <label class="form-label" for="password-confirm">{{ __('Confirm Password') }}</label>

                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror


                </div>










                <button class="btn btn-outline-light btn-lg px-5" type="submit"style="background-color:#ff3131" > {{ __('Register') }}</button>

                {{-- <div class="d-flex justify-content-center text-center mt-4 pt-1">
                  <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                </div> --}}

              </div>

              <div>
                <p class="mb-0">Already have account? <a href="{{ route('login') }}" class="text-danger fw-bold">Log in</a>
                </p>
              </div>
             </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection
