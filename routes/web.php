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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', [
	'uses' => 'MediaController@index',
	'as' => 'get::media.index'
]);

Route::post('/process', [
	'uses' => 'MediaController@store',
	'as' => 'post::media.store'
]);