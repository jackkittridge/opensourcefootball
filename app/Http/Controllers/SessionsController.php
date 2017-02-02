<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
    	$this->middleware('guest', ['except' => 'destroy']);
    }

    public function index()
    {
    	return view("sessions.index");
    }

    // Attempt to log the user in
    public function store() 
    {

    	if(!auth()->attempt(request(['email', 'password']))) {
    		return back();
    	}

    	return redirect('/profile');
    }

    public function destroy()
    {
    	auth()->logout();
    	return redirect('/');
    }
}
