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


Route::view('~admin/login', 'admin.login')->name('admin.login');
Route::name('admin.')->middleware('admin')->prefix('~admin')->namespace('Admin')->group(function () {
    Route::get('/', function() {
        return redirect()->route('admin.index');
    });
    Route::get('/dashboard', 'AdminController@index')->name('index');
    Route::view('/contact', 'admin.contact')->name('contact');
    // User
    Route::view('/user', 'admin.profile')->name('user.profile');
    // Product
    Route::get('/products', 'ProductController@index')->name('product');
    Route::get('/product/create', 'ProductController@create')->name('product.create');
    Route::post('/product/create', 'ProductController@store')->name('product.store');
    Route::get('/product/{product}/delete', 'ProductController@destroy')->name('product.delete');
    Route::get('/product/{product}/edit', 'ProductController@edit')->name('product.edit');
    Route::get('/product/{product}/show', 'ProductController@show')->name('product.show');
    Route::get('/product/status', 'ProductController@changeStatus')->name('product.status');
});