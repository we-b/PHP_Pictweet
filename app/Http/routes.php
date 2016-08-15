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

Route::auth();

Route::get('/', 'TweetsController@index');

Route::get('/tweets/new', 'TweetsController@create');

Route::post('/tweets', 'TweetsController@store');

Route::get('/tweets/{id}', 'TweetsController@show');

Route::get('/tweets/{tweet_id}/edit', 'TweetsController@edit');

Route::put('/tweets/{tweet_id}', 'TweetsController@update');

Route::get('/tweets/{id}/delete', 'TweetsController@destroy');

Route::get('/users/{id}', 'UsersController@show');

Route::post('/tweets/{id}/comments', 'CommentsController@store');
