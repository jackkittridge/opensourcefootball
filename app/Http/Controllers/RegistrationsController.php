<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class RegistrationsController extends Controller
{
    public function index()
    {
    	return view('registrations.index');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
            'username' => 'required|unique:players,username',
    		'email' => 'required|email|unique:players,email',
    		'password' => 'required|confirmed',
    		'firstname' => 'required',
    		'lastname' => 'required',
    		'pref_position' => 'required',
		]);

		if ($player = Player::create($request->all())) {
			auth()->login($player);
			return redirect('/profile');
		}

    	return back()->withErrors();
    }
}
