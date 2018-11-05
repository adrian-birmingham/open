<?php

namespace App\Http\Controllers;

use App\Attraction;
use Illuminate\Http\Request;

class AttractionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attractions = Attraction::latest()->paginate(5);

        return view('attractions.index',compact('attractions'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
 	return view('attractions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',

        ]);

        Attraction::create($request->all());

   

        return redirect()->route('attractions.index')

                        ->with('success','Attraction created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function show(Attraction $attraction)
    {
        return view('attractions.show',compact('attraction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function edit(Attraction $attraction)
    {

        return view('attractions.edit',compact('attraction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attraction $attraction)
    {
        $request->validate([

            'name' => 'required',

        ]);

  

        $attraction->update($request->all());

  

        return redirect()->route('attractions.index')

                        ->with('success','Attraction updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attraction  $attraction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attraction $attraction)
    {
        $attraction->delete();

  

        return redirect()->route('attractions.index')

                        ->with('success','Attraction deleted successfully');

    }

    /**
     * gET a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listing()
    {
        $attractions = Attraction::latest()->paginate(5);

	return $attractions;
    }
}
