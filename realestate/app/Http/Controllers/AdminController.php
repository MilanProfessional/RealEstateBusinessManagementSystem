<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use DB;
use App\property;
use App\users;
use App\user;
use App\admins;
use App\admin;

class AdminController extends Controller
{
  

  //controller for admin dashboard

    public function adminlogin(Request $request)
    {
      
        $admins = new admins();
        if ($request->isMethod('post')) 
        {
            
             
               $admins->name = $request->name;
               $admins->email = $request->email;
               $admins->password = $request->password;
               $admins->address = $request->address;
               $admins->mobileno = $request->mobileno;

               $admin->save(); 
        }

       return redirect(route('admin.dashboard'));

       // return view('admin.addproperty');


    }


    public function dashboard()
    {
      $property = property::all();
    	return view('admin.dashboard',compact('property'));
    }

    //controller for admin viewuser
    public function viewuser()
    {
    	return view('admin.viewuser');
    }

    //controller for admin addproperty form to show
    public function addpropertyform()
    {
        return view('admin.addproperty');
    }

    //controller for admin addproperty form to insert 
    public function addproperty(Request $request)
    {
    	
        $property = new property();
        if ($request->isMethod('post')) 
        {
            
              //
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

       return redirect(route('admin.viewproperty'));

       // return view('admin.addproperty');


    }

  //controller for admin view property
    public function viewproperty(Request $request)
    {
      $property = DB::table('property')
            ->leftJoin('users', 'users.id', '=', 'property.user_id')
            ->select('property.*', 'users.mobileno', 'users.name')
            ->get();
           // dump($property); die;
    	return view('admin.viewproperty',compact('property'));
      
    }

      public function viewusers()
    {
      $users = users::all();
     // print_r($users); die;
      return view('admin.viewuser',compact('users'));
    }

    public function editproperty($property_id)
    {

      $properties = property::where('property_id',$property_id)->first();
      return view('admin.editproperty',compact('properties'));

    }

     public function updateproperty(Request $request)
    {
     //dump($request->property_id); die;
         property::where('property_id',$request->property_id)
                ->update([
                    'property_price' => $request->property_price, 
                    'property_location' => $request->property_location,
                    'property_area' => $request->property_area,
                     'property_description' => $request->property_description,
                      'property_image' => $request->property_image

                    ]);



       return redirect(route('admin.viewproperty'));

    }

    public function deleteproperty($property_id)
    {
       property::where('property_id', $property_id)->delete();

        return redirect()->back();

    }

    public function deleteuser($id)
    {
      users::where('id',$id)->delete();

      return redirect()->back();
    }

   

}


