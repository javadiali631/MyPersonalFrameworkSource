<?php

use System\Router\Web\Route;
//home routes
Route::get('/', 'HomeController@index', 'home.index');


//auth routes
Route::get('/forgot', 'Auth\ForgotController@view', 'auth.forgot.view');
Route::post('/forgot', 'Auth\ForgotController@forgot', 'auth.forgot');
Route::get('/reset-password/{token}', 'Auth\ResetPasswordController@view', 'auth.reset-password.view');
Route::post('/reset-password/{token}', 'Auth\ResetPasswordController@resetPassword', 'auth.reset-password');

Route::get('/logout', 'Auth\LogoutController@logout', 'auth.logout');

Route::get('/login', 'Auth\LoginController@view', 'auth.login.view');
Route::post('/login', 'Auth\LoginController@login', 'auth.login');

Route::get('/register', 'Auth\RegisterController@view', 'auth.register.view');
Route::post('/register', 'Auth\RegisterController@register', 'auth.register');
Route::get('/activation/{token}', 'Auth\RegisterController@activation', 'auth.activation');

