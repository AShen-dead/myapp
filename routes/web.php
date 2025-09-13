<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;

Route::get('/', function () {
    return view('home');
});

Route::get('/biographies', function () {
    return view('biographies');
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


Route::get('home', function () {
    return view('home');
})->name('home');

Route::get('biographies', function () {
    return view('biographies');
})->name('biographies');


Route::resource('cats', CatController::class);
Route::get('cats', [CatController::class, 'index'])->name('cats.index');