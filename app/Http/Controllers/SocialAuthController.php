<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\AuthController;
use Socialite;
use Auth;


class SocialAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback()
    {
        $providerUser = \Socialite::driver('facebook')->user();
        $userItem  = new \App\Models\User();

        $user = $userItem::where('username', $providerUser->getId())->first();
        if(empty($user))
        {   
            $userItem->fill([
                'email' => $providerUser['email'],
                'username' => $providerUser->getId(),
                'name' => $providerUser['name'],
                'type' => 2,
                'activate' => 1,
                'avatar' => $providerUser->getAvatar(),
            ]);
            $userItem->save();
            $user = $userItem;
        } else {
            if(empty($user->activate))
            {
                return redirect()->back()->with('info', 'Could not sign you in with those details');
            }
        }
        Auth::login($user);
        return redirect()->route('dashboard')->with('info', 'You are now signed in');
    }   
}
