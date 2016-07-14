<?php

namespace App\Http\Controllers;
use Mail;

class EmailController extends Controller
{
    
    public function index()
    {

        Mail::send('mail.signupVerification', ['user' => 'Make My Invite'], function ($m) {
            $m->from('noreply@makemyinvite.com', 'Make My Invite');
            $m->to('arunsak91@gmail.com', 'Arun Kumar')->subject('Your Reminder!');
        });

    	dd('Mail Succefully Send');
    }

    public function signupVerification($email,$name,$token)
    {
    	Mail::send('mail.signupVerification', ['header' => 'Make My Invite','name' => $name,'email' => $email,'token' => $token], function ($m) use ($email,$name) {
            $m->from('noreply@makemyinvite.com', 'Make My Invite');
            $m->cc('arunsak91@gmail.com', 'Arun Kumar');
            $m->to($email, $name)->subject('Welcome to Make My Invite!');
        });

    	return;
    }

}


