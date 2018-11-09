<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	$attractions = app('App\Http\Controllers\AttractionController')->rawListing();

	return view('home',compact('attractions'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
