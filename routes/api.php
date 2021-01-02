<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/articels', 'ArticelController@index');
Route::post('/articels/add', 'ArticelController@store');
Route::get('/articels/detail/{id}', 'ArticelController@getShow');
Route::get('/articels/edit/{id}', 'ArticelController@getEdit');
Route::put('/articels/update/{id}', 'ArticelController@update');
Route::delete('/articels/delete/{id}', 'ArticelController@delete');
