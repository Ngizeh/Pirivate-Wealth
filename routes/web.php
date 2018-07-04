<?php

Route::get('/', function () {
    return view('home');
});
Route::get('about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('lands', function () {
    return view('lands');
});
Route::get('property', function () {
    return view('property.show');
});
Route::get('login', function () {
    return view('property/login');
});
