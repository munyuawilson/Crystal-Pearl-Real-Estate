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
Route::get('/dashboard', function () {
    return view('pages.client.dashboard');
});

Route::get('/property', function () {
    return view('pages.client.property');
});
Route::get('/completed', function () {
    return view('pages.client.completed');
});
Route::get('/projects', function () {
    return view('pages.client.project');
});
Route::get('/rent', function () {
    return view('pages.client.rent');
});
Route::get('/report', function () {
    return view('pages.client.report');
});
Route::get('/progress', function () {
    return view('pages.client.progress');
});
Route::get('/pay', function () {
    return view('pages.client.pay');
});



//post

Route::post('/login', function () {
    return view('pages.login');
});
