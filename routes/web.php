<?php

use App\Events\TestNotification;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});


Route::get('/notify', function () {
    event( new TestNotification('This is testing data'));
    return view('welcome');
});

