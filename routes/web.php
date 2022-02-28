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
Route::get('/iflogin', 'WelcomeController@home');
Route::get('/', 'FormController@homeadmin');
Route::get('/homeneed', 'WelcomeController@homeneed'); // comment this line and uncomment the block comment below for maintenance services.
/**
Route::get('/', function(){
echo "Site under maintenance, it will be available as soon as possible.";
});
**/
Route::get('/cookie', 'FormController@cookie');
Route::get('/changepassword/{id}', 'FormController@showEditPassword');
Route::get('/datapolicy', 'FormController@datapolicy');
Route::get('/termsandcondition', 'FormController@termsandcondition');
Route::get('/category/{id}', 'FormController@showCategory');
Route::post('/add/need', 'FormController@addNeed');
Route::post('/editadd/need', 'FormController@addEditNeed');
Route::post('/submit/need', 'FormController@submitNeed');
Route::post('/setcookie', 'FormController@setCookie');
Route::post('/submitedit/need', 'FormController@submitEditNeed');
Route::post('/edit/need', 'FormController@editNeed');
Route::post('/submitcomment', 'FormController@submitComment');
Route::post('/submitreply', 'FormController@submitReply');
Route::post('/add/public_stories', 'FormController@addPublicStories');
Route::post('/addedit/public_stories', 'FormController@addEditPublicStories');
Route::post('/submit/custom_cookies', 'FormController@customCookiesSubmission');
Route::get('/news', 'FormController@news');
Route::get('/event', 'FormController@event');
Route::get('/newssubmitted', 'FormController@newsSubmitted');
Route::get('/challengesubmitted', 'FormController@challengeSubmitted');
Route::get('/newssubmittedapproved', 'FormController@newsSubmittedApproved');
Route::get('/challengesubmittedapproved', 'FormController@challengeSubmittedApproved');
Route::get('/grant', 'FormController@grant');
Route::get('/opportunity', 'FormController@opportunity');
Route::get('/public_post/{id}', 'FormController@showPost');
Route::get('/mystories/{id}', 'FormController@myStories');
Route::get('/partnerslist', 'FormController@showPartners');
Route::get('/academic/partners', 'FormController@showPartnersAcademic');
Route::get('/industry/partners', 'FormController@showPartnersIndustry');
Route::get('/clinical/partners', 'FormController@showPartnersClinical');
Route::get('/other/partners', 'FormController@showPartnersOther');
Route::get('/clinicalneeds', 'FormController@showNeed');
Route::get('/customise/cookie', 'FormController@showCustomiseCookies');
Route::get('/clinical_detail/{id}', 'FormController@showNeedDetail');
Route::get('/partner/{id}', 'FormController@showPartnerDetails');
Route::get('/unmatchedpartner/{id}', 'FormController@unMatchPartner');
Route::get('/likecomment/{id}/{id2}', 'FormController@likeComment');
Route::get('/dislikecomment/{id}/{id2}', 'FormController@dislikeComment');
Route::get('/likereply/{id}/{id2}', 'FormController@likeReply');
Route::get('/dislikereply/{id}/{id2}', 'FormController@dislikeReply');
Route::get('/likeneed/{id}/{id2}', 'FormController@likeNeed');
Route::get('/dislikeneed/{id}/{id2}', 'FormController@dislikeNeed');
Route::get('/showeditneed/{id}', 'FormController@showEditNeedForm');
Route::get('/showeditpublic_stories/{id}', 'FormController@showEditNewsForm');
Route::get('/needs_list', 'FormController@showNeedList');
Route::get('/review/{id}', 'FormController@showNeedDetailApprove');
Route::get('/editprofile/{id}', 'FormController@showEditProfile');
Route::get('/list_of_keywords', 'FormController@showKeywordsList');
Route::get('/add_keyword', 'FormController@showKeywordForm');
Route::post('/addkeywordform', 'FormController@addKeyword');
Route::get('/deletekeyword/{id}', 'FormController@deleteKeyword');
Route::get('/editkeyword/{id}', 'FormController@editKeyword');
Route::post('/editaddkeywordform', 'FormController@editaddKeyword');
Route::get('/editchallenges/{id}', 'FormController@showNeedEditable');
Route::get('/editpublic_stories/{id}', 'FormController@showEditPublicStories');
Route::get('/approve_need/{id}', 'FormController@approveNeed');
Route::post('/reject_need', 'FormController@rejectNeed');
Route::post('/revise_need', 'FormController@reviseNeed');
Route::post('/reject_user', 'FormController@rejectUser');
Route::get('/public_stories_list', 'FormController@showPublicList');
Route::get('/public_review/{id}', 'FormController@showPublicDetailApprove');

Route::get('/delete/{id}', 'FormController@deleteUser');
Route::get('/deleteuserpage', 'FormController@showDelete');
Route::post('/deletingpartner', 'FormController@deletion');
Route::get('/deletecustomcat/{id}', 'FormController@deleteCustomCat');
Route::post('/share/me/{id}', 'FormController@shareme');
Route::get('/datasets/cat', 'FormController@datasetsCategorisation');
Route::post('/register/metadata', 'FormController@addMetaData');
Route::any('/search', 'FormController@search');
//Route::get('/search', 'FormController@search');
Route::get('/aboutus', 'FormController@aboutus');
Route::get('/faq', 'FormController@faq');
Route::get('/contactus', 'FormController@contactus');
Route::get('/showSourcePortal', 'FormController@showPortalForm');
Route::get('/show_news_form', 'FormController@showNewsForm');
Route::get('/showurls', 'FormController@showURLs');
Route::get('/customise/category', 'FormController@showCustomiseCategories');
Route::get('/catform', 'FormController@showCategoryForm');


Route::get('/olddashbord', 'FormController@showMetadata');

Route::get('/login', 'WelcomeController@index');
Route::get('/forgotpassword', 'WelcomeController@forgotpassword');
Route::post('/user_signin', 'LoginController@login');
Route::get('/register', 'FormController@register');
Route::get('/clinical_need_form', 'FormController@showClinicalForm');
Route::get('/clinical_need_formsubmitted', 'FormController@showClinicalFormSubmitted');
Route::get('/clinical_need_formedited', 'FormController@showClinicalFormEdited');
Route::get('/editclinical/{id}', 'FormController@editClinicalForm');
Route::get('/deleteclinical/{id}', 'FormController@deleteNeed');
Route::get('/clinicallist', 'FormController@clinicalList');
Route::get('/create_partner', 'FormController@showCreatePartner');
Route::get('/resetpassword/{id}', 'FormController@showChangePassword');
Route::post('/register/new', 'FormController@create');
Route::post('/forgotpasswordform', 'FormController@forgotpasswordform');
Route::post('/register/new_complete', 'FormController@create_complete');
Route::post('/adminregister/new_complete', 'FormController@admincreate_complete');
Route::post('/changepassword', 'FormController@changepassword');
Route::post('/adminregister/new_partner', 'FormController@adminCreatePartner');
Route::post('/edit/profile', 'FormController@edit_profile');
Route::get('/profileupdated', 'FormController@profileupdate');
Route::get('/dashboard', 'FormController@dashboard');
Route::get('/usersrecords', 'FormController@dashboard');
Route::get('/homeadmin', 'FormController@homeadmin');
Route::get('/GMM/clustering', 'FormController@showClustering');
Route::get('/all/users', 'FormController@allusers');
Route::get('/addpartner/{id}', 'FormController@addpartner');
Route::get('/disableuser/{id}', 'FormController@disableuser');
Route::get('/enableuser/{id}', 'FormController@enableuser');
Route::get('/invitepartner/{code}/{id}', 'FormController@showInvitationForm');
Route::get('/admininvitepartner/{code}', 'FormController@showCompleteAdminInvite');
Route::get('/makeadmin/{id}', 'FormController@makeadmin');
Route::get('/sendinvitation/{code}/{id}', 'FormController@sendinvitation');
Route::get('/makeuser/{id}', 'FormController@makeuser');
Route::get('/logout', 'LoginController@logout');
Route::get('/manageLogin', 'FormController@manage');
Route::post('/manage/me', 'FormController@editAccount');




//});
