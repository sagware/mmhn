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
    <div id="page-title" class="page-title has-bg" style="margin-bottom:0 !important;">
        <div class="bg-cover"><img src="/assets/homecover.jpeg" alt="" /></div>
        <div class="container">
            <h1>Materials and Manufacturing in Healthcare Innovation Network
</h1>
            <p>Connecting clinicians, researchers, and manufacturers to collaborate, accelerate and drive sector change.
</p>
        </div>
    </div>
    <!-- end #page-title -->
    <style type="text/css">
	h2,h1{
	margin-bottom:0 !important;
	margin-top:0 !important;
	}
	
	p{
	margin-bottom:0 !important;
	margin-top:0 !important;
	}
	
	</style>
    <!-- begin #content -->
    <div id="content" class="content" style="margin-bottom:0 !important; margin-top:0;">
        <!-- begin container -->
        <div class="container">
            <!-- begin row --> 
			<br/>
			<p align="center">  <h2>Our Featured Innovation Story</h2> </p>
			<br/>
            <div class="row row-space-30">
                <!-- begin col-9 -->
				 
                <div class="col-md-9">
                    <!-- begin post-list -->
                    <ul class="post-list">
                   
					<li>
                            <!-- begin post-left-info -->
                            
                            <!-- end post-left-info -->
                            <!-- begin post-content -->
                            <div class="post-content">
                                <!-- begin post-image -->
                                <div class="post-video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                    <?php 
						   $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
							$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
							$txt = nl2br($p->featured);
							
							echo $txt;
							
							?>
                                </div>
								</div>
                                <!-- end post-image -->
                                <!-- begin post-info -->
                                <div class="post-info">
                                    <h4 class="post-title">
                                        <a href="/public_post/{{$p->id}}" title="Latest Innovation Story">{{$p->title}}</a>
                                    </h4>
                                    <div class="post-by">
                                        Posted By: {{$p->posted_by_name}}
										</a> <span class="divider">|</span> Time Posted {{ date('D jS, M Y, h:i:s A', strtotime($p->updated_at)) }} 
                                    </div>
                                    <div class="post-desc">
                                         <?php 
									   $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
										$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
										
										if(strlen($p->summary)>200){
										$txt = nl2br(substr($p->summary,0,200));
										}else{
										$txt =$p->summary;
										}
										
										echo $txt."...";
										
										?> 
                                    </div>
                                </div>
                                <!-- end post-info -->
                                <!-- begin read-btn-container -->
                                <div class="read-btn-container">
                                   <a href="/public_post/{{$p->id}}" title="Latest Innovation Story">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                                <!-- end read-btn-container -->
                            </div>
                            <!-- end post-content -->
                        </li>
					
                        
                        
                    </ul>
                    <!-- end post-list -->
					@if(Auth::check())
					
					 <div align="center"><h2><a href="/show_news_form" title="Post an Innovation Story" style=" background-color: #333333;color: white; padding: 15px 25px;"  class="read-btn"><i class="fas fa-plus"></i>&nbsp;Post an Innovation Story</a>				<br/></h2></div>
				
				<br/>
				<br/>
				  <p align="center">  <h2>Newest Challenges</h2> </p>	 
				  
				  
				  
				  <ul class="post-list">
                   
				   @foreach($cll as $cl)
					<li>
                            <div class="post-content">
                                <!-- begin post-image -->
                                <div class="post-image">
                                    <a href="/clinical_detail/{{$cl->id}}" title="{{$cl->title}}"><img src="/mmhn/public/uploads/{{$cl->cover}}" class="cpt" align="post cover photo" /></a>
                                </div>
                                <!-- end post-image -->
                                <!-- begin post-info -->
                                <div class="post-info">
                                    <h4 class="post-title">
                                        <a href="/clinical_detail/{{$cl->id}}" title="{{$cl->title}}">{{$cl->title}}</a>
                                    </h4>
                                    <div class="post-by">
                                        Posted By: {{$cl->posted_by_name}}
										</a> <span class="divider">|</span> Time Posted {{ date('D jS, M Y, h:i:s A', strtotime($cl->updated_at)) }} 
                                    </div>
                                    <div class="post-desc">
                                         <?php 
									   $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
										$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
										
										if(strlen($cl->summary)>200){
										$txt = nl2br(substr($cl->summary,0,200));
										}else{
										$txt =$cl->summary;
										}
										
										echo $txt."...";
										
										?> 
                                    </div>
                                </div>
                                <!-- end post-info -->
                                <!-- begin read-btn-container -->
                                <div class="read-btn-container">
                                   <a href="/clinical_detail/{{$cl->id}}" title="Latest Innovation Story">Read More <i class="fa fa-angle-double-right"></i></a>
                                </div>
                                <!-- end read-btn-container -->
                            </div>
                            <!-- end post-content -->
                        </li>
					@endforeach
                        
                        
                    </ul>
					
					
				  
				  
				  
				  <div align="center"><h2><a href="/clinical_need_form" title="Post a Challenge" style=" background-color: #333333;color: white; padding: 15px 25px;"  class="read-btn"><i class="fas fa-plus"></i>&nbsp;Post a Challenge</a>				<br/></h2></div>
					 
                  @else
				  <br/>
				 <div align="center"><h2><a href="/login" title="login/register"><b>Log in/join to view and participate in solving healthcare challenges</b></a></h2></div> 
				  @endif 
                </div>
                <!-- end col-9 -->
                <!-- begin col-3 -->
				@if(Auth::check())				
               	@include("admin.sidebarhomelogin")
				@else
				 @include("admin.sidebarhome")
					
				@endif
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
		
	<style type="text/css">
	.adimg{ width:120px; height:auto;}
	</style>	
		<!-- advisory group-->
		<div  align="center" style="padding:em;">
		<div >
		
		@if(Auth::check())
		
		@else
		
		<p align="center" style="margin-top:30px !important; margin:10px;">  <h2>Advisory Group</h2> </p>	
		<div> 
	<a href="https://www.ucl.ac.uk/" title="UCL home page"><img src="/mmhn/public/uploads/ucllogo.png" class="adimg" alt="UCL logo"/></a>
	<a href="https://www.royalfree.nhs.uk/the-royal-free-hospital/" title="Royal free home page"> <img src="/mmhn/public/uploads/RFHlogo.png" class="adimg" alt="NHS Royar Foundation Logo"/> </a> 
	<a href="https://www.3dlifeprints.com/" title="3D print home page"> <img src="/mmhn/public/uploads/3dlogo.png" class="adimg" alt="3D print logo"/></a>
	<a href="https://www.paconsulting.com/" title="PA logo"> <img src="/mmhn/public/uploads/palogo.png" class="adimg" alt="PA logo"/></a>
	<a href="https://uclpartners.com/" title="UCL partners"> <img src="/mmhn/public/uploads/uclpartnerlogo.jpg" class="adimg" alt="UCL Partner Logo"/></a>
	<a href="https://www.alderheyinnovation.com/" title="Aderly Hey Children's"> <img src="/mmhn/public/uploads/nhslogo.jpg" class="adimg" alt="NHS Foundation Trust Logo"/></a>
	<a href="https://warwick.ac.uk/" title=" Warwick University home page"> <img src="/mmhn/public/uploads/Warwicklogo.jpg" class="adimg" alt="RQM Logo"/> </a>
	<a href="https://www.uclh.nhs.uk/" title="NNHS UCL"> <img src="/mmhn/public/uploads/nhslondonlogo.png" class="adimg" alt="NHS UCL logo"/> </a>
		 </div>
		
		@endif
		
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