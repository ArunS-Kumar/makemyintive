<?php

namespace App\Http\Controllers;
use Mail;

class EmailController extends Controller
{
    
    public function index()
    {

        Mail::send('mail.mail', ['user' => 'Make My Invite'], function ($m) {
            $m->from('noreply@makemyinvite.com', 'Make My Invite');
            $m->to('arunsak91@gmail.com', 'Arun Kumar')->subject('Your Reminder!');
        });

    	dd('Mail Succefully Send');
    }

}


