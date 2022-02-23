<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\PublicStories;


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
		$r = PublicStories::where("id",">",0)->orderBy("updated_at")->take(5)->get();
		 return redirect()->intended('/')->with("r",$r);
	}


		public function showlogin(){
		
		
		return view('login');
		}
		
				
		
		
		public function login(){
		
		$r = PublicStories::where("id",">",0)->where("category","news")->orderBy("updated_at")->take(3)->get();
	$chh = PublicStories::where("id",">",0)->where("category","need")->orderBy("updated_at")->take(3)->get();
	$op = PublicStories::where("id",">",0)->where("category","grant")->orderBy("updated_at")->take(3)->get();
	$ev = PublicStories::where("id",">",0)->where("category","event")->orderBy("updated_at")->take(3)->get();
	
	
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
			
				if(Auth::user()->role=="admin"){
					return redirect()->intended('/dashboard');
				}else{
				return view('admin.home')->with("r",$r)->with("ch",$chh)->with("ev",$ev)->with("op",$op);
				}

			}
        }}
	else{
		return back()->with('err','Login error')->with("r",$r);
		}
		
		
		}
		
		
		
		public function signup(Request $request){
		

		
		}
		
		
}