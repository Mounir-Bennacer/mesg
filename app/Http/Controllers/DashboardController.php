<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index(){
    $user = 'Mounir';
    return view('dashboard.index', compact('user'));
  }
}
