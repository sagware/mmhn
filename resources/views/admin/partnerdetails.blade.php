<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Partner Detail for {{ucfirst($s->first_name )}} {{ucfirst($s->middle_name )}} {{ucfirst($s->last_name) }}|Materials and Manufacturing in Healthcare Network</title>
	<meta content="width=device-width" name="viewport">
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="/assets_blog/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets_blog/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/animate.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/theme/default.css" id="theme" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
    
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets_blog/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	@include("admin.analytics")
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
    
	
            @include("admin.header")
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #header -->
    
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin container -->
        <div class="container">
            <!-- begin row -->
			<h1>{{ucfirst($s->first_name )}} {{ucfirst($s->middle_name )}} {{ucfirst($s->last_name) }}</h1>
            <div class="row row-space-30">
                <!-- begin col-9 -->
                <div class="col-md-9">
				
                    <!-- begin post-detail -->
                    
					
                                <!-- begin comment-avatar -->
								<!--image-->
                                  
                                <!-- end comment-avatar -->
                                <!-- begin comment-container -->
                                <div class="comment-container">
                                    <div class="comment-author">
								@if($s->picture=="empty.png")	
                                    <a href="#"><img align="right"src="/uploads/empty.png" alt="Default Profile Photo" height="400px" width="400px" /></a>
									@else
									<a href="#"><img align="right"src="/mmhn/public/uploads/{{$s->picture}}" alt="{{ucfirst($s->first_name )}} {{ucfirst($s->middle_name )}} {{ucfirst($s->last_name) }}" height="400px" width="400px" /></a>
									@endif
                            
                                       <!--  <a href="/partner/{{$s->id}}" title="Click to view full details">{{ucfirst($s->first_name )}} {{ucfirst($s->middle_name )}} {{ucfirst($s->last_name) }}</a> -->
                                        <span class="comment-date">
                                            Date joined <span class="underline">{{ date('D jS, M Y, h:i:s A', strtotime($s->created_at)) }}  </span>
                                        </span>
                                    </div>
									
									
									 <div >
                                  
                                    </div>
                                    <div >
                                    <b> Biography </b>
									
									 <?php 
						   $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
							$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
							$txt = nl2br($s->bio);
							
							echo $txt;
							
							?>
									
									 <br/>
                                    </div>
									
									<div >
                                   <b>  Email </b>
									 @if(Auth::check())
									<a href="mailto:{{$s->email}}"> {{$s->email}} </a>
									 @else
									 <a href="/login" href="Login/Register to view detail">Login/Register to view Detail</a>
									 @endif
									 <br/>
                                    </div>
									
									<div >
                                    <b> Sector </b>
									 
									 {{ucfirst($s->sector)}} 
									
									 <br/>
                                    </div>
									
									<div >
                                    <b> Organisation </b> 
									 
									 {{$s->institution}} 
									
									 <br/>
                                    </div>
									
									<div >
                                   <b>  Role title </b>
									
									 {{$s->designation}} 
									 
									 <br/>
                                    </div>
									
									<div >
                                    <b> Research Interests Keywords </b>
									
									<?php
									
										$uks = array();
										if( !empty(unserialize($s->keywords))){
										$uks = unserialize($s->keywords);
										}
										
										foreach($kk as $k ){
										foreach($uks as $uk ){
										
										if($uk  ==  $k->id){ echo $k->name."; ";}
										}
										
										}
										
										 ?>
										{{$s->other_keyword}}
									 
									 <br/>
                                    </div>
									
									<div >
                                   <b>  LinkedIn </b>
									@if(Auth::check())
									 <a href="{{$s->linkedin}}" title="linkedIn Page" /> {{$s->linkedin}} </a>
									 @else
									 <a href="/login" href="Login/Register to view detail">Login/Register to view Detail</a>
									 @endif
									
									 <br/>
                                    </div>
									
									<div >
                                    <b> Twitter </b>
									@if(Auth::check())
									<a href="{{$s->twitter}}" title="Twitter page"> {{$s->twitter}} </a>
									 @else
									 <a href="/login" href="Login/Register to view detail">Login/Register to view Detail</a>
									 @endif
									 <br/>
                                    </div>
									
									<div >
                                    <b> Webpage </b>
									@if(Auth::check())
									<a href="{{$s->webpage}}" title="Web page" >{{$s->webpage}} </a>
									 @else
									 <a href="/login" href="Login/Register to view detail">Login/Register to view Detail</a>
									 @endif
									 <br/>
                                    </div>
									
									
									<br/>
									<div><h2>Challenges submitted by: {{ucfirst($s->first_name )}} {{ucfirst($s->middle_name )}} {{ucfirst($s->last_name) }}</h2></div>
									
									@if($ctc >0)
									@if(Auth::check())
									
											@foreach($pk as $p)
											@if($p->category=="need")
											<h3> <a href="/clinical_detail/{{$p->id}}" title="{{$p->title}}">{{$p->title}}</a> </h3>
											@endif
											
											@endforeach
                                    
									@else
									Login/Register to view Detail
									@endif
									@else
									No challenge submission
									@endif
									
									
									
									<div>News submitted by: {{ucfirst($s->first_name )}} {{ucfirst($s->middle_name )}} {{ucfirst($s->last_name) }}</div>
									
									@if($ctn >0)
									
									
											@foreach($pk as $p)
											@if($p->category=="news")
											 <a href="/public_post/{{$p->id}}" title="{{$p->title}}">{{$p->title}}</a> 
											@endif
											
											@endforeach
                                    
									
									@else
									No grants submission
									@endif
									
									
									<div>Events submitted by: {{ucfirst($s->first_name )}} {{ucfirst($s->middle_name )}} {{ucfirst($s->last_name) }}</div>
									
									@if($cte >0)
									
									
											@foreach($pk as $p)
											@if($p->category=="event")
											 <a href="/public_post/{{$p->id}}" title="{{$p->title}}">{{$p->title}}</a> 
											@endif
											
											@endforeach
                                    
									
									@else
									No events submission
									@endif
									
									<div>Grants submitted by: {{ucfirst($s->first_name )}} {{ucfirst($s->middle_name )}} {{ucfirst($s->last_name)}} </div>
									
									@if($ctg >0)
									
									
											@foreach($pk as $p)
											@if($p->category=="grant")
											<a href="/public_post/{{$p->id}}" title="{{$p->title}}">{{$p->title}}</a> 
											@endif
											
											@endforeach
                                    
									
									@else
									No grants submission
									@endif
									
									
                                    <div class="comment-rating">
                                       <!--
                                        <a href="#" class="m-l-10 text-inverse"><i class="fa fa-thumbs-up text-success"></i> 2</a> 
                                        <a href="#" class="m-l-10 text-inverse"><i class="fa fa-thumbs-down text-danger"></i> 0</a>
										<a href="#" class="m-l-10 text-inverse"><i class="fa fa-2x fa-cloud-download"></i> 0</a>
										-->
                                    </div>
                                </div>
                                <!-- end comment-container -->
                           
                    <!-- end post-detail -->
                    
                    <!-- begin section-container -->
					
                    <!-- comment containter-->
					
					
                    <!-- end section-container -->
                    
                    <!-- begin section-container -->
                    <!--comment form-->
                    <!-- end section-container -->
                </div>
                <!-- end col-9 -->
                <!-- begin col-3 -->
              
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #content -->
    
    <!-- begin #footer -->
    @include("admin.footer")
    <!-- end #footer -->
    <!-- begin #footer-copyright -->
   
    
	<script src="/assets_blog/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="/assets_blog/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	
	
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