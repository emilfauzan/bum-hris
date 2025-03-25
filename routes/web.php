<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login', [
        // 'title' => 'Wujudkan Kemandirian Ummat',
        'titlepage' => 'NT CORP HRIS'
    ]);
});

Route::get('/signup', function () {
    return view('signup', [
        'titlepage' => 'NT CORP HRIS'
    ]);
});