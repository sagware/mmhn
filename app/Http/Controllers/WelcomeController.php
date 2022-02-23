<?php namespace App\Http\Controllers;
use App\Public_stories;
use Auth;
class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('login');//->with('msg','');
	}
	
	
	public function forgotpassword()
	{
		return view('forgotpassword');//->with('msg','');
	}
	
	public function home()
	{
	
	$rr = Public_Stories::where("id",">",0)->where("status","approved")->where("category","news")->orWhere("category","event")->orWhere("category","grant")->orderBy("updated_at")->take(3)->get();
	$chh = Public_Stories::where("id",">",0)->where("status","approved")->where("category","need")->orderBy("updated_at")->take(3)->get();
	$op = Public_Stories::where("id",">",0)->where("status","approved")->where("category","grant")->orderBy("updated_at")->take(3)->get();
	$ev = Public_Stories::where("id",">",0)->where("status","approved")->where("category","event")->orderBy("updated_at")->take(3)->get();
	if(Auth::check()){
	
		return view('admin.home')->with("r",$rr)->with("ch",$chh)->with("ev",$ev)->with("op",$op);//->with('msg','');
	}else{
	return view('admin.home')->with("r",$rr)->with("ch",$chh)->with("ev",$ev)->with("op",$op);//->with('msg','');
	
	}
	}
	
	public function homeneed()
	{
	$rr = Public_Stories::where("id",">",0)->where("category","news")->orderBy("updated_at")->take(3)->get();
	$chh = Public_Stories::where("id",">",0)->where("category","need")->orderBy("updated_at")->take(3)->get();
	$op = Public_Stories::where("id",">",0)->where("category","grant")->orderBy("updated_at")->take(3)->get();
	$ev = Public_Stories::where("id",">",0)->where("category","event")->orderBy("updated_at")->take(3)->get();
		return view('admin.home')->with("r",$rr)->with("ch",$chh)->with("ev",$ev)->with("op",$op)->with("needsubmit","submited");//->with('msg','');
	}
	
	public function developer()
	{
		return view('admin.developer');//->with('msg','');
	}

	public function showblog()
	{
	$k = Post::all();
	
		return view('blog')->with('post', $k);
	}
	
	public function postme()
	{
		return view('post');
	}

}
