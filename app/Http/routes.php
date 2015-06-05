<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::match(['POST','GET'],'test/{name}', 'HomeController@test');
// Team and fixtures
Route::get('teams-fixtures/', 'TeamController@index');
// Players
Route::get('players/', 'PlayerController@player_details');
