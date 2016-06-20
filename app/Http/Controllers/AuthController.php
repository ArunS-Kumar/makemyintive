<?php

namespace App\Http\Controllers;


class AuthController extends Controller
{
    
    public function index()
    {
    	return view('auth.signin');
    }

    public function signup()
    {
    	return view('auth.signup');
    }
}

