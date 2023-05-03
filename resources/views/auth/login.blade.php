<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">We are more than just a company</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                        do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center mb-5">
                                        <p>Please login to your account</p>
                                    </div>

                                    <form method="POST" action="{{ route('login')}}" enctype="multipart/form-data">
                                      @csrf

                                        <div class="form-outline mb-4">
                                            <input type="email" id="form2Example11" class="form-control" name="email" required
                                                placeholder="juandelacruz@example.com" />
                                            <label class="form-label" for="form2Example11">Email</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example22" class="form-control" name="password" required
                                                placeholder="************" />
                                            <label class="form-label" for="form2Example22">Password</label>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                type="submit" style="width:100%">Login</button>
                                            <a class="text-muted" href="#!">Forgot password?</a>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Don't have an account?</p>
                                            <a style="text-decoration: none;" href="registration.html">Create New.</a>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="h-100 gradient-form">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-xl-10">
            <div class="card rounded-3" style="background-color: #e4d9ff;">
              <div class="row g-0">
                <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                  <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <h4 class="mb-4" style="font-family:Pixel;">We are more than just a company</h4>
                    <p class="small mb-0">Pen & Pixel features a user-friendly interface where gamers can easily create and publish blog posts. You can connect with others and share your passion for gaming. Whether you're a casual gamer or a hardcore enthusiast, you're sure to find something of interest on Pen & Pixel!</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="card-body p-md-5 mx-md-4" >
                    <div class="text-center mb-5" style="font-family:Pixel;">
                      <p>Please login to your account</p>
                    </div>
  
                    <form method="POST" action="{{ route('login')}}" enctype="multipart/form-data">
                      @csrf
  
                      <div class="form-outline mb-4">
                        <input type="email" id="form2Example11" class="form-control" name="email" required
                          placeholder="juandelacruz@example.com" />
                        <label class="form-label" for="form2Example11" style="font-family:Pixel;">Email</label>
                      </div>
  
                      <div class="form-outline mb-4">
                        <input type="password" id="form2Example22" class="form-control" placeholder="************" name="password" required/>
                        <label class="form-label" for="form2Example22" style="font-family:Pixel;">Password</label>
                      </div>
  
                      <div class="text-center pt-1 mb-5 pb-1" style="font-family:Pixel;">
                        <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit"
                          style="width:100%">Login</button>
                        <a class="text-muted" href="#!">Forgot password?</a>
                      </div>
  
                      <div class="d-flex align-items-center justify-content-center pb-4" style="font-family:Pixel;">
                        <p class="mb-0 me-2" ;>Don't have an account?</p>
                        <a style="text-decoration: none; font-size: 13px;" href="registration.html">Create New.</a>
                      </div>
  
                    </form>
  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

</x-guest-layout>

