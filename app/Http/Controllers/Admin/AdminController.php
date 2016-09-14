<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminController extends Controller
{
    
    public function index()
    {
    	$users	= User::all();
    	return view('admin.users.users')->with('users',$users);
    }

    public function dashboard()
    {
    	return view('dashboard.dashboard');	
    }

    public function getusers($id)
    {
    	$user = User::find($id);
    	return $user;
    }
}


