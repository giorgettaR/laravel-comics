<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/comics', function () {
    return view('comics');
})->name('comics');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');