<?php

use Illuminate\Support\Facades\Route;


//get

Route::get('/', function () {
    return view('index');
});
Route::get('/about-us', function () {
    return view('pages.about');
});

Route::get('/contact-us', function () {
    return view('pages.contact');
});

Route::get('/careers', function () {
    return view('pages.careers');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/search-property', function () {
    return view('pages.search-property');
});

Route::get('/login', function () {
    return view('pages.login');
});
Route::get('/signup', function () {
    return view('pages.signup');
});



//post

Route::post('/login', function () {
    return view('pages.login');
});
