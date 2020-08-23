<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helpController extends Controller
{
     public function help(){
      return view ('nonUsers.help');
    }

    public function userhelp(){
      return view ('user.helpuser');
    }

    public function adminhelp(){
    	return view ('admin.helpadmin');
    }
}
