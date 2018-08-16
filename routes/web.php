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

Auth::routes();
Route::get('/', 'TweetsController@index');
Route::get('tweets/create', 'TweetsController@create');
Route::post('tweets', 'TweetsController@store');
Route::get('tweets/{tweets_id}/edit', 'TweetsController@edit');
Route::patch('tweets/{tweets_id}', 'TweetsController@update');
Route::get('tweets/{id}/delete', 'TweetsController@destroy');
Route::get('users/{id}', 'UsersController@show');
