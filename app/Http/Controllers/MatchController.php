<?php

namespace opensourcefootball\Http\Controllers;

use Illuminate\Http\Request;
use opensourcefootball\Match;

class MatchController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
    	$matches = Match::all();
    	return view('matches.index', compact('matches'));
    }

    public function view(Match $match)
    {
    	return view('matches.create', compact($match));
    }

    public function store(Request $request)
    {
    	return "lol";
    }

    public function create()
    {
    	return view('matches.create');
    }
}
