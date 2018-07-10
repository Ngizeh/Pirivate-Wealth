<?php

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('lands', function () {
    return view('lands');
});
Route::get('about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/property/edit', function () {
    return view('property.edit');
});

Route::get('/property/create', function () {
    return view('property.create.description');
});

Route::get('/property/agent', function () {
    return view('property.create.agent');
});

Route::get('/property/images', function () {
    return view('property.create.media');
});

Route::get('/property/feature', function () {
    return view('property.create.feature');
});

Route::get('/property/location', function () {
    return view('property.create.location');
});
Route::get('/property/features', function () {
    return view('property.create.features');
});


// Route::resource('property', 'PropertyController');

