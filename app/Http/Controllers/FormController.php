<?php namespace App\Http\Controllers;

use PhpScience\TextRank\Tool\StopWords\English;
//require(app_path() . '\Myown\pdftotext\PdfToText.phpclass');
use voku\helper\StopWords;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Summarizer;
use Intervention\Image\ImageManager;
//use Myown\pdftotext\PdfToText.phpclass;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Partner;
use App\Clinical;
use App\Keywords;
use App\Comment;
use App\Replies;
use App\PublicStories;
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
use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;


class FormController extends Controller {
 
			private $url_email = "https://materialsinhealth.org/";
			
			
			public function index(){
			
				return view('admin.index');
					}
			

	public function register()
		{
		//function to show registration form
	
		return view('admin.register');
		}
		
		public function addPublicStories(Request $request){ 
		//pr(Input::all(),true);
			if(Auth::check()){
		 	
		 $message = request()->get('message');		
		 $dom = new \DomDocument();       
        $dom->loadHtml($message, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);       
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $image) {
            $imageSrc = $image->getAttribute('src');
            /** if image source is 'data-url' */
            if (preg_match('/data:image/', $imageSrc)) {
                /** etch the current image mimetype and stores in $mime */
                preg_match('/data:image\/(?<mime>.*?)\;/', $imageSrc, $mime);
                $mimeType = $mime['mime'];
                /** Create new file name with random string */
                $filename = uniqid();

                /** Public path. Make sure to create the folder
                 * public/uploads
                 */
                $filePath = "/uploads/$filename.$mimeType";

                /** Using Intervention package to create Image */
                Image::make($imageSrc)
                    /** encode file to the specified mimeType */
                    ->encode($mimeType, 100)
                    /** public_path - points directly to public path */
                    ->save(public_path($filePath));

                $newImageSrc = asset($filePath);
                $image->removeAttribute('src');
                $image->setAttribute('src', $newImageSrc);
            }
        }
        /** Save this new message body in the database table */
        $newMessageBody = $dom->saveHTML();
		$newMessageBody = str_replace("<h5","<h6",$newMessageBody);
		$newMessageBody = str_replace("<h4","<h5",$newMessageBody);
		$newMessageBody = str_replace("<h3","<h4",$newMessageBody);
		$newMessageBody = str_replace("<h2","<h3",$newMessageBody);
		$newMessageBody = str_replace("<h1","<h2",$newMessageBody);
		$newMessageBody = str_replace("materialsinhealth.org/uploads","materialsinhealth.org/mmhn/public/uploads",$newMessageBody);
	
		
		
		
		if($request->file('pic')!=""){
				$fil  = $request->file('pic');
				//pr($fil,true);
				$ext = $fil->getClientOriginalExtension();
				
				
				if($ext == "jpeg" || $ext == "jpg" || $ext == "PNG" || $ext == "JPG" || $ext == "JPEG"|| $ext == "png"){
				$i = $fil->getClientOriginalName();
				$fileName = $i;								
				$fileFalseName = date('Ymhis').preg_replace("/[^A-Za-z0-9]/", "", $fil->getClientOriginalName()).'.'.$ext;					
				$newurl = public_path() . DS . 'uploads';
				$upl = $fil->move($newurl, $fileFalseName);
				
				$fil2 = Image::make($newurl.DS. $fileFalseName)->resize(1024, 683)->save();
				
				}else{
				return back()->with("uplerror","invalid format");
				}
				
				}
				else{
				
				$fileFalseName ="emptyimage.png";
				}
		
				$s = new PublicStories;
					$s->title = Input::get("title");
					$s->posted_by = Auth::user()->id;
					$s->posted_by_name = Auth::user()->first_name." ". Auth::user()->middle_name." ".Auth::user()->last_name;
					$s->news_body = $newMessageBody;
					$s->summary = Input::get("summary");
					$s->category = Input::get("category");
					$s->pic = $fileFalseName;
					$s->status = "Under Review";
				$s->save();
				return redirect()->intended('/newssubmitted');
				
			$admins = User::where("role", "admin")->get();			
			foreach ($admins as $adm){
			// $mes ="";
			 $pathToFile ="";
			 $receiver =  $adm->email;
			 $name = $adm->first_name;
			 $sender = "admin@materialsinhealth.org";
			 $mes = $this->url_email."/public_stories_list";
			 $sag = array('mail'=>$receiver,'sub'=>$sub,'user_id'=>'hhhhh','name'=>$name,'pathTo'=>$pathToFile);				
			 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
			 $sub = "no-reply: New Innovation Story Submission for your Approval"." ".$s->title;
			  Mail::send('emails.admin_innovation_not', $data, function ($m) use ($sag) {
					$m->from('admin@materialsinhealth.org', $sag['sub']);
					$m->to($sag['mail'], $sag['mail'])->subject($sag['sub']);
				 });
		}
				
			}
			else{
					return redirect()->intended('/login');
			}
		}
		
		public function newsSubmitted(){
				return view('admin.newssubmited');
		}
		
		public function challengeSubmitted(){
				return view('admin.challengesubmited');
		}
		
		public function showDelete(){
				return view('admin.deleteuser');
		}
		
		public function profileupdate(){
				return view('admin.profileupdated');
		}
		
		
		public function newsSubmittedApproved(){
				return view('admin.newssubmitedapproved');
		}
		
		public function challengeSubmittedApproved(){
				return view('admin.challengesubmitedapproved');
		}
		
		public function addEditPublicStories(Request $request){ 
		
			if(Auth::check()){
		 	
		 $message = request()->get('message');		
		 $dom = new \DomDocument();       
        $dom->loadHtml($message, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);       
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $image) {
            $imageSrc = $image->getAttribute('src');
            /** if image source is 'data-url' */
            if (preg_match('/data:image/', $imageSrc)) {
                /** etch the current image mimetype and stores in $mime */
                preg_match('/data:image\/(?<mime>.*?)\;/', $imageSrc, $mime);
                $mimeType = $mime['mime'];
                /** Create new file name with random string */
                $filename = uniqid();

                /** Public path. Make sure to create the folder
                 * public/uploads
                 */
                $filePath = "/uploads/$filename.$mimeType";

                /** Using Intervention package to create Image */
                Image::make($imageSrc)
                    /** encode file to the specified mimeType */
                    ->encode($mimeType, 100)
                    /** public_path - points directly to public path */
                    ->save(public_path($filePath));

                $newImageSrc = asset($filePath);
                $image->removeAttribute('src');
                $image->setAttribute('src', $newImageSrc);
            }
        }
        /** Save this new message body in the database table */
		$newMessageBody = $dom->saveHTML();
		$newMessageBody = str_replace("<h5","<h6",$newMessageBody);
		$newMessageBody = str_replace("<h4","<h5",$newMessageBody);
		$newMessageBody = str_replace("<h3","<h4",$newMessageBody);
		$newMessageBody = str_replace("<h2","<h3",$newMessageBody);
		$newMessageBody = str_replace("<h1","<h2",$newMessageBody);
		$newMessageBody = str_replace("materialsinhealth.org/uploads","materialsinhealth.org/mmhn/public/uploads",$newMessageBody);
		
		
		if($request->file('pic')!=""){
				$fil  = $request->file('pic');
				//pr($fil,true);
				$ext = $fil->getClientOriginalExtension();
				
				
				if($ext == "jpeg" || $ext == "jpg" || $ext == "PNG" || $ext == "JPG" || $ext == "JPEG" || $ext == "png"){
				$i = $fil->getClientOriginalName();
				$fileName = $i;								
				$fileFalseName = date('Ymhis').preg_replace("/[^A-Za-z0-9]/", "", $fil->getClientOriginalName()).'.'.$ext;					
				$newurl = public_path() . DS . 'uploads';
				$upl = $fil->move($newurl, $fileFalseName);
				
				$fil2 = Image::make($newurl.DS. $fileFalseName)->resize(1024, 683)->save();
				
				}else{
				return back()->with("uplerror","invalid format");
				}
				
				}
				else{
				
				$fileFalseName ="emptyimage.png";
				}
				
			
				$s = PublicStories::where("id",Input::get("id"))->first();
				
				if(Auth::user()->role = "admin" && Auth::user()->id != $s->posted_by){
					$s->title = Input::get("title");
					$s->news_body = $newMessageBody;
					$s->summary = Input::get("summary");
					
					if(!empty(Input::get("coverphoto"))){
					$s->pic = $fileFalseName;
					}
					$s->category = Input::get("category");
					$last_edited = Auth::user()->first_name." ".Auth::user()->last_name." ".Auth::user()->id;
					$s->status = "Under Review";
					}
					else{
					$s->title = Input::get("title");
					if(Auth::user()->role !="admin"){
					$s->posted_by = Auth::user()->id;
					$s->posted_by_name = Auth::user()->first_name." ". Auth::user()->middle_name." ".Auth::user()->last_name;
					}
					$s->news_body = $newMessageBody;
					$s->summary = Input::get("summary");
					if(!empty(Input::get("coverphoto"))){
					$s->pic = $fileFalseName;
					}
					$s->category = Input::get("category");
					$s->pic = $fileFalseName;
					$last_edited = Auth::user()->first_name." ".Auth::user()->last_name." ".Auth::user()->id;
					$s->status = "Under Review";
					}
				$s->save();
				
			$admins = User::where("role", "admin")->get();			
			foreach ($admins as $adm){
			// $mes ="";
			 $pathToFile ="";
			 $receiver =  $adm->email;
			 $name = $adm->first_name;
			 $sender = "admin@materialsinhealth.org";
			 $mes = $this->url_email."/public_review/".$s->id;
			 $sub = "no-reply: New Innovation Story Submission for your Approval"." ". $s->title;
			 $sag = array('mail'=>$receiver,'user_id'=>'hhhhh','sub'=>$sub,'name'=>$name,'pathTo'=>$pathToFile);				
			 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
		     
			  Mail::send('emails.admin_innovation_not', $data, function ($m) use ($sag) {
					$m->from('admin@materialsinhealth.org', $sag['sub']);
					$m->to($sag['mail'], $sag['mail'])->subject($sag['sub']);
				 });
		}
		
		
				return redirect()->intended('/newssubmitted');
			}
			else{
					return redirect()->intended('/login');
			}
		}
		
		public function submitComment(Request $request){ 
		
		$message = request()->get('message');		
		 $dom = new \DomDocument();       
        $dom->loadHtml($message, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);       
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $image) {
            $imageSrc = $image->getAttribute('src');
            /** if image source is 'data-url' */
            if (preg_match('/data:image/', $imageSrc)) {
                /** etch the current image mimetype and stores in $mime */
                preg_match('/data:image\/(?<mime>.*?)\;/', $imageSrc, $mime);
                $mimeType = $mime['mime'];
                /** Create new file name with random string */
                $filename = uniqid();

                /** Public path. Make sure to create the folder
                 * public/uploads
                 */
                $filePath = "/uploads/$filename.$mimeType";

                /** Using Intervention package to create Image */
                Image::make($imageSrc)
                    /** encode file to the specified mimeType */
                    ->encode($mimeType, 100)
                    /** public_path - points directly to public path */
                    ->save(public_path($filePath));

                $newImageSrc = asset($filePath);
                $image->removeAttribute('src');
                $image->setAttribute('src', $newImageSrc);
            }
        }
        /** Save this new message body in the database table */
        $newMessageBody = $dom->saveHTML();
		$newMessageBody = $dom->saveHTML();
		$newMessageBody = str_replace("<h5","<h6",$newMessageBody);
		$newMessageBody = str_replace("<h4","<h5",$newMessageBody);
		$newMessageBody = str_replace("<h3","<h4",$newMessageBody);
		$newMessageBody = str_replace("<h2","<h3",$newMessageBody);
		$newMessageBody = str_replace("<h1","<h2",$newMessageBody);
		$newMessageBody = str_replace("materialsinhealth.org/uploads","materialsinhealth.org/mmhn/public/uploads",$newMessageBody);
		
		$nid =Input::get("need_id");
			
			$c = new Comment;
				$c->public_stories_id = $nid;
				$c->name = Input::get("name");
				$c->email = Input::get("email");
				$c->comment = $newMessageBody;
				if(Input::get("notification")==1){
				 $c->notification = "on";
				}
				else{
				$c->notification = "off";
				}
				
			$c->save();
			
			
						$own = PublicStories::where("id",$nid)->first();						
						$uw = User::where("id",$own->posted_by)->first();						
						$mes ="";
						//pr($own->posted_by,true);
						 $receiver =  $uw->email;
						 
						  
						 $name = $uw->first_name;
						 $sub ="no-reply: Challenge Comment Notification"." ". $own->title;
						 $sender = "admin@materialsinhealth.org";
						 $pathToFile = $this->url_email."clinical_detail/".$nid;
						 $sag = array('mail'=>$receiver,'user_id'=>'hhhhh','sub'=>$sub,'name'=>$name,'pathTo'=>$pathToFile);				
						 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
						if($uw->id !=Auth::user()->id){
						
						  Mail::send('emails.needowner', $data, function ($m) use ($sag) {
								$m->from('admin@materialsinhealth.org', $sag['sub']);
								$m->to($sag['mail'], $sag['mail'])->subject($sag['sub']);
							 });
							 
							 }
		
		 		$no = Comment::where("notification","on")->where("public_stories_id",Input::get("need_id"))->where("id","!=",Auth::user()->id)->select("email")->distinct()->get();
				
				//pr($no,true);
				
				foreach($no as $nt){
						if($nt->email != Auth::user()->email){		
						 $mes ="";
						 $receiver =  $nt->email;
						 $name = $nt->name;
						 $sender = "admin@materialsinhealth.org";
						 $pathToFile = $this->url_email."clinical_detail/".$nid;
						 $sag = array('mail'=>$receiver,'user_id'=>'hhhhh','sub'=>$sub,'name'=>$name,'pathTo'=>$pathToFile);				
						 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
						 $sub ="no-reply: Challenge Comment Notification"." ". $own->title;
						  Mail::send('emails.needcomment_not', $data, function ($m) use ($sag) {
								$m->from('admin@materialsinhealth.org', $sag['sub']);
								$m->to($sag['mail'], $sag['mail'])->subject($sag['sub']);
							 });
							 
							 }
			}
			
		return back()->with("sent","");
		}
		
		public function submitReply(Request $request){ 
			//pr(Input::all(),true);
		
			$c = new Replies;
				$c->public_stories_id = Input::get("pid");
				$c->replier_email = Input::get("email");
				$c->name = Input::get("name");
				$c->reply = Input::get("reply");
				$c->comment_id = Input::get("c_id");
				
				if(Input::get("notification")=="1"){
				 $c->notification = "on";
				}
				else{
				$c->notification = "off";
				}
				
			$c->save();
			
			
				$own = PublicStories::where("id",Input::get("pid"))->first();
						
						$uw = User::where("id",$own->posted_by)->first();
						$mes ="";
						 $receiver =  $uw->email;
						 $name = $uw->first_name;
						 $sender = "admin@materialsinhealth.org";
						 $pathToFile = $this->url_email."clinical_detail/".$own->id;
						 $sub = "no-reply: Challenge Comment Notification"." ".$own->title;
						 $sag = array('mail'=>$receiver,'sub'=>$sub,'user_id'=>'hhhhh','name'=>$name,'pathTo'=>$pathToFile);				
						 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
						
						  Mail::send('emails.needowner', $data, function ($m) use ($sag) {
								$m->from('admin@materialsinhealth.org', $sag['sub']);
								$m->to($sag['mail'], $sag['mail'])->subject($sag['sub']);
							 });
		
		 		$no = Replies::where("notification","on")->where("public_stories_id",Input::get("pid"))->where("id","!=",Auth::user()->id)->select("replier_email")->distinct()->get();
				//pr($no,true);
				foreach($no as $nt){		
						$mes ="";
						 $receiver =  $nt->replier_email;
						 $name = $nt->name;
						 $sender = "admin@materialsinhealth.org";
						 $pathToFile = "";
						 $sag = array('mail'=>$receiver,'user_id'=>'hhhhh','sub'=>$sub,'name'=>$name,'pathTo'=>$pathToFile);				
						 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
						 $sub = "no-reply: Challenge Reply Notification"." ".$own->title;
						  Mail::send('emails.needcomment_not', $data, function ($m) use ($sag) {
								$m->from('admin@materialsinhealth.org', $sag['sub']);
								$m->to($sag['mail'], $sag['mail'])->subject($sag['sub']);
							 });
			}
			
		return back()->with("sent","");
		}
		
		public function addNeed(Request $request){ 
		
			if(Auth::check()){
				
					$n = Input::get("name");
					$detail = Input::get("message");
					$pic = $request->file('pic');
					$keywords = Input::get("keywords");
					$keywords = array();
					$others = Input::get("tags-3");
					$others = explode (",", $others); 
					//pr($others,true);
			$us = User::where("id","!=",Auth::user()->id)->get();
			
			//save
			
		$message = request()->get('message');		
		 $dom = new \DomDocument();       
         $dom->loadHtml($message, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);       
         $images = $dom->getElementsByTagName('img');

        foreach ($images as $image) {
            $imageSrc = $image->getAttribute('src');
            /** if image source is 'data-url' */
            if (preg_match('/data:image/', $imageSrc)) {
                /** etch the current image mimetype and stores in $mime */
                preg_match('/data:image\/(?<mime>.*?)\;/', $imageSrc, $mime);
                $mimeType = $mime['mime'];
                /** Create new file name with random string */
                $filename = uniqid();

                /** Public path. Make sure to create the folder
                 * public/uploads
                 */
                $filePath = "/uploads/$filename.$mimeType";

                /** Using Intervention package to create Image */
                Image::make($imageSrc)
                    /** encode file to the specified mimeType */
                    ->encode($mimeType, 100)
                    /** public_path - points directly to public path */
                    ->save(public_path($filePath));

                $newImageSrc = asset($filePath);
                $image->removeAttribute('src');
                $image->setAttribute('src', $newImageSrc);
            }
        }
        /** Save this new message body in the database table */
        $newMessageBody = $dom->saveHTML();
		$newMessageBody = $dom->saveHTML();
		$newMessageBody = str_replace("<h5","<h6",$newMessageBody);
		$newMessageBody = str_replace("<h4","<h5",$newMessageBody);
		$newMessageBody = str_replace("<h3","<h4",$newMessageBody);
		$newMessageBody = str_replace("<h2","<h3",$newMessageBody);
		$newMessageBody = str_replace("<h1","<h2",$newMessageBody);
		$names = array();
		$newMessageBody = str_replace("materialsinhealth.org/uploads","materialsinhealth.org/mmhn/public/uploads",$newMessageBody);
		
			if(!empty($request->file('pic'))){
	
				$fil  = $request->file('pic');
				$fileFalseName ="";
				$m =1;
				
				foreach($fil as $fil){
				
				$ext = $fil->getClientOriginalExtension();
				
				
				
				$i = $fil->getClientOriginalName();
				$fileName = $i;								
				$fileFalseName = date('Ymhis').preg_replace("/[^A-Za-z0-9]/", "", $fil->getClientOriginalName()).'.'.$ext;					
				$newurl = public_path() . DS . 'uploads';
				$upl = $fil->move($newurl, $fileFalseName);
				array_push($names,$fileFalseName);
				//$fil2 = Image::make($newurl.DS. $fileFalseName)->resize(1024, 683)->save();
				
				}
	
				
				}
				else{
				
				$fileFalseName ="emptyimage.png";
				}
				
				
				
				if($request->file('cover')!=""){
				$fil  = $request->file('cover');
				//pr($fil,true);
				$ext = $fil->getClientOriginalExtension();
				
				
				if($ext == "jpeg" || $ext == "jpg" || $ext == "PNG" || $ext == "JPG" || $ext == "JPEG"|| $ext == "png"){
				$i = $fil->getClientOriginalName();
				$fileName = $i;								
				$fileFalseName2 = date('Ymhis').preg_replace("/[^A-Za-z0-9]/", "", $fil->getClientOriginalName()).'.'.$ext;					
				$newurl = public_path() . DS . 'uploads';
				$upl = $fil->move($newurl, $fileFalseName2);
				
				$fil2 = Image::make($newurl.DS. $fileFalseName2)->resize(1024, 683)->save();
				
				}else{
				return back()->with("uplerror","invalid format");
				}
				
				}
				else{
				
				$fileFalseName2 ="emptyimage.png";
				}
				
				
				
					
					$s = new PublicStories;
					$s->title = Input::get("name");
					if(empty(Input::get("keywords"))){
					$s->keywords = serialize(array());
					}else{
					$s->keywords = serialize(Input::get("keywords"));
					}
					
					//$partners = Input::get("partners");
					//$partners =  $request->input('partners', []);
					//pr($mids,true);
					$mids =  unserialize(serialize($request->input('keywords', [])));
					if(empty($mids)){
					$mids = array();
					}
					$kw = Keywords::whereIn("id",$mids)->get();
					$k_text = "";
					
					if(count($kw)>0){
					foreach ($kw as $k){
					$k_text = $k_text." ".$k->name;
					}
					}
					
					$s->keywords_text = $k_text;				
					
					if(!empty(Input::get("tags-3"))){
					$s->other_keyword = Input::get("tags-3");
					}
					$s->posted_by = Auth::user()->id;
					$s->posted_by_name = Auth::user()->first_name." ". Auth::user()->middle_name." ".Auth::user()->last_name;
					$s->news_body = $newMessageBody;
					$s->category = "need";
					$s->cover = $fileFalseName2;
					if($m=1){
					$s->pic = serialize($names);
					}else{
					$s->pic = serialize($fileFalseName);
					}
					//$s->partners = serialize($partners);
					$s->status = "under review";
					$s->save();
					
					
			
			$id = array();
			$id2 = array();// for text similarity
			$sc = array();
			$sc_key = array();
			foreach($us as $u){
			/*
			similar_text(Input::get("name"),$u->first_name,$percent1);
			similar_text(Input::get("name"),$u->middle_name,$percent2);
			similar_text(Input::get("name"),$u->last_name,$percent3);
			*/
			$stopWords = new StopWords();
			$stpwds = $stopWords->getStopWordsFromLanguage('en');
			
			
			//similar_text( str_replace($stpwds, " ",Input::get("name")), str_replace($stpwds, " ", $u->institution,$percent1));
			//similar_text( str_replace($stpwds, " ",Input::get("name")), str_replace($stpwds, " ",$u->joining_reason,$percent1));
			//similar_text( str_replace($stpwds, " ",Input::get("name")), str_replace($stpwds, " ",$u->designation,$percent3));
			//similar_text( str_replace($stpwds, " ",Input::get("name")), str_replace($stpwds, " ",$u->current_interest,$percent2));
			similar_text( str_replace($stpwds, " ",Input::get("name")), str_replace($stpwds, " ",$u->sector,$percent1));
			similar_text( str_replace($stpwds, " ",Input::get("name")),  str_replace($stpwds, " ",$u->bio,$percent2));
			similar_text( str_replace($stpwds, " ",Input::get("name")), str_replace($stpwds, " ",$u->other_keyword,$percent3));
			/*
			similar_text(Input::get("statement"),$u->first_name,$percent10);
			similar_text(Input::get("statement"),$u->middle_name,$percent11);
			similar_text(Input::get("statement"),$u->last_name,$percent12);
			*/
			//similar_text( str_replace($stpwds, " ",Input::get("statement")), str_replace($stpwds, " ",$u->institution,$percent8));
			similar_text( str_replace($stpwds, " ",Input::get("statement")), str_replace($stpwds, " ",$u->joining_reason,$percent4));
			//similar_text( str_replace($stpwds, " ",Input::get("statement")), str_replace($stpwds, " ",$u->designation,$percent10));
			//similar_text( str_replace($stpwds, " ",Input::get("statement")), str_replace($stpwds, " ",$u->current_interest,$percent6));
			//similar_text( str_replace($stpwds, " ",Input::get("statement")), str_replace($stpwds, " ",$u->previous_interest,$percent7));
			similar_text( str_replace($stpwds, " ",Input::get("statement")), str_replace($stpwds, " ",$u->bio,$percent5));
			//similar_text( str_replace($stpwds, " ",Input::get("statement")),  str_replace($stpwds, " ",$u->sector,$percent5));
			similar_text( str_replace($stpwds, " ",Input::get("statement")),  str_replace($stpwds, " ",$u->other_keyword,$percent6));
			
			$sk = Keywords::where("id",">",0)->get();
			
			$strk = "";
			if(is_array(unserialize($u->keywords))){
			$ki = unserialize($u->keywords);
			}else{
				$ki = array();
			}
			//pr($ki,true);
			foreach($ki as $ki){
			foreach($sk as $k){
			
			if($ki == $k->id){
			$strk = $strk ." ". $k->name;
			}
			
			}
			
			}
			
			
			similar_text( str_replace($stpwds, " ",Input::get("name")),  str_replace($stpwds, " ",$strk,$percent7));
			similar_text( str_replace($stpwds, " ",Input::get("statement")),  str_replace($stpwds, " ",$strk,$percent8));
			$score =  ($percent1+$percent2+$percent3+$percent4+$percent5+$percent6+$percent7+$percent8)/8;
			
				if($score >= 1 )
				{
				
				array_push($id2, $u->id);
				
			    // array_push($sc, $score);
				  $sc += [$u->id => $score];
			}
			}
			
			
			
			
			//$match = User::where("id",$id)->get();
			
			$uk= User::where("id",'>',0)->get();
			
			foreach($uk as $uu){					
					//pr($uu->keywords,true);
					$cm =0;
					if(!empty($keywords)){
					foreach($keywords as $k){
					if($uu->keywords=="" || $uu->keywords=="N;" || empty($uu->keywords)){
					
					$arr = array();
					$arr = serialize($arr);
					}else{
					$arr = $uu->keywords;
					}
					
				if(in_array($k,unserialize($arr))){
					array_push($id, $uu->id);
					$cm++;
					
					}
				}
					//array_push($sc_key, $cm);
					//score for keywords merge
					$sc_key += [$uu->id => $cm];
					//pr($sc_key,true);
				}
			
			}
			
			//others with keywords
			foreach($uk as $uu){					
					//pr($uu->keywords,true);
					$cm =0;
					if(!empty($others)){
					foreach($others as $k){
					if($uu->keywords=="" || $uu->keywords=="N;" || empty($uu->keywords)){
					
					$arr = array();
					$arr = serialize($arr);
					}else{
					$arr = $uu->keywords;
					}
					
				if(in_array($k,unserialize($arr))){
					array_push($id, $uu->id);
					$cm++;
					
					}
				}
					//array_push($sc_key, $cm);
					//score for keywords merge
					$sc_key += [$uu->id => $cm];
					//pr($sc_key,true);
				}
			
			}
			
			
			//others with others
			foreach($uk as $uu){					
					//pr($uu->keywords,true);
					$cm =0;
					if(!empty($others)){
					foreach($others as $k){
					if($uu->others=="" || $uu->others=="N;" || empty($uu->others)){
					
					$arr = array();
					$arr = serialize($arr);
					}else{
					$arr = $uu->others;
					}
					
				if(in_array($k,unserialize($arr))){
					array_push($id, $uu->id);
					$cm++;
					
					}
				}
					//array_push($sc_key, $cm);
					//score for keywords merge
					$sc_key += [$uu->id => $cm];
					//pr($sc_key,true);
				}
			
			}
			
			
			$id = array_unique($id);
			$id2 = array_unique($id2);
			
			
			
			$aca = User::where('sector', 'Academic')->where("status",0)->where("iv_status",1)->where("id","!=",Auth::user()->id)->get();
			$ind = User::where('sector', 'Industry')->where("status",0)->where("iv_status",1)->where("id","!=",Auth::user()->id)->get();
			$cli = User::where('sector', 'Clinical')->where("status",0)->where("iv_status",1)->where("id","!=",Auth::user()->id)->get();
			$oth = User::where('sector','Other')->where("status",0)->where("iv_status",1)->where("id","!=",Auth::user()->id)->get();
			$kd = Keywords::where("id",">",0)->get(); 
			
			$others = serialize($others);
			
			
		
			return view('admin.match')
			->with("name",$n)
			->with("id",$id)
			->with("id2",$id2)
			->with("sc",$sc)
			->with("ac",$aca)
			->with("pic",$pic)
			->with("kd",$kd)
			->with("in",$ind)
			->with("others",$others)
			->with("cl",$cli)
			->with("ot",$oth)
			->with("sck",$sc_key)
			->with("detail",$detail)
			//->with("ma",$match)
			->with("kw",$keywords)
			->with("u",$uk);
			//->with("ids",$all_ids);
			
			
			
			//return back()->with("msg","Account created successfully... you can login now");
			}else{
					return redirect()->intended('/login');
			}
		}
		
		public function addEditNeed(Request $request){ 
		//function for submitting clinical needs
		
			if(Auth::check()){
				
					$n = Input::get("name");
					$detail = Input::get("message");
					$pic = $request->file('pic');
					$keywords = Input::get("keywords");
					$last_edited = Auth::user()->first_name." ".Auth::user()->last_name." ".Auth::user()->id;
					$others = Input::get("tags-3");
					$others = explode (",", $others);
					$ppid = Input::get("id");
					//pr($others,true);
			$us = User::where("id","!=",Auth::user()->id)->get();
			
			$message = request()->get('message');		
		 $dom = new \DomDocument();       
         $dom->loadHtml($message, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);       
         $images = $dom->getElementsByTagName('img');

        foreach ($images as $image) {
            $imageSrc = $image->getAttribute('src');
            /** if image source is 'data-url' */
            if (preg_match('/data:image/', $imageSrc)) {
                /** etch the current image mimetype and stores in $mime */
                preg_match('/data:image\/(?<mime>.*?)\;/', $imageSrc, $mime);
                $mimeType = $mime['mime'];
                /** Create new file name with random string */
                $filename = uniqid();

                /** Public path. Make sure to create the folder
                 * public/uploads
                 */
                $filePath = "/uploads/$filename.$mimeType";

                /** Using Intervention package to create Image */
                Image::make($imageSrc)
                    /** encode file to the specified mimeType */
                    ->encode($mimeType, 100)
                    /** public_path - points directly to public path */
                    ->save(public_path($filePath));

                $newImageSrc = asset($filePath);
                $image->removeAttribute('src');
                $image->setAttribute('src', $newImageSrc);
            }
        }
        /** Save this new message body in the database table */
        $newMessageBody = $dom->saveHTML();
		$newMessageBody = $dom->saveHTML();
		$newMessageBody = str_replace("<h5","<h6",$newMessageBody);
		$newMessageBody = str_replace("<h4","<h5",$newMessageBody);
		$newMessageBody = str_replace("<h3","<h4",$newMessageBody);
		$newMessageBody = str_replace("<h2","<h3",$newMessageBody);
		$newMessageBody = str_replace("<h1","<h2",$newMessageBody);
		$names = array();
		$newMessageBody = str_replace("materialsinhealth.org/uploads","materialsinhealth.org/mmhn/public/uploads",$newMessageBody);
		
			if(!empty($request->file('pic'))){
	
				$fil  = $request->file('pic');
				$fileFalseName ="";
				$m =1;
				
				foreach($fil as $fil){
				
				$ext = $fil->getClientOriginalExtension();
				
				
				
				$i = $fil->getClientOriginalName();
				$fileName = $i;								
				$fileFalseName = date('Ymhis').preg_replace("/[^A-Za-z0-9]/", "", $fil->getClientOriginalName()).'.'.$ext;					
				$newurl = public_path() . DS . 'uploads';
				$upl = $fil->move($newurl, $fileFalseName);
				array_push($names,$fileFalseName);
				//$fil2 = Image::make($newurl.DS. $fileFalseName)->resize(1024, 683)->save();
				
				}
	
				
				}
				else{
				
				$fileFalseName ="emptyimage.png";
				}
				
				
				
				if($request->file('cover')!=""){
				$fil  = $request->file('cover');
				//pr($fil,true);
				$ext = $fil->getClientOriginalExtension();
				
				
				if($ext == "jpeg" || $ext == "jpg" || $ext == "PNG" || $ext == "JPG" || $ext == "JPEG"|| $ext == "png"){
				$i = $fil->getClientOriginalName();
				$fileName = $i;								
				$fileFalseName2 = date('Ymhis').preg_replace("/[^A-Za-z0-9]/", "", $fil->getClientOriginalName()).'.'.$ext;					
				$newurl = public_path() . DS . 'uploads';
				$upl = $fil->move($newurl, $fileFalseName2);
				
				$fil2 = Image::make($newurl.DS. $fileFalseName2)->resize(1024, 683)->save();
				
				}else{
				return back()->with("uplerror","invalid format");
				}
				
				}
				else{
				
				$fileFalseName2 ="emptyimage.png";
				}
				
		
		$s = PublicStories::where("id",Input::get("id"))->first();
					$s->title = Input::get("name");
					if(empty(Input::get("keywords"))){
					$s->keywords = serialize(array());
					}else{
					$s->keywords = serialize(Input::get("keywords"));
					}
					
					//$partners = Input::get("partners");
					//$partners =  $request->input('partners', []);
					//pr($mids,true);
					$mids =  unserialize(serialize($request->input('keywords', [])));
					if(empty($mids)){
					$mids = array();
					}
					$kw = Keywords::whereIn("id",$mids)->get();
					$k_text = "";
					
					if(count($kw)>0){
					foreach ($kw as $k){
					$k_text = $k_text." ".$k->name;
					}
					}
					
					$s->keywords_text = $k_text;				
					
					
					if(!empty(Input::get("tags-3"))){
					$s->other_keyword = Input::get("tags-3");
					}
					$s->posted_by = Auth::user()->id;
					$s->posted_by_name = Auth::user()->first_name." ". Auth::user()->middle_name." ".Auth::user()->last_name;
					$s->news_body = $newMessageBody;
					$s->category = "need";
					$s->cover = $fileFalseName2;
					if($m=1){
					$s->pic = serialize($names);
					}else{
					$s->pic = serialize($fileFalseName);
					}
					//$s->partners = serialize($partners);
					$s->status = "under review";
					$s->save();
					
			
			$id = array();
			$id2 = array();// for text similarity
			$sc = array();
			$sc_key = array();
			foreach($us as $u){
			/*
			similar_text(Input::get("name"),$u->first_name,$percent1);
			similar_text(Input::get("name"),$u->middle_name,$percent2);
			similar_text(Input::get("name"),$u->last_name,$percent3);
			*/
			$stopWords = new StopWords();
			$stpwds = $stopWords->getStopWordsFromLanguage('en');
			
			
			//similar_text( str_replace($stpwds, " ",Input::get("name")), str_replace($stpwds, " ", $u->institution,$percent1));
			//similar_text( str_replace($stpwds, " ",Input::get("name")), str_replace($stpwds, " ",$u->joining_reason,$percent1));
			//similar_text( str_replace($stpwds, " ",Input::get("name")), str_replace($stpwds, " ",$u->designation,$percent3));
			//similar_text( str_replace($stpwds, " ",Input::get("name")), str_replace($stpwds, " ",$u->current_interest,$percent2));
			similar_text( str_replace($stpwds, " ",Input::get("name")), str_replace($stpwds, " ",$u->sector,$percent1));
			similar_text( str_replace($stpwds, " ",Input::get("name")),  str_replace($stpwds, " ",$u->bio,$percent2));
			similar_text( str_replace($stpwds, " ",Input::get("name")), str_replace($stpwds, " ",$u->other_keyword,$percent3));
			/*
			similar_text(Input::get("statement"),$u->first_name,$percent10);
			similar_text(Input::get("statement"),$u->middle_name,$percent11);
			similar_text(Input::get("statement"),$u->last_name,$percent12);
			*/
			//similar_text( str_replace($stpwds, " ",Input::get("statement")), str_replace($stpwds, " ",$u->institution,$percent8));
			similar_text( str_replace($stpwds, " ",Input::get("statement")), str_replace($stpwds, " ",$u->joining_reason,$percent4));
			//similar_text( str_replace($stpwds, " ",Input::get("statement")), str_replace($stpwds, " ",$u->designation,$percent10));
			//similar_text( str_replace($stpwds, " ",Input::get("statement")), str_replace($stpwds, " ",$u->current_interest,$percent6));
			//similar_text( str_replace($stpwds, " ",Input::get("statement")), str_replace($stpwds, " ",$u->previous_interest,$percent7));
			similar_text( str_replace($stpwds, " ",Input::get("statement")), str_replace($stpwds, " ",$u->bio,$percent5));
			//similar_text( str_replace($stpwds, " ",Input::get("statement")),  str_replace($stpwds, " ",$u->sector,$percent5));
			similar_text( str_replace($stpwds, " ",Input::get("statement")),  str_replace($stpwds, " ",$u->other_keyword,$percent6));
			
			$sk = Keywords::where("id",">",0)->get();
			
			$strk = "";
			
			if(!empty($ki)){
			$ki = unserialize($u->keywords);
			}else{
			$ki= array();
			}
			//pr($ki,true);
			foreach($ki as $ki){
			foreach($sk as $k){
			
			if($ki == $k->id){
			$strk = $strk ." ". $k->name;
			}
			
			}
			
			}
			
			
			similar_text( str_replace($stpwds, " ",Input::get("name")),  str_replace($stpwds, " ",$strk,$percent7));
			similar_text( str_replace($stpwds, " ",Input::get("statement")),  str_replace($stpwds, " ",$strk,$percent8));
			$score =  ($percent1+$percent2+$percent3+$percent4+$percent5+$percent6+$percent7+$percent8)/8;
			
			
				if($score >= 1 )
				{
				
				array_push($id2, $u->id);
				
			    // array_push($sc, $score);
				  $sc += [$u->id => $score];
			}
			}
			
			
			
			
			//$match = User::where("id",$id)->get();
			
			$uk= User::where("id",'>',0)->get();
			
			foreach($uk as $uu){					
					//pr($uu->keywords,true);
					$cm =0;
					if(!empty($keywords)){
					foreach($keywords as $k){
					if($uu->keywords=="" || $uu->keywords=="N;" || empty($uu->keywords)){
					
					$arr = array();
					$arr = serialize($arr);
					}else{
					$arr = $uu->keywords;
					}
					
				if(in_array($k,unserialize($arr))){
					array_push($id, $uu->id);
					$cm++;
					
					}
				}
					//array_push($sc_key, $cm);
					//score for keywords merge
					$sc_key += [$uu->id => $cm];
					//pr($sc_key,true);
				}
			
			}
			
			//others with keywords
			foreach($uk as $uu){					
					//pr($uu->keywords,true);
					$cm =0;
					if(!empty($others)){
					foreach($others as $k){
					if($uu->keywords=="" || $uu->keywords=="N;" || empty($uu->keywords)){
					
					$arr = array();
					$arr = serialize($arr);
					}else{
					$arr = $uu->keywords;
					}
					
				if(in_array($k,unserialize($arr))){
					array_push($id, $uu->id);
					$cm++;
					
					}
				}
					//array_push($sc_key, $cm);
					//score for keywords merge
					$sc_key += [$uu->id => $cm];
					//pr($sc_key,true);
				}
			
			}
			
			
			//others with others
			foreach($uk as $uu){					
					//pr($uu->keywords,true);
					$cm =0;
					if(!empty($others)){
					foreach($others as $k){
					if($uu->others=="" || $uu->others=="N;" || empty($uu->others)){
					
					$arr = array();
					$arr = serialize($arr);
					}else{
					$arr = $uu->others;
					}
					
				if(in_array($k,unserialize($arr))){
					array_push($id, $uu->id);
					$cm++;
					
					}
				}
					//array_push($sc_key, $cm);
					//score for keywords merge
					$sc_key += [$uu->id => $cm];
					//pr($sc_key,true);
				}
			
			}
			
			
			
			
			
			$id = array_unique($id);
			$id2 = array_unique($id2);
			
			
			$aca = User::where('sector', 'Academic')->where("status",0)->where("iv_status",1)->where("id","!=",Auth::user()->id)->get();
			$ind = User::where('sector', 'Industry')->where("status",0)->where("iv_status",1)->where("id","!=",Auth::user()->id)->get();
			$cli = User::where('sector', 'Clinical')->where("status",0)->where("iv_status",1)->where("id","!=",Auth::user()->id)->get();
			$oth = User::where('sector','Other')->where("status",0)->where("iv_status",1)->where("id","!=",Auth::user()->id)->get();
			$kd = Keywords::where("id",">",0)->get(); 
			
			$others = serialize($others);
			
		
			return view('admin.match_edit')
			->with("name",$n)
			->with("id",$id)
			->with("id2",$id2)
			->with("sc",$sc)
			->with("ac",$aca)
			->with("pic",$pic)
			->with("kd",$kd)
			->with("in",$ind)
			->with("others",$others)
			->with("cl",$cli)
			->with("ot",$oth)
			->with("pid",$ppid)
			->with("sck",$sc_key)
			->with("detail",$detail)
			//->with("ma",$match)
			->with("kw",$keywords)
			->with("u",$uk);
			//->with("ids",$all_ids);
			
			
			
			//return back()->with("msg","Account created successfully... you can login now");
			}else{
					return redirect()->intended('/login');
			}
		}
		
		public function submitNeed(Request $request){ 
		if(Auth::check()){
		
		//pr(Input::all(),true);
		 
				
				
					
					$s = PublicStories::where("title",Input::get("name"))->where("keywords",Input::get("keywords"))->first();
					//pr($s,true);
					
					$partners =  serialize($request->input('partners', []));
					$s->partners = $partners;
					$s->save();
					
					
					$admins = User::where("role", "admin")->get();
					$si = PublicStories::where("title",Input::get("name"))->where("posted_by",Auth::user()->id)->first();
			foreach ($admins as $adm){
			// $mes ="";
			 $pathToFile =$this->url_email."review".$si->id;
			 $receiver =  $adm->email;
			 $name = $adm->first_name;
			 $sender = "admin@materialsinhealth.org";
			 $mes = $this->url_email."clinical_detail/".$si->id;
			  $sub = "no-reply: New Challenge Submission for your Approval"." ".Input::get("name");
			 $sag = array('mail'=>$receiver,'user_id'=>'hhhhh','sub'=>$sub,'name'=>$name,'pathTo'=>$pathToFile);				
			 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
			  Mail::send('emails.admin_challenge_not', $data, function ($m) use ($sag) {
					$m->from('admin@materialsinhealth.org',$sag['sub'] );
					$m->to($sag['mail'], $sag['mail'])->subject($sag['sub']);
				 });
		}
		
					
									
		return redirect()->intended('/challengesubmitted');
				
			}else{
			return redirect()->intended('/login');
			}
		
		}
		
		public function submitEditNeed(Request $request){ 
		if(Auth::check()){
		//pr(Input::all(),true);
		
					$s = PublicStories::where("id",Input::get("id"))->first();
					//pr($s,true);
					
					//$partners = Input::get("partners");
					$partners =  serialize($request->input('partners', []));
					$s->partners = $partners;
					$s->save();
					//pr($s,true);
					$admins = User::where("role", "admin")->get();
					//$si = PublicStories::where("title",Input::get("name"))->where("posted_by",Auth::user()->id)->first();
					
			foreach ($admins as $adm){
			// $mes ="";
			 $pathToFile =$this->url_email."review/".$s->id;
			 $receiver =  $adm->email;
			 $name = $adm->first_name;
			 $sender = "admin@materialsinhealth.org";
			 $mes = $this->url_email."review/".$s->id;
			 $sub = "no-reply: Edit Challenge Submission for your Approval"." ".Input::get("name");
			 $sag = array('mail'=>$receiver,'user_id'=>'hhhhh','sub'=>$sub,'name'=>$name,'pathTo'=>$pathToFile);				
			 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
			 
			  Mail::send('emails.admin_challenge_not', $data, function ($m) use ($sag) {
					$m->from('admin@materialsinhealth.org', $sag['sub']);
					$m->to($sag['mail'], $sag['mail'])->subject($sag['sub']);
				 });
		}
		
					
									
		return redirect()->intended('/challengesubmitted');
				
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
		
		public function forgotpasswordform(Request $request){ 
			// registration submission form

			$c = User::where('email',Input::get('email'))->count();
			$u = User::where('email',Input::get('email'))->first();
			$tk =generateRandomString(52);
				if($c<=0){
				return back()->with("no_record","no record");
				}else{
				
				$u->resetpassword_token = $tk;
				$u->save();
				}
				
			
			//email to a User	
			 $mes ="";
			 $receiver =  Input::get('email');
			 $name = $u->first_name." ".$u->last_name;
			 $sender = "admin@materialsinhealth.org";
			 $pathToFile = $this->url_email."/resetpassword/".$tk;
			 $sag = array('mail'=>$receiver,'user_id'=>'hhhhh','name'=>$name,'pathTo'=>$pathToFile);				
			 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
			 
			  Mail::send('emails.forgotpassword', $data, function ($m) use ($sag) {
					$m->from('admin@materialsinhealth.org', 'no-reply: Passoword Reset');
					$m->to($sag['mail'], $sag['mail'])->subject('no-reply: Passoword Reset');
				 });
				 
				  return back()->with("sent","");
			
			 }
			 
		public function showChangePassword($id){
		
		 $u = User::where("resetpassword_token",$id)->count();
		 $uu = User::where("resetpassword_token",$id)->first();
		 
		
		 if($u<0 or empty($uu) or empty($u)){
		 echo "Invalid token";
		 }else{
		 
		 return view('admin.changepasswordform')->with("id",$uu->id);
		 
		 }
		
		 
		
		}
		
		
		
		public function showEditPassword($id){
		
		 
		 $uu = User::where("id",$id)->first();
		 
		 
		 return view('admin.changepasswordform')->with("id",$uu->id);
		 
		 
		}
		
		public function customCookiesSubmission(){
		
		
		if(!empty(Input::get("nec")) && !empty(Input::get("google"))){
		
			$value = "materials_health";
			$value2 = "analytics";
			setcookie("mycookie", $value, time() +31536000, '/');
			setcookie("analytics", $value2, time() +31536000, '/');
			
		}
		else if(!empty(Input::get("nec")) && empty(Input::get("google"))){
			$value = "materials_health";
			$value2 = "analytics";
			setcookie("mycookie", $value, time() +31536000, '/');
			
			
		}
		 
		
		
		$r = PublicStories::where("id",">",0)->where("status","approved")->where("category","news")->orderBy("updated_at")->take(3)->get();
			$chh = PublicStories::where("id",">",0)->where("status","approved")->where("category","need")->orderBy("updated_at")->take(3)->get();
			$op = PublicStories::where("id",">",0)->where("status","approved")->where("category","grant")->orderBy("updated_at")->take(3)->get();
			$ev = PublicStories::where("id",">",0)->where("status","approved")->where("category","event")->orderBy("updated_at")->take(3)->get();
			return redirect()->intended('/');
	
	}
		
		public function showCustomiseCookies(){	
		 
		 return view('admin.customisecookies');
		 
	
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
					$s->sector = Input::get('sector');
					$s->designation = Input::get('designation');
					$s->current_interest = Input::get('current_interest');
					//$s->previous_interest = Input::get('previous_interest');
					$s->bio = Input::get('bio');
					$s->linkedin = Input::get('linkedin');
					$s->twitter = Input::get('twitter');
					$s->webpage = Input::get('webpage');
					$s->status = 1;
					$s->iv_status = 0;
					$s->password = Hash::make(Input::get('password'));
	
				$s->save();
			//email to a User	
			 $mes ="";
			 $receiver =  Input::get('email');
			 $name = Input::get('first_name')." ". Input::get('last_name');
			 $sender = "admin@materialsinhealth.org";
			 $pathToFile = "";
			 $sag = array('mail'=>$receiver,'user_id'=>'hhhhh','name'=>$name,'pathTo'=>$pathToFile);				
			 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
			 
			  Mail::send('emails.interest', $data, function ($m) use ($sag) {
					$m->from('admin@materialsinhealth.org', 'no-reply: Interest Form Received');
					$m->to($sag['mail'], $sag['mail'])->subject('no-reply: Interest Form Received');
				 });
				 
				 //Email to Admin
			
			$admins = User::where("role", "admin")->get();
			
			foreach ($admins as $adm){
			// $mes ="";
			 $receiver =  $adm->email;
			 $name = $adm->first_name;
			 $sender = "admin@materialsinhealth.org";
			 $mes = $this->url_email."/dashboard";
			 $sag = array('mail'=>$receiver,'user_id'=>'hhhhh','name'=>$name,'pathTo'=>$pathToFile);				
			 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
			 
			  Mail::send('emails.interest_admin', $data, function ($m) use ($sag) {
					$m->from('admin@materialsinhealth.org', 'no-reply: Interest Form Received');
					$m->to($sag['mail'], $sag['mail'])->subject('no-reply: New Network Interest Notification');
				 });
		}
				 
		
			
		
		return back()->with("msg_interest","Account created successfully... you can login now");
		}else{
			
			return back()->with("msg2","user exist");

		}
		
		}
		
		
		public function adminCreatePartner(Request $request){ 
		
		if(empty(Input::get('keywords')) &&  empty(Input::get('other'))){
			return back()->with("miskey","misskey")->withInput();
			}
			
		
		$cku = User::where("email",Input::get("email"))->count();
		if($cku>0){
		echo "A Partner with the same email address exist. Please check through the partners list"; exit;
		}
			//pr(Input::all(),true);
			$upl ="";
			$newurl = public_path() . DS . 'uploads';
			//registration completion
			if(!empty($request->file('pic'))){
				$fil  = $request->file('pic');
				//pr($fil,true);
				$ext = $fil->getClientOriginalExtension();
				
				
				if($ext == "jpeg" || $ext == "jpg" || $ext == "PNG" || $ext == "JPG" || $ext == "JPEG" || $ext == "png"){
				$i = $fil->getClientOriginalName();
				$fileName = $i;								
				$fileFalseName = date('Ymhis').preg_replace("/[^A-Za-z0-9]/", "", $fil->getClientOriginalName()).'.'.$ext;					
				$newurl = public_path() . DS . 'uploads';
				$upl = $fil->move($newurl, $fileFalseName);
				
				$fil2 = Image::make($newurl.DS. $fileFalseName)->resize((200, 400))->save();
				
				}else{
				return back()->with("uplerror","invalid format");
				}
				
				}
			
			if($upl){
				
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
					$s->sector = Input::get('sector');
					$s->status = 0;
					
					$s->other_keyword = Input::get('other');
					
					if(empty(Input::get('keywords'))){
					$s->keywords = serialize(array());
					}
					else{
					$s->keywords = serialize(Input::get('keywords'));
					}
					
					$s->iv_status = 1;
					$ivcode =generateRandomString(16); 
					$ck_code = User::where("iv_code",$ivcode)->count();
					while($ck_code>0){
					$ivcode = generateRandomString(16);	
					}
					$s->iv_code = $ivcode;	
					
					$s->picture = $fileFalseName;
					$s->password = Hash::make(Input::get('password'));
					if(Input::get("news_email")==""){
					$s->public_email = "off";
					}
					else{$s->public_email = "on";}
					
					if(Input::get("news_email")==""){
					$s->public_email = "off";
					}
					else{$s->public_email = "on";}
					
					if(Input::get("matching_email")==""){
					$s->matching_email = "off";
					}
					else{$s->matching_email = "on";}
				$s->save();
				
			}else{
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
					$s->status = 0;
					$s->iv_status = 1;
					$ivcode =generateRandomString(16); 
					$s->sector = Input::get('sector');
					$ck_code = User::where("iv_code",$ivcode)->count();
					while($ck_code>0){
					$ivcode =generateRandomString(16);	
					}
					$s->iv_code = $ivcode;					
						$s->other_keyword = Input::get('other');
					
					if(empty(Input::get('keywords'))){
					$s->keywords = serialize(array());
					}
					else{
					$s->keywords = serialize(Input::get('keywords'));
					}
					$s->picture = "empty.png";
					$s->password = Hash::make(Input::get('password'));
					
					if(Input::get("news_email")==""){
						$s->public_email = "off";
					}
					else{$s->public_email = "on";}
					
					if(Input::get("matching_email")==""){
					$s->matching_email = "off";
					}
					else{$s->matching_email = "on";}
	
				$s->save();
			
			}
				
				$p = new Partner;
					$p->user_id = $s->id;
				$p->save();
				
			
			
			 $receiver =  Input::get('email');
			 $name = $s->first_name." ".$s->last_name;
			 $url =  $this->url_email."";
			 $sender = "admin@materialsinhealth.org";
			 $mes = $this->url_email."/admininvitepartner/".$s->iv_code;
			// pr($mes,true);
			 $pathToFile ="";
			 $sag = array('mail'=>$receiver,'user_id'=>'hhhhh','name'=>$name,'pathTo'=>$pathToFile);				
			 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
			 
			  Mail::send('emails.admininvite', $data, function ($m) use ($sag) {
					$m->from('admin@materialsinhealth.org', 'Action Required: Invitation to Materials and Manufacturing in Healthcare Network');
					$m->to($sag['mail'], $sag['mail'])->subject('Action Required: Invitation to Materials and Manufacturing in Healthcare Network');
				 });
				 
				
		return back()->with("msg_interest2","Account created successfully... you can login now");
		
		
		}
		
		

		
	public function create_complete (Request $request){ 
			//pr(Input::all(),true);
			
			if(Input::get('password')!= Input::get('cpassword')){
			return back()->with("mismatch","mismatchpassword")->withInput();
			}
			
			if(empty(Input::get('keywords')) &&  empty(Input::get('other'))){
			return back()->with("miskey","misskey")->withInput();
			}
			$upl ="";
			$newurl = public_path() . DS . 'uploads';
			//registration completion
			if(!empty($request->file('pic'))){
				$fil  = $request->file('pic');
				//pr($fil,true);
				$ext = $fil->getClientOriginalExtension();
				
				
				if($ext == "jpeg" || $ext == "jpg" || $ext == "PNG" || $ext == "JPG" || $ext == "JPEG" || $ext == "png"){
				$i = $fil->getClientOriginalName();
				$fileName = $i;								
				$fileFalseName = date('Ymhis').preg_replace("/[^A-Za-z0-9]/", "", $fil->getClientOriginalName()).'.'.$ext;					
				$newurl = public_path() . DS . 'uploads';
				$upl = $fil->move($newurl, $fileFalseName);
				
				$fil2 = Image::make($newurl.DS. $fileFalseName)->resize((200, 400))->save();
				
				}else{
				return back()->with("uplerror","invalid format");
				}
				
				}
			
			if($upl){
				
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
					$s->linkedin = Input::get('linkedin');
					$s->twitter = Input::get('twitter');
					$s->webpage = Input::get('webpage');
		
					$s->other_keyword = Input::get('other');
					if(!empty(Input::get('keywords'))){
					$s->keywords = serialize(Input::get('keywords'));
					}else{
					$s->keywords = serialize(array());
					}
					
					$mids =  $request->input('keywords', []);
					if(empty($mids)){
					$mids = array();
					}
					$kw = Keywords::whereIn("id",$mids)->get();
					
					
					$k_text = "";
					foreach ($kw as $k){
					$k_text = $k_text." ".$k->name;
					}
					$s->keywords_text = $k_text;
					
					
					$s->picture = $fileFalseName;
					$s->password = Hash::make(Input::get('password'));
					if(Input::get("news_email")==""){
					$s->public_email = "off";
					}
					else{$s->public_email = "on";}
					
					if(Input::get("news_email")==""){
					$s->public_email = "off";
					}
					else{$s->public_email = "on";}
					
					if(Input::get("matching_email")==""){
					$s->matching_email = "off";
					}
					else{$s->matching_email = "on";}
				$s->save();
				
			}else{
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
					
					$s->other_keyword = Input::get('other');
					$s->linkedin = Input::get('linkedin');
					$s->twitter = Input::get('twitter');
					$s->webpage = Input::get('webpage');
					
					if(!empty(Input::get('keywords'))){
					$s->keywords = serialize(Input::get('keywords'));
					}else{
					$s->keywords = serialize(array());
					}
					
					$mids =  $request->input('keywords', []);
					if(empty($mids)){
					$mids = array();
					}
					$kw = Keywords::whereIn("id",$mids)->get();
					
					$k_text = "";
					foreach ($kw as $k){
					$k_text = $k_text." ".$k->name;
					}
					$s->keywords_text = $k_text;
					
					
					$s->picture = "empty.png";
					$s->password = Hash::make(Input::get('password'));
					
					if(Input::get("news_email")==""){
					$s->public_email = "off";
					}
					else{$s->public_email = "on";}
					
					if(Input::get("matching_email")==""){
					$s->matching_email = "off";
					}
					else{$s->matching_email = "on";}
	
				$s->save();
			
			}
				
				$p = new Partner;
					$p->user_id = $s->id;
				$p->save();
			//email to a User	
			 $mes ="";
			 $receiver =  Input::get('email');
			 $name = Input::get('first_name');
			 $sender = "admin@materialsinhealth.org";
			 $pathToFile = "";
			 $sag = array('mail'=>$receiver,'user_id'=>'hhhhh','name'=>$name,'pathTo'=>$pathToFile);				
			 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
			 
			  Mail::send('emails.registration_finished', $data, function ($m) use ($sag) {
					$m->from('admin@materialsinhealth.org', 'no-reply: Registeration Completed');
					$m->to($sag['mail'], $sag['mail'])->subject('no-reply: Interest Form Received');
				 });
				 
				 //Email to Admin
			
			
		
		//return redirect()->back()->with("msg_interest2","Account created successfully... you can login now");
		return redirect()->intended('/login');
		
		}
		
		
		public function admincreate_complete (Request $request){ 
			//pr(Input::all(),true);
			
			if(Input::get('password')!= Input::get('cpassword')){
			return back()->with("mismatch","mismatchpassword");
			}
			$id = Input::get("id");
			
			$u = User::where("id",$id)->first();
				$u->password =  Hash::make(Input::get('password'));
			$u->save();
			/*	
			
			$upl ="";
			$newurl = public_path() . DS . 'uploads';
			//registration completion
			if($request->file('pic')!=""){
				$fil  = $request->file('pic');
				//pr($fil,true);
				$ext = $fil->getClientOriginalExtension();
				
				
				if($ext == "jpeg" || $ext == "jpg" || $ext == "png" || $ext == "JPG" || $ext == "png"){
				$i = $fil->getClientOriginalName();
				$fileName = $i;								
				$fileFalseName = date('Ymhis').preg_replace("/[^A-Za-z0-9]/", "", $fil->getClientOriginalName()).'.'.$ext;					
				$newurl = public_path() . DS . 'uploads';
				$upl = $fil->move($newurl, $fileFalseName);
				
				$fil2 = Image::make($newurl.DS. $fileFalseName)->resize(200, 200)->save();
				
				}else{
				return back()->with("uplerror","invalid format");
				}
				
				}
			
			if($upl ){
				
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
					$s->other_keyword = Input::get('other');
					if(!empty(Input::get('keywords'))){
					$s->keywords = serialize(Input::get('keywords'));
					}
					
					$kw = Keywords::whereIn("id",Input::get('keywords'))->get();
					$k_text = "";
					foreach ($kw as $k){
					$k_text = $k_text." ".$k->name;
					}
					$s->keywords_text = $k_text;
					
					$s->iv_status = 0;
					$s->picture = $fileFalseName;
					$s->password = Hash::make(Input::get('password'));
					if(Input::get("news_email")==""){
					$s->public_email = "off";
					}
					else{$s->public_email = "on";}
					
					if(Input::get("news_email")==""){
					$s->public_email = "off";
					}
					else{$s->public_email = "on";}
					
					if(Input::get("matching_email")==""){
					$s->matching_email = "off";
					}
					else{$s->matching_email = "on";}
				$s->save();
				
			}else{
			
			$s = User::where("iv_code",Input::get('code'))->first();				
					
					$s->status = 0;
					$s->iv_status = 0;
					
					$s->password = Hash::make(Input::get('password'));
					
					if(Input::get("news_email")==""){
					$s->public_email = "off";
					}
					else{$s->public_email = "on";}
					
					if(Input::get("matching_email")==""){
					$s->matching_email = "off";
					}
					else{$s->matching_email = "on";}
	
				$s->save();
			
			//}
				
				$p = new Partner;
					$p->user_id = $s->id;
				$p->save();
			//email to a User	
			 $mes ="";
			 $receiver =  $s->email;
			 $name = $s->last_name;
			 $sender = "admin@materialsinhealth.org";
			 $pathToFile = "";
			 $sag = array('mail'=>$receiver,'user_id'=>'hhhhh','name'=>$name,'pathTo'=>$pathToFile);				
			 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
			 
			  Mail::send('emails.registration_finished', $data, function ($m) use ($sag) {
					$m->from('admin@materialsinhealth.org', 'no-reply: Registeration Complete');
					$m->to($sag['mail'], $sag['mail'])->subject('no-reply: Interest Form Received');
				 });
				 
				 //Email to Admin
			*/
			
			
		$keywords = Keywords::all();		
	return view('admin.editprofile')->with("u",$u)->with("kw",$keywords);
		
		}
		
		
		public function changepassword(Request $request){ 
			if(Input::get('password')!= Input::get('cpassword')){
			return back()->with("mismatch","mismatchpassword");
			}
			
			$s = User::where("id",Input::get('uid'))->first();				
					
					$s->status = 0;
					
					$s->password = Hash::make(Input::get('password'));
					
					if(Input::get("news_email")==""){
					$s->public_email = "off";
					}
					else{$s->public_email = "on";}
					
					if(Input::get("matching_email")==""){
					$s->matching_email = "off";
					}
					else{$s->matching_email = "on";}
	
				$s->save();
			
			//}
				
				$p = new Partner;
					$p->user_id = $s->id;
				$p->save();
			//email to a User	
			 $mes ="";
			 $receiver =  $s->email;
			 $name = $s->last_name;
			 $sender = "admin@materialsinhealth.org";
			 $pathToFile = "";
			 $sag = array('mail'=>$receiver,'user_id'=>'hhhhh','name'=>$name,'pathTo'=>$pathToFile);				
			 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
			 
			  Mail::send('emails.complete_reset', $data, function ($m) use ($sag) {
					$m->from('admin@materialsinhealth.org', 'no-reply: password reset successfully');
					$m->to($sag['mail'], $sag['mail'])->subject('no-reply: password reset successfully');
				 });
				 
				 //Email to Admin
			
			
		
		return back()->with("msg_interest2","Account created successfully... you can login now");
		
		
		}
		
		
		public function edit_profile(Request $request){ 
			//pr(Input::all(),true);
			$s = User::where("email",Input::get('email'))->first();
			if(Input::get('password')!= Input::get('cpassword')){
			return back()->with("mismatch","mismatchpassword");
			}
			if(empty(Input::get('keywords')) &&  empty(Input::get('other'))){
			return back()->with("miskey","misskey")->withInput();
			}
			$upl ="";
			$newurl = public_path() . DS . 'uploads';
			
			if(!empty($request->file('pic')) && !empty(Input::get("profile_pic"))){
				$fil  = $request->file('pic');
				//pr($fil,true);
				$ext = $fil->getClientOriginalExtension();
				
				
				if($ext == "jpeg" || $ext == "jpg" || $ext == "PNG" || $ext == "JPG" || $ext == "JPEG" || $ext == "png"){
				$i = $fil->getClientOriginalName();
				$fileName = $i;								
				$fileFalseName = date('Ymhis').preg_replace("/[^A-Za-z0-9]/", "", $fil->getClientOriginalName()).'.'.$ext;					
				$newurl = public_path() . DS . 'uploads';
				$upl = $fil->move($newurl, $fileFalseName);
				
				$fil2 = Image::make($newurl.DS. $fileFalseName)->resize((200, 400))->save();
				
				}else{
				return back()->with("uplerror","invalid format");
				}
				
				}
			
			if($upl){
				
				
				
					$s->first_name = Input::get('first_name');
					$s->middle_name = Input::get('middle_name');
					$s->last_name = Input::get('last_name');
					$s->email = Input::get('email');
					$s->institution = Input::get('institution');
					$s->sector = Input::get('sector');
					$s->designation = Input::get('designation');
					$s->current_interest = Input::get('current_interest');
					$s->previous_interest = Input::get('previous_interest');
					$s->bio = Input::get('bio');
					$s->linkedin = Input::get('linkedin');
					$s->twitter = Input::get('twitter');
					$s->webpage = Input::get('webpage');
					$s->status = 0;
					if(!empty(Input::get('keywords'))){
					$s->keywords = serialize(Input::get('keywords'));
					}else{
					$s->keywords = serialize(array());
					}
					$s->picture = $fileFalseName;
					if(!empty(Input::get('other'))){
					$s->other_keyword = Input::get('otherfield');
					}
					else{
					$s->other_keyword = "";
					}
					
					$k_text = "";
					if(!empty(Input::get("keywords"))){
					$kkw = $request->input('keywords', []);
					//pr($kkw,true);
					$mids =  $kkw;
					//pr($kkw,true);
					$kw = Keywords::whereIn("id",$mids)->get();
						
					foreach ($kw as $k){
					$k_text = $k_text." ".$k->name;
					}
					}
					$s->keywords_text = $k_text;
					
					
					if(Input::get("news_email")==""){
					$s->public_email = "off";
					}
					else{$s->public_email = "on";}
					
					if(Input::get("news_email")==""){
					$s->public_email = "off";
					}
					else{$s->public_email = "on";}
					
					if(Input::get("matching_email")==""){
					$s->matching_email = "off";
					}
					else{$s->matching_email = "on";}
				$s->save();
				
			}else{
			$s = User::where("email",Input::get('email'))->first();
				
					$s->first_name = Input::get('first_name');
					$s->middle_name = Input::get('middle_name');
					$s->last_name = Input::get('last_name');
					$s->email = Input::get('email');
					$s->sector = Input::get('sector');
					$s->institution = Input::get('institution');
					$s->designation = Input::get('designation');
					$s->current_interest = Input::get('current_interest');
					$s->previous_interest = Input::get('previous_interest');
					$s->bio = Input::get('bio');
					$s->linkedin = Input::get('linkedin');
					$s->twitter = Input::get('twitter');
					$s->webpage = Input::get('webpage');
					$s->status = 0;
					if(!empty(Input::get('keywords'))){
					$s->keywords = serialize(Input::get('keywords'));
					}else{
					$s->keywords = serialize(array());
					}
					if(!empty(Input::get('other'))){
					$s->other_keyword = Input::get('otherfield');
					}else{
					$s->other_keyword = "";
					}
					
					
					$k_text = "";
					if(!empty(Input::get("keywords"))){
					$kkw = $request->input('keywords', []);
					//pr($kkw,true);
					$mids =  $kkw;
					//pr($kkw,true);
					$kw = Keywords::whereIn("id",$mids)->get();
						
					foreach ($kw as $k){
					$k_text = $k_text." ".$k->name;
					}
					}
					$s->keywords_text = $k_text;
					
					
					if(Input::get("news_email")==""){
					$s->public_email = "off";
					}
					else{$s->public_email = "on";}
					
					if(Input::get("matching_email")==""){
					$s->matching_email = "off";
					}
					else{$s->matching_email = "on";}
	
				$s->save();
			
			}
				
				$p = new Partner;
					$p->user_id = $s->id;
				$p->save();
				
				
			//email to a User
			/*	
			 $mes ="";
			 $receiver =  Input::get('email');
			 $name = Input::get('first_name');
			 $sender = "admin@materialsinhealth.org";
			 $pathToFile = "";
			 $sag = array('mail'=>$receiver,'user_id'=>'hhhhh','name'=>$name,'pathTo'=>$pathToFile);				
			 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
			 
			  Mail::send('emails.registration_finished', $data, function ($m) use ($sag) {
					$m->from('admin@materialsinhealth.org', 'no-reply: Registeration Complete');
					$m->to($sag['mail'], $sag['mail'])->subject('no-reply: Interest Form Received');
				 });
				 
				 //Email to Admin
			
			*/
			
			 return redirect()->intended('/profileupdated');
		
		//return back()->with("msg_interest2","Account created successfully... you can login now");
		
		
		}
		
		
		public function dashboard(){
			//all users fetching record
		
				if(Auth::check()){
	
					$s = User::all();
					$kw = Keywords::where("id",">",0)->get();
			

				return view('admin.users')->with('gra',$s)->with('kk',$kw);
			
						}else{
				return redirect()->intended('/login');
						}
			
			}
			
			public function homeadmin(){
			$r = PublicStories::where("id",">",0)->where("status","approved")->where("category","news")->orderBy("updated_at")->take(3)->get();
			$chh = PublicStories::where("id",">",0)->where("status","approved")->where("category","need")->orderBy("updated_at")->take(3)->get();
			$op = PublicStories::where("id",">",0)->where("status","approved")->where("category","grant")->orderBy("updated_at")->take(3)->get();
			$ev = PublicStories::where("id",">",0)->where("status","approved")->where("category","event")->orderBy("updated_at")->take(3)->get();
			return view('admin.home')->with("r",$r)->with("ch",$chh)->with("ev",$ev)->with("op",$op);
			}
			
			public function showNewsForm(){
			///clinical needs forms
		
				if(Auth::check()){
	
				return view('admin.news_form');
			
						}else{
				return redirect()->intended('/login');
						}
			
			}
			
			
			public function showEditNewsForm($id){
			///clinical needs forms
				$nn = PublicStories::where("id",$id)->first();
				if(Auth::check()){
	
				return view('admin.edit_news_form')->with("n",$nn);
			
						}else{
				return redirect()->intended('/login');
						}
			
			}
			
			
			public function showClinicalForm(){
			///clinical needs forms
		
				if(Auth::check()){
				$keywords = Keywords::all();
				return view('admin.clinical_needs')->with("kw",$keywords);
			
						}else{
				return redirect()->intended('/login');
						}
			
			}
			
			public function showClinicalFormSubmitted(){
			///clinical needs forms
		
				if(Auth::check()){
				$keywords = Keywords::all();
				return view('admin.clinical_needs')->with("kw",$keywords)->with("needsubmitted","Submitted");
			
						}else{
				return redirect()->intended('/login');
						}
			
			}
			
			public function showClinicalFormEdited(){
			///clinical needs forms
		
				if(Auth::check()){
				$keywords = Keywords::all();
				return view('admin.clinical_needs_edited')->with("kw",$keywords)->with("neededited","Edited");
			
						}else{
				return redirect()->intended('/login');
						}
			
			}
			
			public function showEditNeedForm($id){
			///clinical edit needs forms
				$pp = PublicStories::where("id",$id)->first();
				if(Auth::check()){
				$keywords = Keywords::all();
				return view('admin.clinical_needs_edit')->with("kw",$keywords)->with("p",$pp);
			
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
			
			
			public function showNeedList(){
					// function for showing partners list
				if(Auth::check()){
				$need = PublicStories::where("category",'need')->get();
				return view('admin.needs_list')->with("gra",$need);
			
						}else{
				return redirect()->intended('/login');
						}
			
			}
			
			public function showPublicList(){
					// function for showing partners list
				if(Auth::check()){
				$need = PublicStories::where("category",'!=','need')->get();
				return view('admin.PublicStories_list')->with("gra",$need);
			
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
			//$cat = Category::where('role','general')->get();
			//pr(Auth::user()->id,true);
			$r = PublicStories::where("id",">",0)->orderBy("updated_at")->where("status","approved")->take(5)->get();
			return view('admin.cookie')->with('r',$r);
			}
			
			public function datapolicy(){
			//showing data policy page
			//$cat = Category::where('role','general')->get();
			//pr(Auth::user()->id,true);
			$r = PublicStories::where("id",">",0)->orderBy("updated_at")->where("status","approved")->take(5)->get();
			return view('admin.datapolicy');//->with('cat',$cat);
			}
			
			public function termsandcondition(){
				//showing terms and condition page
				//$cat = Category::where('role','general')->get();
				//pr(Auth::user()->id,true);
				$r = PublicStories::where("id",">",0)->orderBy("updated_at")->where("status","approved")->take(5)->get();
				return view('admin.termsandcondition');//->with('cat',$cat);
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
			// $mes =  "Your are invited to join a network on https://www.uclmmhn.com";
			 //$receiver =  Input::get('sharemail');
			 $receiver =  $u->email;
			 $name = $u->first_name." ".$u->last_name;
			 $url =  $this->url_email."".$u->id;
			 $sender = "admin@materialsinhealth.org";
			 $mes = $this->url_email."/invitepartner/".$code."/".$u->id;
			 $pathToFile ="";
			 $sag = array('mail'=>$receiver,'user_id'=>'hhhhh','name'=>$name,'pathTo'=>$pathToFile);				
			 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
			 
			  Mail::send('emails.a', $data, function ($m) use ($sag) {
					$m->from('admin@materialsinhealth.org', 'Invitation from MMHN System');
					$m->to($sag['mail'], $sag['mail'])->subject('Invitation from Materials and Manufacturing in Healthcare Network System');
				 });
				 
				return back()->with('msg','');
				 
			}
			
	public function showCreatePartner(){
	//displaying invitation form
	
		$keywords = Keywords::all();
	
	return view('admin.adminpartnerform')->with("kw",$keywords);
	}
			
	public function showCompleteAdminInvite($code){
		//displaying invitation form
		$u = User::where("iv_code",$code)->first();
		$uid = $u->id;	
		$keywords = Keywords::all();
		if($u->iv_code!= $code){
		echo "Invalid link, please contact admin"; exit;
		}
		
	return view('admin.admincomplete')->with("id",$uid)->with("kw",$keywords)->with("cd",$code);
	}
			
	public function showInvitationForm($code,$id){
	//displaying invitation form
	$u = User::where("id",$id)->first();
	$keywords = Keywords::all();
	if($u->iv_code!= $code){
	echo "Invalid link, please contact admin"; exit;
	}
	
	return view('admin.register2')->with("u",$u)->with("kw",$keywords);
	}
	
	public function showEditProfile($id){
	//displaying edit form
	if(Auth::check()){
		$u = User::where("id",$id)->first();
		$keywords = Keywords::all();		
	return view('admin.editprofile')->with("u",$u)->with("kw",$keywords);
	
	}else{
				return redirect()->intended('/login');
						}
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
			$r = PublicStories::where("id",">",0)->where("status","approved")->where("category","news")->orderBy("updated_at")->take(3)->get();
			$chh = PublicStories::where("id",">",0)->where("status","approved")->where("category","need")->orderBy("updated_at")->take(3)->get();
			$op = PublicStories::where("id",">",0)->where("status","approved")->where("category","grant")->orderBy("updated_at")->take(3)->get();
			$ev = PublicStories::where("id",">",0)->where("status","approved")->where("category","event")->orderBy("updated_at")->take(3)->get();
			return view('admin.about')->with("r",$r)->with("ch",$chh)->with("ev",$ev)->with("op",$op);
			
			}
			public function faq(){
	//show about us
			$r = PublicStories::where("id",">",0)->orderBy("updated_at")->where("status","approved")->take(5)->get();
			return view('admin.faq')->with("r",$r);
			
			}
			
			public function contactus(){
			$cat = "news";
			//ontact us
			$r = PublicStories::where("id",">",0)->where("status","approved")->where("category","news")->orderBy("updated_at")->take(3)->get();
			$chh = PublicStories::where("id",">",0)->where("status","approved")->where("category","need")->orderBy("updated_at")->take(3)->get();
			$op = PublicStories::where("id",">",0)->where("status","approved")->where("category","grant")->orderBy("updated_at")->take(3)->get();
			$ev = PublicStories::where("id",">",0)->where("status","approved")->where("category","event")->orderBy("updated_at")->take(3)->get();
			return view('admin.contactus')->with("r",$r)->with("cat",$cat);
			
			}
			
			public function showPartners(){
			//ontact us
			$c = User::where("status", "0")->count();
			$ss = User::where('id','>',0)->orderBy("first_name")->where("status", "0")->simplePaginate(10);
			$r = PublicStories::where("id",">",0)->where("category","!=","need")->where("status","approved")->orderBy("updated_at")->take(5)->get();
			$kkk = Keywords::where("id",">",0)->get();
			return view('admin.partnerslist')->with("c",$c)->with("ss",$ss)->with("r",$r)->with("kk",$kkk);
			
			}
			
			public function showPartnersAcademic(){
			//ontact us
			$c = User::where("status", "0")->where("sector","academic")->count();
			$ss = User::where('id','>',0)->where("status", "0")->where("sector","academic")->orderBy("first_name")->simplePaginate(15);
			$r = PublicStories::where("id",">",0)->where("category","!=","need")->where("status","approved")->orderBy("updated_at")->take(5)->get();
			$kkk = Keywords::where("id",">",0)->get();
			return view('admin.partnerslist')->with("c",$c)->with("ss",$ss)->with("r",$r)->with("kk",$kkk);
			
			}
			
			public function showPartnersIndustry(){
			//ontact us
			$c = User::where("status", "0")->where("sector","industry")->count();
			$ss = User::where('id','>',0)->where("status", "0")->where("sector","industry")->orderBy("first_name")->simplePaginate(15);
			$r = PublicStories::where("id",">",0)->where("category","!=","need")->where("status","approved")->orderBy("updated_at")->take(5)->get();
			$kkk = Keywords::where("id",">",0)->get();
			return view('admin.partnerslist')->with("c",$c)->with("ss",$ss)->with("r",$r)->with("kk",$kkk);
			
			}
			
			public function showPartnersClinical(){
			//ontact us
			$c = User::where("status", "0")->where("sector","clinical")->count();
			$ss = User::where('id','>',0)->where("status", "0")->where("sector","clinical")->orderBy("first_name")->simplePaginate(15);
			$r = PublicStories::where("id",">",0)->where("category","!=","need")->where("status","approved")->orderBy("updated_at")->take(5)->get();
			$kkk = Keywords::where("id",">",0)->get();
			return view('admin.partnerslist')->with("c",$c)->with("ss",$ss)->with("r",$r)->with("kk",$kkk);
			
			}
			
			public function showPartnersOther(){
			//ontact us
			$c = User::where("status", "0")->where("sector","Other")->count();
			$ss = User::where('id','>',0)->where("status", "0")->where("sector","Other")->orderBy("first_name")->simplePaginate(15);
			$r = PublicStories::where("id",">",0)->where("category","!=","need")->where("status","approved")->orderBy("updated_at")->take(5)->get();
			$kkk = Keywords::where("id",">",0)->get();
			return view('admin.partnerslist')->with("c",$c)->with("ss",$ss)->with("r",$r)->with("kk",$kkk);
			
			}
			
			
			public function showPost($id){
			$p = PublicStories::where("id",$id)->first();
			$cct = $p->category;
			$r = PublicStories::where("id",">",0)->where("status","approved")->where("category",$cct)->orderBy("updated_at")->take(5)->get();
			$cat = $p->category;
			return view('admin.post')->with("p",$p)->with("r",$r)->with("cat",$cat);
			
			}
			
			public function showNeedDetail($id){
			
			if(Auth::check()){
			
			$p = PublicStories::where("id",$id)->first();
			$com = Comment::where("public_stories_id",$id)->get();
			$comct = Comment::where("public_stories_id",$id)->count();
			$re = Replies::where("public_stories_id",$id)->get();
			$rect = Replies::where("public_stories_id",$id)->count();
			$us = User::where("id", ">",0)->get();
			$r = PublicStories::where("id",">",0)->where("category","need")->where("status","approved")->orderBy("updated_at")->take(5)->get();
			return view('admin.needdetail')->with("p",$p)->with("r",$r)->with("us",$us)->with("cm",$com)->with("re",$re)->with("comct",$comct)->with("rect",$rect);
			
			}else{
				return redirect()->intended('/login');
			}
			
			}
			
			public function likeComment($id,$uid){
			//pr($uid,true);
			$c = Comment::where("id",$id)->first();
			
				if(empty($c->likes)){
				$ak = array();
				array_push($ak,$uid);
				$c->likes = serialize($ak);
				$c->save();
				return back()->with("like","");
				}
				else{
					$lks =unserialize($c->likes);
					//pr($lks,true);
					if(in_array($uid,$lks)){
						return back()->with("liked","");
					}else{
					$alks =unserialize($c->likes);
					array_push($alks,$uid);
					$c->likes = serialize($alks);
					$c->save();
					return back()->with("like","");
					
					}
				
				}
			
			}
			
			public function dislikeComment($id,$uid){
			
			$c = Comment::where("id",$id)->first();
				if($c->dislikes==""){
				$ak = array();
				array_push($ak,$uid);
				$c->dislikes = serialize($ak);
				$c->save();
				return back()->with("dislike","");
				}
				else{
					if(in_array($uid,unserialize($c->dislikes))){
						return back()->with("disliked","");
					}else{
					array_push(unserialize($c->dislikes),$uid);
					$c->dislikes = serialize($c->dislikes);
					$c->save();
					return back()->with("dislike","");
					
					}
				
				}
			
			}
			
			public function likeReply($id,$uid){
			
			$c = Replies::where("id",$id)->first();
				if(empty($c->likes)){
				$ak = array();
				array_push($ak,$uid);
				$c->likes = serialize($ak);
				$c->save();
				return back()->with("like","");
				}
				else{
					$lks =unserialize($c->likes);
					//pr($lks,true);
					if(in_array($uid,$lks)){
						return back()->with("liked","");
					}else{
					$alks =unserialize($c->likes);
					array_push($alks,$uid);
					$c->likes = serialize($alks);
					$c->save();
					return back()->with("like","");
					
					}
				
				}
			
			}
			
			public function dislikeReply($id,$uid){
			
			$c = Replies::where("id",$id)->first();
				if($c->dislikes==""){
				$ak = array();
				array_push($ak,$uid);
				$c->dislikes = serialize($ak);
				$c->save();
				return back()->with("dislike","");
				}
				else{
					if(in_array($uid,unserialize($c->dislikes))){
						return back()->with("disliked","");
					}else{
					array_push(unserialize($c->dislikes),$uid);
					$c->dislikes = serialize($c->dislikes);
					$c->save();
					return back()->with("dislike","");
					
					}
				
				}
			
			}
			
			public function likeNeed($id,$uid){
			
			$c = PublicStories::where("id",$id)->first();
				if(empty($c->likes)){
				$ak = array();
				array_push($ak,$uid);
				$c->likes = serialize($ak);
				$c->save();
				return back()->with("like","");
				}
				else{
					$lks =unserialize($c->likes);
					//pr($lks,true);
					if(in_array($uid,$lks)){
						return back()->with("liked","");
					}else{
					$alks =unserialize($c->likes);
					array_push($alks,$uid);
					$c->likes = serialize($alks);
					$c->save();
					return back()->with("like","");
					
					}
				
				}
			
			}
			
			public function dislikeNeed($id,$uid){
			
			$c = PublicStories::where("id",$id)->first();
				if($c->dislikes==""){
				$ak = array();
				array_push($ak,$uid);
				$c->dislikes = serialize($ak);
				$c->save();
				return back()->with("dislike","");
				}
				else{
					if(in_array($uid,unserialize($c->dislikes))){
						return back()->with("disliked","");
					}else{
					array_push(unserialize($c->dislikes),$uid);
					$c->dislikes = serialize($c->dislikes);
					$c->save();
					return back()->with("dislike","");
					
					}
				
				}
			
			}
			
			public function showNeedDetailApprove($id){
			$p = PublicStories::where("id",$id)->first();
			$r = PublicStories::where("id",">",0)->where("category","need")->orderBy("updated_at")->take(5)->get();
			$u = User::where("id",">",0)->get();
			return view('admin.needdetailapprove')->with("p",$p)->with("r",$r)->with("us",$u);
			
			}
			
			public function showPublicDetailApprove($id){
			$p = PublicStories::where("id",$id)->first();
			$r = PublicStories::where("id",">",0)->where("category",'!=',"need")->where("status","approved")->orderBy("updated_at")->take(5)->get();
			return view('admin.publicdetailapprove')->with("p",$p)->with("r",$r);
			
			}
			
				public function approveNeed($id){
				
					$p = PublicStories::where("id",$id)->first();
					  $p->status="approved";
					  $p->approved_by =Auth::user()->first_name." ID: ".Auth::user()->id;
					 $p->save();
					 
					 
			$u = User::where("id",$p->posted_by)->first();	
			//email for partners
			
			
			
				
				
			if(!empty($p->partners) or $p->partners !="N"){	
			 
			 $mes = $p->title;
			 $receiver =  $u->email;
			 $name = $u->first_name;
			 $sender = "admin@materialsinhealth.org";
			 
			 
			 if($p->category == "need"){
			 
			 if(empty($p->partners)){
			 $partners = array();
			 
			 }else{
			  $partners = unserialize($p->partners);
			 }
			
						
			$pt = User::where("matching_email","on")->whereIn("id",$partners)->get();
			
			
			
				
				
			 $sub = 'no-reply: Challenge Approval'.' '.$p->title;
			 $pathToFile =  $pathToFile = $this->url_email."review/".$p->id;
			 $sag = array('mail'=>$receiver,'sub'=>$sub,'user_id'=>'hhhhh','name'=>$name,'pathTo'=>$pathToFile);				
			 $data = array('name'=>$name,'sub'=>$sub,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
			 
			
				 Mail::send('emails.approveneed', $data, function ($m) use ($sag) {
								$m->from('admin@materialsinhealth.org',$sag['sub'] );
								$m->to($sag['mail'], $sag['mail'])->subject($sag['sub']);
							 });
							 
							 return redirect()->intended('/challengesubmittedapproved');
							 
		}
		else{
		$pathToFile =  $pathToFile = $this->url_email."public_review/".$id;
		$sub = "no-reply: Innovation Story Approval"." ".$p->title;
			 $sag = array('mail'=>$receiver,'user_id'=>'hhhhh','sub'=>$sub,'name'=>$name,'pathTo'=>$pathToFile);				
			 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
		
		 Mail::send('emails.approveinnovationstory', $data, function ($m) use ($sag) {
								$m->from('admin@materialsinhealth.org', $sag['sub']);
								$m->to($sag['mail'], $sag['mail'])->subject($sag['sub']);
							 });
							 
							 return redirect()->intended('/newssubmittedapproved');
		
		}
			}
			
			
			
			}
			
			public function rejectNeed(){
			$id = Input::get("pid");
					$p = PublicStories::where("id",$id)->first();
					  $p->status="rejected";
					  $p->approved_by =Auth::user()->first_name." ID: ".Auth::user()->id;
					 $p->save();
			
			$u = User::where("id",$p->posted_by)->first();			 
			if(!empty($u)){			 
				 
			 $mes = Input::get("message");
			 $receiver =  $u->email;
			 $name = $u->first_name;
			 $sender = "admin@materialsinhealth.org";
			 
			 
			  if($p->category == "need"){
			  $pathToFile =  $pathToFile = $this->url_email."clinical_detail/".$p->id;
			  $sub = "no-reply: Challenge Rejection:"." ".$p->title;
			  $sag = array('mail'=>$receiver,'user_id'=>'hhhhh','sub'=>$sub,'name'=>$name,'pathTo'=>$pathToFile);				
			 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
				  Mail::send('emails.rejectneed', $data, function ($m) use ($sag) {
								$m->from('admin@materialsinhealth.org', $sag['sub']);
								$m->to($sag['mail'], $sag['mail'])->subject($sag['sub']);
							 });
							 
							 return redirect()->intended('/challengesubmittedapproved');
			}				 
			else{
			$pathToFile =  $pathToFile = $this->url_email."public_post/".$p->id;
			 $sub = "no-reply: Innovation Story Rejection"." ".$p->title;
			 $sag = array('mail'=>$receiver,'user_id'=>'hhhhh','sub'=>$sub,'name'=>$name,'pathTo'=>$pathToFile);				
			 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
			 Mail::send('emails.rejectinnovationstory', $data, function ($m) use ($sag) {
								$m->from('admin@materialsinhealth.org', $sag['sub']);
								$m->to($sag['mail'], $sag['mail'])->subject($sag['sub']);
							 });
							 
							 return redirect()->intended('/newssubmittedapproved');
			
			}
			}
			
			
			}
			
			
			public function reviseNeed(){
			$id = Input::get("pid");
					$p = PublicStories::where("id",$id)->first();
					  $p->status="revision";
					  $p->approved_by =Auth::user()->first_name." ID: ".Auth::user()->id;
					 $p->save();
					 
			$u = User::where("id",$p->posted_by)->first();
			if(!empty($u)){			 
					 
			 $mes = Input::get("message");
			 $receiver =  $u->email;
			 $name = $u->first_name;
			 $sender = "admin@materialsinhealth.org";
			
			  if($p->category == "need"){
			   $sub = "Challenge Revision Request"." ".$p->title;
			  $pathToFile =  $pathToFile = $this->url_email."clinical_detail/".$p->id;
			 $sag = array('mail'=>$receiver,'user_id'=>'hhhhh','sub'=>$sub,'name'=>$name,'pathTo'=>$pathToFile);				
			 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
			 
			  
				  Mail::send('emails.revisionneed', $data, function ($m) use ($sag) {
								$m->from('admin@materialsinhealth.org', $sag['sub']);
								$m->to($sag['mail'], $sag['mail'])->subject($sag['sub']);
							 });
							 
							 return redirect()->intended('/challengesubmittedapproved');
							 
			}else{
			 $sub = "Innovation Story Revision Request"." ".$p->title;
			$pathToFile =  $pathToFile = $this->url_email."public_post/".$p->id;
			 $sag = array('mail'=>$receiver,'user_id'=>'hhhhh','sub'=>$sub,'name'=>$name,'pathTo'=>$pathToFile);				
			 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
			
			 Mail::send('emails.revisioninnovationstory', $data, function ($m) use ($sag) {
								$m->from('admin@materialsinhealth.org', $sag['sub']);
								$m->to($sag['mail'], $sag['mail'])->subject($sag['sub']);
							 });
							 
							 return redirect()->intended('/newssubmittedapproved');
			
			}
			}
			
			
			}
			
			
			public function rejectUser(){
			$id = Input::get("pid");
					$p = User::where("id",$id)->first();
					  $p->status="rejected";
					  $p->invited_by =Auth::user()->first_name." ID: ".Auth::user()->id;
					 $p->save();
					 
					 
					 
			 $mes = Input::get("message");
			 $receiver =  $p->email;
			 $name = $p->first_name;
			 $sender = "admin@materialsinhealth.org";
			 $pathToFile = $p->title;
			 $sag = array('mail'=>$receiver,'user_id'=>'hhhhh','name'=>$name,'pathTo'=>$pathToFile);				
			 $data = array('name'=>$name,'pathTo'=>$pathToFile, 'email'=>$receiver, 'm'=>$mes, 'user'=>'sagir','user_name'=>$sender);
			 
			  Mail::send('emails.rejectuser', $data, function ($m) use ($sag) {
					$m->from('admin@materialsinhealth.org', 'Interest Rejection');
					$m->to($sag['mail'], $sag['mail'])->subject('no-reply: Interest Form Received');
				 });
			return back()->with("reject",'reject');
			
			}
			
			public function search(Request $request){
			$keyword = Input::get('keyword');
			$cat = Input::get('cat');
			//pr(Input::all(),true);
			if($cat =="news"){
			$a = PublicStories::where('category', "news")->where('status', "approved")->where(function($query){
			$keyword = Input::get('keyword');
			$query->orWhere('title', 'LIKE', '%'.$keyword.'%')->orWhere('news_body', 'LIKE', '%'.$keyword.'%')->orWhere('summary', 'LIKE', '%'.$keyword.'%')->orWhere('posted_by_name', 'LIKE', '%'.$keyword.'%')->orWhere('keywords_text', 'LIKE', '%'.$keyword.'%');
			
			})->paginate(10)->appends($request->all());		
			//pr($a,true);
			
			$r = PublicStories::where("id",">",0)->where("category","news")->where("status","approved")->orderBy("updated_at")->take(3)->get();
			
			return view('admin.PublicStories_search')->with("pp",$a)->with("r",$r)->with("cat",$cat);
			
			}
			
			else if($cat =="event"){
			$a = PublicStories::where('category', "event")->where('status', "approved")->where(function($query){
			$keyword = Input::get('keyword');
			$query->orWhere('title', 'LIKE', '%'.$keyword.'%')->orWhere('news_body', 'LIKE', '%'.$keyword.'%')->orWhere('summary', 'LIKE', '%'.$keyword.'%')->orWhere('posted_by_name', 'LIKE', '%'.$keyword.'%')->orWhere('keywords_text', 'LIKE', '%'.$keyword.'%');
			
			})->paginate(10)->appends($request->all());
			
			$r = PublicStories::where("id",">",0)->where("category","event")->where("status","approved")->orderBy("updated_at")->take(3)->get();
			
			return view('admin.PublicStories_search')->with("pp",$a)->with("r",$r)->with("cat",$cat);
			
			}
			
			else if($cat =="sto"){
			$a = PublicStories::where("id",Auth::user()->id)->orWhere('category', "event")->orWhere('category', "news")->orWhere('category', "grant")->where('status', "approved")->where(function($query){
			$keyword = Input::get('keyword');
			$query->orWhere('title', 'LIKE', '%'.$keyword.'%')->orWhere('news_body', 'LIKE', '%'.$keyword.'%')->orWhere('summary', 'LIKE', '%'.$keyword.'%')->orWhere('posted_by_name', 'LIKE', '%'.$keyword.'%')->orWhere('keywords_text', 'LIKE', '%'.$keyword.'%');
			
			})->paginate(10)->appends($request->all());
			
			$r = PublicStories::where("id",">",0)->where("category","event")->where("status","approved")->orderBy("updated_at")->take(3)->get();
			
			return view('admin.PublicStories_search')->with("pp",$a)->with("r",$r)->with("cat",$cat);
			
			}
			else if($cat =="grant"){
			$a = PublicStories::where('category', "grant")->where('status', "approved")->where(function($query){
			$keyword = Input::get('keyword');
			$query->orWhere('title', 'LIKE', '%'.$keyword.'%')->orWhere('news_body', 'LIKE', '%'.$keyword.'%')->orWhere('summary', 'LIKE', '%'.$keyword.'%')->orWhere('posted_by_name', 'LIKE', '%'.$keyword.'%')->orWhere('keywords_text', 'LIKE', '%'.$keyword.'%');
			
			})->paginate(10)->appends($request->all());		
			
			
			$r = PublicStories::where("id",">",0)->where("category","grant")->where("status","approved")->orderBy("updated_at")->take(3)->get();
			
			return view('admin.PublicStories_search')->with("pp",$a)->with("r",$r)->with("cat",$cat);
			
			}
			else if($cat =="partner"){
			$kkk = Keywords::all();
			
			
			if(preg_match('/^\S.*\S$/', $keyword)){
			
			$keyword = Input::get('keyword');

			$keyword = explode(" ", $keyword);
			
			
			$c = User::where("status",0)->where(function($query){
			$keyword = Input::get('keyword');

			$keyword = explode(" ", $keyword);
			$query->orWhereIn("first_name",$keyword)->orWhereIn("middle_name",$keyword)->orWhereIn("last_name",$keyword)->orWhereIn('bio', $keyword)->orWhereIn('sector', $keyword)->orWhereIn('designation',  $keyword)->orWhereIn('institution',  $keyword)->orWhereIn('keywords_text',  $keyword)->orWhereIn('other_keyword',  $keyword);
			
			})->count();
			
			$s = User::where("status",0)->where(function($query){
			$keyword = Input::get('keyword');

			$keyword = explode(" ", $keyword);
			$query->orWhereIn("first_name",$keyword)->orWhereIn("middle_name",$keyword)->orWhereIn("last_name",$keyword)->orWhereIn('bio', $keyword)->orWhereIn('sector', $keyword)->orWhereIn('designation',  $keyword)->orWhereIn('institution',  $keyword)->orWhereIn('keywords_text',  $keyword)->orWhereIn('other_keyword',  $keyword);
			
			})->paginate(10)->appends($request->all());		
			
			
	
		
		}else{
		
			
			
			
		$s = User::where("status",0)->orWhere("first_name",'LIKE', '%'.$keyword.'%')->orWhere("middle_name",'LIKE', '%'.$keyword.'%')->orWhere("last_name",'LIKE', '%'.$keyword.'%')->orWhere('bio','LIKE', '%'.$keyword.'%')->orWhere('sector', 'LIKE', '%'.$keyword.'%')->orWhere('designation', 'LIKE', '%'.$keyword.'%')->orWhere('institution', 'LIKE', '%'.$keyword.'%')->orWhere('keywords_text', 'LIKE', '%'.$keyword.'%')->orWhere('other_keyword', 'LIKE', '%'.$keyword.'%')->paginate(10)->appends($request->all());
		
		
		
		$c = User::where("status",0)->where(function($query){
			$keyword = Input::get('keyword');
			$query->orWhere("first_name",'LIKE', '%'.$keyword.'%')->orWhere("middle_name",'LIKE', '%'.$keyword.'%')->orWhere("last_name",'LIKE', '%'.$keyword.'%')->orWhere('bio','LIKE', '%'.$keyword.'%')->orWhere('sector', 'LIKE', '%'.$keyword.'%')->orWhere('designation', 'LIKE', '%'.$keyword.'%')->orWhere('institution', 'LIKE', '%'.$keyword.'%')->orWhere('keywords_text', 'LIKE', '%'.$keyword.'%')->orWhere('other_keyword', 'LIKE', '%'.$keyword.'%');
			
			})->count();		
		
		
		
		}
		
			
			
			
			if(empty($s)){
			$c =0;
			}
			//pr($keyword,true);
			$r = PublicStories::where("id",">",0)->where("status","approved")->orderBy("updated_at")->take(5)->get();
			return view('admin.partnerslist')->with("ss",$s)->with("r",$r)->with("c",$c)->with("kk",$kkk);
			}
			
			
			else if($cat =="need"){
			$a = PublicStories::where('category', "need")->where('status', "approved")->where(function($query){
			$keyword = Input::get('keyword');
			$query->orWhere('title', 'LIKE', '%'.$keyword.'%')->orWhere('news_body', 'LIKE', '%'.$keyword.'%')->orWhere('summary', 'LIKE', '%'.$keyword.'%')->orWhere('posted_by_name', 'LIKE', '%'.$keyword.'%')->orWhere('keywords_text', 'LIKE', '%'.$keyword.'%');
			
			})->paginate(10)->appends($request->all());			
			
			
			$r = PublicStories::where("id",">",0)->where("category","need")->where("status","approved")->orderBy("updated_at")->take(3)->get();
			
			return view('admin.needs_search')->with("pp",$a)->with("r",$r);
			}
			
			
			
			
			
			}
			
			public function showNeed(){
			if(Auth::check()){
			$p = PublicStories::where("id", ">","0")->where("category","need")->where("status","approved")->orderBy("updated_at","DESC")->simplePaginate(4);
			$r = PublicStories::where("id",">",0)->where("category","need")->where("status","approved")->orderBy("updated_at")->take(5)->get();
			return view('admin.needs')->with("pp",$p)->with("r",$r);
			
			}else{
				return redirect()->intended('/login');
						}
			
			}
			
			public function showNeedEditable($id){
			//echo $id; exit;
			$p = PublicStories::where("id", ">","0")->where("category","need")->where("posted_by",$id)->orderBy("updated_at","DESC")->simplePaginate(4);
			$r = PublicStories::where("id",">",0)->where("category","need")->where("status","approved")->orderBy("updated_at")->take(5)->get();
			return view('admin.myneeds')->with("pp",$p)->with("r",$r);
			
			}
			
	public function news(){
			//ontact us
			$p = PublicStories::where("category", "news")->where("status","approved")->orderBy("updated_at","DESC")->simplePaginate(4);
			$r = PublicStories::where("id",">",0)->where("category", "news")->where("status","approved")->orderBy("updated_at")->take(5)->get();
			$cat = "news";
			return view('admin.PublicStories_news')->with("pp",$p)->with("r",$r)->with("cat",$cat);
			
			}
			
			public function myStories(){
		
		$p = PublicStories::where("posted_by",Auth::user()->id)->where(function($query){
			$query->orWhere("category", "news")->orWhere("category", "event")->orWhere("category", "grant");
			})->simplePaginate(10);		
			
			$cat ="sto";
			
			
			$r = PublicStories::where("id",">",0)->where("status","approved")->orWhere("category","news")->orWhere("category","event")->orWhere("category","grant")->orderBy("updated_at")->take(5)->get();
			return view('admin.MyPublicStories')->with("pp",$p)->with("r",$r)->with("cat",$cat);
			
			}
			
			public function showEditPublicStories($id){
			//ontact us
			$p = PublicStories::where("posted_by", $id)->where("status","approved")->orWhere("category","news")->orWhere("category","grant")->orWhere("category","event")->orderBy("updated_at","DESC")->simplePaginate(4);
			$r = PublicStories::where("id",">",0)->where("status","approved")->orderBy("updated_at")->take(5)->get();
			$cat ="news";
			return view('admin.PublicStories')->with("pp",$p)->with("r",$r)->with("cat",$cat);
			
			}
			
	public function event(){
			//ontact us
			$p = PublicStories::where("category", "event")->where("status","approved")->orderBy("updated_at","DESC")->simplePaginate(4);
			$r = PublicStories::where("id",">",0)->where("category", "event")->where("status","approved")->orderBy("updated_at")->take(5)->get();
			$cat = "event";
			return view('admin.PublicStories_event')->with("pp",$p)->with("r",$r)->with("cat",$cat);
			
			}
			
			public function grant(){
			//ontact us
			$p = PublicStories::where("category", "grant")->where("status","approved")->orderBy("updated_at","DESC")->simplePaginate(4);
			$r = PublicStories::where("id",">",0)->where("category", "grant")->where("status","approved")->orderBy("updated_at")->take(5)->get();
			$cat = "grant";
			return view('admin.PublicStories_grant')->with("pp",$p)->with("r",$r)->with("cat",$cat);
			
			}
			
			public function opportunity(){
			//ontact us
			$p = PublicStories::where("category", "opportunity")->where("status","approved")->orderBy("updated_at","DESC")->simplePaginate(4);
			$r = PublicStories::where("id",">",0)->where("status","approved")->orderBy("updated_at")->take(5)->get();
			return view('admin.PublicStories')->with("pp",$p)->with("r",$r);
			
			}
			
			public function showKeywordForm(){
			
			return view("admin.keywordform");
			}
			public function showKeywordsList(){
			$kk = Keywords::all();
			 return view("admin.keywordslist")->with("k",$kk);
			}
			
			public function addKeyword(){
			
			$ct =Keywords::where("name",Input::get("name"))->count();
			
			if($ct>0){
			return back()->with("exist","exis");
			}else{
			 $k = new Keywords;
			 	$k->name = Input::get("name");
				$k->save();
			return back()->with("msg","saved");
			
			}
			
			}
			
			public function showPartnerDetails($id){
				$k = User::where("id",$id)->first();
				$pk = PublicStories::where("posted_by",$id)->where("status","approved")->get();
				$ctcc = PublicStories::where("posted_by",$id)->where("status","approved")->where("category","need")->count();
				$ctnn = PublicStories::where("posted_by",$id)->where("status","approved")->where("category","news")->count();
				$ctee = PublicStories::where("posted_by",$id)->where("status","approved")->where("category","event")->count();
				$ctgg = PublicStories::where("posted_by",$id)->where("status","approved")->where("category","grant")->count();
				$kk = Keywords::all();
				return view("admin.partnerdetails")->with("s",$k)->with("kk",$kk)->with("pk",$pk)->with("ctc",$ctcc)->with("ctn",$ctnn)->with("cte",$ctee)->with("ctg",$ctgg);
			}
			
			
			public function unMatchPartner($id){
				$k = PublicStories::where("id",$id)->first();
				$pts = unserialize($k->partners);
				//pr($pts);
				$pts = array_diff($pts,array(Auth::user()->id));
			    $k->partners = serialize($pts);
				$k->save();
				//pr($pts,true);
				return back()->with("unmatch","unmatched");
			}
			
			public function deleteKeyword($id){
				$k = Keywords::where("id",$id)->first();
				$k->delete();
				return back()->with("deleted","deleted");
			}
			
			public function editKeyword($id){
				$kk = Keywords::where("id",$id)->first();
				
				return view('admin.editkeywordform')->with("k",$kk);
			}
			
			public function editaddKeyword(){
			
			$k =Keywords::where("id",Input::get("id"))->first();
			 	$k->name = Input::get("name");
				$k->save();
			return back()->with("msg","saved");
			
			
			
			}
			
			public function setCookie(){
			
			$value = "materials_health";
			$value2 = "analytics";
			setcookie("mycookie", $value, time() +31536000, '/');
			setcookie("analytics", $value2, time() +31536000, '/');
			return back();
			
			}
			
			
			public function deleteUser($id){
				return view('admin.deleteuser')->with("uid",$id);
			}
			
			public function deletion(){
			$id = Input::get("uid");
				$k = User::where("id",$id)->first();
				
				if(!empty(Input::get("partner"))){
				$k->delete();
				}
				
				if(!empty(Input::get("challenges"))){
				$cu = PublicStories::where("posted_by",$id)->where("category","need")->get();
				foreach($cu as $c){
				$c->delete();
				}
				}
				
				
				if(!empty(Input::get("news"))){
				$cu = PublicStories::where("posted_by",$id)->where("category","news")->get();
				foreach($cu as $c){
				$c->delete();
				}
				}
				
				if(!empty(Input::get("events"))){
				$cu = PublicStories::where("posted_by",$id)->where("category","event")->get();
				foreach($cu as $c){
				$c->delete();
				}
				}
				
				if(!empty(Input::get("grants"))){
				$cu = PublicStories::where("posted_by",$id)->where("category","grant")->get();
				foreach($cu as $c){
				$c->delete();
				}
				}
				
				if(!empty(Input::get("comments"))){
				$cu = Comment::where("email",$k->id)->get();
				foreach($cu as $c){
				$c->delete();
				}
				}
				
				if(!empty(Input::get("replies"))){
				$cu = Comment::where("replier_email",$k->id)->get();
				foreach($cu as $c){
				$c->delete();
				}
				}	
				
				$s = User::all();
					$kw = Keywords::where("id",">",0)->get();
			

				return view('admin.users')->with('gra',$s)->with('kk',$kw)->with("msg","deleted");			
				
			}
			
			
			
			
}
