<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use app\user;

use lluminate\Foundation\Auth\ThrottlesLogins;

use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'user.userdashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
       public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    

    public function userLogin()

    {
        return view('auth.login');
    }

    public function login(Request $request)

    {

        //validate the form data

        $this->validate($request,[
            'email'=>'required|email',
            'password' => 'required|min:6'

            ]);




if(Auth::guard('web')->attempt (['email' => $request->email,       'password' =>        $request->password] ))
        {
        // if successful, then redirect to their intended location
             return redirect(route('user.userdashboard'));
            
        }
        

        // if unsuccessfull, then redirect back to the login with the form data

        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}





