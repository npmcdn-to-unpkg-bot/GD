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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');


Route::get('/dashboard', 'DashboardController@index');
Route::get('/maps', 'DashboardController@maps');
Route::get('/users', 'DashboardController@users');
Route::get('/items', 'DashboardController@items');
Route::get('/user_profile/{id}', 'DashboardController@userProfile');


// Testing REST
Route::get('/users/{id}', 'DashboardController@userInfo');

Route::get('/resource/users', 'DashboardController@getUsers');

Route::get('/testApp', function(){
	return view('testApp');
});


