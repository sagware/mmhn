<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;


use Auth;



use Illuminate\Support\Facades\Input;

class LoginController extends Controller {

public function postme()
	{
		return view('post');
	}
	
	public function logout()
	{
		Auth::logout();
		
		 return redirect()->intended('/');
	}


		public function showlogin(){
		
		
		return view('login');
		}
		
				
		
		
		public function login(){
		
		
		$email = Input::get('email');
		$password = Input::get('password');
		
		
		if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
			
			if(Auth::check()){
		
		$us = User::all();
		
		
			
			if(Auth::user()->status == "1"){
			echo "You are disabled from using this system contact admin for details"; exit;
            //return redirect()->intended('folder/'.$c)->with('u',$us);//->with('s',$size);
			}
			else{
			
					return redirect()->intended('/dashboard');;

			}
        }}
	else{
		return back()->with('err','Login error');
		}
		
		
		}
		
		
		
		public function signup(Request $request){
		

		
		}
		
		
}