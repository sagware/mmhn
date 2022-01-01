<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Home|Materials and Manufacturing in Healthcare Innovation Network</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
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

<body>
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
        <!--
		<div class="container"> -->
            <!-- begin row -->
			
			@if(Auth::check())
            <div class="row row-space-30" >
                <!-- begin col-9 -->
                <div class="col-md-15">
                    <!-- begin post-list -->
                    <div class="post-list post-grid post-grid-10">
                        
						<div class="post-li">
                            <!-- begin post-content -->
                            <div class="post-content">
								<div align="center">
								<i class="icon">
								<i class="fas fa-users"></i>
								</i>
								</div>
							<h4 class="post-title" align="center">
                                        Partners
                                    </h4>
                                   <br/> 
                                <!-- begin blockquote -->
                                <div class="card card-clean">
								  <div class="card-header text-white p-0 overlay overlay-primary">
                                    <ul>
									
									<li><a href="/academic/partners" title="Academic Partners"> <h4>Academic Partners</h4></a></li>
									<li><a href="/industry/partners" title="Industry Partners"> <h4>Industry Partners</h4></a></li>
									<li><a href="/clinical/partners" title="Clinical Partners"> <h4>Clinical Partners</h4></a></li>
									<li><a href="/other/partners" title="Other Category of Partners"> <h4>Other Partners</h4></a></li>
									
									</ul>
                                </div>
								</div>
                                <!-- end blockquote -->
                                <!-- begin post-info -->
                               <div align="right">
                               
								<a href="/partnerslist" class="read-btn" title="Read more"> See all partners <i class="fa fa-angle-double-right" ></i></a>
								
								</div>
                                <!-- end post-info -->
                            </div>
                            <!-- end post-content -->
                        </div>
						
						
						
						
						<div class="post-li">
                            <!-- begin post-content -->
                            <div class="post-content">
							
							<div align="center">
							<i class="icon">
							<i class="fas fa-hammer"></i>
							</i>
							</div>
							
							
							 <h4 class="post-title" align="center">
                                        Challenges
                                    </h4>
									<br/> 
                                <!-- begin blockquote -->
                                <div class="card card-clean">
								  <div class="card-header text-white p-0 overlay overlay-primary">
                                     <ul>
									@foreach($ch as $c)
									<li><a href="/clinical_detail/{{$c->id}}" title="{{$c->title}}"><h4>{{$c->title}}</h4></a></li>
									@endforeach
									
									</ul>
                                </div>
								</div>
                                <!-- end blockquote -->
                                <!-- begin post-info -->
								<div align="right">
                               
								<a href="/clinicalneeds" class="read-btn" title="Read more"> See all challenges <i class="fa fa-angle-double-right" ></i></a>
								
								</div>
                                <!-- end post-info -->
                            </div>
                            <!-- end post-content -->
                       
                    </div>
					
					
					
					
						<div class="post-li" >
                            <!-- begin post-content -->
                            <div class="post-content">
							<div align="center">
							<i class="icon">
							<i class="far fa-newspaper" ></i>
							</i>
							</div>
							<h4 class="post-title" align="center">
                                       Latest Innovation Stories
                                    </h4>
                                  <br/> 
                                <!-- begin blockquote -->
                                <div class="card card-clean">
								  <div class="card-header text-white p-0 overlay overlay-primary">
                                    <ul>
									@foreach($r as $n)
									<li><a href="/public_post/{{$n->id}}" title="{{$n->title}}"><h4>{{$n->title}}</h4></a></li>
									@endforeach
									
									</ul>
                                </div>
								</div>
                                <!-- end blockquote -->
                                <!-- begin post-info -->
                                <div align="right">
                               
								<a href="/news" class="read-btn" title="Read more"> See all innovation stories <i class="fa fa-angle-double-right"></i></a>
								
								</div>
                                <!-- end post-info -->
                            </div>
                            <!-- end post-content -->
                        </div>
						
						
                    <!-- end post-list -->                
                    
               
				
                <!-- end col-9 -->
                <!-- begin col-3 -->
               </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
			
			@else
			<div class="row row-space-30" >
                <!-- begin col-9 -->
                <div class="col-md-12">
                    <!-- begin post-list -->
                    <div class="post-list post-grid post-grid-2">
                        
						
						<div class="post-li" >
                            <!-- begin post-content -->
                            <div class="post-content">
							<div align="center">
							<i class="icon">
							<i class="far fa-newspaper" ></i>
							</i>
							</div>
							<h4 class="post-title" align="center">
                                       Latest Innovation Stories
                                    </h4>
                                   <br/> 
                                <!-- begin blockquote -->
                                <div class="card card-clean">
								  <div class="card-header text-white p-0 overlay overlay-primary">
                                    <ul>
									@foreach($r as $n)
									<a href="/public_post/{{$n->id}}" title="{{$n->title}}"><li><b><h4>{{$n->title}}</b></h4></li></a>
									@endforeach
								
									</ul>
									
									 <a href="/news" style="align:right;" class="read-btn"  title="Read more"> Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>
								
								</div>
                                <!-- end blockquote -->
                                <!-- begin post-info -->
                               
                                <!-- end post-info -->
                            </div>
                            <!-- end post-content -->
                        </div>
						
						
					
					<div class="post-li">
                            <!-- begin post-content -->
                            <div class="post-content">
								<div align="center">
								<i class="icon">
								<i class="fas fa-info-circle"></i>
								</i>
								</div>
							<h4 class="post-title" align="center">
                                        Network Information
                                    </h4>
                                   <br/> 
                                <!-- begin blockquote -->
                                <div class="card card-clean">
								  <div class="card-header text-white p-0 overlay overlay-primary">
                                    <ul>
									
									<li><a href="/aboutus" title="About us"> <h4>About Us</h4></a></li>
									<li><a href="/faq" title="FAQ"> <h4>FAQ</h4></a></li>
									<li><a href="/contactus" title="Contact us"> <h4>Contact Us</h4></a></li>
									
									</ul>
                                </div>
								</div>
                                <!-- end blockquote -->
                                <!-- begin post-info -->
                               
                                <!-- end post-info -->
                            </div>
                            <!-- end post-content -->
                        </div>
					
					
						
						
						
                    <!-- end post-list -->                
                    
               
				
                <!-- end col-9 -->
                <!-- begin col-3 -->
               </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
			@endif
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