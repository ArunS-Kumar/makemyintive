<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

    public function updateusers(Request $request)
    {
    	$input  = $request->all();
    	$user = User::find($input['id']);
    	
    	$user->name = $input['name'];
    	$user->email = $input['email'];
    	$user->activate = 0;
    	if(isset($input['active']))
    	{
    		$user->activate = 1;
    	}
    	$user->save();	
    	return redirect()
			->route('admin.users')
			->with('info', 'User successfully updated.');
    }

    public function deactive($id)
    {
    	$user = User::find($id);
    	if(empty($user->activate))
    	{
    		$user->activate = 1;
    	} else {
    		$user->activate = 0;
    	}
    	$user->save();	
    	return redirect()
			->route('admin.users')
			->with('info', 'User successfully deactive.');
    }
}


