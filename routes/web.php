<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\TodolistController@index');
Route::get('/create-page', 'App\Http\Controllers\TodolistController@createPage');
Route::post('/create', 'App\Http\Controllers\TodolistController@create');
Route::get('/edit-page/{id}', 'App\Http\Controllers\TodolistController@editPage');
Route::post('/edit', 'App\Http\Controllers\TodolistController@edit');
Route::get('/delete-page/{id}', 'App\Http\Controllers\TodolistController@deletePage');
Route::post('/delete', 'App\Http\Controllers\TodolistController@delete');
