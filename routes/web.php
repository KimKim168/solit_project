<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.index');
});

Route::get('/index', function () {
    return view('client.index');
});

Route::get('/about_us', function () {
    return view('client.about_us');
});