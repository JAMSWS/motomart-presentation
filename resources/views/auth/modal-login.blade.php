{{-- Modal Login  --}}



<div wire.ignore.self class="modal fade" id="loginModal" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('login') }}" method="POST">


          <div class="form-title text-center">
            <h4>Login</h4>
          </div>
          <div class="d-flex flex-column text-center">


            <form>
                @csrf

                {{-- Email --}}
              <div class="form-group">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"placeholder="Email address" value="{{ old('email') }}" required autocomplete="email" autofocus />

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
              <button type="submit" class="btn  btn-block btn-round btn-danger"  >Login</button>
            </form>

            <div class="text-center text-muted delimiter">or use a social network</div>
            <div class="d-flex justify-content-center social-buttons">
              <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
                <i class="fab fa-google"></i>
              </button>
              <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
                <i class="fab fa-facebook"></i>
              </button>

            </di>
          </div>
        </div>
        </form>
      </div>
      {{-- sakit sa ulo nito --}}
        {{-- <div class="modal-footer d-flex justify-content-center">
            <div class="signup-section">Not a member yet? <a href="#" id="switchToRegister" class="text-info">Sign Up</a>.</div>
        </div> --}}
    </div>
  </div>






