<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'HomeController@index')->name('home');

/**
 * Registration
 */
Route::resource('/register', 'RegistrationController')->middleware('guest');

/**
 *  LoginController
 */
Route::resource('/login', 'LoginController')->middleware('guest');

/**
 *  Logout
 */
Route::get('/logout', 'LogoutController@logout')->name('logout');

/**
 *  SearchController
 */
Route::get('/search', 'SearchController@index')->name('search.results');

