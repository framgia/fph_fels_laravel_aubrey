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
    return view('layouts.app');
});

Auth::routes();

Route::resource('users', 'UsersController', ['only' => [
    'index', 'show', 'edit', 'update'
]]);

Route::namespace('Admin')->prefix('admin')->name('admin.')->group( function() {
	Route::resource('categories', 'CategoryController');
	Route::resource('categories/{category}/words', 'WordsController');
});

Route::namespace('User')->prefix('user')->name('user.categories.')->group( function() {
	Route::get('categories', 'CategoryController@index')->name('index');
});