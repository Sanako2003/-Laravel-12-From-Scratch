<?php

use Illuminate\Support\Facades\Route;
 
Route::get('/', function () {
    return view('welcome');
});
Route::view('/second', 'second'); 

Route::get('/third', function () {
    return view('third'); // <-- third.blade.php file doesn't exist
});

Route::view('/', 'home')->name('home');
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name('about');