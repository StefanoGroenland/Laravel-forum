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

Route::get("/threads",[
    'as' => 'threads.index',
    'uses' => 'ThreadsController@index',
]);
Route::get("/threads/create",[
    'as' => 'threads.create',
    'uses' => 'ThreadsController@create',
]);
Route::get("/threads/{channel}/{thread}",[
    'as' => 'threads.show',
    'uses' => 'ThreadsController@show',
]);
Route::post("/threads",[
    'as' => 'threads.store',
    'uses' => 'ThreadsController@store',
]);
Route::get("/threads/{channel}",[
    'as' => 'threads.channel',
    'uses' => 'ThreadsController@index',
]);
Route::post('/threads/{channel}/{thread}/replies', 'RepliesController@store')->name('reply.store');

Route::post("/replies/{reply}/favorites",[
    'as' => 'favorite.store',
    'uses' => 'FavoritesController@store',
]);
