<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/biography/jacen', function () {
    return view('biography.jacen');
})->name('biography.jacen');

Route::get('/biography/moonie', function () {
    return view('biography.moonie');
})->name('biography.moonie');

Route::get('/biography/jake', function () {
    return view('biography.jake');
})->name('biography.jake');

Route::get('/biography/joross', function () {
    return view('biography.joross');
})->name('biography.joross');
