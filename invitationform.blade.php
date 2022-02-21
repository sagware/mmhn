<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Invitation Form </title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0,  name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/assets/css/animate.min.css" rel="stylesheet" />
	<link href="/assets/css/style.min.css" rel="stylesheet" />
	
	<link href="/assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="/assets/plugins/bootstrap-wizard/css/bwizard.min.css" rel="stylesheet" />
	<link href="/assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
</head>
@include("admin.analytics")
@include("admin.header")
<body>
@if(Session::has('mailed'))
			<script type="text/javascript">
			alert("File shared successfully");
			</script>
			@endif
			@if(Session::has('msg'))
			<script type="text/javascript">
			alert("Form Submitted Successfully");
			</script>
			@endif
			
			@if(Session::has('found'))
			<script type="text/javascript">
			alert("Category with the same name exist. Please consider changing the name.");
			</script>
			@endif
			
			@if(Session::has('urlerror'))
			<script type="text/javascript">
			alert("Process encountred non-valid URL, check entry: "+ln);
			</script>
			@endif
			@if(Session::has('msg2'))
			<script type="text/javascript">
			alert("URL exist. Please try another one.");
			</script>
			@endif
			@if(Session::has('dfd'))
			<label > URL </label><br/><br/>
			@endif
			
			@if(Session::has('emp'))
			
			<script type="text/javascript">
			alert(" Error empty field selected...");
			</script>
			
			@endif
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	@include('admin.sagir')
		<!-- end #header -->
		<!-- begin #sidebar -->
		@include('partials.sidebar')
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		<style type="text/css">
	.rq{color:#FF0000}
	</style>
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			
			<!-- begin row -->
			<div class="row">
                <!-- begin col-6 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Network Invitation Form</h4>
                        </div>
                        <div class="panel-body panel-form">
                            <form  action="/add/portal" method="POST"class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="fullname">Name  <span class="rq">*</span> :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text"  name="name" value="{{$u->first_name}} {{$u->middle_name}} {{$u->last_name}}" data-parsley-required="true" readonly/>
										<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="fullname">Email  <span class="rq">*</span> :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="email"  name="email" value="{{$u->email}} " data-parsley-required="true" readonly/>
										
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="email">Affliation</label>
									<div class="col-md-6 col-sm-6">
										<input type="text" name="affiliation" class="form-control"  placeholder="e.g., University College London" required/>
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="email">Designation</label>
									<div class="col-md-6 col-sm-6">
										<input type="text" name="designation" class="form-control"  placeholder="e.g., Professor" required/>
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="email">Current Research Interst</label>
									<div class="col-md-6 col-sm-6">
										<textarea class="form-control"   name="research_interest" placeholder=" Space Seperated">
										
										</textarea>
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="email">Previous Research Interest</label>
									<div class="col-md-6 col-sm-6">
										<textarea class="form-control"   name="previous_research" placeholder=" Space Seperated">
										
										</textarea>
									</div>
								</div>
								
								
								
							
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"></label>
									<div class="col-md-6 col-sm-6">
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</div>
                            </form>
							
							 
								
								
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
                <!-- begin col-6 -->
				
				
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->
		
        <!-- begin theme-panel -->
        
        <!-- end theme-panel -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="/assets/crossbrowserjs/html5shiv.js"></script>
		<script src="/assets/crossbrowserjs/respond.min.js"></script>
		<script src="/assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="/assets/plugins/parsley/dist/parsley.js"></script>
	<script src="/assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
	
	function app(){
			$('#notapproved').css('display','block');
			$('#approved').css('display','none');
		}
		function notapp(){
			$('#approved').css('display','block');
			$('#notapproved').css('display','none');
		}
		
		$(document).ready(function() {
			App.init();
		});
	</script>
	
	<style type="text/css">
	rq{color:#FF0000}
   	  #ni{display:none;}
	  #sub{display:none;}
	  #ac{display:none;}
	  #bc{display:none;}
	  #ovrw{display:none;}
	  #newv{display:none;}
	  #approved{display:none;}
	  #notapproved{display:none;}
   </style>
</body>
</html>
