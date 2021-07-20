<?php

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

//populateMetadata
Route::get('/update_records', 'FormController@index');
Route::get('/urls_fetching', 'FormController@loadurls');
Route::get('/metaupload', 'FormController@metaupload');
Route::get('/populatemetadata', 'FormController@populateMetadata');
Route::get('/register/dataset', 'FormController@addDatasetMetaData');
Route::get('/datasets', 'FormController@showDataset');
//Route::post('/', 'WelcomeController@index');
Route::get('/', 'WelcomeController@index'); // comment this line and uncomment the block comment below for maintenance services.
/**
Route::get('/', function(){
echo "Site under maintenance, it will be available as soon as possible.";
});
**/
Route::get('/cookie', 'FormController@cookie');
Route::get('/datapolicy', 'FormController@datapolicy');
Route::get('/termsandcondition', 'FormController@termsandcondition');
Route::get('/category/{id}', 'FormController@showCategory');
Route::post('/add/need', 'FormController@addNeed');
Route::post('/edit/need', 'FormController@editNeed');



Route::get('/delete/{id}', 'FormController@deleteData');
Route::get('/deletecustomcat/{id}', 'FormController@deleteCustomCat');
Route::post('/share/me/{id}', 'FormController@shareme');
Route::get('/datasets/cat', 'FormController@datasetsCategorisation');
Route::post('/register/metadata', 'FormController@addMetaData');
Route::post('/search', 'FormController@search');
Route::get('/aboutus', 'FormController@aboutus');
Route::get('/contactus', 'FormController@contactus');
Route::get('/showSourcePortal', 'FormController@showPortalForm');
Route::get('/showurls', 'FormController@showURLs');
Route::get('/customise/category', 'FormController@showCustomiseCategories');
Route::get('/catform', 'FormController@showCategoryForm');

Route::post('/add/portal', 'FormController@addPortal');
Route::post('/bulkurlupload', 'FormController@addPortalBulk');
Route::post('/add/portal', 'FormController@addCategory');

Route::get('/olddashbord', 'FormController@showMetadata');

Route::get('/login', 'WelcomeController@index');
Route::post('/user_signin', 'LoginController@login');
Route::get('register', 'FormController@register');
Route::get('/clinical_need_form', 'FormController@showClinicalForm');
Route::get('/editclinical/{id}', 'FormController@editClinicalForm');
Route::get('/deleteclinical/{id}', 'FormController@deleteNeed');
Route::get('/clinicallist', 'FormController@clinicalList');
Route::post('/register/new', 'FormController@create');
Route::post('/register/new_complete', 'FormController@create_complete');
Route::get('/dashboard', 'FormController@partners');
Route::get('/usersrecords', 'FormController@dashboard');
Route::get('/GMM/clustering', 'FormController@showClustering');
Route::get('/all/users', 'FormController@allusers');
Route::get('/addpartner/{id}', 'FormController@addpartner');
Route::get('/disableuser/{id}', 'FormController@disableuser');
Route::get('/enableuser/{id}', 'FormController@enableuser');
Route::get('/invitepartner/{code}/{id}', 'FormController@showInvitationForm');
Route::get('/makeadmin/{id}', 'FormController@makeadmin');
Route::get('/sendinvitation/{code}/{id}', 'FormController@sendinvitation');
Route::get('/makeuser/{id}', 'FormController@makeuser');
Route::get('logout', 'LoginController@logout');
Route::get('/manageLogin', 'FormController@manage');
Route::post('/manage/me', 'FormController@editAccount');

Route::get('/oldindex', function(){

$domain = "http://opendata.gov.je";
$cms = new \DetectCMS\DetectCMS($domain);
if($cms->getResult()) {
    echo "Detected CMS: ".$cms->getResult();
} else {
    echo "CMS couldn't be detected";
} 


$url = "http://opendata.gov.je";
$metas = get_meta_tags($url);
pr($metas,true);

echo json_encode($metas);

//another version
$url = 'http://opendata.gov.je';

if (!$fp = fopen($url, 'r')) {
    trigger_error("Unable to open URL ($url)", E_USER_ERROR);
}

$meta = stream_get_meta_data($fp);
pr($meta,true);
print_r($meta);
echo "ss";
fclose($fp);

//Json version
$url = "http://urlToYourJsonFile.com";
$json = file_get_contents($url);
$json_data = json_decode($json, true);
echo "My token: ". $json_data["access_token"];





});



//});
