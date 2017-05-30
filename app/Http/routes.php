<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/', 'UserController@showProfile');

Route::get('login', 'UserController@showlogin');

Route::get('check', 'UserController@showcheck');

Route::get('room_booking','UserController@showroom_booking');

Route::get('finalize','UserController@showfinalize');

Route::get('details','UserController@showdetails');


