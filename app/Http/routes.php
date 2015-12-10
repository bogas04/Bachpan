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

Route::get('/', 'HomepageController@index')->name('welcome');

// Login System
Route::get('/logout', 'Auth\AuthController@getLogout')->name('logout');

Route::get('/login', 'HomepageController@login')->name('login');
Route::post('/login', 'Auth\AuthController@postLogin')->name('doLogin');

Route::get('/signup', 'HomepageController@signup')->name('signup');
Route::post('/signup', 'Auth\AuthController@postRegister')->name('doSignup');

// Users
Route::get('/user/{id}', 'HomepageController@viewUser')->name('viewUser');

// Entries
Route::get('/entry', 'HomepageController@viewEntries')->name('viewEntries');

Route::get('/entry/new', 'HomepageController@newEntry')->name('newEntry');
Route::post('/entry/new', 'HomepageController@createEntry')->name('createEntry');

Route::get('/entry/{id}', 'HomepageController@viewEntry')->name('viewEntry');
