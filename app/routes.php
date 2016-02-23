<?php

/*
|--------------------------------------------------------------------------
| Routes for Login
|--------------------------------------------------------------------------
|
*/
Route::get('/login', ['as' => 'login', 'uses' => 'SessionsController@create']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);

Route::group(array('before' => 'auth2'), function() {
	Route::get('/', ['as' => 'home', 'uses' => 'UsersController@index']);
	Route::get('/activities', ['as' => 'activities', 'uses' => 'UsersController@activities']);
	Route::post('/activities/update', 'UsersController@update');
});

###################### AJAX #######################################

////////////////////////// AUTOCOMPLETE ////////////////////////////
Route::post('/autocomplete/clients', 'AutocompleteController@clients');

/////////////////////////////// GET /////////////////////////////////
Route::post('/get/numeroatencion','GetController@numeroatencion');