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

//Route::get('/', function()
//{
//	return View::make('hello');
//});



//Main redirect
Route::get('/', function()
{
	return Redirect::to('/login');
})->before('guest');

Route::get('/', function()
{
	return Redirect::to('/items');
})->before('auth');

Route::group(array('before' => 'auth'), function()
{
	Route::get('/items', 'ManageItemsController@getItems');
	Route::post('/items', 'ManageItemsController@postItems');

	Route::get('/addnewitem', 'ManageItemsController@getAddNewItem');
	Route::post('/addnewitem', 'ManageItemsController@postAddNewItem');

	//API Routes for autocomplete
	Route::get('/api/allItemNumbers', 'AutocompleteController@getItemNumbers');
	Route::get('/api/allItemDesc', 'AutocompleteController@getItemDesc');
	Route::get('/api/allSlotLoc', 'AutocompleteController@getSlotLoc');
	Route::get('/api/allPackSize', 'AutocompleteController@getPackSize');

	Route::get('/edititem', 'ManageItemsController@getErrorEditItem');
	Route::post('/edititem', 'ManageItemsController@postEditItem');
	Route::post('/updateitem', 'ManageItemsController@postUpdateItem');
});

Route::get('/login', 'LoginController@getLogin');
Route::post('/loginattempt', 'LoginController@postLoginAttempt');

Route::get('/logout', 'LoginController@getLogout')->before('auth');
