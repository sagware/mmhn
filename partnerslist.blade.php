<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Materials and Manufacturing in Healthcare Network</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	@include("admin.analytics")
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http:/fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
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
</head>
<body>
@include("admin.cookiebanner")
    <!-- begin #header -->
    <div id="header" class="header navbar navbar-default navbar-fixed-top">
        <!-- begin container -->
        <div class="container">
            <!-- begin navbar-header -->
            <div class="navbar-header">
               
            </div>
            <!-- end navbar-header -->
            <!-- begin navbar-collapse -->
            @include("admin.header")
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #header -->
    
    <!-- begin #page-title -->
    
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
                   Partners: <button class="read-btn"><a href="/academic/partners" title="Academic Partners">Academic</a></button> |<button class="read-btn"><a href="/industry/partners" title="Industry partners">Industry</a></button> | <button class="read-btn"><a href="/clinical/partners" title="Clinical partners">Clinical</a></button> | <button class="read-btn"><a href="/other/partners" title="Other category partners">Others </a></button>  | <button class="read-btn"><a href="/partnerslist" title="All Partners List">All</a></button>
					<br/><br/>
					
					<div class="section-container">
					
                        <h4 class="section-title"><span>Registered Partners ({{number_format($c)}})</span></h4>
                        <!-- begin comment-list -->
                        <ul class="comment-list">
                            
							@foreach($ss as $s)
                            <li>
                                <!-- begin comment-avatar -->
								<!--image-->
                                  
                                <!-- end comment-avatar -->
                                <!-- begin comment-container -->
                                <div class="comment-container">
                                    <div class="comment-author">
								@if($s->picture=="empty")	
                                    <a href="#"><img align="right"src="/uploads/empty.png" alt="" height="200px" width="200px" /></a>
									@else
									<a href="#"><img align="right"src="/uploads/{{$s->picture}}" alt="" height="200px" width="200px" /></a>
									@endif
                            
                                         <a href="#" title="Partner's Name">{{ucfirst($s->first_name )}} {{ucfirst($s->middle_name )}} {{ucfirst($s->last_name) }}</a>
                                        <span class="comment-date">
                                            Date joined <span class="underline">{{ date('D jS, M Y, h:i:s A', strtotime($s->created_at)) }}  </span>
                                        </span>
                                    </div>
									
									
									 <div >
                                  
                                    </div>
                                    <div >
                                    <b> Biography: </b>
									
									 {{$s->bio}} 
									
									 <br/>
                                    </div>
									
									<div >
                                   <b>  Email: </b>
									 @if(Auth::check())
									<a href="mailto:{{$s->email}}"> {{$s->email}} </a>
									 @else
									 <a href="/login" href="Login/Register to view detail">Login/Register to view Detail</a>
									 @endif
									 <br/>
                                    </div>
									
									<div >
                                    <b> Sector: </b>
									 
									 {{ucfirst($s->sector)}} 
									
									 <br/>
                                    </div>
									
									<div >
                                    <b> Organisation: </b> 
									 
									 {{$s->institution}} 
									
									 <br/>
                                    </div>
									
									<div >
                                   <b>  Role title: </b>
									
									 {{$s->designation}} 
									 
									 <br/>
                                    </div>
									
									<div >
                                    <b> Research Interests Keywords: </b>
									
									<?php
									
										$uks = array();
										if( !empty(unserialize($s->keywords))){
										$uks = unserialize($s->keywords);
										}
										
										foreach($kk as $k ){
										foreach($uks as $uk ){
										
										if($uk  ==  $k->id){ echo $k->name.", ";}
										}
										
										}
										
										 ?>
										{{$s->other_keyword}}
									 
									 <br/>
                                    </div>
									
									<div >
                                   <b>  LinkedIn: </b>
									@if(Auth::check())
									 <a href="{{$s->linkedin}}" title="linkedIn Page" /> {{$s->linkedin}} </a>
									 @else
									 <a href="/login" href="Login/Register to view detail">Login/Register to view Detail</a>
									 @endif
									
									 <br/>
                                    </div>
									
									<div >
                                    <b> Twitter: </b>
									@if(Auth::check())
									<a href="{{$s->twitter}}" title="Twitter page"> {{$s->twitter}} </a>
									 @else
									 <a href="/login" href="Login/Register to view detail">Login/Register to view Detail</a>
									 @endif
									 <br/>
                                    </div>
									
									<div >
                                    <b> Webpage: </b>
									@if(Auth::check())
									<a href="{{$s->webpage}}" title="Web page" >{{$s->webpage}} </a>
									 @else
									 <a href="/login" href="Login/Register to view detail">Login/Register to view Detail</a>
									 @endif
									 <br/>
                                    </div>
									
									
									
									
                                    
                                    <div class="comment-rating">
                                       <!--
                                        <a href="#" class="m-l-10 text-inverse"><i class="fa fa-thumbs-up text-success"></i> 2</a> 
                                        <a href="#" class="m-l-10 text-inverse"><i class="fa fa-thumbs-down text-danger"></i> 0</a>
										<a href="#" class="m-l-10 text-inverse"><i class="fa fa-2x fa-cloud-download"></i> 0</a>
										-->
                                    </div>
                                </div>
                                <!-- end comment-container -->
                            </li>
							@endforeach
                        </ul>
                        <!-- end comment-list -->
                    </div>
                    <!-- end post-list -->
                   
                    <div class="section-container">
                        <!-- begin pagination -->
                        <div class="pagination-container text-center">
                            {{ $ss->links() }}
                        </div>
                        <!-- end pagination -->
                    </div>
                </div>
                <!-- end col-9 -->
                <!-- begin col-3 -->
                @include('admin.sidebarpartner')
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
		</div>
    <!-- end #content -->
    
    <!-- begin #footer -->
    @include("admin.footer")
    
    <!-- end theme-panel -->
    
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