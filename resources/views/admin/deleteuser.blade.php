<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Delete User | Materials and Manufacturing in Healthcare Network</title>
	<meta content="width=device-width" name="viewport">
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
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
	@include("admin.analytics")
</head>

<body>

@if(Session::has('need'))
			<script type="text/javascript">
			alert("Challenge/Need submitted successfully");
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
    
    <!-- begin #page-title -->
    
    <!-- end #page-title -->
    
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin container -->
        <div class="container">
            <!-- begin row -->
            <div class="row row-space-30">
                <!-- begin col-9 -->
				<p><h1>Delete Partner</h1></p>
                <div class="col-md-12">
                    <!-- begin section-container -->
                    <div class="section-container">
                        
                      
             Are you sure you want to delete this partner's records? <br/>
			 
			  <form action="/deletingpartner" method="POST"  enctype="multipart/form-data" class="margin-bottom-0">
					
					
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="checkbox" name="partner" id="pt"  checked/> <label class="control-label" for="pt">Delete from partners list </label></label>
                            </div>
                        </div>
						
						 <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="checkbox" name="challenges" id="challenges"  checked/> <label class="control-label" for="challenges">Delete all challenges submissions</label></label>
                            </div>
                        </div>
						
						
						<div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="checkbox" name="news" id="news"  checked/> <label  for="challenges">Delete all news submissions </label></label>
                            </div>
                        </div>
						<input type="hidden" name="uid" value="{{$uid}}">
						
						<div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="checkbox" name="events" id="news" checked/> <label class="control-label" for="challenges">Delete all events submissions </label></label>
                            </div>
                        </div>
						
						<div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="checkbox" id="news"  checked/> <label  for="challenges" name="grants">Delete all grants submissions </label></label>
                            </div>
                        </div>
						
						<div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="checkbox" id="comments"  checked/> <label class="control-label" for="comments" name="comments">Delete all comments submissions </label></label>
                            </div>
                        </div>
						<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
						
						<div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="checkbox" id="replies"  checked/> <label class="control-label" for="replies" name="replies">Delete all replies submissions </label></label>
                            </div>
                        </div>
						
						
			 <button  type="submit" >Yes</button>| <button  ><a href="/dashboard" title="Challenges">No</a></button>
						
						
                    </div>
                    <!-- end section-container -->
                </div>
                <!-- end col-9 -->
                <!-- begin col-3 -->
                {{--@include('admin.sidebar')--}}
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