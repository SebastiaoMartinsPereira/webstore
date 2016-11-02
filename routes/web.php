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

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/contato', 'ContatoController@contato');

Route::get('/auth/login', 'LoginController@login');
Route::get('/auth/logout', 'LoginController@logout');
Route::get('/auth/register', 'RegisterController@register');


Route::get('/admin', 'AdminController@painel');
Route::get('/admin/banner', 'BannerController@form')->name('bannerForm');
Route::post('/admin/banner/add', 'BannerController@store')->name('bannerStore');

Route::get('routes', function() { \Artisan::call('route:list'); return "<pre>".\Artisan::output(); });


Auth::routes();

Route::get('/home', 'HomeController@index');
