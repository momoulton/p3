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

Route::get('/lorem-ipsum', 'LoremController@getIndex');
Route::post('/lorem-ipsum', 'LoremController@postIndex');

Route::get('/users', 'UserController@getIndex');
Route::post('/users', 'UserController@postIndex');


Route::get('/practice', function() {

  $random = new Rych\Random\Random();
  $randomNumber = $random->getRandomInteger(1,10);
  $generator = new Badcow\LoremIpsum\Generator();
  $paragraphs = $generator->getParagraphs($randomNumber);
  return implode('<p>', $paragraphs);

});
