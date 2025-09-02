<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/biography/jacen', function () {
    return view('biography.jacen');
})->name('biography.jacen');

