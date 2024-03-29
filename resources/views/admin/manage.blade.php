<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<meta content="width=device-width" name="viewport">
@include('partials.header')
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		@include('partials.top')
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		@include('partials.sidebar')
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			
			<!-- end page-header -->
			
			<!-- begin row -->
			
			
			@if(Session::has('mailed'))
			<script type="text/javascript">
			alert("File shared successfully");
			</script>
			@endif
			@if(Session::has('msg'))
			<script type="text/javascript">
			alert("Action Completed");
			</script>
			@endif
			@if(Session::has('dl'))
			<script type="text/javascript">
			alert("File Completed");
			</script>
			@endif
			@if(Session::has('msg_file'))
			<label > File created successfully...</label><br/><br/>
			@endif
			
			
            <!-- end row -->
            <!-- begin row -->
            <div class="row">
			
			
			    <!-- begin col-6 -->
			    <div class="col-md-10">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-3">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Update your login credentials</h4>
                        </div>
                        <div class="panel-body">
                            <form action="/manage/me" method="POST">
                                <fieldset>

	                                
                                   
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input type=text" name="name" class="form-control" id="exampleInputEmail1" value="{{Auth::user()->first_name}}"  placeholder="Enter first name" required/>
                                    </div>
									
									<div class="form-group">
                                        <label for="exampleInputEmail1">Middle Name</label>
                                        <input type=text" name="middle_name" class="form-control" id="exampleInputEmail1" value="{{Auth::user()->middle_name}}"  placeholder="Enter middle name"/>
                                    </div>
									
									<div class="form-group">
                                        <label for="exampleInputEmail1">Last Name</label>
                                        <input type=text" name="last_name" class="form-control" id="exampleInputEmail1" value="{{Auth::user()->last_name}}"  placeholder="Enter last name" required/>
                                    </div>
									

                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{Auth::user()->email}}"  placeholder="Enter email" required/>
                                    </div>
									
									
									
									<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
									
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required/>
                                    </div>
									
                                    <div class="checkbox">
                                        
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-primary m-r-5">Update credentials</button>
                                   
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
			    <!-- begin col-6 -->
			    
                <!-- end col-6 -->
            </div>
            <!-- end row -->
            <!-- begin row -->
            
            <!-- end row -->
			<!-- begin row -->
			
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
	
	<script src="/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="/assets/plugins/parsley/dist/parsley.js"></script>
	<script src="/assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="/assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="/assets/plugins/DataTables/extensions/KeyTable/js/dataTables.keyTable.min.js"></script>
	<script src="/assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="/assets/js/table-manage-keytable.demo.min.js"></script>
	<script src="/assets/js/apps.min.js"></script>
	<script src="/assets/js/bootbox.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<script>
	//for folder creation
	
	
		
		//for data table
		
			$(document).ready(function() {
				App.init();
				TableManageKeyTable.init();
				
			});
			
			
			
			
			
				
	</script>
	
	
   <style type="text/css">
   	  #ni{display:none;}
	  #sub{display:none;}
	  #ac{display:none;}
	  #bc{display:none;}
	  #ovrw{display:none;}
	  #newv{display:none;}
   </style>
	
	
</body>
</html>
