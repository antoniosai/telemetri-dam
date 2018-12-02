<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('test', function(){
    return view('welcome');
});
Route::group(['middleware' => 'auth'], function(){
    Route::get('/', 'Admin\DashboardController@index')->name('dashboard');
});

Route::group(['prefix' => 'site/dam'], function(){
    Route::get('/', 'Admin\DamController@index')->name('dam.index');
    Route::get('/{kode_bendungan}', 'Admin\DamController@detail')->name('dam.detail');
});

Route::group(['prefix' => 'helpdesk'], function(){
    Route::get('/', 'HelpdeskController@index')->name('helpdesk.index');
    Route::get('manual', 'ManualController@index')->name('helpdesk.manual');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
