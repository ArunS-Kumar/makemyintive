<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    
    public function index()
    {
    	return view('home.home');
    }

    public function dashboard()
    {
    	return view('dashboard.dashboard');	
    }
}


