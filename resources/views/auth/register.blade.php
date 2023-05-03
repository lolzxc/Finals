<x-guest-layout>
    {{-- <form class="h-100" method="POST" action="{{ route('register') }}">
				@csrf --}}

    <!-- Name -->
    {{-- <div>
						<x-input-label for="name" :value="__('Name')" />
						<x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
						<x-input-error :messages="$errors->get('name')" class="mt-2" />
				</div>

				<!-- Email Address -->
				<div class="mt-4">
						<x-input-label for="email" :value="__('Email')" />
						<x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
						<x-input-error :messages="$errors->get('email')" class="mt-2" />
				</div>

				<!-- Password -->
				<div class="mt-4">
						<x-input-label for="password" :value="__('Password')" />

						<x-text-input id="password" class="block mt-1 w-full"
														type="password"
														name="password"
														required autocomplete="new-password" />

						<x-input-error :messages="$errors->get('password')" class="mt-2" />
				</div>

				<!-- Confirm Password -->
				<div class="mt-4">
						<x-input-label for="password_confirmation" :value="__('Confirm Password')" />

						<x-text-input id="password_confirmation" class="block mt-1 w-full"
														type="password"
														name="password_confirmation" required autocomplete="new-password" />

						<x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
				</div>

				<!-- Upload Image -->
				<div class="mt-4">
						<x-input-label for="upload_image" :value="__('Upload Image')" />

						<x-text-input id="upload_image" class="block mt-1 w-full"
														type="file"
														name="upload_image" required />

						<x-input-error :messages="$errors->get('upload_image')" class="mt-2" />
				</div>

				<div class="flex items-center justify-end mt-4">
						<a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
								{{ __('Already registered?') }}
						</a>

						<x-primary-button class="ml-4">
								{{ __('Register') }}
						</x-primary-button>
				</div>
		</form> --}}

    <section class="h-100 gradient-form" style="background-color: #eee;">
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
                                            <input type="password" id="form2Example22" name="password_confirmation" required
                                                autofocus class="form-control form-control-lg"
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
    </section>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</x-guest-layout>
