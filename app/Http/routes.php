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

Route::get('test', 'test@testDB');


Route::get('/', 'home@index');

Route::post('auth/login', 'Auth\authController@login');
Route::get('auth/register', 'Auth\authController@register');
Route::get('auth/logout', 'Auth\authController@logout');
