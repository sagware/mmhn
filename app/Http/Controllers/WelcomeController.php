<?php namespace App\Http\Controllers;

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
