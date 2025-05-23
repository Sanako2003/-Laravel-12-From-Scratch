<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// use Illuminate\Support\Facades\DB;

use App\Http\Controllers\PostController;
 
Route::get('posts/{post}', [PostController::class, 'show']) 
    ->name('post.show'); 
 
Route::get('/', function () {
    return view('welcome');
});
Route::view('/second', 'second'); 

Route::get('/third', function () {
    return view('third'); // <-- third.blade.php file doesn't exist
});

Route::get('/', [HomeController::class, 'index'])
    ->name('home');
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');
Route::view('article', 'article')->name('article');

Route::get('posts/{postId}', [SomeController::class, 'some_method']);