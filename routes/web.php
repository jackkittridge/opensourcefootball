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
    return view('index');
}); 

// Static Pages
Route::get('/about', 'PagesController@about');

// Registrations & Sessions
Route::get('/register', 'RegistrationsController@index');
Route::post('register', 'RegistrationsController@store');
Route::get('/login', 'SessionsController@index');
Route::post('/login', 'SessionsController@store');
Route::post('/logout', 'SessionsController@destroy');

// Logged in Player Routes
Route::get('/profile', 'PlayersController@index');
Route::get('/players', 'PlayersController@search');
Route::get('/matches', 'MatchController@index');
Route::get('/table', 'SeasonsController@index');
