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

Route::get('/', 'TweetsController@index');
//
// Route::get('tweets/new', 'TweetsController@store');
//
// Route::post('tweets', 'TweetsController@create');
//
// Route::get('users/{user_id}', 'UsersController@show');
//
// Route::delete('tweets/{tweet_id}', 'TweetsController@destory');
//
// Route::get('tweets/{tweet_id}/{edit}', 'TweetsController@edit');
//
// Route::pathc('tweets/{tweet_id}', 'TweetsController@update');
