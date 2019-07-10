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

//News Route:-

    // Route::get('news/create','NewsItemController@create');
    // Route::post('news','NewsItemController@store');
    // Route::get('news','NewsItemController@index');
    // Route::get('news/{id}/edit','NewsItemController@edit');
    // Route::patch('news/{id}','NewsItemController@update');
    // Route::delete('news','NewsItemController@delete');


    

//Visitor News Route:-

Route::get('news','Guest\NewsItemController@index');

//Visitor Event Route:-
Route::get('events','Guest\EventController@index');
 
//Frountint
Route::get('home','Gest\HomeController@home');
