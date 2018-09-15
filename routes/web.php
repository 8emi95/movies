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

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', 'Auth/LoginController@login');


Route::get('/add-movie', 'MovieController@add');
Route::post('/add-movie', 'MovieController@store');


Route::get('/add-item', 'ItemController@add');
Route::post('/add-item', 'ItemController@store');


Route::get('/assign', 'ItemController@assign');
Route::post('/assign', 'ItemController@assignToMovie');


Route::get('/combine', 'MovieController@combine');
Route::post('/combine', 'MovieController@combineMovies');


Route::get('/shows', 'ShowController@list');