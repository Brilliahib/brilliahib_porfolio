<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProjectController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function (Category $category) {
    $posts = Post::latest()->take(4)->get();
    return view('home', [
        "title" => "Brilliahib",
        'posts' => $posts,
        'category'=>$category
    ]);
});
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/blog', [PostController::class, 'index']);
Route::get('blog/{post:slug}', [PostController::class, 'show']);
Route::resource('/contact', MessageController::class);
