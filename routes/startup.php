<?php

Route::group(['namespace' => 'Startup'], function() {

    Route::get('/', 'HomeController@index')->name('startup.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('startup.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('startup.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('startup.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('startup.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('startup.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('startup.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('startup.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('startup.verification.notice');
    Route::get('email/verify/{id}','Auth\VerificationController@verify')->name('startup.verification.verify');

    Route::post('trainers/{id}/message', 'TrainerController@message');
});
