


  {{-- Modal register --}}

<div wire.ignore.self class="modal fade" id="registermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('register') }}" method="POST">

           <div class="d-flex flex-column text-center logoContainer mb-5" id="logoContainer">
              <img src="{{asset('assets/images/motomart.png')}}"
           </div>


          <div class="form-title text-center  mt-2">
            <h4>Sign Up</h4>
          </div>
          <div class="d-flex flex-column text-center">
            <form>
                @csrf

                {{-- Username --}}
              <div class="form-group">
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="name" id="name"placeholder="Username" value="{{ old('name') }}" required autocomplete="name" autofocus />

                     @error('name')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                     @enderror
              </div>


                {{-- Email --}}
              <div class="form-group">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email address" value="{{ old('email') }}" required autocomplete="email"  />

                     @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                     @enderror
              </div>

              {{-- Password --}}
              <div class="form-group">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required autocomplete="current-password">

                     @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
              </div>

              {{-- Confirm Password --}}
              <div class="form-group">
                <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="Confirm Password" required autocomplete="new-password">

                     @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                     @enderror
              </div>

              <button type="submit" class="btn  btn-block btn-round btn-danger" >
                Create Account
              </button>
            </form>

           
          </div>
        </div>
        </form>
      </div>

      <div class="modal-footer d-flex justify-content-center">
        <div class="signup-section">Already have an account? <a href="#" id="switchToLogin" class="text-info">Sign in</a>.</div>
      </div>
    </div>
  </div>

