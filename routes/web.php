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

Route::group([], function () {

	Route::get('about', [
		//'middleware' => 'cache.response',
		'uses' => 'PagesController@showAboutPage'
	]);

	Route::get('my-profile/login', [
		//'middleware' => 'cache.response',
		'as'   => "sample.login",
		'uses' => 'PagesController@showSampleLogin'
	]);

	Route::get('my-profile/sign-up', [
		//'middleware' => 'cache.response',
		'as'   => "sample.my-profile",
		'uses' => 'PagesController@showSample'
	]);

	Route::get('my-profile', [
		//'middleware' => 'cache.response',
		'as'   => "sample.my-profile",
		'uses' => 'PagesController@showSample'
	]);

	Route::get('my-mentee', [
		//'middleware' => 'cache.response',
		'as'   => "sample.my-mentee",
		'uses' => 'PagesController@showMentee'
	]);
});