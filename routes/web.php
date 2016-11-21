<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Auth::routes();
Route::get('/', 'Website\WebsiteController@index')->name('website.index');
Route::post('registro', 'Auth\HubController@registro')->name('web.registro');

