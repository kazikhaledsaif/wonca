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

Route::get('/abstract', function () {
    return view('frontend.pages.abstract');
})->name('abstract');
Route::get('/workshop', function () {
    return view('frontend.pages.workshop');
})->name('workshop');








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

    Route::get('/add-important-date', 'ImportantDateController@create')->name('date.create');
    Route::post('/add-important-date', 'ImportantDateController@store')->name('date.store');
    Route::get('/important-dates', 'ImportantDateController@index')->name('dates');
    Route::post('/important-date-update', 'ImportantDateController@update')->name('date.update');
    Route::get('/important-date-destroy/{id}', 'ImportantDateController@destroy')->name('date.destroy');
    Route::get('/important-date-edit/{id}', 'ImportantDateController@show')->name('date.edit');

        Route::get('/add-speech', 'SpeechController@create')->name('speech.create');
        Route::post('/add-speech', 'SpeechController@store')->name('speech.store');
        Route::get('/speeches', 'SpeechController@index')->name('speeches');
        Route::post('/speech-update', 'SpeechController@update')->name('speech.update');
        Route::get('/speech-destroy/{id}', 'SpeechController@destroy')->name('speech.destroy');
        Route::get('/speech-edit/{id}', 'SpeechController@show')->name('speech.edit');

    Route::get('/add-slider', 'SliderController@create')->name('slider.create');
    Route::post('/add-slider', 'SliderController@store')->name('slider.store');
    Route::get('/sliders', 'SliderController@index')->name('sliders');
    Route::post('/slider-update', 'SliderController@update')->name('slider.update');
    Route::get('/slider-destroy/{id}', 'SliderController@destroy')->name('slider.destroy');
    Route::get('/slider-edit/{id}', 'SliderController@show')->name('slider.edit');


    Route::get('/add-schedule', 'ScheduleController@create')->name('schedule.create');
    Route::post('/add-schedule', 'ScheduleController@store')->name('schedule.store');
    Route::get('/schedules', 'ScheduleController@index')->name('schedules');
    Route::post('/schedule-update', 'ScheduleController@update')->name('schedule.update');
    Route::get('/schedule-destroy/{id}', 'ScheduleController@destroy')->name('schedule.destroy');
    Route::get('/schedule-edit/{id}', 'ScheduleController@show')->name('schedule.edit');






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

            Route::get('/registration', function () {
                return view('frontend.pages.registration-detail');
            })->name('registration');

           Route::get('/','IndexController@index' )->name('index');
           Route::post('/subscriber','IndexController@subscriber' )->name('subscriber.store');
        });



// SSLCOMMERZ Start
Route::get('/example1', 'SslCommerzPaymentController@exampleEasyCheckout');
Route::get('/example2', 'SslCommerzPaymentController@exampleHostedCheckout');

Route::post('/pay', 'SslCommerzPaymentController@index');
Route::post('/pay-via-ajax', 'SslCommerzPaymentController@payViaAjax');

Route::post('/success', 'SslCommerzPaymentController@success');
Route::post('/fail', 'SslCommerzPaymentController@fail');
Route::post('/cancel', 'SslCommerzPaymentController@cancel');

Route::post('/ipn', 'SslCommerzPaymentController@ipn');
//SSLCOMMERZ END
