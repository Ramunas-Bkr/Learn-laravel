<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get(
    '/contacts/all',
    [ContactController::class, 'allData']
)->name('contacts-data');

Route::get(
    '/contacts/all/{id}',
    [ContactController::class, 'getOneMessage']
)->name('one-message');

Route::get(
    '/contacts/all/{id}/edit',
    [ContactController::class, 'editMessage']
)->name('message-edit');

Route::get(
    '/contacts/all/{id}/delete',
    [ContactController::class, 'deleteMessage']
)->name('message-delete');

Route::post(
    '/contacts/all/{id}/edit',
    [ContactController::class, 'editMessageSubmit']
)->name('message-edit-submit');

Route::post(
    '/contacts/submit',
    [ContactController::class, 'submitContactForm']
)->name('contacts-form');
