@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Attraction</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('attractions.index') }}"> Back</a>

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

  

    <form action="{{ route('attractions.update',$attraction->id) }}" method="POST">

        @csrf

        @method('PUT')

   

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Name:</strong>

                    <input type="text" name="name" value="{{ $attraction->name }}" class="form-control" placeholder="Name">

                </div>

            </div>



        <strong>Approved:</strong>

        <div>
            <input type="radio" id="yes"
                   name="approved" value="1" {{ ($attraction->approved =='1') ? 'checked' : '' }}/>
            <label for="yes">Yes: </label>
        </div>

        <div>
            <input type="radio" id="no"
                   name="approved" value="0" {{ ($attraction->approved =='0') ? 'checked' : '' }}/>
            <label for="no">No: </label>
        </div>


  



            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>

   

    </form>
</div>
@endsection
