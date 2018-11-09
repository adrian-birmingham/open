@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
<!--
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in to Attractions!
-->

			<table class="table table-bordered">



			@foreach ($attractions as $attraction)

			<tr>

		

			    <td>{{ $attraction->name }}</td>

			    <td> <a href="reviews/commment/{{ $attraction->id }}">Review</a></td>


			</tr>

			@endforeach

		    </table>

		{!! $attractions->links() !!}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
