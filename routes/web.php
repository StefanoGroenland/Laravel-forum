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
    'as' => 'thread.index',
    'uses' => 'ThreadsController@index',
]);
Route::get("/threads/create",[
    'as' => 'thread.create',
    'uses' => 'ThreadsController@create',
]);
Route::get("/threads/{channel}/{thread}",[
    'as' => 'thread.show',
    'uses' => 'ThreadsController@show',
]);
Route::post("/threads",[
    'as' => 'thread.store',
    'uses' => 'ThreadsController@store',
]);
Route::get("/threads/{channel}",[
    'uses' => 'ThreadsController@index',
]);
Route::post('/threads/{channel}/{thread}/replies', 'RepliesController@store')->name('reply.store');
