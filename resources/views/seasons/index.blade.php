@extends('layouts.players')

@section('content')
	<div class="col-lg-10 col-lg-offset-1">
		@if (!empty($season) && !empty($season->playedPlayerMatches))
			<table class="table table-responsive table-striped table-hover">
			</table>
		@else
			<div class="panel panel-default">
				There are no matches to display yet.
			</div>
		@endif
    </div>
@endsection