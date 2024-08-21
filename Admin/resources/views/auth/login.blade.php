<x-guest-layout>
  <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
      <div class="brand-logo pb-4 text-center">
          <a href="#" class="logo-link">
              <img class="logo-light logo-img logo-img-lg" src="{{URL::asset('images/logo.png')}}" srcset="{{URL::asset('images/logo.png')}} 2x" alt="logo">
              <img class="logo-dark logo-img logo-img-lg" src="{{URL::asset('images/logo.png')}}" srcset="{{URL::asset('images/logo.png')}} 2x" alt="logo-dark">
          </a>
      </div>
      <div class="card card-bordered">
          <div class="card-inner card-inner-lg">
              <div class="nk-block-head">
                  <div class="nk-block-head-content">
                      <h4 class="nk-block-title">Sign-In</h4>
                      <div class="nk-block-des">
                          <p>Access Food Stamp Control Panel using your email and passcode.</p>
                      </div>
                  </div>
              </div>
              <form action="{{route('login')}}" method="post">
                @csrf
                  <div class="form-group">
                      <div class="form-label-group">
                          <label class="form-label" for="default-01">Email or Username</label>
                      </div>
                      <div class="form-control-wrap">
                          <input type="text" class="form-control form-control-lg" id="default-01" name="email" placeholder="Enter your email address or username">
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="form-label-group">
                          <label class="form-label" for="password">Passcode</label>
                          <a class="link link-primary link-sm" href="{{route('password.request')}}">Forgot Password?</a>
                      </div>
                      <div class="form-control-wrap">
                          <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                              <em class="passcode-icon icon-show icon ni ni-eye"></em>
                              <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                          </a>
                          <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Enter your password">
                      </div>
                  </div>
                  <div class="form-group">
                      <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</x-guest-layout>
