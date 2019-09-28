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



//Route::get('/', function () {
//    return view('frontend.pages.home');
//})->name('home');
//Route::get('/registration', function () {
//    return view('frontend.pages.registration');
//});
//Route::get('/abstract', 'Frontend\AbstractController@create' )->name('abstract.form');
//Route::post('/abstract', 'Frontend\AbstractController@store')->name('abstract.store');
//Route::get('/workshop', 'Frontend\WorkshopController@create')->name('workshop.create');
//Route::post('/workshop', 'Frontend\WorkshopController@store')->name('workshop.store');
//
//Route::get('/workshop', function () {
//    return view('frontend.pages.workshop');
//});
//






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::name('backend.')
    ->namespace('Backend')
    ->prefix('admin')
/*    ->middleware('role:admin')*/
    ->group(function (){

        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::get('/registered-user', 'RegisteredUserController@index')->name('registered-user');
        Route::get('/registered-user/{id}', 'RegisteredUserController@show')->name('registered-user.show');
        Route::get('/abstract-submitted', 'AbstractController@index')->name('abstract-submitted');
        Route::get('/abstract-submitted/{id}', 'AbstractController@show')->name('abstract-submitted.show');
        Route::get('/workshop', 'WorkshopController@index')->name('workshop');

    Route::get('/workshop/{id}', 'WorkshopController@show')->name('workshop.show');
    Route::get('/subscriber', 'SubscriberController@index')->name('subscriber');
    Route::get('/important-dates', 'SubscriberController@index')->name('subscriber');

    });

Route::namespace('Backend')
  /*    ->middleware('role:user')*/
    ->group(function (){

        Route::get('/abstract','AbstractController@frontend' )->name('abstract.frontend');
        Route::post('/abstract','AbstractController@store' )->name('abstract.store');

      Route::get('/workshop','WorkshopController@frontend' )->name('workshop.frontend');
      Route::post('/workshop','WorkshopController@store' )->name('workshop.store');
    });


Route::name('frontend.')
        ->namespace('Frontend')
        ->group(function (){

           Route::get('/','IndexController@index' )->name('index');
           Route::post('/subscriber','IndexController@subscriber' )->name('subscriber.store');
        });



