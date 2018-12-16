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

Route::get('get_info', 'API\InfoController@get_info');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('auth/register', 'AuthController@register');
Route::post('auth/login', 'AuthController@login');
Route::group(['middleware' => 'jwt.auth'], function(){
	Route::get('auth/user', 'AuthController@user');
	Route::post('auth/logout', 'AuthController@logout');
});

Route::group(['middleware' => 'jwt.refresh'], function(){
	Route::get('auth/refresh', 'AuthController@refresh');
});

Route::group(['middleware' => 'jwt.auth'], function(){
	Route::resource('dam', 'API\DamController');
	Route::group(['prefix' => 'dam'], function(){
		Route::get('/detail/{id}', 'API\DamController@detail')->name('dam.detail');
		Route::post('save', 'API\DamController@save')->name('dam.save');
	});
	Route::group(['prefix' => 'site_dam'], function(){
	});
	
	Route::group(['prefix' => 'user_management'], function(){
		Route::get('/', 'API\UserController@index');
		Route::post('save', 'API\UserController@save');
	});
});

Route::get('/token', function(){
	$data = bin2hex(random_bytes(32));
	return response()->json($data);
});
Route::get('generate_token', 'API\DamController@token')->name('dam.generate_token');

