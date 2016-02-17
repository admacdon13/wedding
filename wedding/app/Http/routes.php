<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['middleware' => ['web']], function () {

    // PagesController routes
    Route::get('index', 'PagesController@index');
    Route::get('home', 'PagesController@home');
    Route::get('rsvp', 'PagesController@rsvp');
    Route::get('guestlist', 'PagesController@guestlist');
    Route::get('about', 'PagesController@about');
    Route::get('dates', 'PagesController@dates');
    Route::get('thanks', 'PagesController@thanks');
    Route::get('music', 'PagesController@music');
    Route::get('registry', 'PagesController@registry');
    Route::get('musicrequests', 'PagesController@musicrequests');
    Route::get('bridalparty', 'PagesController@bridalparty');
    Route::get('specialthanks', 'PagesController@special');

    // MusicController routes
    Route::post('music', 'MusicController@store');
    // RsvpController routes
    Route::post('rsvp', 'RsvpController@store');
//    Route::get("thanks", 'PagesController@thanks');

});