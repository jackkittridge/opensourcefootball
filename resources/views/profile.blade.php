@extends('layouts.players')

@section('content')
    <div class="row col-lg-10 col-lg-offset-1">
        <div class="panel panel-default">
            <div class="panel-body text-center">
                welcome back, {{ (Auth::user()->firstname) }}
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">overall stats.</div>

            <div class="panel-body">
                <ul>
                    <li>played: {{ Auth::user()->total_played }} </li>
                    <li>wins: {{ Auth::user()->total_wins }}</li>
                    <li>goals: {{ Auth::user()->total_goals }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
