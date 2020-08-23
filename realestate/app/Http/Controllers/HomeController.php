<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\property;
use App\users;
use App\user;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $property =property::all();
return view('user.userdashboard',compact('property'));
    }
        

    public function addpropertyform()
    {
        return view ('user.addproperty');
    }

     public function addproperty(Request $request)
    {
        
        $property = new property();
        if ($request->isMethod('post')) 
        {
            
              $property->user_id = $request->user_id;
               $property->property_price = $request->property_price;
               $property->property_location = $request->property_location;
               $property->property_area = $request->property_area;
               $property->Property_description = $request->property_description;
               if ($property->property_image = $request->hasFile('property_image')){

                 $filename= $property->property_image = $request->property_image->getClientOriginalName();

              $request->property_image->storeAs('public',$filename);
               $property->property_image = $filename;
               $property->save();


                }else{
                  return 'No file selected'; 
                }

               
        }

       return redirect(route('user.viewproperty'));

       // return view('admin.addproperty');


    }

    public function viewproperty(){

          $property = property::all();
        return view('user.viewproperty',compact('property'));
        

    }

    public function dashboard(){
      $property =property::all();
return view('user.userdashboard',compact('property'));
    }

    
    
}
