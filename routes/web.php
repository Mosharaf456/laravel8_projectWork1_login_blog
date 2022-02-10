<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Auth::routes(['verify' => true ]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home/profile', [App\Http\Controllers\HomeController::class, 'profile']);

//1st way email verify
// Route::resource('/videos' , 'VideosController');
//2nd way
// Route::resource('/videos' , 'VideosController')->middleware('auth')->middleware('verified');
Route::resource('/videos' , 'VideosController')->middleware('auth');

