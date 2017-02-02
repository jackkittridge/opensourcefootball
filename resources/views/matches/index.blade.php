@extends('layouts.players')

@section('content')
	<div class="col-lg-10 col-lg-offset-1">
		@if (!empty($matches))
			@foreach($matches as $match)
				<div class="panel panel-default">
		            <div class="clearfix panel-heading">
		            	<div class="col-lg-7 col-lg-offset-1">
		            		{{ $match->name }} <span class="text-success">W:{{ $match->name }}</span>	            		
		            	</div>
		            	<div class="col-lg-1 col-lg-offset-3"><span class="caret"></span></div>
		            </div>

		            <div class="panel-body">
		                <ul>
		                    <li>location: {{ $match->location_id }} </li>
		                    <li>team sizes: {{ $match->team_sizes }}</li>
		                    <li>date: {{ $match->date }}</li>
		                </ul>
		            </div>
		        </div>
			@endforeach
		@else
			<div class="panel panel-default">
				There are no matches to display.
			</div>
		@endif
    </div>
@endsection