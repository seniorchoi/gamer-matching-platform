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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/messages', 'MessagesController@index');

Route::get('/messages/sent', 'MessagesController@sent');

Route::get('/messages/new', 'MessagesController@newMessages');

Route::get('/messages/trash', 'MessagesController@deleted');

Route::get('/friends-list','FriendsListController@index')->name('friends-list');


// PLAYERS
Route::get('/players', 'PlayerController@listing')->name('players-list');

Route::get('/players/:id', 'PlayerController@detail')->name('player-detail');

Route::get('/my-page', 'HomeController@index');


Route::get('/my-page/edit', 'HomepageController@index');