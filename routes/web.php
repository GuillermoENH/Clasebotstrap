<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('principal');
})->name('p');

Route::get('/dontetera', function () {
    return view('Dontetera');
})->name('dt');

Route::get('/jefes', function () {
    return view('jefes');
})->name('j');

Route::get('/netflix', function () {
    return view('netflix');
})->name('n');