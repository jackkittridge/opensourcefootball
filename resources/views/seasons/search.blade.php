@extends('layouts.home')

@section('content')
	<div class="col-lg-10 col-lg-offset-1">
		@if (!empty($seasons))
			@foreach($seasons as $season)
				<div class="panel panel-default">
		            <div class="clearfix panel-heading">
		            	<div class="col-lg-7 col-lg-offset-1">
		            		{{ $season->name }} <span class="text-success">W:{{ $season->name }}</span>	            		
		            	</div>
		            	<div class="col-lg-1 col-lg-offset-3"><span class="caret"></span></div>
		            </div>

		            <div class="panel-body">
		                <ul>
		                    <li>location: {{ $season->location_id }} </li>
		                    <li>team sizes: {{ $season->team_sizes }}</li>
		                    <li>date: {{ $season->date }}</li>
		                </ul>
		            </div>
		        </div>
			@endforeach
		@else
			<div class="panel panel-default">
				There are no seasons to display.
			</div>
		@endif
    </div>
@endsection