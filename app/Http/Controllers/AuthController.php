<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{

	public function getSignup()
	{
		return view('auth.signup');
	}

	public function postSignup(Request $request)
	{
		$input  = $request->all();
		$this->validate($request, [
			'email'      => 'required|unique:users|email|max:255',
			'name'       => 'required|alpha_dash|max:20',
			'password'   => 'required|min:6|max:12',
			'repassword' => 'required|same:password|min:6|max:12',
		]);

		User::create([
			'email'    => $input['email'],
			'username' => $input['email'],
			'name'     => $input['name'],
			'password' => bcrypt($input['password']),
		]);

		return redirect()
			->route('home')
			->with('info', 'Your account has been created.');
	}

	public function getSignin()
	{
		return view('auth.signin');
	}

	public function postSignin(Request $request)
	{
		$this->validate($request, [
			'email'      => 'required|email|max:255',
			'password'   => 'required|min:6|max:12',
		]);

		if (!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))){
			return redirect()->back()->with('info', 'Could not sign you in with those details.');
		}
		return redirect()->route('home')->with('info', 'You are now signed in');
	}

	public function getSignout()
	{
		Auth::logout();
		return redirect()->route('auth.signin');
	}

	public function getForgotPassword()
	{
		return view('auth.forgotpassword');
	}

	public function postForgotPassword(Request $request)
	{
		dd($request);
	}
}

