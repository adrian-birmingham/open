@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>reviews</h2>

            </div>

        </div>

    </div>
   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

  
    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Review</th>

            <th>Rating</th>

            <th>Approved</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($reviews as $review)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $review->review }}</td>

            <td>{{ $review->rating }}</td>
	    
	    <td>@if($review->approved =='1') Yes @endif</td>
            
            <td>

                <form action="{{ route('reviews.destroy',$review->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('reviews.show',$review->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('reviews.edit',$review->id) }}">Edit</a>



                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $reviews->links() !!}

 </div>	     

@endsection
