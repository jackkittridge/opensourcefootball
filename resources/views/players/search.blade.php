@extends('layouts.players')

@section('content')
	@foreach($players as $player)
		<div class="col-lg-10 col-lg-offset-1">
			<div class="panel panel-default">
	            <div class="clearfix panel-heading">
	            	<div class="col-lg-7 col-lg-offset-1">
	            		{{ $player->username }} <span class="text-success">W:{{ $player->total_wins }}</span>	            		
	            	</div>
	            	<div class="col-lg-1 col-lg-offset-3"><span class="caret"></span></div>
	            </div>

	            <div class="panel-body">
	                <ul>
	                    <li>played: {{ $player->total_played }} </li>
	                    <li>wins: {{ $player->total_wins }}</li>
	                    <li>goals: {{ $player->total_goals }}</li>
	                </ul>
	            </div>
	        </div>
	    </div>
	@endforeach
@endsection