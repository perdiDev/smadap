<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/struktur', function () {
    return view('struktur');
});

Route::get('/fasilitas', function () {
    return view('fasilitas');
});

Route::get('/pengumuman', function () {
    return view('pengumuman');
});

Route::get('/kesiswaan', function () {
    return view('kesiswaan');
});
