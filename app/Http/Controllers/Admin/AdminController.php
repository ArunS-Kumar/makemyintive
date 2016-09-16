<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Advertisement;

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

    public function advertisement()
    {
    	$advertisement	= Advertisement::all();
    	return view('admin.advertisement.advertisement')->with('advertisement',$advertisement);
    }

    public function getadvertisement($id)
    {
    	$advertisement = Advertisement::find($id);
    	return $advertisement;
    }

    public function updateadvertisement(Request $request)
    {
    	$input  = $request->all();
    	// dd($input['id']);
    	if(empty($input['id']))
    	{
    		$advertisement = new \App\Models\Advertisement();
    	} else {
    		$advertisement = Advertisement::find($input['id']);
    	}
    	$advertisement->advertisement = $input['advertisement'];
    	$advertisement->type = $input['type'];
    	$advertisement->activate = 0;
    	if(isset($input['active']))
    	{
    		$advertisement->activate = 1;
    	}
    	$advertisement->save();	
    	return redirect()
			->route('admin.advertisement')
			->with('info', 'Advertisement successfully updated.');
    }

    public function deactive_advertisement($id)
    {
    	$advertisement = Advertisement::find($id);
    	if(empty($advertisement->activate))
    	{
    		$advertisement->activate = 1;
    	} else {
    		$advertisement->activate = 0;
    	}
    	$advertisement->save();	
    	return redirect()
			->route('admin.advertisement')
			->with('info', 'Advertisement successfully deactive.');
    }
}


