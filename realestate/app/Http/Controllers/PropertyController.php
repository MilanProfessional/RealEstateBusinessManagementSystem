<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\property;
use App\users;

class PropertyController extends Controller
{

	 public function viewpropertywithoutlogin()
    {

        $property = property::all();
        //print_r($property);
        return view ('nonUsers.viewproperty_withoutlogin', compact('property'));
    }
}

?>