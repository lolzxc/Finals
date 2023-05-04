<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Models\Post;
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
    // $posts = Post::all();
    // $posts = DB::table('posts')
    //     ->join('users', 'posts.user_id', '=', 'users.id')
    //     ->except('users.created_at')  
    //     ->get();

    $posts = DB::table('users')
        ->join('posts', 'posts.user_id', '=', 'users.id')
        ->get();

    $users = User::all();

    // $times = Post::all();
    
    return view('dashboard', compact('posts', 'users'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/dashboard', [PostController::class, 'store'])->name('add_post');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
