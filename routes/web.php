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

Route::get('/', 'BaseController@index');
Route::get('/about-us', 'BaseController@about');
Route::get('/contact-us', 'BaseController@contacts');
Route::get('/events', 'BaseController@events');


Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
{
Route::resource('/', 'Admin\UsersController');
Route::resource('/events', 'EventsController');
});

Auth::routes();
