<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Season;
use DateTime;

class SeasonsController extends Controller
{
    public function index()
    {	
    	$todaysDate = new DateTime();
    	$seasonPlayerStats = new Season;
    	$seasonPlayerStats = $seasonPlayerStats->getSeasonPlayerStats();
    	return view('seasons.index', compact('season'));
    }

    public function view(Season $season)
    {
    	return 0;
    }
}
