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
})->name('home');
Route::get('/registration', function () {
    return view('frontend.pages.registration');
});
Route::get('/abstract', 'Frontend\AbstractController@create' )->name('abstract.form');
Route::post('/abstract', 'Frontend\AbstractController@store')->name('abstract.store');
Route::get('/workshop', 'Frontend\WorkshopController@create')->name('workshop.create');
Route::post('/workshop', 'Frontend\WorkshopController@store')->name('workshop.store');

Route::get('/workshop', function () {
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
    });



Route::name('frontend.')
        ->namespace('Frontend')
        ->group(function (){

           Route::get('/','IndexController@index' )->name('index');
        });
