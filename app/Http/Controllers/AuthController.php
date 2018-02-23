<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function login()
    {
    	return view('auth.login');
    }

    public function handleLogin(Request $request)
    {
    	$this->validate($request, User::$login_validation_rules);
    	$data = $request->only('email', 'password');
    	if(\Auth::attempt($data)){
    		//return 'Is Logged in';
    		return redirect()->intended('home');
    	}
    	return back()->withInput()->withErrors(['email' => 'username or password is invalid']);
    }

    public function logout()
    {
    	\Auth::logout();
    	return redirect()->route('login');
    }
}
