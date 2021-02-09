<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::post('/contacts/submit', function () {
    return Request::all();
})->name('contacts-form');