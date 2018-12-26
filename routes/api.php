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
Route::get('test', 'AuthController@test');

Route::get('get_info', 'API\InfoController@getInfo');
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

// Route::group(['middleware' => 'jwt.auth'], function(){
Route::group(['prefix' => '/'], function(){

	Route::post('save_info', 'API\InfoController@saveInfo');
	Route::resource('dam', 'API\DamController');

	Route::group(['prefix' => 'wilayah'], function(){
		Route::get('provinsi', 'API\WilayahController@getProvinsi');
		Route::get('nama_provinsi', 'API\WilayahController@namaProvinsi');
		Route::get('kota/{prov_id}', 'API\WilayahController@getKota');
		Route::get('kecamatan/{kota_id}', 'API\WilayahController@getKec');
		Route::get('desa/{kecamatan_id}', 'API\WilayahController@getDesa');
	});

	Route::group(['prefix' => 'dam'], function(){
		Route::get('/detail/{id}', 'API\DamController@detail')->name('dam.detail');
		Route::post('save', 'API\DamController@save')->name('dam.save');
	});

	Route::group(['prefix' => 'user_management'], function(){
		Route::get('/', 'API\UserController@index');
		Route::get('/detail/{id}', 'API\UserController@detail');
		Route::post('save', 'API\UserController@save');

		Route::get('/list_role', 'API\UserController@listRole');
	});
	
});

Route::get('/token', function(){
	$data = bin2hex(random_bytes(32));
	return response()->json($data);
});
Route::get('generate_token', 'API\DamController@token')->name('dam.generate_token');

