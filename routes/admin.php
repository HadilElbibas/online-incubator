<?php

Route::group(['namespace' => 'Admin'], function() {
    Route::get('/', 'HomeController@index')->name('admin.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('admin.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('admin.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('admin.verification.notice');
    Route::get('email/verify/{id}','Auth\VerificationController@verify')->name('admin.verification.verify');



    //News Routs:-
    Route::get('news/create','NewsItemController@create');
    Route::post('news','NewsItemController@store');
    Route::get('news','NewsItemController@index');
    Route::get('news/{id}/edit','NewsItemController@edit');
    Route::patch('news/{id}','NewsItemController@update');
    // Route::delete('news/{id}','NewsItemtController@destroy');


    //Event Routs:-
    Route::get('events/create','EventController@create');
    Route::post('events','EventController@store');
    Route::get('events','EventController@index');
    Route::get('events/{id}/edit','EventController@edit');
    Route::get('events/{id}','EventController@show');
    Route::patch('events/{id}','EventController@update');
    Route::delete('events/{id}','EventController@destroy');


    //Trainers Routs:-
    Route::get('trainers', 'TrainerController@index');
    Route::get('trainers/create', 'TrainerController@create');
    Route::post('trainers', 'TrainerController@store');
    Route::get('trainers/{id}/edit', 'TrainerController@edit');
    Route::patch('trainers/{id}', 'TrainerController@update');
    Route::delete('trainers/{id}', 'TrainerController@destroy');
});