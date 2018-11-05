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

	// get listing
	$attractions = app('App\Http\Controllers\AttractionController')->listing();

        return view('welcome',compact('attractions'))

            ->with('i', (request()->input('page', 1) - 1) * 5);


    //return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('attractions','AttractionController');

Route::resource('reviews','ReviewController');
