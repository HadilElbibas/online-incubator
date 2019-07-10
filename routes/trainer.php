<?php

Route::group(['namespace' => 'Trainer'], function() {
    Route::get('/', 'HomeController@index')->name('trainer.dashboard');

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('trainer.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('trainer.logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('trainer.register');
    Route::post('register', 'Auth\RegisterController@register');

    // Passwords
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('trainer.password.email');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('trainer.password.request');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('trainer.password.reset');

    // Must verify email
    Route::get('email/resend','Auth\VerificationController@resend')->name('trainer.verification.resend');
    Route::get('email/verify','Auth\VerificationController@show')->name('trainer.verification.notice');
    Route::get('email/verify/{id}','Auth\VerificationController@verify')->name('trainer.verification.verify');

});