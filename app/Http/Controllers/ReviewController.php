<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $reviews = Review::latest()->paginate(5);

    return view('reviews.index',compact('reviews'))

        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
 	return view('reviews.create');
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

            'review' => 'required',
	        'rating' => 'required',
            'attraction_id' => 'required',
	        'user_id' => 'required',
            ]);

        review::create($request->all());

        $is_admin = \Auth::user()->is_admin;

	    if($is_admin ==1){   

            return redirect()->route('reviews.index')

                >with('success','review created successfully.');
	    }
	    else{
	
	    return redirect()->route('home')
			    ->with('success','review deleted successfully');		
	    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        return view('reviews.show',compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        return view('reviews.edit',compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        $request->validate([

        'review' => 'required',
	    'rating' => 'required',
        'attraction_id' => 'required',
	    'user_id' => 'required',
        ]);

        $review->update($request->all());

  	    $is_admin = \Auth::user()->is_admin;

	    if($is_admin ==1){

            return redirect()->route('reviews.index')

                ->with('success','review updated successfully');
	    }
	    else{
	        return redirect()->route('home')
			    ->with('success','review deleted successfully');
	    }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()->route('reviews.index')

                ->with('success','review deleted successfully');
    }


    /**
     * Determine if review has been made by user for attraction.
     *
     * @param  \App\Attraction ID  $review
     * @return Review
     */
    public function commment(int $attraction_id)
    {
      	$user_id = \Auth::user()->id;

	    $data =  (object)array('user_id' => $user_id,
	     'attraction_id' => $attraction_id );

	    if($reviews = DB::table('reviews')->where([
	        ['attraction_id', '=', $attraction_id],
	         ['user_id', '=', $user_id],])->first()){

		    return redirect()->route('reviews.edit', $reviews->id);	

		    }
	        else{
		        return view('reviews.create', compact('data'));
		
		    }
    }

    /**
     * Determine if review has been made by user for attraction.
     *
     * @param  \App\Attraction ID  $review
     * @return Review
     */
    public function approved(int $attraction_id)
    {
     
	$user_id = \Auth::user()->id;

	$data =  (object)array('user_id' => $user_id,
	     'attraction_id' => $attraction_id );
	


	if($reviews = DB::table('reviews')->where([
	    ['attraction_id', '=', $attraction_id],
	    ['user_id', '=', $user_id],])->first()){

		return redirect()->route('reviews.edit', $reviews->id);
	

	    }else{
		
		return view('reviews.create', compact('data'));
	    }
    }



}
