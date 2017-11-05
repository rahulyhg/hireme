<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class RegisterController extends Controller
{
    public function register()
    {
    	return view('auth.register');
    }

    public function postRegister(Request $request) 
    {
    	$user = Sentinel::registerAndActivate($request->all());
		if($user){
			return redirect('/');
		}
		return redirect('/register');
    }
}
