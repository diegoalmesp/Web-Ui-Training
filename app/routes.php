<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
	// return View::make('hello');
// });

Route::get('/', 'HomeController@getInicio');

Route::get('/privacidad', 'HomeController@getPrivacidad');

Route::get('/terminos', 'HomeController@getTerminos');

Route::get('/contacto', 'HomeController@getContacto');

Route::controller('/empresas', 'EmpresasController');