<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<title>Materials and Manufacturing in Healthcare Network | Login Page</title>
	@include("admin.analytics")
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
</head>

@include("admin.header")
<body class="pace-top bg-white">
	<!-- begin #page-loader -->
	
	@include("admin.cookiebanner")
		
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin login -->
        <div class="login login-with-news-feed">
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image">
                    <img src="/assets/img/login-bg/bg-8.jpg" data-id="login-cover-image" alt="" />
                </div>
                <div class="news-caption">
                    
                   
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin login-header -->
                <div class="login-header">
                    <div class="brand">
                       <a href="/" title="Home"> <span class="logo"></span></a> Reset Password
						@if(Session::has('msg'))
						<script type="text/javascript">
						alert('Account created successfully...');
						</script>
						@elseif(Session::has('sent'))
						<script type="text/javascript">
						alert('An email has been sent to this email address, open the email and follow the instructions');
						</script>
						
						@elseif(Session::has('no_record'))
						<script type="text/javascript">
						alert('Email not found in our database, please check again or register on the platform');
						</script>
						@elseif(Session::has('msg2'))
						<small>User with that email already exist please use a diffrent email address...</small>
						@elseif(Session::has('err'))
						<small>Invalid Username or Password...</small>
						@else(msg == "" or msg==NULL)
							
						@endif
                        
                    </div>
                    <div class="icon">
                        <i class="fa fa-sign-in"></i>
						
                    </div>
                </div>
                <!-- end login-header -->
                <!-- begin login-content -->
                <div class="login-content">
                    <form action="/forgotpasswordform" method="post" enctype="multipart/form-data">
                        <div class="form-group m-b-15">
                            <input type="text" class="form-control input-lg" name="email" placeholder="Input your email address" required />
							<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        </div>
                       
                        
                        <div class="login-buttons">
                            <button type="submit" class="btn btn-success btn-block btn-lg">Reset password</button>
                        </div>
						
                        <div class="m-t-20 m-b-40 p-b-40 text-inverse">
                            Not a member yet? Click <a href="/register" class="text-success">here</a> to show interest.
							
                        </div>
						
						
                           
                        
						
                        <hr />
                        <p class="text-center">
                             &copy;Materials and Manufacturing in Healthcare Network <?php echo date('Y') ?>
                        </p>
                    </form>
                </div>
                <!-- end login-content -->
            </div>
            <!-- end right-container -->
        </div>
        <!-- end login -->
        
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

	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
</body>
</html>
