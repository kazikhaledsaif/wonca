<?php

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
    return view('frontend.pages.home');
});
Route::get('/registration', function () {
    return view('frontend.pages.registration');
});
Route::get('/abstract', function () {
    return view('frontend.pages.abstract');
});

Route::get('/workshop', function () {
    return view('frontend.pages.workshop');
});
