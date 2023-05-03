<x-guest-layout>
    {{-- <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="text-center mb-5">
                                            <p class="mb-4">Create your account to continue</p>
                                            <div class="avatar-upload">
                                                <div class="avatar-preview"
                                                    style="background-image: url('https://via.placeholder.com/150');">
                                                </div>
                                                <div class="mt-2">
                                                    <label class="btn btn-primary">
                                                        Upload Image<input type="file" name="default_photo"
                                                            onchange="previewImage(event)">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example1m" name="first_name" required
                                                        autofocus class="form-control form-control-lg"
                                                        placeholder="Juan" />
                                                    <label class="form-label" for="form3Example1m">First
                                                        name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example1n" name="last_name" required
                                                        autofocus class="form-control form-control-lg"
                                                        placeholder="Dela Cruz" />
                                                    <label class="form-label" for="form3Example1n">Last name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-3">
                                            <input type="email" id="form2Example11" name="email" required autofocus
                                                class="form-control form-control-lg" placeholder="Email Address" />
                                            <label class="form-label" for="form2Example11">Email Address</label>
                                        </div>

                                        <div class="form-outline mb-3">
                                            <input type="password" id="form2Example22" name="password" required
                                                autofocus class="form-control form-control-lg"
                                                placeholder="************" />
                                            <label class="form-label" for="form2Example22">Password</label>
                                        </div>

                                        <div class="form-outline mb-3">
                                            <input type="password" id="form2Example22" name="password_confirmation"
                                                required autofocus class="form-control form-control-lg"
                                                placeholder="************" />
                                            <label class="form-label" for="form2Example22">Confirm Password</label>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-lg btn-block mb-3"
                                            style="width:100%">Sign
                                            in</button>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">Already have an account?</p>
                                            <a style="text-decoration: none;" href="{{ route('login') }}">Login
                                                here.</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4">Join us today!</h4>
                                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                        do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="h-100 pt-5">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-xl-10 mb-3">
            <div class="row mb-5">
              <div class="col-lg-6" style="background-color: #e4d9ff;">
                <div class="card-body rounded-3 p-md-5 mx-md-4" >
                  <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="text-center mb-5">
                    <p class="mb-4" style="font-family:Pixel;">Create your account to continue</p>
                    <div class="avatar-upload">
                      <div class="avatar-preview" style="background-image: url('https://via.placeholder.com/150');">
                      </div>
                      <div class="mt-2">
                        <label class="btn btn-primary" style="font-family:Pixel; background-color: #273469;
                        font-size: 15px;">
                          Upload Image<input type="file" onchange="previewImage(event)" name="default_photo" required>
                        </label>
                      </div>
                    </div>
                  </div>
                  
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <div class="form-outline">
                          <input type="text" id="form3Example1m" class="form-control form-control-lg"
                            placeholder="Juan" name="first_name" required/>
                          <label class="form-label" for="form3Example1m" style="font-family:Pixel;">First name</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <div class="form-outline">
                          <input type="text" id="form3Example1n" class="form-control form-control-lg"
                            placeholder="Dela Cruz" name="last_name" required/>
                          <label class="form-label" for="form3Example1n" style="font-family:Pixel;">Last name</label>
                        </div>
                      </div>
                    </div>
  
                    <div class="form-outline mb-3">
                      <input type="email" id="form2Example11" class="form-control form-control-lg" name="email" required
                        placeholder="juandelacruz@mail.com" />
                      <label class="form-label" for="form2Example11" style="font-family:Pixel;">Email Address</label>
                    </div>
  
                    <div class="form-outline mb-3">
                      <input type="password" id="form2Example22" class="form-control form-control-lg" name="password" required
                        placeholder="************" />
                      <label class="form-label" for="form2Example22" style="font-family:Pixel;">Password</label>
                    </div>

                    <div class="form-outline mb-3">
                      <input type="password" id="form2Example22" class="form-control form-control-lg" name="password_confirmation" required
                        placeholder="************" />
                      <label class="form-label" for="form2Example22" style="font-family:Pixel;">Confirm Password</label>
                    </div>
  
  
                    <button type="submit" class="btn btn-primary btn-lg btn-block mb-3"
                      style="font-family:Pixel; width:100%; background-color: #273469;
                      font-size: 15px;">Sign
                      in</button>
                  </form>
  
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2" style="font-family:Pixel; font-size: 13px;">Already have an account?</p>
                      <a href="login.html" style="font-family:Pixel; font-size: 13px; text-decoration: none;">Login
                        here.</a>
                    </div>
  
                  
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4" style="font-family:Pixel;">Equip your armor, Gamer!</h4>
                  <p class="small mb-0">Pen & Pixel features a user-friendly interface where gamers can easily create and publish blog posts. You can connect with others and share your passion for gaming. Whether you're a casual gamer or a hardcore enthusiast, you're sure to find something of interest on Pen & Pixel!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</x-guest-layout>
