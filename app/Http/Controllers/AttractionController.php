<?php

namespace App\Http\Controllers;

use App\Attraction;
use App\Review;
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
     * get a listing of the approved resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listing()
    {

        $attractions = Attraction::where('approved', 1)->paginate(5);

	return view('welcome',compact('attractions'))

                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * get a listing of the approved resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rawListing()
    {

        $attractions = Attraction::where('approved', 1)->paginate(5);

	    return $attractions;
    }

    /**
     *  lists the top 5 attractions ordered by their overall average rating.
     *
     * @return \Illuminate\Http\Response
     */
    public function top5()
    {
        $attractions = Attraction::where('approved', 1)->get();

	    $top5 = array();

	    foreach($attractions as $attraction){

		    $reviews = Review::where('attraction_id', $attraction->id)->get();

		    $count = 0;
		    $total = 0;
		    $average =0;

		    foreach($reviews as $review){
			    $count++;
			    $total = $total + $review->rating;
		    }

	    if($count ==0){
	       $total=0;
	    }
	    else{
	       $average = $total / $count;
	    }
	
	    $top5[] = array(
		    'count' => $count,
            'average' => $average,
		    'name' => $attraction->name);
	    }

        $this->aasort($top5,"average");

        $finalTop5 = array_slice($top5, 0, 5);

	    return view('attractions.top5',compact('finalTop5'));
    }

    /**
     * take a array and sort on key value.
     *
     * @return \Illuminate\Http\Response
     */
    private function aasort(&$array, $key){
 
        $sorter=array();
        $ret=array();
        reset($array);

        foreach ($array as $ii => $va) {
            $sorter[$ii]=$va[$key];
            }

        arsort($sorter);

        foreach ($sorter as $ii => $va) {
            $ret[$ii]=$array[$ii];
            }

        $array=$ret;
    }
}
