@extends('attractions.layout')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Attractions</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('attractions.create') }}"> Create New Attraction</a>

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

            <th>Name</th>

            

            <th width="280px">Action</th>

        </tr>

        @foreach ($attractions as $attraction)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $attraction->name }}</td>

            
            <td>

                <form action="{{ route('attractions.destroy',$attraction->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('attractions.show',$attraction->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('attractions.edit',$attraction->id) }}">Edit</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $attractions->links() !!}

      

@endsection
