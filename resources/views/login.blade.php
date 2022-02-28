<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Log in | Materials and Manufacturing in Healthcare Network </title>
	<meta content="width=device-width" name="viewport">
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
</head>
@include("admin.cookiebanner")
@include("admin.header")
<body class="pace-top bg-white">
	<!-- begin #page-loader -->
	
		
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	{{--@include("admin.cookiebanner")--}}
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
                       <a href="/" title="Home"> <span class="logo"></span></a> <h1>Log in</h1>
						@if(Session::has('msg'))
						<script type="text/javascript">
						alert('Account created successfully...');
						</script>
						@elseif(Session::has('msg2'))
						<small class="text-danger"> <b>User with that email already exist please use a diffrent email address.</b></small>
						@elseif(Session::has('err'))
						<small class="text-danger"> <b>Invalid Username or Password...</b></small>
						@elseif(Session::has('msg_interest2'))
						<script type="text/javascript">
						alert('Action completed successfully...');
						</script>	
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
                    <form action="/user_signin" method="post" enctype="multipart/form-data">
                        <div class="form-group m-b-15">
						<label for="email">Email</label>
                            <input type="text" class="form-control input-lg" id="email" name="email" value="{{ old('email') }}" placeholder="Email Address" required />
                        </div>
						<label for="password">Password</label>
                        <div class="form-group m-b-15">
                            <input type="password" id="password" class="form-control input-lg" name="password"  placeholder="Password" required />
                        </div>
                        
                        <div class="login-buttons">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Sign in</button>
                        </div>
						
                        <div class="m-t-20 m-b-40 p-b-40 text-inverse">
						
                            Not a member yet? <a href="/register"  class="btn btn-primary btn-block btn-lg"><b> Become a member</b></a>  <br/>
							Forgot password? <a href="/forgotpassword"  class="btn btn-primary btn-block btn-lg"><b> Reset your password.</b></a> 
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
