<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class CommentController extends Controller
{
    //

    public function store(Request $request)  : RedirectResponse  {

      $request->validate([
        'comment' => ['required', 'string', 'max:700'],
      ]);

      $comment = new Comment();
      $comment->comment = $request->comment;
      $comment->post_id = $request->post_id;
      $comment->name = $request->name;
      $comment->default_photo = $request->default_photo;  
      $comment->save();

      $post = DB::table('posts')
          ->where('id', $comment->post_id);

      $post->increment('comment');
        
      
      return Redirect::to(url()->previous());
    }
}
