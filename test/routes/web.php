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

Route::get('/', 'IndexController@show')->name('index');

Route::get('/form', 'FormController@view')->name('form');
Route::post('/form', 'FormController@add');
Route::get('/delete','FormController@delete');
Route::get('/show', 'ShowController@show');
