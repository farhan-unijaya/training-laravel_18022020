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
    // return view('welcome');
	return redirect()->route('login');
});

Route::get('training', function () {
    return view('training');
})->name('training');

Auth::routes();

Route::prefix('home')->group(function () {
	Route::get('/','HomeController@index')->name('home'); // /home
	Route::post('/','HomeController@send')->name('home'); // /home post data
	Route::get('/list','HomeController@list')->name('list'); //home/list
});

Route::prefix('item')->group(function () {

	Route::prefix('view')->group(function() {
		Route::get('{id}', 'ItemController@show')->name('item.view');
	});
	Route::prefix('list')->group(function() {
		Route::get('/', 'ItemController@list')->name('item.list')->middleware('auth');
	});

	Route::get('/', 'ItemController@create')->name('item');
	Route::post('/', 'ItemController@store')->name('item');

	Route::prefix('form')->group(function() {
		Route::get('{id}', 'ItemController@edit')->name('item.form');
		Route::post('{id}', 'ItemController@update')->name('item.form');
		Route::delete('{id}', 'ItemController@destroy')->name('item.form');
	});

});