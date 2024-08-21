<x-guest-layout>
  <div class="row g-0">
      <div class="col-xxl-3 col-lg-4 col-md-5">
          <div class="auth-full-page-content d-flex p-sm-5 p-4">
              <div class="w-100">
                  <div class="d-flex flex-column h-100">
                      <div class="mb-4 mb-md-5 text-center">
                          <a href="index{{route('dashboard')}}" class="d-block auth-logo">
                              <img src="https://cdn5.f-cdn.com/contestentries/1208062/27174046/5a366342c17d7_thumb900.jpg" alt="" height="28"> <span class="logo-txt">PMS</span>
                          </a>
                      </div>
                      <div class="auth-content my-auto">
                          <div class="text-center">
                              <h5 class="mb-0">Welcome Back !</h5>
                              <p class="text-muted mt-2">Register to continue to {{ config('name')}}.</p>
                          </div>
                          <form class="mt-4 pt-2" action="{{route('register')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="useremail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="useremail" placeholder="Enter email" name="email" required>
                                <div class="invalid-feedback">
                                    Please Enter Email
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" placeholder="Enter username" name="name" required>
                                <div class="invalid-feedback">
                                    Please Enter Username
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="userpassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="userpassword" placeholder="Enter password" name="password" required>
                                <div class="invalid-feedback">
                                    Please Enter Password
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="userpassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="userpassword" placeholder="Re Enter password" name="password_confirmation" required>
                                <div class="invalid-feedback">
                                    Please Re-Enter Password
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Register</button>
                            </div>
                          </form>

                          <div class="mt-5 text-center">
                              <p class="text-muted mb-0">Already have an account ? <a href="{{route('login')}}"
                                      class="text-primary fw-semibold"> Login now </a> </p>
                          </div>
                      </div>
                      <div class="mt-4 mt-md-5 text-center">
                      </div>
                  </div>
              </div>
          </div>
          <!-- end auth full page content -->
      </div>
      <!-- end col -->
      <div class="col-xxl-9 col-lg-8 col-md-7">
          <div class="auth-bg pt-md-5 p-4 d-flex">
              <div class="bg-overlay bg-primary"></div>
              <ul class="bg-bubbles">
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
              </ul>
              <!-- end bubble effect -->
              <div class="row justify-content-center align-items-center">
                  <div class="col-xl-7">
                      <div class="p-0 p-sm-4 px-xl-0">
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- end col -->
  </div>
  <!-- end row -->
</x-guest-layout>
