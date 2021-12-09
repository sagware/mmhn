<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Profile|Materials and Manufacturing in Healthcare Network| Register Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/assets/css/animate.min.css" rel="stylesheet" />
	<link href="/assets/css/style.min.css" rel="stylesheet" />
	<link href="/assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<link href="/assets/multiselect.css" rel="stylesheet">
	<!-- ================== END BASE CSS STYLE ================== -->
	<!-- multiselect-->
	
	@include("admin.analytics")
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- multiselect-->
	
	
</head>
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
						alert('Invalid passport photograph format, use only png,jpeg,jpg');
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
            <div class="news-feed">
                <div class="news-image">
                    <img src="/assets/img/login-bg/bg-8.jpg" alt="" />
                </div>
                <div class="news-caption">
                    
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin register-header -->
                <h3 align="center">
                   Profile Edit Form
                   
                </h3>
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
						
						
						
						<label class="control-label">Brief bio/background, this will be visible to other members (maximum number of characters: 200)<span class="text-danger">*</span> </label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <textarea type="text" name="bio" class="form-control"  maxlength="200" required>{{$u->bio}} </textarea>
                            </div>
                        </div>
						
						<label class="control-label">Why do you want to join the network? (maximum number of characters: 200)<span class="text-danger">*</span> </label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" name="reason" class="form-control"  maxlength="200"  value="{{$u->joining_reason}}" required /> 
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
						
						<div class="bg-cover" id="pic"><img src="/uploads/{{Auth::user()->picture}}" height="200px" width="200px" alt="" /></div>
						<input  type="checkbox"  name="profile_pic" id="cpp" value="profile_pic" onClick="Pro()" /> Edit Profile Picture
				<div id="pp">
						<label id="ed" class="control-label">Profile picture </label>
                        <div  class="row m-b-15">
                            <div  class="col-md-12">
                                <input type="file" class="form-control"  name="pic"   />
								
                            </div>
                        </div>
						</div>
						
				</div>		
						
						
									<label for="key" class="control-label" for="fullname">Select keyword(s) that describe the Challenge/Need :</label>
									 <div class="row m-b-15">
                            <div class="col-md-12">
										<button class="btn btn-primary" type="button" 
										id="sampleDropdownMenu" data-toggle="dropdown">
										Click to select keywords 
										</button> or add  <input  type="checkbox"  name="other" id="ck" value="other" onClick="OtherField()" <?php if(!empty($u->other_keyword)){echo "checked";} ?>/> Other keywords 
										<div class="dropdown-menu" style="overflow-y: scroll; height:250px; padding:0.5em 1em;">
										@foreach($kw as $k)
										
										 </span> <input id="key"  name="keywords[]" value="{{$k->id}}" type="checkbox"<?php if(is_array(unserialize($u->keywords))){if(in_array($k->id,unserialize($u->keywords))){echo "checked";} } ?> />&nbsp; {{$k->name}}
										
										 <br/>
										
										 @endforeach
	
										</div>
										</div>
							   
							   
									</div>
								
						
						
                        <div class="row m-b-15" id="oth">
						
                            <div class="col-md-12">
                                <input type="text" value="{{$u->other_keyword}}" class="form-control" placeholder="If other is selected, type in the keyword" name="otherfield"   />
								
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
                             <label>
                                <input type="checkbox" required  checked/> By clicking Show Interest Button, you agree to our <a href="https://www.ucl.ac.uk/disclaimer/ ">Terms</a> and that you have read our <a href=" https://www.ucl.ac.uk/privacy/">Data Policy</a>, including our <a href="https://www.ucl.ac.uk/legal-services/privacy/cookie-policy">Cookie Use</a>.
                            </label>
                        </div>
						
						<div class="checkbox m-b-30">
                            <label>
                                <input type="checkbox" name="news_email" <?php if(!empty($u->public_email)){echo "checked";} ?> /> Click to receives notification when new public story is posted.
                            </label>
                        </div>
						
						<div class="checkbox m-b-30">
                            <label>
                                <input type="checkbox" name="matching_email" <?php if(!empty($u->matching_email)){echo "checked";} ?> /> Click to receives notification when you are selected as partner.
                            </label>
                        </div>
						
						
                        <div class="register-buttons">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Update profile</button>
                        </div>
                        <div class="m-t-20 m-b-40 p-b-40 text-inverse">
                            Already a member? Click <a href="/login">Login</a> to sign in.
                        </div>
                        <hr />
                        <p class="text-center">
                            &copy; Materials and Manufacturing in Healthcare Network <?php echo date('Y') ?>
                        </p>
                    </form>
                </div>
                <!-- end register-content -->
            </div>
            <!-- end right-content -->
        </div>
        <!-- end register -->
        
        <!-- begin theme-panel -->
        <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
            <div class="theme-panel-content">
                <h5 class="m-t-0">Color Theme</h5>
                <ul class="theme-list clearfix">
                    <li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-black" data-theme="black" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
                </ul>
                <div class="divider"></div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Header Styling</div>
                    <div class="col-md-7">
                        <select name="header-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">inverse</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Header</div>
                    <div class="col-md-7">
                        <select name="header-fixed" class="form-control input-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Styling</div>
                    <div class="col-md-7">
                        <select name="sidebar-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">grid</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Sidebar</div>
                    <div class="col-md-7">
                        <select name="sidebar-fixed" class="form-control input-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Gradient</div>
                    <div class="col-md-7">
                        <select name="content-gradient" class="form-control input-sm">
                            <option value="1">disabled</option>
                            <option value="2">enabled</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Content Styling</div>
                    <div class="col-md-7">
                        <select name="content-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">black</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-12">
                        <a href="#" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage"><i class="fa fa-refresh m-r-3"></i> Reset Local Storage</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end theme-panel -->
	</div>
	<!-- end page container -->
	
<script src="/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<!--[if lt IE 9]>
		<script src="/assets/crossbrowserjs/html5shiv.js"></script>
		<script src="/assets/crossbrowserjs/respond.min.js"></script>
		<script src="/assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="/assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<!-- ================== END PAGE LEVEL JS ================== -->
	<!-- selcet-->
	<script src="/assets/multiselect.js"></script>
	<script src="/assets/helper.js"></script>
	
	
	
	
<style type="text/css">
   	
	  #pp{display:none;}
	  
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
  
	
	<script type="text/javascript">
        $(document).ready(function () {
            $('#keywords').multiselect(
                {
                    includeSelectAllOption: true
                });
        });
    </script>
	
	
	</script>	
		
	<script>
	
		$(document).ready(function() {
			App.init();
		});
	</script>
</body>
</html>
s