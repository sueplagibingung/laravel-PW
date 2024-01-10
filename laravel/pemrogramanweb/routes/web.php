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
    return view('welcome');
});

Route::get('/smkn2', function () {
    return view('smkn2');
});

Route::get('/instagram', function () {
    return view('instagram');
});

Route::get('/youtube', function () {
    return view('youtube');
});

Route::get('/location', function () {
    return view('location');
});