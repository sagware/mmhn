<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Partners|Materials and Manufacturing in Healthcare Network</title>
	<meta content="width=device-width" name="viewport">
	<meta content="" name="description" />
	<meta content="" name="author" />
	@include("admin.cookiebanner")
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
	<style>
	.img{
	height:100%;
	width:auto;
	}
	</style>
</head>
<body>
@include("admin.cookiebanner")
    <!-- begin #header -->
   
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
                  <h1>Partners</h1> <a href="/academic/partners" style=" background-color: #333333;color: white; padding: 15px 25px;" title="Academic Partners"><label for="bt1">Academic</label></a> |<a href="/industry/partners" style=" background-color: #333333;color: white; padding: 15px 25px;" title="Industry partners"><label for="bt2">Industry</label></a> | <a href="/clinical/partners" title="Clinical partners" style=" background-color: #333333;color: white; padding: 15px 25px;"><label id="bt3">Clinical</label></a> |<a href="/other/partners" title="Other category partners" style=" background-color: #333333;color: white; padding: 15px 25px;"><label id="bt4">Others </label></a>  | <a href="/partnerslist" title="All Partners List" style=" background-color: #333333;color: white; padding: 15px 25px;"><label id="bt5">All</label></a>
					<br/><br/>
					
					<div class="section-container">
					
                        <h2 class="section-title"><span>Fetched Partners ({{number_format($c)}})</span></h2>
                        <!-- begin comment-list -->
                        <ul class="comment-list">
                            
							@foreach($ss as $s)
							@if($s->status=="0")
                            <li>
                                <!-- begin comment-avatar -->
								<!--image-->
                                  
                                <!-- end comment-avatar -->
                                <!-- begin comment-container -->
                                <div class="comment-container">
                                    <div class="comment-author">
								@if($s->picture=="empty.png")
								<div>	
                                    <a href="/partner/{{$s->id}}"><img align="right"src="/uploads/empty.png" alt="Default Profile Photo"  height="200px" width="200px"  /></a>
									</div>
									@else
									<div>	
									<a href="/partner/{{$s->id}}"><img align="right"src="/mmhn/public/uploads/{{$s->picture}}" alt="{{ucfirst($s->first_name )}} {{ucfirst($s->middle_name )}} {{ucfirst($s->last_name) }}" height="200px" width="200px" /></a>
									</div>
									@endif
                            
                                         <a href="/partner/{{$s->id}}"  title="Click to view full details including submissions">{{ucfirst($s->first_name )}} {{ucfirst($s->middle_name )}} {{ucfirst($s->last_name) }}</a>
                                        <span class="comment-date">
                                          <!--  Date joined <span class="underline">{{ date('D jS, M Y, h:i:s A', strtotime($s->created_at)) }}  -->
										  </span>
                                        </span>
                                    </div>
									
									
									 <div >
                                  
                                    </div>
									
									@if(!empty($s->bio))
                                    <div >
                                    <b> Biography </b>
									 <?php 
							if(strlen($s->bio) > 200){
						   $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
							$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
							$txt = nl2br(substr($s->bio,0,200));
							
							echo $txt."...";
							}else{
							 $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
							$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
							$txt = nl2br($s->bio);
							
							
							}
							
							?>
									 <br/>
                                    </div>
									@endif
									
									
									
									@if(!empty($s->email))
									<div >
                                   <b>  Email </b>
									 @if(Auth::check())
									<a href="mailto:{{$s->email}}"> {{$s->email}} </a>
									 @else
									 <a href="/login" href="Login/Register to view detail">Login/Register to view Detail</a>
									 @endif
									 <br/>
                                    </div>
									@endif
									
									
									@if(!empty($s->sector))
									<div >
                                    <b> Sector </b>
									 
									 {{ucfirst($s->sector)}} 
									
									 <br/>
                                    </div>
									@endif
									
									@if(!empty($s->institution))
									<div >
                                    <b> Organisation </b> 
									 
									 {{$s->institution}} 
									
									 <br/>
                                    </div>
									@endif
									
									
									@if(!empty($s->designation))
									<div >
                                   <b>  Role title </b>
									
									 {{$s->designation}} 
									 
									 <br/>
                                    </div>
									@endif
									
									
									@if(!empty($s->keywords))
									<div >
                                    <b> Research Interests Keywords </b>
									
									<?php
									
										$uks = array();
										$ct =0;
										if( !empty(unserialize($s->keywords))){
										$uks = unserialize($s->keywords);
										$ct = count(unserialize($s->keywords));
										}
										
										
										$e = 0;
										foreach($kk as $k ){
										foreach($uks as $uk ){
										
										if($uk  ==  $k->id){ 
										$e++;
										if($e <$ct){										
										echo $k->name."; ";
										}
										else {
										echo $k->name;
										}
										}
									}
										
										}
										
										 ?>
										{{$s->other_keyword}}
									 
									 <br/>
                                    </div>
									@endif
									
									
									@if(!empty($s->linkedin))
									<div >
                                   <b>  LinkedIn </b>
									@if(Auth::check())
									 <a href="{{$s->linkedin}}" title="linkedIn Page" target="_blank" /> {{$s->linkedin}} </a>
									 @else
									 <a href="/login" href="Login/Register to view detail">Login/Register to view Detail</a>
									 @endif
									
									 <br/>
                                    </div>
									@endif
									
									
									@if(!empty($s->twitter))
									<div >
                                    <b> Twitter </b>
									@if(Auth::check())
									<a href="{{$s->twitter}}" title="Twitter page" target="_blank"> {{$s->twitter}} </a>
									 @else
									 <a href="/login" href="Login/Register to view detail">Login/Register to view Detail</a>
									 @endif
									 <br/>
                                    </div>
									@endif
									
									
									@if(!empty($s->webpage))
									<div >
                                    <b> Webpage </b>
									@if(Auth::check())
									<a href="{{$s->webpage}}" title="Web page" target="_blank" >{{$s->webpage}} </a>
									 @else
									 <a href="/login" href="Login/Register to view detail">Login/Register to view Detail</a>
									 @endif
									 <br/>
                                    </div>
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
                            </li>
							@endif
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