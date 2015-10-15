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
    echo "Welcome to Developer's Best Friend";
});

Route::get('/lorem-ipsum', function() {
  echo "Here's where to create your own loreum ipsum";
});

Route::post('/lorem-ipsum', function() {
  echo "Here's your own lorem ipsum ready for pasting";
});

Route::get('/users', function() {
  echo "How many users?";
});

Route::post('/users', function() {
  echo "Here's your users";
});

Route::get('/practice', function() {

    echo 'Hello World!';

});
