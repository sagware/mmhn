<?php
use Illuminate\Support\Str;
//ini_set("memory_limit","110M");



	class CkanException extends Exception{}

	//handle all folder / seperators.... for the entire application...
	define( 'DS', DIRECTORY_SEPARATOR );
 
		
	function pr($ar, $bool=false){
		echo '<pre>';
		print_r($ar);
		echo '</pre>';
		if($bool){
			exit;
		}
	}
	
	
	
	//random string generator
	function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

 //CKAN API
	 $errors = array(
                              '400'  =>   'Bad Request',
                              '403'  =>   'Not Authorized',
                              '404'  =>   'Not Found',
                              '500'  =>   'Internal Server Error',
	);
	
	
	function isJSON($string){
   return is_string($string) && is_array(json_decode($string, true)) && (json_last_error() == JSON_ERROR_NONE) ? true : false;
}

	function getURL($url){
	
	//detecting the error
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$info = curl_getinfo($ch);
	//echo $info['http_code']; exit;
	//if($info['http_code']!=200){
	//return "error while fecthing";
	
	//}else{
	
	try{
	$data = file_get_contents($url);
	} catch (Exception $e) {
  return $e->getMessage();
}
	return $data;
	//}
	
	}
	
	function getServerResponse($url){
	
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$info = curl_getinfo($ch);
	return $info;
	
	
	}
	
	 function transfer($url){

		$ch = curl_init($url);
		

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		$result = curl_exec($ch);
		$info = curl_getinfo($ch);
		curl_close($ch);
		
		if ($info['http_code'] != 200){
			//throw new CkanException($error_codes["$info[http_code]"]);
		}
		if (!$result){
			throw new CkanException("No Result");
		}
		echo "$result";
		return json_decode($result);
	}


	 function search($url, $keyword){
		$results = getURL($url.'api/search/package/?all_fields=1&q=' . urlencode($keyword));
		
		return $results;
	}

	 function getPackage($url,$package){
		$package = getURL($url.'api/rest/package/' . urlencode($package));
		if (isJSON($package)==false){
			return "NA";
		}
		return $package;
	}


	 function getPackageList($url){
	 	$start = microtime(true);
		$start_time = $start/1000000;
		$list = "NA";
		if($start_time<2000 && $list == "NA"){
		//$list =  getURL($url.'api/3/action/package_search');
	 	$list =  getURL($url.'api/action/package_search');
		}elseif ($start_time>2000){
		$list = "NA";
		}
		
	 	if (isJSON($list)==false){
			return "NA";
		}
					
		return $list;
	}

	 function getGroup($url, $group){
		$group = getURL($url.'api/rest/group/' . urlencode($group) );
		
		return $group;
	}

	 function getGroupList($url){
		$groupList = getURL($url.'api/3/action/group');
		
		return $groupList;
	}


function getSynonyms($word){
			$re ="";
			$apikey = "GN4byIWhU7h3jxsN6Wj7"; 
			
			$language = "en_US"; // you can use: en_US, es_ES, de_DE, fr_FR, it_IT
			$endpoint = "http://thesaurus.altervista.org/thesaurus/v1";
			
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "$endpoint?word=".urlencode($word)."&language=$language&key=$apikey&output=json");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$data = curl_exec($ch);
			$info = curl_getinfo($ch);
			curl_close($ch);
			
			if ($info['http_code'] == 200) {
			  $result = json_decode($data, true);
			  //echo "Number of lists: ".count($result["response"])."<br>";
			  foreach ($result["response"] as $value) {
				$re.= $value["list"]["category"]." ".$value["list"]["synonyms"];
			  }
			
			} else $re="";
			
			return $re;
}


	function brkText($v){
		$parts = explode(' ', trim($v));
		$nm = '';
		$ct = 0;
		foreach($parts as $p){
		  $nm .= ucfirst(ucwords($p));
		  if($ct < (count($parts)-1)){
		  	$nm .= ' <br/>';
		  }
		  $ct++;
		}
		return $nm;
	}

	function getC($id){

		$c = CARecord::where('student_id', $id)->first();		
		$ar = unserialize($c->scores);
		count($ar);
		/*exit;
		*/	
		$k=0;
		if(count($ar)<1){

			$k=2;
			return $k;
		}else{
			$k=3;
			return $k;
		}

	}

 	function valScore($v){
		if(!isset($v)){
			return 0;
		}else{
			return intval($v);
		}
	}


	
	
	function getSubjLink($subj){ 
		$txt = '';
		$all = unserialize($subj);	//unserialize the subjects....
		$subjects = Subject::whereIn('id', $all)->get(); 	//pass array in 1 query...
		
		$ct = 1;
		foreach($subjects as $s){
			$txt .= zeroIt($ct) . '. &nbsp;&nbsp;&nbsp;'. ucwords($s->name) . ', <br/>';
			$ct++;
		}
		//return ;
		return '<a href="javascript:;" onclick="shwSubjects(\''. $txt .'\')">'. zeroIt(count($subjects)) .' - Subjects </a>';
		
	}
	
	//preceeding zeros... 
	
	function zeroIt($v){
		if(intval($v) < 10){
			return '0' . $v;
		}else{
			return $v;
		}
	}
	
	//create a function that collects the subject ID... 
	function countSubjectsByUser($id, $sid=false){
		//create an empty array of students.......
		$ar = [];		
		
		if(!$sid){
			//get all students (id,subject) seen by the super admin..... 
			$students = Student::orderBy('id', 'desc')->get(['id','subjects']); //->
		}else{
			//get all students (id,subject) from logged in school... 
			$students = Student::where('profile_id', $sid)->get(['id','subjects']); //->
		}
		
		//loop thru every student and retrieve the students object...... 
		foreach($students as $student){
		
			//convert the subject into an array.... which consists of all subjects ID the student offers... 
			$arr = unserialize($student->subjects); 
			
			//check if the subject ID is amongst the students subjects...
			if (in_array($id, $arr)){
				//if it is amonng... pass it to the array... 
					array_push($ar, $student);
			}
		}
		//return the array t
		return $ar;
		
	}
	
	
	//generate the current link based on the selected option...
	function getActiveLink($lnk){
		$p = (strpos(strval(Request::path()), $lnk) !== false) ? 'active': '';
		return 'class="'.$p.'"';
	}
	
	
	
	function calcExamGrades($ar, $wdt){
	
		$sum = intval($ar['objective']) + intval($ar['essay']) + intval($ar['practical']);
		$total = round($sum / $wdt * 100, 2);		//to 2 decimal places..
		//get grade...
		
		if($total >= 70 && $total <= 100){
			$grade = 'A';
		}else if($total >= 60 && $total <= 69){
			$grade = 'B';
		}else if($total >= 50 && $total <= 59){
			$grade = 'C';
		}else if($total >= 45 && $total <= 49){
			$grade = 'D';
		}else if($total >= 40 && $total <= 44){
			$grade = 'E';
		}else{
			$grade = 'F';
		}
		
		return  array( 'total' => $total, 'grade' => $grade);
		
	}
	
	
	function getSubjectByKey($k){
		return Subject::where('code', trim($k))->first();
	}
	
	
	
	//add leading Zeros....
	function Zeros($id, $ct){
	
		$v = 0;
		
		switch($ct){
		
			case '3':
				if($id < 1000 && $id >= 100){
					$v = strval($id);
				}else if($id < 100 && $id >= 10){
					$v = '0'.strval($id);
				}else if($id < 10){
					$v = '00' . strval($id);
				}else{
					$v = $id;
				}
				break;
			case '4':
				if($id < 1000 && $id >= 100){
					$v = '0'.strval($id);
				}else if($id < 100 && $id >= 10){
					$v = '00'.strval($id);
				}else if($id < 10){
					$v = '000' . strval($id);
				}else{
					$v = $id;
				}
				break;
		}
		
		return $v;
	}
	
	function genStudentsID($id,$schid,$examtype){
		return 'KD' . '/' . strval($examtype) . '/'. Zeros($schid, 3) .'/'. Zeros($id, 4);
	}
	
	
	function getState(){
		return strval(Request::segment(1));
	}
	
