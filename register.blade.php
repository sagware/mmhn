<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Show Interest|Materials and Manufacturing in Healthcare Network| Register Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0,  name="viewport" />
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
	<!-- ================== END BASE CSS STYLE ================== -->
	<link rel="icon" type="image/png" href="{{ asset('/favicon.png') }}" alt="Materials and Manufacturing in Healthcare Innovation Network">
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<link href="http:/fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="/assets_blog/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets_blog/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/animate.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/theme/default.css" id="theme" rel="stylesheet" />
	<script src="https://kit.fontawesome.com/813c025c0f.js" crossorigin="anonymous"></script>
	@include("admin.analytics")
</head>
<body class="pace-top bg-white">
	<!-- begin #page-loader -->
@include("admin.cookiebanner")
@include("admin.header")		
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
						@if(Session::has('msg'))
						<script type="text/javascript">
						alert('Account created successfully...');
						</script>
						@elseif(Session::has('msg_interest'))
						<script type="text/javascript">
						alert('Interest form submitted successfully. Your submission is under review and the outcome of the review process will be communicated to you via email as soon as possible');
						</script>
						@elseif(Session::has('msg2'))
						<script type="text/javascript">
						alert('User with that email already exist please use a diffrent email address...');
						</script>
						@elseif(Session::has('uplerror'))
						<script type="text/javascript">
						alert('Invalid photograph format, use only png,jpeg,jpg');
						</script>
						@elseif(Session::has('err'))
						<small>Invalid Username or Password...</small>
						
						@else(msg == "" or msg==NULL)
							
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
                <h1 align="center">
				<br/><br/>
                  Membership Expression of Interest                   
                </h1>
				<div align="right">	
							<h5 align="justify" >  <p style="padding:1.5em;">
                 &nbsp; &nbsp;  The Materials and Manufacturing in Healthcare Innovation Network aims to bring together clinicians, researchers and industry professionals to form a community equipped to tackle healthcare manufacturing challenges. The network will support responses to real-world challenges, run a series of events, and facilitate connections between members. If you would like to join our network, please submit an expression of interest form below.    
				  </p>            
                </h5>
				</div>
                <!-- end register-header -->
                <!-- begin register-content -->
                <div class="register-content">
                    <form action="/register/new" method="POST"  enctype="multipart/form-data" class="margin-bottom-0">
                        
						<label class="control-label" for="fname">First name <span class="text-danger">*</span> </label></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" id="fname" class="form-control" placeholder="First Name e.g., Rita" name="first_name" value="{{ old('first_name') }}"  required />
                            </div>
                        </div>
						
						
						
						<label class="control-label" for="sname">Surname Name <span class="text-danger">*</span> </label></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" id="sname" class="form-control" placeholder="Surname e.g., Sagir" name="last_name"  value="{{ old('last_name') }}"  required  />
                            </div>
                        </div>
						
						 <label class="control-label" for="org">Organisation </label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" id="org" class="form-control" placeholder="Organisation e.g., University College London" name="institution" value="{{ old('institution') }}"   />
                            </div>
                        </div>
						
						
						
						Sector  <span class="text-danger">*</span>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="radio"  name="sector" value="Academic" id="ck2" onChange="OtherHide()" value="{{ old('sector') }}" required/> <label class="control-label" for="ck2">Academia </label>
								<input type="radio"  name="sector" value="Industry" id="ck3" onChange="OtherHide1()" value="{{ old('sector') }}" required/> <label class="control-label" for="ck3">Industry </label>
								<input type="radio"  name="sector" value="Clinical" id="ck4" onChange="OtherHide2()" value="{{ old('sector') }}" required/> <label class="control-label" for="ck4">Clinical </label>
								<input  type="radio"  name="sector" id="ck" value="Other" onChange="OtherField()" value="{{ old('sector') }}" required/><label class="control-label" for="ck"> &nbsp;Other</label>
                            </div>
                        </div>
						
						  <div class="row m-b-15" id="oth">
						
                            <div class="col-md-12">
                                <input type="text" id="otk" class="form-control" placeholder="If other is selected, type in the keyword" name="other" value="{{ old('other') }}"  />
								
                            </div>
                        </div>
						
						<label class="control-label" for="reason">How does this network align with your interests? (maximum number of characters: 200)<span class="text-danger">*</span> </label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <textarea type="text" id="reason" name="reason" class="form-control"  value="{{ old('reason') }}"   maxlength="200" required> </textarea>
                            </div>
                        </div>
						
						
                        <label class="control-label" for="email">Email <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="email" id="email" class="form-control" placeholder="Email address" name="email"  value="{{ old('email') }}" required />
								<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
								<input type="hidden" name="role" value="user"/>
                            </div>
                        </div>
                       
						
						
                        <div class="checkbox m-b-30">
                            
                                <input type="checkbox" name="terms" value="{{ old('terms') }}" id="tms" required  checked/>  <label for="tms">By clicking Show Interest Button, you agree to our <a href="/termsandcondition" title="Terms and Condition" target="_blank">Terms of Use</a> and that you have read our <a href="/datapolicy" title="Privacy Policy" target="_blank">Privacy Policy</a>.
                            </label>
                        </div>
                        <div class="register-buttons">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Show Interest</button>
                        </div>
                        <div class="m-t-20 m-b-40 p-b-40 text-inverse">
                            Already a member? Click <a href="/login" title="Login"><b>Login</b></a> to sign in. <br/>
							 Go to <a href="/" title="Home Page"><b>Home Page</b></a> 
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
        
        <!-- end theme-panel -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
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
	<script src="/assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
<style type="text/css">
   	  #oth{display:none;}
	  
   </style>
   
   <script>
   function OtherField(){
			var checkBox = document.getElementById("ck").checked;
		  // Get the output text
		  var text = document.getElementById("text");
		
		  // If the checkbox is checked, display the output text
		  if (checkBox == true){
		   $('#oth').css('display','block');
		  } else {
			$('#oth').css('display','none');
		  }   			
		
}

 function OtherHide(){
			var checkBox = document.getElementById("ck2").checked;
		  // Get the output text
		
		  // If the checkbox is checked, display the output text
		  if (checkBox == true){
		  $('#oth').css('display','none');
		  } 			
		
}

function OtherHide1(){
			var checkBox = document.getElementById("ck3").checked;
		  // Get the output text
		
		  // If the checkbox is checked, display the output text
		  if (checkBox == true){
		  $('#oth').css('display','none');
		  } 			
		
}

function OtherHide2(){
			var checkBox = document.getElementById("ck4").checked;
		  // Get the output text
		
		  // If the checkbox is checked, display the output text
		  if (checkBox == true){
		  $('#oth').css('display','none');
		  } 			
		
}
   </script>
	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
</body>
</html>
s