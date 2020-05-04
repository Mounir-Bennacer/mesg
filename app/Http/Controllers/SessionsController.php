<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class SessionsController extends Controller
{
	public function __construct(){
		$this->middleware('guest');
	}


    public function create(){
        return view('sessions.index');
    }

    public function forgot(){
        return "Forgot your password?";
    }

    public function store(User $user){
	    if(! auth()->attempt(request(['email', 'password']))){
		    return back();
	    }
	    return redirect()->to('dashboard');
    }

    public function destroy(){
        auth()->logout();
        return redirect()->to('login');
    }
}
