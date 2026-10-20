<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('app'); 
})->name('login');

Route::get('/{any?}', function () {
    return view('app');
})->where('any', '.*');

Route::get('/', function () {
    return view('app');
});

Route::get('/members', function () {
    return view('app');
});

Route::get('/inventories', function () {
    return view('app');
});

Route::get('/analytics', function () {
    return view('app');
});