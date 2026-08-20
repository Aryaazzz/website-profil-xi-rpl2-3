<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HarapanController;


Route::get('/', function () {

    return view('welcome');

});


Route::get('/rpl', function () {

    return view('arya');

});


Route::resource('kopdes',HarapanController::class);