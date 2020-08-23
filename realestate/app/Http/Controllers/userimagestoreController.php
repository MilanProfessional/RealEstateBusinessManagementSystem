<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userimagestoreController extends Controller
{
    public function index()
    {
    	return view('user.addproperty');
    }
}
