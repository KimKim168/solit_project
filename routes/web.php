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

Route::get('/product', function () {
    return view('client.product');
});

Route::get('/detail', function () {
    return view('client.detail');
});

Route::get('/mobile_app_development', function () {
    return view('client.mobile_app_development');
});

Route::get('/development_and_design_detail', function () {
    return view('client.development_and_design_detail');
});

Route::get('/custom_software_development', function () {
    return view('client.custom_software_development');
});

Route::get('/cloud_hosting', function () {
    return view('client.cloud_hosting');
});

Route::get('/seo_and_digital_marketing', function () {
    return view('client.seo_and_digital_marketing');
});