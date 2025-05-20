<?php

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
