<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create(){
        return view('sessions.index');
    }

    public function forgot(){
        return "Forgot your password?";
    }

    public function destroy(){
        auth()->logout();
        return redirect()->to('login');
    }
}
