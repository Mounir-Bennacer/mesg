<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class SessionsController extends Controller
{
	public function __construct(){
		$this->middleware('guest');
	}


    /**
     * Creating the view for login page
     *
     * @return views/sessiosn/index
     */
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
	    return redirect()->home();
    }

    public function destroy(){
        auth()->logout();
        return redirect()->home();
    }
}
