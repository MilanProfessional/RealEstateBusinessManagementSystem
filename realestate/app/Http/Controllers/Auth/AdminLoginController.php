<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    protected $redirectTo = 'admin.dashboard';

	public function __construct()
	{

		$this->middleware('guest:admins');

	}
    public function adminLoginForm()

    {
    	return view('auth.admin-login');
    }

    public function login( Request $request)

    {

    	//validate the form data

    	$this->validate($request,[
    		'email'=>'required|email',
    		'password' => 'required|min:6'

    		]);

    	//Attempt to log the usew in

		if(Auth::guard('admins')->attempt (['email' => $request->email,       'password' =>        $request->password] ))
		{
		// if successful, then redirect to their intended location
			 return redirect(route('admin.dashboard'));
			
		}
    	

    	// if unsuccessfull, then redirect back to the login with the form data

    	return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    
}
