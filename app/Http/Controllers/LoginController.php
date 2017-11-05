<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginController extends Controller
{
    public function login()
    {
    	return view('auth.login');
    }

    public function postLogin(Request $request)
    {
    	$user = Sentinel::authenticate($request->all());
    	if($user) {
    		return redirect('/');
    	}
    	return redirect('/login');
    }

    public function logout()
    {
    	Sentinel::logout();
    	return redirect('/');
    }
}
