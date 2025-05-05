<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
});

Route::get('/home', function () {
    return view('client.layouts.app');
});

Auth::routes();


