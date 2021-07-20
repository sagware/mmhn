<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
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
        <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
            <div class="theme-panel-content">
                <h5 class="m-t-0">Color Theme</h5>
                <ul class="theme-list clearfix">
                    <li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-black" data-theme="black" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
                </ul>
                <div class="divider"></div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Header Styling</div>
                    <div class="col-md-7">
                        <select name="header-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">inverse</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Header</div>
                    <div class="col-md-7">
                        <select name="header-fixed" class="form-control input-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Styling</div>
                    <div class="col-md-7">
                        <select name="sidebar-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">grid</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Sidebar</div>
                    <div class="col-md-7">
                        <select name="sidebar-fixed" class="form-control input-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Gradient</div>
                    <div class="col-md-7">
                        <select name="content-gradient" class="form-control input-sm">
                            <option value="1">disabled</option>
                            <option value="2">enabled</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Content Styling</div>
                    <div class="col-md-7">
                        <select name="content-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">black</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-12">
                        <a href="#" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage"><i class="fa fa-refresh m-r-3"></i> Reset Local Storage</a>
                    </div>
                </div>
            </div>
        </div>
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
