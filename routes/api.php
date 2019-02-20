<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');


Route::group(['middleware' => 'auth:api'], function(){
	Route::post('details', 'API\UserController@details');
	Route::get('clients', 'API\ClientController@getClient');
	Route::get('index-clients', 'API\ClientController@indexClents');
	Route::get('clients-search/{id}', 'API\ClientController@search');

	Route::group(['prefix' => 'items'], function(){
		Route::get('getItems', 'API\ItemController@getItems');
	});
});



// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/messages','ChatController@getMessages');
//Route::post('/sendMessage','ChatController@sendMessage');
