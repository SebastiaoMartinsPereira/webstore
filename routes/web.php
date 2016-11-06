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
Route::group(['middleware'=> 'web'],function(){
    Route::auth();
});

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/contato', 'ContatoController@contato');

Route::get('/auth/login', 'LoginController@login');
Route::get('/auth/logout', 'LoginController@logout');
Route::get('/auth/register', 'RegisterController@register');


Route::group(array('prefix'=>'/admin'),function(){

    Route::get('', 'AdminController@painel');

    Route::get('/banner', 'BannerController@index')->name('bannerIndex');
    Route::post('/banner/add', 'BannerController@store')->name('bannerStore');
    Route::delete('/banner/{id}', 'BannerController@delete')->name('bannerDelete');
    
    Route::get('/grupo', 'GrupoController@index')->name('routeGrupo');
    Route::post('/grupo', 'GrupoController@store')->name('routeGrupo');
    Route::delete('/grupo/{id}', 'GrupoController@destroy')->name('routeGrupoDelete');

});

Route::get('routes', function() { \Artisan::call('route:list'); return "<pre>".\Artisan::output(); });

Route::get('/home', 'HomeController@index');
