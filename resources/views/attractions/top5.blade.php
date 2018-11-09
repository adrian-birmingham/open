@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Top 5 Reviews.</div>
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

			    <td>Attraction</td>

			    <td>Average rating</td>

			    <td>No. of Reviews</td>

			@foreach ($finalTop5 as $item)

			<tr>

		

			    <td>{{ $item['name'] }}</td>

			    <td>{{ $item['average'] }}</td>

			    <td>{{ $item['count'] }}</td>

			    


			</tr>

			@endforeach

		    </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
