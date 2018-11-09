@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit review</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('reviews.index') }}"> Back</a>

            </div>

        </div>

    </div>

   

    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

  

    <form action="{{ route('reviews.update',$review->id) }}" method="POST">

        @csrf

        @method('PUT')

   

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Review:</strong>

                    <input type="text" name="review" value="{{ $review->review }}" class="form-control" placeholder="Review">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
 
               <div class="form-group">

                <strong>Rating:</strong>

        1: <input type="radio" value="1" name="rating"@if($review->rating =='1') checked @endif>
        2: <input type="radio" value="2" name="rating"@if($review->rating =='2') checked @endif>
        3: <input type="radio" value="3" name="rating"@if($review->rating =='3') checked @endif>
        4: <input type="radio" value="4" name="rating"@if($review->rating =='4') checked @endif>
        5: <input type="radio" value="5" name="rating"@if($review->rating =='5') checked @endif>

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
 
               <div class="form-group">
        <strong>Approved:</strong>

        <div>
            <input type="radio" id="yes"
                   name="approved" value="1" {{ ($review->approved =='1') ? 'checked' : '' }}/>
            <label for="yes">Yes: </label>
        </div>

        <div>
            <input type="radio" id="no"
                   name="approved" value="0" {{ ($review->approved =='0') ? 'checked' : '' }}/>
            <label for="no">No: </label>
        </div>

                </div>

            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>

   	  <input type="hidden" id="attraction_id" name="attraction_id" value="{{ $review->attraction_id }}">

	  <input type="hidden" id="user_id" name="user_id" value="{{ $review->user_id }}">

    </form>
</div>
@endsection
