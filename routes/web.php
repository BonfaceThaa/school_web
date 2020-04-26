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

Route::get('/', 'HomeController@index');
Route::get('/about-us', 'HomeController@about');
Route::get('/contact-us', 'HomeController@contacts');
Route::get('/events', 'HomeController@events');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function()
{
Route::resource('/', 'UsersController');
});
Route::resource('events', 'EventsController');