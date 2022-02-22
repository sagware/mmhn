<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Search Innovation Stories|Materials and Manufacturing in Healthcare Network</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0,  name="viewport" />
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
	<!-- ================== END BASE CSS STYLE ================== -->
    <script src="https://kit.fontawesome.com/813c025c0f.js" crossorigin="anonymous"></script>
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets_blog/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	<style>
	html {

    height: 100%;

}

body {

    min-height: 100% ;

    display: flex;

    flex-direction: column;

}

.content {

    flex-grow: 1;

}
	</style>
</head>
<body>
@include("admin.cookiebanner")
    
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
				@if($cat=="news")
				<p> <h1>News</h1></p>
				@elseif($cat=="event")
				<p> <h1>Events</h1></p>
				@elseif($cat=="grant")
				<p> <h1>Grants</h1></p>
				@endif
                <div class="col-md-9">
                    <!-- begin post-list -->
					<div align="right">
					<a href="/clinical_need_form"><i class="fas fa-plus"></i>Submit Challenge</a>
					
					</div>
					<br/>
					
                    <div class="post-list post-grid post-grid-2">
                        @if(sizeof($pp)==0)
					<p class="text-danger">	No content found</p>
						@else
						@foreach($pp as $p)
                        <div class="post-li">
                            <!-- begin post-content -->
                            <div class="post-content">
                                <!-- begin post-image -->
                                <div class="post-image">
                                   @if(!empty($p->cover))
                                    <a href="/clinical_detail/{{$p->id}}"><img src="/mmhn/public/uploads/{{$p->cover}}" alt="{{$p->title}}" height="100%" width="100%" /></a>
								@else
								<a href="/clinical_detail/{{$p->id}}"><img src="/mmhn/public/uploads/empty.png" height="100%" width="100%" alt="{{$p->title}}" /></a>
								@endif
                                </div>
                                <!-- end post-image -->
                                <!-- begin post-info -->
                                <div class="post-info">
                                    <h4 class="post-title">
                                        <a href="/clinical_detail/{{$p->id}}" title="Click to view post">{{$p->title}}</a>
                                    </h4>
                                    <div class="post-by">
                                        Posted By {{$p->posted_by_name}}
									
										</a> <span class="divider">|</span> {{ date('D jS, M Y, h:i:s A', strtotime($p->updated_at)) }} 
                                    </div>
                                   
                                    <div class="read-btn-container">
									@if(Auth::check())
									@if(Auth::user()->id == $p->posted_by || Auth::user()->role=="admin")
									<a href="/showeditneed/{{$p->id}}" title="Edit" class="read-btn"><button >Edit</button> </a>
									@endif
									@endif
                                        <a href="/clinical_detail/{{$p->id}}" title="Read more" class="read-btn">View Detail <i class="fa fa-angle-double-right"></i></a>
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
                @include("admin.sidebarneed")
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