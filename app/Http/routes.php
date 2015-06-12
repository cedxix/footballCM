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

Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);
// Team and fixtures
Route::get('/teams-fixtures/', [
    'as' => 'getFixtures',
    'uses' => 'TeamController@index'
]);
Route::get('/teams-fixtures/fixtures', [
    'as' => 'fixture',
    'uses' => 'TeamController@fixtures'
]);
// Players
Route::get('/players', [
    'as' => 'getPlayers',
    'uses' => 'PlayerController@player_details'
]);
// Blog
Route::get('/news', [
    'as' => 'getNews',
    'uses' => 'NewsController@index'
]);
Route::get('/news/{slug}', [
    'as' => 'news',
    'uses' => 'NewsController@read_news'
]);
// Gallery
Route::get('/gallery', [
    'as' => 'getGallery',
    'uses' => 'GalleryController@index'
]);

//ADMIN PANEL

Route::get('/admin', [
    'as' => 'controlPanel',
    'uses' => 'AdminController@index'
]);