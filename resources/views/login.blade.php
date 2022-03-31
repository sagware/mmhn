<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Log in | Materials and Manufacturing in Healthcare Innovation Network </title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	
	@include("admin.analytics")
  
 
	
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	
	<link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/assets/css/animate.min.css" rel="stylesheet" />
	<link href="/assets/css/style.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	>
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	<script src="https://kit.fontawesome.com/813c025c0f.js" crossorigin="anonymous"></script>
	
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
	
	
	
	<link href="/assets_blog/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
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
						
                            Not a member yet? <a href="/register"  class="btn btn-primary btn-block btn-lg"> Become a member</a>  <br/>
							Forgot password? <a href="/forgotpassword"  class="btn btn-primary btn-block btn-lg"> Reset your password.</a> 
                        </div>
						
						
                           
                        
						
                        <hr />
                        <p class="text-center">
                             &copy;Materials and Manufacturing in Healthcare Innovation Network <?php echo date('Y') ?>
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

	<script type="text/javascript">
						var acc = document.getElementsByClassName("accordion");
					var i;
					
					for (i = 0; i < acc.length; i++) {
					  acc[i].addEventListener("click", function() {
						/* Toggle between adding and removing the "active" class,
						to highlight the button that controls the panel */
						this.classList.toggle("active");
					
						/* Toggle between hiding and showing the active panel */
						var panel = this.nextElementSibling;
						if (panel.style.display === "block") {
						  panel.style.display = "none";
						} else {
						  panel.style.display = "block";
						}
					  });
					}
					
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