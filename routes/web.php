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

Route::get('/', 'Guest\HomeController@index');
Route::get('whyossos', 'Guest\HomeController@create');
Route::get('connect', 'Guest\HomeController@show');


//Visitor News Route:-

Route::get('news','Guest\NewsItemController@index');
Route::get('news/{id}','Guest\NewsItemController@show');

//Visitor Event Route:-
Route::get('events','Guest\EventController@index');
Route::get('events/{id}','Guest\EventController@show');

//visitor Trainer Route:-
Route::get('trainers', 'Guest\TrainerController@index');
Route::get('trainers/{id}', 'Guest\TrainerController@show');

//Frontend
Route::get('home','Guest\HomeController@home');

Route::get('trainers', 'Guest\TrainerController@index');
