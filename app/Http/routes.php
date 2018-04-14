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

//-------------Menu Routes-------------------------//
Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

Route::get('/todo', 'pagesController@todo');

Route::resource('/posts', 'PostController');

//=================================================//

//---------------kleding controllers------------------//
Route::get('/dameskleding', 'KledingController@dameskleding');

