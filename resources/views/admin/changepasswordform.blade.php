<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	
	<title>Reset Password | Materials and Manufacturing in Healthcare Network | Register Page</title>
	<meta content="width=device-width" name="viewport">
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
		
<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js"></script>
</head>
@include("admin.cookiebanner")

<body class="pace-top bg-white">
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
						alert('Password changed successfully');
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
                        
	@include("admin.header")
	<br/><br/>
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
                   Change Password
                   
                </h1>
                <!-- end register-header -->
                <!-- begin register-content -->
                <div class="register-content">
                    <form action="/changepassword" method="POST"  enctype="multipart/form-data" class="margin-bottom-0">
					
					
					
					
						
						<label class="control-label" for="password">Password (minimum of 8 characters) <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="password" id="password" class="form-control" name="password" minlength="8"   required />
								<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
								<input type="hidden" name="uid" value="{{$id}}"/>
								
                            </div>
                        </div>
                       
					   <label class="control-label" for="cpass">Confirm Password <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="password" id="cpass" class="form-control" name="cpassword" minlength="8"  required />
								<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
			
                            </div>
                        </div>
                       
						
						<meter max="4" id="password-strength"></meter>
        <p id="password-strength-text"></p>
		
		<script type="text/javascript">
var strength = {
    0: "Weakest",
    1: "Weak",
    2: "OK",
    3: "Good",
    4: "Strong"
}

var password = document.getElementById('password');
var meter = document.getElementById('password-strength');
var text = document.getElementById('password-strength-text');
 
password.addEventListener('input', function() {
    var val = password.value;
    var result = zxcvbn(val);
 
    // This updates the password strength meter
    meter.value = result.score;
 
    // This updates the password meter text
    if (val !== "") {
        text.innerHTML = "Password Strength: " + strength[result.score]; 
    } else {
        text.innerHTML = "";
    }
});
</script>
						
                       
						
						
                        <div class="register-buttons">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Update Password</button>
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
		  	
		  // If the checkbox is checked, display the output text
		  if (checkBox.checked == true){
		   $('#oth').css('display','block');
		  } else {
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