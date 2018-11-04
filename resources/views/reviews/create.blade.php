@extends('reviews.layout')

  

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New Review</h2>

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

   

<form action="{{ route('reviews.store') }}" method="POST">

    @csrf

  

     <div class="row">	


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Review:</strong>

                <input type="text" name="review" class="form-control" placeholder="Leave my review here.......">

            </div>

        </div>

	<div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Rating:</strong>

        1: <input type="radio" value="1" name="rating">
        2: <input type="radio" value="2" name="rating">
        3: <input type="radio" value="3" name="rating">
        4: <input type="radio" value="4" name="rating">
        5: <input type="radio" value="5" name="rating" checked>

            </div>

        </div>




        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>

	 <input type="hidden" id="attraction_id" name="attraction_id" value="3487">

</form>

@endsection
