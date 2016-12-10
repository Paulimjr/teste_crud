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
Route::group(['as' => 'adm', 'prefix' => 'adm', 'namespace' => 'Adm','middleware' => 'auth'], function()
{
	Route::get('home', ['as' => 'index', 'uses' => 'EstadoController@home']);		
	Route::get('novo', ['as' => 'index', 'uses' => 'EstadoController@novo']);
        Route::post('salvar',['as' => 'index', 'uses' => 'EstadoController@salvar']);
        Route::get('alterar/{id}', ['as' => 'index', 'uses' => 'EstadoController@alterar']);
        Route::get('deletar/{id}', ['as' => 'index', 'uses' => 'EstadoController@deletar']);
        Route::post('salvar_alteracao', ['as' => 'index', 'uses' => 'EstadoController@salvar_alteracao']);
});
//grupo de rotas de login
Route::group(['as' => 'adm', 'namespace' => 'Adm'], function()
{
	Route::get('login', ['as' => 'index', 'uses' => 'AuthController@index']);
	Route::post('logar', ['as' => 'index', 'uses' => 'AuthController@logar']);
	Route::get('logout', ['as' => 'index', 'uses' => 'AuthController@logout']);
	
});
