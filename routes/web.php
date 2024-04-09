<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rusel', function () {
    return 'Hello Rusel!';
});

Route::get('/tayong', function () {
    return 'Hello Tayong!';
});