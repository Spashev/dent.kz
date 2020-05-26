<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'tmp/index')->name('main');

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

