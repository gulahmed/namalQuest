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
	Route::get('/apply', 'ApplicantController@index')->name('apply');
	Route::post('/apply/profile', 'ApplicantController@add_profile');

	
	});


Route::get('/contact', function(){
	return view('applicant.contact');
});



