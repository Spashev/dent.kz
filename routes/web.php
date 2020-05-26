<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'tmp/index')->name('main');

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contacts', 'HomeController@contact')->name('contact');

