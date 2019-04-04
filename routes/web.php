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
    return view('welcome');
});

Route::get('/google38402ad6decd5324.html',function(){
     return view('google38402ad6decd5324');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('oauth','GoogleCalendarController@oauth')->name('oauthCallback');
Route::get('getEvent','GoogleCalendarController@getEvent')->name('getEvent');

Route::get('createEvent','GoogleCalendarController@getCreateEvent')->name('getCreateEvent');
Route::post('createEvent','GoogleCalendarController@postCreateEvent')->name('postCreateEvent');

Route::get('updateEvent/{id}','GoogleCalendarController@getUpdateEvent');
Route::post('updateEvent/{id}','GoogleCalendarController@postUpdateEvent')->name('updateEvent');

Route::get('deleteEvent/{id}','GoogleCalendarController@getDeleteEvent')->name('deleteEvent');