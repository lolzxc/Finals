<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rule;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request) : RedirectResponse
    {

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'default_photo' => ['required', File::image()
                            ->min(1)
                            ->max(12*1024)
                            ->dimensions(Rule::dimensions()->maxWidth(10000)->maxHeight(5000))],
        ]);

        if($request->hasfile('default_photo')) 
        {
            $file = $request->file('default_photo');
            $extension = $file->getClientOriginalExtension();
            $filename = $request->email . '.' . $extension;
            $file->move('uploads/images/default_photo', $filename);
            
            $user = User::create([
              'name' => $request->first_name . ' ' . $request->last_name,
              'email' => $request->email,
              'password' => Hash::make($request->password),
              'default_photo' => $filename,
          ]);
        }
        else {
            // return Redirect::to('/dashboard');
            $post->image = '';
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
