<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>All Innovation Stories|Materials and Manufacturing in Healthcare Innovation Network</title>
	<meta content="width=device-width" name="viewport">
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
    <script src="https://kit.fontawesome.com/813c025c0f.js" crossorigin="anonymous"></script>
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets_blog/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
    <!-- begin #header -->
   
            
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
				 <p><h1>Innovation Stories</h1></p>
                <div class="col-md-9">
				<div align="right">
				<a href="/show_news_form" title="Submit News" style=" background-color: #333333;color: white; padding: 15px 25px;"  class="read-btn"><i class="fas fa-plus"></i>&nbsp;Submit Innovation Story</a>
				<br/>
				<br/>
				<br/>
				</div>
                    <!-- begin post-list -->
                    <div class="post-list post-grid post-grid-2">
                        @if(sizeof($pp)==0)
						<p align="center" class="text-danger">No content found</p>
						@else
						@foreach($pp as $p)
                        <div class="post-li">
                            <!-- begin post-content -->
                            <div class="post-content">
                                <!-- begin post-image -->
                                <div class="post-image">
								
                                    <a href="/public_post/{{$p->id}}"><img src="/mmhn/public/uploads/{{$p->pic}}"  alt="{{$p->title}}" /></a>
                                </div>
                                <!-- end post-image -->
                                <!-- begin post-info -->
                                <div class="post-info">
                                    <h2 class="post-title">
                                        <a href="/public_post/{{$p->id}}" title="Click to view post">{{$p->title}}</a>
                                    </h2>
                                    <div class="post-by">
                                        Posted By: {{$p->posted_by_name}}<br/>
										 Category: {{$p->category}}
										
										</a> <span class="divider">|</span> Time Posted {{ date('D jS, M Y, h:i:s A', strtotime($p->updated_at)) }} 
                                    </div>
                                    @if(!empty($p->summary))
                                    <div class="post-desc">
                                        
										
										 <?php 
									   $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
										$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
										
										if(strlen($p->summary)>47){
										$txt = nl2br(substr($p->summary,0,47));
										}else{
										$txt =$p->summary;
										}
										
										echo $txt."...";
										
										?>
							
										
										
                                    </div>
									@endif
                                    <div class="read-btn-container">
									@if(Auth::check())
											@if(Auth::user()->id == $p->posted_by || Auth::user()->role=="admin")
											<a href="/showeditpublic_stories/{{$p->id}}" title="Edit" class="read-btn">Edit </a> |
											@endif
									@endif
                                        <a href="/public_post/{{$p->id}}" title="Read more" class="read-btn">Read More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                                <!-- end post-info -->
                            </div>
                            <!-- end post-content -->
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <!-- end post-list -->
                    
                    <div class="section-container">
                        <!-- begin pagination -->
                        <div class="pagination-container text-center">
                             {{ $pp->links() }}
                        </div>
                        <!-- end pagination -->
                    </div>
                </div>
                <!-- end col-9 -->
                <!-- begin col-3 -->
                @include("admin.sidebar")
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
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