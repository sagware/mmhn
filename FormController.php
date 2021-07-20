<?php namespace App\Http\Controllers;
use PhpScience\TextRank\Tool\StopWords\English;
//require(app_path() . '\Myown\pdftotext\PdfToText.phpclass');

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Summarizer;
//use Myown\pdftotext\PdfToText.phpclass;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Partner;
use App\Clinical;
use App\User;
use Auth;
use Hash;
use Mail;
use Response;
use Validator;
use CkanApi;
use Illuminate\Support\Str;
use PhpScience\TextRank\Tool\StopWords\Russian;
use PhpScience\TextRank\Tool\Summarize;
use PHPUnit\Framework\TestCase;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;



class FormController extends Controller {

			
			public function index(){
			
				return view('admin.index');
					}
			

	public function register()
		{
		//function to show registration form
	
		return view('admin.register');
		}
		
		public function addNeed(Request $request){ 
		//function for submitting clinical needs
			if(Auth::check()){
				$s = new Clinical;
					$s->title = Input::get("name");
					$s->user_id = Auth::user()->id;
					$s->detail = Input::get("statement");
				$s->save();
			return back()->with("msg","Account created successfully... you can login now");
			}else{
					return redirect()->intended('/login');
			}
		}
		
		public function editNeed(Request $request){ 
		//function for editing clical needs
			if(Auth::check()){
				$s = new Clinical;
					$s->title = Input::get("name");
					$s->user_id = Input::get("id");
					$s->detail = Input::get("statement");
				$s->save();
			return back()->with("msg","Account created successfully... you can login now");
			}else{
					return redirect()->intended('/login');
			}
		}
		
		public function deleteNeed($id){ 
		//function for deleting clinical needs
			if(Auth::check()){
				$s = Clinical::find($id);
				$s->delete();
					
			return back()->with("del","Account created successfully... you can login now");
			}else{
					return redirect()->intended('/login');
			}
		}
		
		public function create(Request $request){ 
			// registration submission form

			$c = User::where('email',Input::get('email'))->count();
			
				if($c<=0){
				
				$s = new User;
					$s->first_name = Input::get('first_name');
					$s->middle_name = Input::get('middle_name');
					$s->last_name = Input::get('last_name');
					$s->email = Input::get('email');
					$s->joining_reason = Input::get('reason');
					$s->institution = Input::get('institution');
					$s->role = Input::get('role');
					$s->designation = Input::get('designation');
					$s->current_interest = Input::get('current_interest');
					$s->previous_interest = Input::get('previous_interest');
					$s->bio = Input::get('bio');
					$s->status = 1;
					$s->iv_status = 0;
					$s->password = Hash::make(Input::get('password'));
	
				$s->save();
			//email to a User	
			 $mes ="";
			 $receiver =  Input::get('email');
			 $name = Input::get('first_name');
			 $sender = "sagiryusufapps@gmail.com";
			 $pathToFile = "";
			 $sag = array('mail'=>$receiver,'user_id'=>'hhhhh','name'=>$name,'pathTo'=>$pathToFile);				
			 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
			 
			  Mail::send('emails.interest', $data, function ($m) use ($sag) {
					$m->from('sagiryusufapps@gmail.com', 'no-reply: Interest Form Received');
					$m->to($sag['mail'], $sag['mail'])->subject('no-reply: Interest Form Received');
				 });
				 
				 //Email to Admin
			
			$admins = User::where("role", "admin")->get();
			
			foreach ($admins as $adm){
			// $mes ="";
			 $receiver =  $adm->email;
			 $name = $adm->first_name;
			 $sender = "sagiryusufapps@gmail.com";
			 $mes = "www.uclmmhn.com/dashboard";
			 $sag = array('mail'=>$receiver,'user_id'=>'hhhhh','name'=>$name,'pathTo'=>$pathToFile);				
			 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
			 
			  Mail::send('emails.interest_admin', $data, function ($m) use ($sag) {
					$m->from('sagiryusufapps@gmail.com', 'no-reply: Interest Form Received');
					$m->to($sag['mail'], $sag['mail'])->subject('no-reply: New Network Interest Notification');
				 });
		}
				 
		
			
		
		return back()->with("msg_interest","Account created successfully... you can login now");
		}else{
			
			return back()->with("msg2","user exist");

		}
		
		}
		

		
	public function create_complete (Request $request){ 

			//registration completion
			
				$s = User::where("email",Input::get('email'))->first();
				
					$s->first_name = Input::get('first_name');
					$s->middle_name = Input::get('middle_name');
					$s->last_name = Input::get('last_name');
					$s->email = Input::get('email');
					$s->joining_reason = Input::get('reason');
					$s->institution = Input::get('institution');
					$s->role = Input::get('role');
					$s->designation = Input::get('designation');
					$s->current_interest = Input::get('current_interest');
					$s->previous_interest = Input::get('previous_interest');
					$s->bio = Input::get('bio');
					$s->status = 0;
					$s->iv_status = 0;
					$s->password = Hash::make(Input::get('password'));
	
				$s->save();
				
				$p = new Partner;
					$p->user_id = $s->id;
				$p->save();
			//email to a User	
			 $mes ="";
			 $receiver =  Input::get('email');
			 $name = Input::get('first_name');
			 $sender = "sagiryusufapps@gmail.com";
			 $pathToFile = "";
			 $sag = array('mail'=>$receiver,'user_id'=>'hhhhh','name'=>$name,'pathTo'=>$pathToFile);				
			 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
			 
			  Mail::send('emails.registration_finished', $data, function ($m) use ($sag) {
					$m->from('sagiryusufapps@gmail.com', 'no-reply: Registeration Complete');
					$m->to($sag['mail'], $sag['mail'])->subject('no-reply: Interest Form Received');
				 });
				 
				 //Email to Admin
			
			
		
		return back()->with("msg_interest2","Account created successfully... you can login now");
		
		
		}
		
		
		public function dashboard(){
			//all users fetching record
		
				if(Auth::check()){
	
					$s = User::all();
			

				return view('admin.users')->with('gra',$s);
			
						}else{
				return redirect()->intended('/login');
						}
			
			}
			
			public function showClinicalForm(){
			///clinical needs forms
		
				if(Auth::check()){
	
				return view('admin.clinical_needs');
			
						}else{
				return redirect()->intended('/login');
						}
			
			}
			
			
			public function editClinicalForm($id){
		//editing clinical form
				if(Auth::check()){
				$s = Clinical::where("id",$id)->first();
				return view('admin.editclinical_needs')->with("s",$s);
			
						}else{
				return redirect()->intended('/login');
						}
			
			}
			
			
			
			public function partners(){
					// function for showing partners list
				if(Auth::check()){
				$s = User::where("id","!=", Auth::user()->id)->get();
				$pk = Partner::where("user_id",Auth::user()->id)->first();
				return view('admin.partners')->with("p",$pk)->with('gra',$s);
			
						}else{
				return redirect()->intended('/login');
						}
			
			}
			
			
			public function clinicalList(){
			//function for clinical list fetching
				if(Auth::check()){
				$s = Clinical::where("user_id", Auth::user()->id)->get();
			
				return view('admin.clinical_list')->with('gra',$s);
			
						}else{
				return redirect()->intended('/login');
						}
			
			}
			
			
			public function addpartner($id){
				// adding partners 
				if(Auth::check()){
				$s = Partner::where("user_id", Auth::user()->id)->first();
			
				if($s->partners_id==""){
				$pid = array();
				$s->partners_id = serialize(array_push($pid, $id));
				}else{
				$ar = array(unserialize($s->partners_id));
				
				$pid = serialize(array_push($ar,$id));
				$s->partners_id = $pid;
				}
				$s->save();
				
				$ss = User::where("id","!=", Auth::user()->id)->get();
				$pk = Partner::where("user_id",Auth::user()->id)->first();
				return view('admin.partners')->with('gra',$ss)->with("p",$pk)->with("msg","partner sent");
			
						}else{
				return redirect()->intended('/login');
						}
			
			}

			
		
			
			
			public function cookie(){
			//showing cookie page
			$cat = Category::where('role','general')->get();
			//pr(Auth::user()->id,true);
			
			return view('admin.cookie')->with('cat',$cat);
			}
			
			public function datapolicy(){
			//showing data policy page
			$cat = Category::where('role','general')->get();
			//pr(Auth::user()->id,true);
			
			return view('admin.datapolicy')->with('cat',$cat);
			}
			
			public function termsandcondition(){
			//showing terms and condition page
			$cat = Category::where('role','general')->get();
			//pr(Auth::user()->id,true);
			
			return view('admin.termsandcondition')->with('cat',$cat);
			}
			

	
	public function manage(){
	//pr(Auth::user()->id,true);
	//manage users 
	return view('admin.manage');
	}
	
	public function editAccount(){
	//echo Input::get('password'); exit;
	
	//editing accounts
	$s = User::find(Auth::user()->id);
		$s->first_name = Input::get('name');
		$s->middle_name = Input::get('middle_name');
		$s->last_name = Input::get('last_name');
		$s->email = Input::get('email');
		$s->password = Hash::make(Input::get('password'));
	$s->save();
		 
		 return back()->with('msg','');
	}
	
	public function disableuser($id){
	//disabling a user
	$u = User::find($id);
	$u->status = "1";
	$u->save();
	return back()->with('msg','');
	}
	
	public function enableuser($id){
	//enabling a user
	$u = User::find($id);
	$u->status = "0";
	$u->save();
	return back()->with('msg','');
	}

	public function makeadmin($id){
	//making a user an admin
	$u = User::find($id);
	$u->role = "admin";
	$u->save();
	return back()->with('msg','');
	}
	
			public function sendinvitation($code,$id){
			
			//sending invitation
			 $u = User::where("id",$id)->first();
			 $u->iv_status = 1;
			 $u->iv_code = $code;
			 $u->save();
			 //$mes =  Input::get('message');
			// $mes =  "Your are invited to join a network on http://www.uclmmhn.com";
			 //$receiver =  Input::get('sharemail');
			 $receiver =  $u->email;
			 $name = $u->first_name;
			 $url =  "http://www.uclmmhn.com".$u->id;
			 $sender = "sagiryusufapps@gmail.com";
			 $mes = "http://www.uclmmhn.com/invitepartner/".$code."/".$u->id;
			 $pathToFile ="";
			 $sag = array('mail'=>$receiver,'user_id'=>'hhhhh','name'=>$name,'pathTo'=>$pathToFile);				
			 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
			 
			  Mail::send('emails.a', $data, function ($m) use ($sag) {
					$m->from('sagiryusufapps@gmail.com', 'Invitation from MMHN System');
					$m->to($sag['mail'], $sag['mail'])->subject('(Test) Invitation from MMHN System');
				 });
				 
				return back()->with('msg','');
				 
			}
			
	public function showInvitationForm($code,$id){
	//displaying invitation form
	$u = User::where("id",$id)->first();
	if($u->iv_code!= $code){
	echo "Invalid link, please contact admin"; exit;
	}
	
	return view('admin.register2')->with("u",$u);
	}

	

	public function makeuser($id){
	//changing admin to user
	$u = User::find($id);
	$u->role = "user";
	$u->save();
	return back()->with('msg','');
	}

	
	
	public function aboutus(){
	//show about us
			$cat = Category::where('role','general')->get();
			return view('admin.about')->with('cat',$cat);
			
			}
			
			public function contactus(){
			//ontact us
			$cat = Category::where('role','general')->get();
			return view('admin.contactus')->with('cat',$cat);
			
			}
			
			
			
			
}
