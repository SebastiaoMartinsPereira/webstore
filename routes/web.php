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

    Route::get('/categoria', 'CategoriaController@index')->name('routeCategoria');
    Route::post('/categoria', 'CategoriaController@store')->name('routeCategoria');
    Route::put('/categoria', 'CategoriaController@update')->name('routeCategoria');
    Route::delete('/categoria/{id_grupo}/{id_categoria}', 'CategoriaController@destroy')->name('routeCategoriaDelete');

    Route::get('/produto', 'produtoController@index')->name('routeProduto');
    Route::post('/produto', 'produtoController@store')->name('routeProduto');
    Route::put('/produto', 'produtoController@update')->name('routeProduto');
    Route::delete('/produto/{id_grupo}/{id_produto}', 'produtoController@destroy')->name('routeProdutoDelete');

});

Route::get('routes', function() { \Artisan::call('route:list'); return "<pre>".\Artisan::output(); });

Route::get('/home', 'HomeController@index');



/**{id_grupo}/{id_categoria}*/