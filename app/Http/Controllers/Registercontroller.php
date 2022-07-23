<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registercontroller extends Controller
{
    //

    public function create(){

       return view('register-form');
    }

    public function savecreate(Request $request){
         
	     $obj = new \App\Models\User;
	     $obj->first_name = $request->firstname;
	     $obj->last_name = $request->lastname;
	     $obj->user_name = $request->username;
	     $obj->email = $request->email;
	     $obj->password = $request->password;
	     $obj->date_of_birth = $request->date;
	          /**database field name/form name**/  
	     
	     $obj->save();
       return redirect()->route('register-form');
    }
}
