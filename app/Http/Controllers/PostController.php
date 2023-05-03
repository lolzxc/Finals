<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rule;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    //
    public function store(Request $request) : RedirectResponse
    {
        $request->validate([
            'description' => ['required', 'string', 'max:1000'],
            'image' => [File::image()
                            ->min(1)
                            ->max(12*1024)
                            ->dimensions(Rule::dimensions()->maxWidth(10000)->maxHeight(5000))],
        ]);

        $post = new Post();
        $post->description = $request->input('description');
        $post->user_id = Auth::id();


        if($request->hasfile('image')) 
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/images/content', $filename);
            $post->image = $filename;
        }
        else {
            // return Redirect::to('/dashboard');
            $post->image = '';
        }

        $post->save();
        return Redirect::to('/dashboard');
    }
}
