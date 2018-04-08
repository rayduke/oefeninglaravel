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
Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');



Route::post('raymon', function(){
 if($request->ajax()){
  return Response::json(Request::all());
 }
});

//Route::resource('raymon/{data}', 'raymonController@index');

Route::get('/raymon', function(){
    return view('raymon');
});

//Route::get('/', function () {
//    return view('welcome');
//});




