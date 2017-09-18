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

Route::get('check',['as'=>'check','uses'=> 'UserController@showcheck']);

Route::get('room_booking','UserController@showroom_booking');

Route::post('finalize/{room_id}',['as'=>'finalize','uses'=>'UserController@showfinalize']);

Route::get('details',['as'=>'details','uses'=>'UserController@showdetails']);
// Route::get('teacherInfo/{room_id}/{arrive}/{leave}',['as'=>'teacherInfo','uses'=>'UserController@teacherInfo']);
// Route::post('teacherInfoSubmit',['as'=>'teacherInfoSubmit','uses'=>'UserController@teacherInfoSubmit']);
//Check validity 

Route::get('booking-cancel/{id}',['as'=>'booking.cancel', 'uses'=>'UserController@cancelBooking']);
Route::get('booking-extend/{id}',['as'=>'room_booking.extend', 'uses'=>'UserController@extendBooking']);


Route::post('checkValidity',['as' =>'checkValidity' ,'uses' => 'UserController@checkValidity']);

Route::post('checkextendValidity',['as' =>'check_extend.Validity' ,'uses' => 'UserController@checkExtendValidity']);

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('auth/logout', 'Auth\AuthController@logout');


//Admin controller routes are ...



Route::get('admin',['as'=>'admin.index','uses'=>'AdminController@index']);
Route::get('admin/addRoom',['as'=>'add.room','uses'=>'AdminController@addRoom']);
Route::post('admin/addRoom',['as'=>'store.room','uses'=>'AdminController@storeRoom']);

Route::get('admin/detailsRoom',['as'=>'details.room','uses'=>'AdminController@details']);


//-------------------------------------------------------------
//------UserManagement routes are started here (HomeController)-------

Route::get('password_changed',['as'=>'changed.password', 'uses' =>'HomeController@changedPassword']);
Route::post('password_changed',['as'=>'store.password', 'uses' =>'HomeController@storePassword']);



//-------------------

Route::get('/getPDF','PDFController@getPDF');