<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Edit Profile|Materials and Manufacturing in Healthcare Innovation Network</title>
	<meta content="width=device-width" name="viewport">
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="/assets_blog/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets_blog/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/animate.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/theme/default.css" id="theme" rel="stylesheet" />
	<script src="https://kit.fontawesome.com/813c025c0f.js" crossorigin="anonymous"></script>
	
	
	
	<script src="/assets_blog/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="/assets_blog/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="/assets_blog/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="/assets/js/bootbox.min.js"></script>
	<!-- ================== END BASE CSS STYLE ================== -->
    <style>
	.overlay{
	
	background: url('/assets/plain.png');
	height:300px;
	width: 300px;
	opacity: 1;
	}
	.icon{
	font-size:3em;
	color: black;
	}
	
	
	</style>
	<!-- overlay 2-->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets_blog/plugins/pace/pace.min.js"></script>
	
	<!-- ================== END BASE JS ================== -->
	@include("admin.analytics")
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
    
	
	
	<script src="https://cdn.tiny.cloud/1/tja9n4a99gszjfhet7x3lm2p9drj9zzd9ucky3l3e61a8s81/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
      tinymce.init({
      selector: 'textarea',  // change this value according to your HTML
	 plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'table emoticons template paste help'
    ],
	paste_data_images: true,
	  a_plugin_option: true,
	  toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent',
	  a_configuration_option: 400,
  
  menu: {
    file: { title: 'File', items: 'newdocument restoredraft | preview | print ' },
    edit: { title: 'Edit', items: 'undo redo | cut copy paste | selectall | searchreplace' },
    view: { title: 'View', items: 'code | visualaid visualchars visualblocks | spellchecker | preview fullscreen' },
    insert: { title: 'Insert', items: 'image link media template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor toc | insertdatetime' },
    format: { title: 'Format', items: 'bold italic underline strikethrough superscript subscript codeformat | formats blockformats fontformats fontsizes align lineheight | forecolor backcolor | removeformat' },
    tools: { title: 'Tools', items: 'spellchecker spellcheckerlanguage | code wordcount' },
    table: { title: 'Table', items: 'inserttable | cell row column | tableprops deletetable' },
    help: { title: 'Help', items: 'help' }
  }
      });
    </script>
	
	
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
		<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		
		<script src="/assets/jquery.tagsinput-revisited.js"></script>
		<link rel="stylesheet" href="/assets/jquery.tagsinput-revisited.css" />
		
		<style>
			* {
				box-sizing: border-box;
			}
		
			html {
				height: 100%;
				margin: 0;
			}
			
			body {
				min-height: 100%;
				font-family: sans-serif;
				padding: 20px;
				margin: 0;
			}
			
			label {
				display: block;
				padding: 20px 0 5px 0;
			}
		</style>
</head>
 @include("admin.header")
<body class="pace-top bg-white">
@include("admin.cookiebanner")
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
						@if(Session::has('msg'))
						<script type="text/javascript">
						alert('Account created successfully...');
						</script>
						@elseif(Session::has('msg_interest'))
						<script type="text/javascript">
						alert('Interest form submitted successfully. You will be contacted via email as soon as possible');
						</script>
						@elseif(Session::has('mismatch'))
						<script type="text/javascript">
						alert('Passwords mismatched');
						</script>
						@elseif(Session::has('msg_interest2'))
						<script type="text/javascript">
						alert('Profile edited successfully');
						</script>
						@elseif(Session::has('msg2'))
						<script type="text/javascript">
						alert('User with that email already exist please use a diffrent email address...');
						</script>
						@elseif(Session::has('uplerror'))
						<script type="text/javascript">
						alert('Invalid profile picture format, use only png,jpeg,jpg');
						</script>
						
						@elseif(Session::has('miskey'))
						<script type="text/javascript">
						alert('Please select at least one entry from the defined list of keywords  or custom keywords');
						</script>
						
						@elseif(Session::has('err'))
						<small>Invalid Username or Password...</small>
						
						@else(msg == "" or msg==NULL)
							<small>Your files are with you everywhere you go...</small>
						@endif
                        
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin register -->
        <div class="register register-with-news-feed">
            <!-- begin news-feed -->
            
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin register-header -->
				<br/>
                <h1 align="center">
                  Edit Profile
                  
                </h1>
                <!-- end register-header -->
                <!-- begin register-content -->
                <div class="register-content">
                    <form action="/edit/profile" method="POST"  enctype="multipart/form-data" class="margin-bottom-0">
					
					<label class="control-label">First name <span class="text-danger">*</span> </label></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" class="form-control"  value="{{$u->first_name}}" name="first_name"  required  />
                            </div>
                        </div>
						
						
						<label class="control-label">Last name <span class="text-danger">*</span> </label></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" class="form-control"  value="{{$u->last_name}}" name="last_name"  required  />
                            </div>
                        </div>
						
						
                      
						
						 <label class="control-label">Organisation </label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Organisation e.g., University College London" name="institution"  value="{{$u->institution}}"   />
                            </div>
                        </div>
						
						<label class="control-label">Role title </label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="e.g., Professor" name="designation" value="{{$u->designation}}" />
                            </div>
                        </div>
						
						
						<br/>
						<label class="control-label">Brief bio/background (this will be visible to other members) <span class="text-danger">*</span> </label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <textarea type="text" name="bio" class="form-control"  required>{{$u->bio}} </textarea>
                            </div>
                        </div>
						
						
						
						Sector  <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="row m-b-15">
							 <div class="col-md-12">
                                <input type="radio"   name="sector" value="Academic" id="ck2" onChange="OtherHide()" <?php if($u->sector=="Academic"){echo 'checked="checked"';} ?> required/> <label class="control-label" for="ck2">Academia </label>
								</div>
								</div>
								 <div class="row m-b-15">
								 <div class="col-md-12">
								<input type="radio"  name="sector" value="Industry" id="ck3" onChange="OtherHide1()" <?php if($u->sector=="Industry"){echo 'checked="checked"';} ?> required/> <label class="control-label" for="ck3">Industry </label>
								</div>
								</div>
								<input type="radio"  name="sector" value="Clinical" id="ck4" onChange="OtherHide2()" <?php if($u->sector=="Clinical"){echo 'checked="checked"';} ?> required/> <label class="control-label" for="ck4">Clinical </label>
								<input  type="radio"  name="sector" id="ckk" value="Other" onChange="OtherField()" <?php if($u->sector=="Other"){echo 'checked="checked"';} ?> required/><label class="control-label" for="ckk"> &nbsp;Other</label>
                            </div>
                        </div>
						
						
						<label class="control-label">LinkedIn (optional)</label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" name="linkedin" class="form-control" value="{{$u->linkedin}}"  /> 
                            </div>
                        </div>
						
						<label class="control-label">Twitter (optional)</label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" name="twitter" class="form-control"  value="{{$u->twitter}}" /> 
                            </div>
                        </div>
						
						<label class="control-label">Webpage (optional)</label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" name="webpage" class="form-control" value="{{$u->webpage}}" /> 
                            </div>
                        </div>
						
						
                        <label class="control-label">Email <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="email" class="form-control" placeholder="Email address" name="email"  value="{{$u->email}}" required/>
								
                            </div>
                        </div>
						
						<div >
						
						<div class="bg-cover" id="pic"><img src="/mmhn/public/uploads/{{$u->picture}}" height="200px" width="200px" alt="Profile Picture" /></div>
						<input  type="checkbox"  name="profile_pic" id="cpp" value="profile_pic" onClick="Pro()" /> <label for="cpp">Edit Profile Picture </label>
				<div id="pp">
						<label for="picx" class="control-label">Profile picture </label>
                        <div  class="row m-b-15">
                            <div  class="col-md-12">
                                <input type="file" id="picx" class="form-control"  name="pic"   />
								
                            </div>
                        </div>
						</div>
						
				</div>		
						
						
									 <div class="row m-b-15" id="keywordslist">
                            <div class="col-md-12">
										<button class="btn btn-primary" type="button" 
										id="sampleDropdownMenu" data-toggle="dropdown" aria-expanded='false' aria-haspopup='true' onClick="ariaChange('sampleDropdownMenu')>
									<label for="sampleDropdownMenu">	Click to select keywords</label> 
										</button> or add  <input  type="checkbox"  name="other" id="ck" value="other" onClick="OtherField()" <?php if(!empty($u->other_keyword)){echo "checked";} ?>/> <label for="ck">Other keywords</label> 
										<div class="dropdown-menu" style="overflow-y: scroll; height:250px; padding:0.5em 1em;">
										@foreach($kw as $k)
										
										 </span> <label for="{{$k->id}}"> <input id="{{$k->id}}"  name="keywords[]" value="{{$k->id}}" type="checkbox"<?php if(is_array(unserialize($u->keywords))){if(in_array($k->id,unserialize($u->keywords))){echo "checked";} } ?> />&nbsp;  {{$k->name}}</label>
										
										 <br/>
										
										 @endforeach
	
										</div>
										</div>
							   
							   
									</div>
								
						<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
						
                        <div class="row m-b-15" id="oth">
						
                            <div class="col-md-12">
							<label for="form-tags-3"> Other Keywords (Comma-separated) </label>
                                <input type="text" class="form-control" id="form-tags-3"  value="{{$u->other_keyword}}"  placeholder="If other is selected, type in the keyword" name="otherfield"   />
								
                            </div>
                        </div>
						
						<!--
						<label class="control-label">Password (minimum of 8 characters) <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="password" class="form-control" name="password" minlength="8"   required />
								<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
								<input type="hidden" name="role" value="user"/>
                            </div>
                        </div>
                       
					   <label class="control-label">Confirm password <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="password" class="form-control" name="cpassword" minlength="8"  required />
								<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
			
                            </div>
                        </div>
						-->
                       
						
						
                        <div class="checkbox m-b-30">
                            
                                <input type="checkbox" id="tms" required  checked/>  <label id="tms">By clicking Show Interest Button, you agree to our <a href="/termsandcondition" title="Terms and Condition" target="_blank">Terms of Use</a> and that you have read our <a href=" /datapolicy" title="Privacy Policy" target="_blank">Privacy Policy</a>.
                            </label>
                        </div>
						
						<div class="checkbox m-b-30">
                            
                                <input type="checkbox" name="news_email" id="sem" <?php if(!empty($u->public_email)){echo "checked";} ?> /> <label for="sem"> Click to receives notification when new public story is posted.
                            </label>
                        </div>
						
						<div class="checkbox m-b-30">
                           
                                <input type="checkbox" id="mem" name="matching_email" <?php if(!empty($u->matching_email)){echo "checked";} ?> />  <label for="mem"> Click to receives notification when you are selected as partner.
                            </label>
                        </div>
						
						
                        <div class="register-buttons">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Update profile</button>
                        </div>
						<!--
                        <div class="m-t-20 m-b-40 p-b-40 text-inverse">
                            Already a member? Click <a href="/login">Login</a> to sign in.
                        </div>
						-->
                        <hr />
                        <p class="text-center">
                            &copy; Materials and Manufacturing in Healthcare Innovation Network <?php echo date('Y') ?>
                        </p>
                    </form>
                </div>
                <!-- end register-content -->
            </div>
            <!-- end right-content -->
        </div>
        <!-- end register -->
        
        <!-- begin theme-panel -->
        
        <!-- end theme-panel -->
	</div>
	<!-- end page container -->
	

	
	<style type="text/css">
   	
	  #pp{display:none;}
	  
   </style>
   
   <style type="text/css">
   	  #oth{display:none;}
	  
   </style>
   
   <script>
   function OtherField(){
			var checkBox = document.getElementById("ck");
		  // Get the output text
		  	
		  // If the checkbox is checked, display the output text
		  if (checkBox.checked == true){
		   $('#oth').css('display','block');
		  } else {
			$('#oth').css('display','none');
		  }   
   			
		
		
		}
		
		function Pro(){
			var checkBox = document.getElementById("cpp");
		  // Get the output text
		  	
		  // If the checkbox is checked, display the output text
		  if (checkBox.checked == true){
		   $('#pp').css('display','block');
		    $('#pic').css('display','none');
		  } else {
			$('#pp').css('display','none');
		  }   
   			
		
		
		}
		
	
   </script>
  
<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="/assets/crossbrowserjs/html5shiv.js"></script>
		<script src="/assets/crossbrowserjs/respond.min.js"></script>
		<script src="/assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="/assets/plugins/parsley/dist/parsley.js"></script>
	<script src="/assets/plugins/bootstrap-wizard/js/bwizard.js"></script>
	<script src="/assets/js/form-wizards-validation.demo.min.js"></script>
	<script src="/assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
<style type="text/css">
   	  #oth{display:none;}
	  
   </style>
   
   <script>
   function OtherField(){
			var checkBox = document.getElementById("ck");
		  // Get the output text
		  	
		  // If the checkbox is checked, display the output text
		  if (checkBox.checked == true){
		   $('#oth').css('display','block');
		  } else {
			$('#oth').css('display','none');
		  }   
   			
		
		
		}
   </script>
   
   
   <script type="text/javascript">
			$(function() {
				$('#form-tags-1').tagsInput();
				
				$('#form-tags-2').tagsInput({
					'onAddTag': function(input, value) {
						console.log('tag added', input, value);
					},
					'onRemoveTag': function(input, value) {
						console.log('tag removed', input, value);
					},
					'onChange': function(input, value) {
						console.log('change triggered', input, value);
					}
				});
				
				$('#form-tags-3').tagsInput({
					'unique': true,
					'minChars': 2,
					'maxChars': 50,
					'limit': 50
				});
				
				$('#form-tags-4').tagsInput({
					'autocomplete': {
						source: [
							'apple',
							'banana',
							'orange',
							'pizza'
						]
					} 
				});
				
				$('#form-tags-5').tagsInput({
					'delimiter': ';' 
				});
				
				$('#form-tags-6').tagsInput({
					'delimiter': [',', ';'] 
				});
			});
			
			function changeAria(id){
					document.getElementById(id1).setAttribute('aria-expanded', 'true');
					}
		</script>
		
	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
</body>
</html>
