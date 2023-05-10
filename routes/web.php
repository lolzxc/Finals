<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

use App\Models\Post;
use App\Models\Comment;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $posts = DB::table('users')
        ->join('posts', 'posts.user_id', '=', 'users.id')
        ->orderBy('posts.id', 'desc')
	->get();

    $comments = DB::table('posts')
        ->join('comments', 'comments.post_id', '=', 'posts.id')
        ->get();

    $users = User::all();
     
    return view('dashboard', compact('posts', 'users', 'comments'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/yourpost', function () {
  $posts = DB::table('users')
      ->join('posts', 'posts.user_id', '=', 'users.id')
      ->where('posts.user_id', Auth::id())
      ->get();

  $comments = DB::table('posts')
      ->join('comments', 'comments.post_id', '=', 'posts.id')
      ->get();

  $users = User::all();

  // return $posts;
  
  return view('dashboard', compact('posts', 'users', 'comments'));
})->middleware(['auth', 'verified'])->name('yourpost');

Route::get('/dashboard/pc', function () {
  $posts = DB::table('users')
      ->join('posts', 'posts.user_id', '=', 'users.id')
      ->where('posts.tag', 'PC GAMING')
      ->get();

  $comments = DB::table('posts')
      ->join('comments', 'comments.post_id', '=', 'posts.id')
      ->get();

  $users = User::all();

  
  return view('dashboard', compact('posts', 'users', 'comments'));
})->middleware(['auth', 'verified'])->name('pc');

Route::get('/dashboard/mobile', function () {
  $posts = DB::table('users')
      ->join('posts', 'posts.user_id', '=', 'users.id')
      ->where('posts.tag', 'MOBILE GAMING')
      ->get();

  $comments = DB::table('posts')
      ->join('comments', 'comments.post_id', '=', 'posts.id')
      ->get();

  $users = User::all();

  
  return view('dashboard', compact('posts', 'users', 'comments'));
})->middleware(['auth', 'verified'])->name('mobile');

Route::get('/dashboard/console', function () {
  $posts = DB::table('users')
      ->join('posts', 'posts.user_id', '=', 'users.id')
      ->where('posts.tag', 'CONSOLE GAMING')
      ->get();

  $comments = DB::table('posts')
      ->join('comments', 'comments.post_id', '=', 'posts.id')
      ->get();

  $users = User::all();

  
  return view('dashboard', compact('posts', 'users', 'comments'));
})->middleware(['auth', 'verified'])->name('console');

Route::post('/dashboard', [PostController::class, 'store'])->name('add_post');
Route::post('/dashboard/liked', [PostController::class, 'like'])->name('add_like');
Route::post('/dashboard/posts', [CommentController::class, 'store'])->name('add_comment');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
