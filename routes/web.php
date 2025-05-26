<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/video-detail', function () {
    return view('video-detail');
})->name('video-detail');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('user/register',[UserController::class,'register']);
Route::get('user/login',[UserController::class,'login']);
Route::get('user/dashboard',[UserController::class,'dashboard']);

Route::resource('category',CategoryController::class);

