<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\EmailController;
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

		$token = $this->getToken();

		User::create([
			'email'    => $input['email'],
			'username' => $input['email'],
			'name'     => $input['name'],
			'type'     => 1,
			'password' => bcrypt($input['password']),
			'token' => $token,
		]);

		$email = (new EmailController)->signupVerification($input['email'],$input['name'],$token);

		return redirect()
			->route('dashboard')
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
		$input  = $request->all();
		if (!Auth::attempt(['email' => $input['email'], 'password' => $input['password'], 'activate' => 1],$request->has('remember'))){
			return redirect()->back()->with('info', 'Could not sign you in with those details.');
		}
		return redirect()->route('dashboard')->with('info', 'You are now signed in');
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

	protected function getToken()
    {
        return hash_hmac('sha256', str_random(40), config('app.key'));
    }

    public function activate($token)
    {
    	User::where('token', '=', $token)->update(array('activate' => 1));
    	return redirect()
			->route('dashboard')
			->with('info', 'Your account has been successfully activated.');
    }

}

