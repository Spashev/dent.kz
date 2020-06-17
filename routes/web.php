<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::view('/', 'tmp/index')->name('main');

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contacts', 'HomeController@contact')->name('contact');

Route::name('admin.')->prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/dashboard', 'AdminController@index')->name('index');
    Route::get('/login', function () {
        // Route assigned name 'admin.users'...
    })->name('login');
});