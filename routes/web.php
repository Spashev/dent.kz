<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::view('/', 'tmp/index')->name('main');

Auth::routes();

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contacts', 'HomeController@contact')->name('contact');


Route::view('admin/login', 'admin.login')->name('admin.login');
Route::name('admin.')->middleware('admin')->prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/', function() {
        return redirect()->route('admin.index');
    });
    Route::get('/dashboard', 'AdminController@index')->name('index');
    Route::view('/user', 'admin.profile')->name('user.profile');
    Route::view('/contact', 'admin.contact')->name('contact');
    Route::get('/products', 'ProductController@index')->name('product');
});