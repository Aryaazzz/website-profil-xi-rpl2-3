<?php

use Illuminate\Support\Facades\Route;

Route::get('/rpl', function () {
    return view('arya');
});

Route::get('/', function () {
    return view('welcome');
});

Route::resource('murid', App\Http\Controllers\MuridController::class);