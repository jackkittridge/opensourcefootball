<?php

namespace opensourcefootball\Http\Controllers;

use Illuminate\Http\Request;
use opensourcefootball\Player;

class PlayersController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // No need to retrieve the object because we have it in Auth()
        return view('players.index');
    }

    public function search()
    {
    	$players = Player::all();
    	return view('players.search', compact('players'));
    }
}
