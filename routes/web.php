<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.index');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('client.index');
});

Route::get('/about_us', function () {
    return view('client.about_us');
});

Route::get('/contact', function () {
    return view('client.contact_us');
});

Route::get('/service', function () {
    return view('client.service');
});

Route::get('/detail', function () {
    return view('client.detail');
});