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
/*
Route::get('/', function () {

	// get listing
	$attractions = app('App\Http\Controllers\AttractionController')->listing();

        return view('welcome',compact('attractions'))

            ->with('i', (request()->input('page', 1) - 1) * 5);


    //return view('welcome');
});
*/

Route::get('/', 'AttractionController@listing')->name('home');

Auth::routes();

Route::get('reviews/commment/{id}', 'ReviewController@commment')->name('commment');

Route::get('attractions/top5', 'AttractionController@top5')->name('top5');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('attractions','AttractionController');

Route::resource('reviews','ReviewController');






