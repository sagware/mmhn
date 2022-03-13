<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Home|Materials and Manufacturing in Healthcare Innovation Network</title>
	<meta content="width=device-width" name="viewport">
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http:/fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="/assets_blog/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets_blog/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/animate.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/theme/default.css" id="theme" rel="stylesheet" />
	<script src="https://kit.fontawesome.com/813c025c0f.js" crossorigin="anonymous"></script>
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
</head>

<body >
@if(Session::has('needsubmit'))
			<script type="text/javascript">
			alert("Challenge/Need submitted successfully");
			</script>
			@endif
			
			@if(Session::has('neededit'))
			<script type="text/javascript">
			alert("Challenge/Need edited successfully");
			</script>
			@endif
			
			@if(Session::has('cookieset'))
			<script type="text/javascript">
			alert("Cookies set successfully");
			</script>
			@endif
			
			@if(Session::has('fileerror'))
			<script type="text/javascript">
			alert("Invalid cover photo: jpg, png only");
			</script>
			@endif
			


            <!-- end navbar-header -->
            <!-- begin navbar-collapse -->
            @include("admin.header")
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </div>


			
    <!-- begin #header -->
    
    <!-- end #header -->
    
    <!-- begin #page-title -->
    <div id="page-title" class="page-title has-bg">
        <div class="bg-cover"><img src="/assets/homecover.jpeg" alt="" /></div>
        <div class="container">
            <h1>Materials and Manufacturing in Healthcare Innovation Network
</h1>
            <p>Connecting clinicians, researchers, and manufacturers to collaborate, accelerate and drive sector change.
</p>
        </div>
    </div>
    <!-- end #page-title -->
    
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin container -->
        <div class="container">
            <!-- begin row -->
            <div class="row row-space-30">
                <!-- begin col-9 -->
                <div class="col-md-9">
                    <!-- begin post-list -->
                    <ul class="post-list">
                        
                    <p align="center">  <h2>Our Featured Innovation Story</h2> </p> 
                        <li>
                           
                            <div class="post-content">
                                <!-- begin post-video -->
                                <div class="post-video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_5aKcpAhTOk" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <!-- end post-video -->
                                <!-- begin post-info -->
                                <div class="post-info">
                                    <h4 class="post-title">
                                        <a href="post_detail.html">Blog Post Video</a>
                                    </h4>
                                    <div class="post-by">
                                        Posted By <a href="#">admin</a> <span class="divider">|</span> <a href="#">Movies</a>, <a href="#">Minions</a>, <a href="#">Trailer</a> <span class="divider">|</span> 1,292 Comments
                                    </div>
                                    <div class="post-desc">
                                        Praesent maximus malesuada purus, sit amet auctor velit scelerisque nec. Suspendisse eget pellentesque dui, ut egestas orci. 
                                        Proin eget massa et magna faucibus pulvinar. Quisque tortor orci, volutpat vel auctor non, varius a augue. Cras non ante arcu. 
                                        Phasellus sit amet dolor non est dictum convallis vel eu lectus. 
                                        Etiam consectetur non leo at auctor. Proin porttitor tellus arcu, in accumsan eros tincidunt eget[...]
                                    </div>
                                </div>
                                <!-- end post-info -->
                                <!-- begin read-btn-container -->
                                <div class="read-btn-container">
                                    <a href="post_detail.html">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                                <!-- end read-btn-container -->
                            </div>
                            <!-- end post-content -->
                        </li>
                        
                    </ul>
                    <!-- end post-list -->
                    <div align="center"><h2><a href="/login" title="login/register"><b>Log in/join to view and participate in solving healthcare challenges</b></a></h2></div>
                    
                </div>
                <!-- end col-9 -->
                <!-- begin col-3 -->
                @include("admin.sidebarhome")
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
		
	<style type="text/css">
	.adimg{ height:auto; width:300px;}
	</style>	
		<!-- advisory group-->
		<div class="row row-space-30">
		<div class="col-md-12">
		
		<div> <img src="/mmhn/public/uploads/ucllogo.png" class="adimg" alt="UCL logo"/> <img src="/mmhn/public/uploads/RFHlogo.png" class="adimg" alt="NHS Royar Foundation Logo"/>  <img src="/mmhn/public/uploads/3dlogo.png" class="adimg" alt="3D print logo"/><img src="/mmhn/public/uploads/palogo.png" class="adimg" alt="PA logo"/><img src="/mmhn/public/uploads/uclpartnerlogo.png" class="adimg" alt="UCL Partner Logo"/><img src="/mmhn/public/uploads/nhslogo.jpg" class="adimg" alt="NHS Foundation Trust Logo"/><img src="/mmhn/public/uploads/Warwicklogo.jpg" class="adimg" alt="RQM Logo"/><img src="/mmhn/public/uploads/nhslondonlogo.png" class="adimg" alt="NHS UCL logo"/></div>
		
		
		</div>		
		</div>	
        <!-- end container -->
    </div>
    <!-- end #content -->
    <div> <br/>  </div>
    <!-- begin #footer -->
    @include("admin.homefooter")
    
   
    
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets_blog/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="/assets_blog/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="/assets_blog/plugins/bootstrap/js/bootstrap.min.js"></script>
	
		<script src="/assets_blog/crossbrowserjs/html5shiv.js"></script>
		<script src="/assets_blog/crossbrowserjs/respond.min.js"></script>
		<script src="/assets_blog/crossbrowserjs/excanvas.min.js"></script>

	<script src="/assets_blog/plugins/jquery-cookie/jquery.cookie.js"></script>
	<script src="/assets_blog/plugins/masonry/masonry.min.js"></script>
	<script src="/assets_blog/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<script>
	    $(document).ready(function() {
	        App.init();
	    });
	</script>
</body>
</html>