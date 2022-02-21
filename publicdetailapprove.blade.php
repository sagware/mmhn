<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Post Approval| Materials and Manufacturing in Healthcare Network</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0,  name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	@include("admin.analytics")
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="/assets_blog/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets_blog/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/animate.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/theme/default.css" id="theme" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
    
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets_blog/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	@if(Session::has('approve'))
			<script type="text/javascript">
			alert("Action completed");
			</script>
	@endif
	
	@if(Session::has('reject'))
			<script type="text/javascript">
			alert("Action completed");
			</script>
	@endif
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
    
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin container -->
        <div class="container">
            <!-- begin row -->
            <div class="row row-space-30">
                <!-- begin col-9 -->
                <div class="col-md-9">
                    <!-- begin post-detail -->
                    <div class="post-detail section-container">
                        
                        <h1 class="post-title">
                          {{$p->title}}
                        </h1>
						
						@if(Auth::check())
											@if(Auth::user()->id == $p->posted_by || Auth::user()->role=="admin")
											<a href="/showeditpublic_stories/{{$p->id}}" title="Edit" class="read-btn"><button >Edit</button> </a>
											@endif
									@endif
						
                        <div class="post-by">
                            Posted By <a href="/partner/{{$p->id}}">{{$p->posted_by_name}}</a> &nbsp;&nbsp; {{ date('D jS, M Y, h:i:s A', strtotime($p->updated_at)) }} 
                        </div>
                        <!-- begin post-image -->
						<img src="/mmhn/public/uploads/{{$p->pic}}" align="post cover photo" height="500px" width="500px"/> <br/>
						
						<b>Summary:</b> <br/>
						 <blockquote>
						 
						 <?php 
						   $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
							$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
							$txt = nl2br($p->summary);
							
							echo $txt;
							
							?>
                                    
                                </blockquote>
								<br/>
							
								
                        
                        <!-- end post-image -->
                        <!-- begin post-desc -->
                        <div class="post-desc">
                           <?php 
						   $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
							$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
							$txt = nl2br($p->news_body);
							
							echo $txt;
							
							?>
                        </div>
						
					
                       
                        <!-- end post-desc -->
                    </div>
                    <!-- end post-detail -->
                    
                  <a href="/approve_need/{{$p->id}}" title="Click here to approve post"><button class="btn btn-primary">Approve</button></a> 
				   <a href="javascript:;" onClick="reject({{$p->id}})" title="Click here to reject post"><button class="btn btn-primary">Reject</button></a>
				   
				   <a href="javascript:;" onClick="revise({{$p->id}})" title="Click here to reject post"><button class="btn btn-primary">Request for a revision</button></a>
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
    <!-- end #footer -->
    <!-- begin #footer-copyright -->
   
    
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets_blog/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="/assets_blog/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="/assets_blog/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="/assets_blog/crossbrowserjs/html5shiv.js"></script>
		<script src="/assets_blog/crossbrowserjs/respond.min.js"></script>
		<script src="/assets_blog/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="/assets_blog/plugins/jquery-cookie/jquery.cookie.js"></script>
	<script src="/assets_blog/js/apps.min.js"></script>
	<script src="/assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="/assets/plugins/DataTables/extensions/KeyTable/js/dataTables.keyTable.min.js"></script>
	<script src="/assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="/assets/js/table-manage-keytable.demo.min.js"></script>
	<script src="/assets/js/bootbox.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<script>
	function reject(p_id){
	//alert(y);
	
			$('#yloader').show();
	
			frmstring = '<form action="/reject_need" method="POST" enctype="multipart/form-data"><div><input type="hidden" name="_token" value="{{ csrf_token() }}"/></div><div id="bc">Message: <textarea class="form-control" name="message" /></textarea><br/><input type="hidden" value='+p_id+' name="pid"/><button class="btn btn-primary"> Submit Rejection</button></div></div></form/>';
			
			bootbox.dialog({
				title: 'Rejection Form',
				size:'medium',
				message: frmstring
			 });
				
				
			
	} //
	
	
	function revise(p_id){
	//alert(y);
	
			$('#yloader').show();
	
			frmstring = '<form action="/revise_need" method="POST" enctype="multipart/form-data"><div><input type="hidden" name="_token" value="{{ csrf_token() }}"/></div><div id="bc">Message: <textarea class="form-control" name="message" /></textarea><br/><input type="hidden" value='+p_id+' name="pid"/><button class="btn btn-primary"> Submit Revision Request</button></div></div></form/>';
			
			bootbox.dialog({
				title: 'Revision Request Form',
				size:'medium',
				message: frmstring
			 });
				
				
			
	} //
	</script>
	
	<script>
	    $(document).ready(function() {
	        App.init();
	    });
	</script>
</body>
</html>