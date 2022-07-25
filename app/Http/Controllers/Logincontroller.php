<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class Logincontroller extends Controller
{
    public function create(){

    	return view('login-form');
    }
    

    public function postlogin(Request $request)
    {                    //database name / input name//
    	if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
    		return redirect()->route('register-form');
    	}
    	return false;
    }
}
