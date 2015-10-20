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

Route::get('/', 'MainController@getIndex');

Route::get('/lorem-ipsum', 'LoremController@getIndex');
Route::post('/lorem-ipsum', 'LoremController@postIndex');

Route::get('/users', 'UserController@getIndex');
Route::post('/users', 'UserController@postIndex');
