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

//Visitor News Route:-

Route::get('news','Guest\NewsItemController@index');

//Visitor Event Route:-
Route::get('events','Guest\EventController@index');
Route::get('trainers', 'Guest\TrainerController@index');

//Frontend
Route::get('home','Guest\HomeController@home');

Route::get('trainers', 'Guest\TrainerController@index');
