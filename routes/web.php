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

Route::get('/', 'MemberController@index');
Route::get('/create', 'MemberController@create');
Route::post('/', 'MemberController@store');
Route::get('/{id}/edit', 'MemberController@edit');
Route::put('/{id}', 'MemberController@update');
Route::delete('/{id}', 'MemberController@destroy');