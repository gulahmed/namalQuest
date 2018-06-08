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

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web','auth']], function () {
	Route::get('/apply', 'ProfileController@index');
	Route::get('/apply/profile', 'ProfileController@create')->name('profile.show');
	Route::post('/apply/profile', 'ProfileController@store')->name('profile.store');
	Route::get('/apply/details', 'ContactDetailController@create');

});
	//Route::post('/apply/profile', 'ApplicantController@store');

	
	






