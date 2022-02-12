<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// for email verify
// Auth::routes(['verify' => true ]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home/profile', [App\Http\Controllers\HomeController::class, 'profile']);

//1st way email verify
// Route::resource('/videos' , 'VideosController');
//2nd way  email verify
// Route::resource('/videos' , 'VideosController')->middleware('auth')->middleware('verified');

//without email verify
Route::resource('/videos' , 'VideosController')->middleware('auth');

Route::get('/admin','AdminController@index')->middleware('auth');


