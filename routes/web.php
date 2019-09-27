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
Route::get('/abstract1', function () {
    return view('frontend.pages.abstract');
});

Route::get('/workshop1', function () {
    return view('frontend.pages.workshop');
});










Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::name('backend.')
    ->namespace('Backend')
    ->prefix('admin')
/*    ->middleware('role:admin')*/
    ->group(function (){

        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::get('/registered-user', 'RegisteredUserController@index')->name('registered-user');
        Route::get('/abstract-submitted', 'AbstractController@index')->name('abstract-submitted');

    });

Route::namespace('Backend')
  /*    ->middleware('role:user')*/
    ->group(function (){

        Route::get('/abstract','AbstractController@frontend' )->name('abstract.frontend');
        Route::post('/abstract','AbstractController@store' )->name('abstract.store');
    });


Route::name('frontend.')
        ->namespace('Frontend')
        ->group(function (){

           Route::get('/','IndexController@index' )->name('index');
        });

//Route::get('/abstract','Backend\\AbstractController@frontend' )->name('abstract.frontend');
//Route::post('/abstract','Backend\\AbstractController@store' )->name('abstract.store');


Route::get('/workshop','Backend\\WorkshopController@frontend' )->name('workshop.frontend');
Route::post('/workshop','Backend\\WorkshopController@store' )->name('workshop.store');