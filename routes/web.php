<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/book-ajax', 'BookAjaxController@index');
Route::get('/book-ajax/get-book', 'BookAjaxController@books');
Route::get('/book-builder', 'BookBuilderController@index');
