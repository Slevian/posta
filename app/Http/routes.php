<?php

# static pages
Route::get('/', 'HomeController@index');
Route::get('/contact', 'HomeController@contact');

#Ajax invokes
Route::get('/get_post_office_location', 'HomeController@get_post_office_location');
Route::get('/get_post_rates', 'HomeController@get_rates');


// Route::controllers(['auth' => 'Auth\AuthController','password' => 'Auth\PasswordController',]);