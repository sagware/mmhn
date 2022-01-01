<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Materials and Manufacturing in Healthcare Network Users List <?php echo date('d/M/Y h:m');?></title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
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
	<script src="/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	
	<script src="/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="/assets/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css" rel="stylesheet" />
	<link href="/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	@include("admin.cookiebanner")
	@include("admin.analytics")
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>

			@if(Session::has('mailed'))
			<script type="text/javascript">
			alert("File shared successfully");
			</script>
			@endif
			@if(Session::has('reject'))
			<script type="text/javascript">
			alert("User rejected successfully");
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
			
			@if(Session::has('emp'))
			
			<script type="text/javascript">
			alert(" Error empty field selected...");
			</script>
			
			@endif
			
			
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	@include('admin.sagir')
		<!-- end #header -->
		</div></div>
		<!-- begin #sidebar -->
		@include('partials.sidebar')
		
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-2 -->
			    
			    <!-- end col-2 -->
			    <!-- begin col-10 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">All Users Records</h4>
                        </div>
						
						 <div class="email-btn-row hidden-xs">
					<br/>
					<!--
                        <a href="/showSourcePortal" class="btn btn-sm btn-inverse" ><i class="fa fa-plus m-r-5"></i> Add a Source Portal</a> 
-->
						
						
                        
                    </div>
					
                      
                        <div class="panel-body">
                            <table id="data-table" class="table table-striped table-bordered display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
										<th>S/N</th>
                                        <th>Name</th>
                                        <th>Biography/Background</th>
										<th>Email</th>
										<th>Research Interest Keywords</th>
										<th>Institution</th>
										<th>Reason for Joining</th>
										<th>Invitation Status</th>
										<th>Send Network Invitation</th>
                                        <th>Change Admin Status</th>
										<th>Role</th>
                                        <th>Enable/Disable User</th>
										<th>Date registered</th>
										
                                    </tr>
                                </thead>
                                <tbody>
								  <?php $ct = 1; ?>
								{{--pr($gra,true)--}}
								@foreach($gra as $g)
                                    <tr >
										<td>{{$ct}}</td>
                                        <td>{{$g->first_name}}  {{$g->middle_name}} {{$g->last_name}}</td>
										<td>
										 <?php 
						   $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
							$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
							$txt = nl2br($g->bio);
							
							echo $txt;
							
							?>
										</td>
										<td>{{$g->email}}</td>
										<td><?php
										$uks = array();
										if( !empty(unserialize($g->keywords))){
										$uks = unserialize($g->keywords);
										}
										
										foreach($kk as $k ){
										foreach($uks as $uk ){
										if($uk  ==  $k->id){echo $k->name.", ";}
										}
										
										}
										
										 ?>
										 custom keyword: {{$g->other_keyword}}
										 </td>
                                        <td>{{$g->institution}}</td>
										<td>{{$g->joining_reason}}</td>
										 <td>
								    @if($g->iv_status == "1")
									<button type="button" class="btn btn-danger m-r-5 m-b-5">Sent</button>
									@else
									<button type="button" class="btn btn-primary m-r-5 m-b-5">Not Invited</button>
									@endif
									</td>
									<?php $code = generateRandomString(20);?>
									<td><a  href="/sendinvitation/{{$code}}/{{$g->id}}">	<button type="button" class="btn btn-primary m-r-5 m-b-5">Send Invitation to Network</button></a> | <a  href="javascript:;" onClick="reject({{$g->id}})">	<button type="button" class="btn btn-primary m-r-5 m-b-5">Send Rejection</button></a></td>
                                        <td>
										@if($g->role=="user")
										<a  href="/makeadmin/{{$g->id}}">	<button type="button" class="btn btn-primary m-r-5 m-b-5">Change to Admin</button></a>
										@elseif($g->role=="admin")
										<a  href="/makeuser/{{$g->id}}">	<button type="button" class="btn btn-primary m-r-5 m-b-5">Change to User</button></a>
										@endif
										</td>
										
										<td>{{$g->role}}</td>
										 <td>
										 
									@if($g->status == "1")
								<a href="/enableuser/{{$g->id}}">	<button type="button" class="btn btn-primary m-r-5 m-b-5">Enable</button></a>
									@else
									<a href="/disableuser/{{$g->id}}">
									<button type="button" class="btn btn-danger m-r-5 m-b-5">Disable</button></a>
									@endif</td>
										
										<td>
										
										{{ date('D jS, M Y, h:i:s A', strtotime($g->created_at)) }}</td>
										
                                    </tr>
									<?php $ct++; ?>
                                 @endforeach  
								 <?php $ct++; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-10 -->
            </div>
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
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="/assets/js/bootbox.min.js"></script>
	<!--[if lt IE 9]>
		<script src="/assets/crossbrowserjs/html5shiv.js"></script>
		<script src="/assets/crossbrowserjs/respond.min.js"></script>
		<script src="/assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="/assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="/assets/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
	<script src="/assets/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
	<script src="/assets/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js"></script>
	<script src="/assets/plugins/DataTables/extensions/Buttons/js/jszip.min.js"></script>
	<script src="/assets/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js"></script>
	<script src="/assets/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js"></script>
	<script src="/assets/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js"></script>
	<script src="/assets/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js"></script>
	<script src="/assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="/assets/js/table-manage-buttons.demo.min.js"></script>
	<script src="assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
	
	function reject(p_id){
	//alert(y);
	
			$('#yloader').show();
	
			frmstring = '<form action="/reject_user" method="POST" enctype="multipart/form-data"><div><input type="hidden" name="_token" value="{{ csrf_token() }}"/></div><div >Message: <textarea class="form-control" name="message" /></textarea><br/><input type="hidden" value='+p_id+' name="pid"/><button class="btn btn-primary"> Submit Rejection</button></div></div></form/>';
			
			bootbox.dialog({
				title: 'Rejection Form',
				size:'medium',
				message: frmstring
			 });
				
				
			
	} //
	$(document).ready(function() {
			App.init();
			TableManageButtons.init();
		});

	</script>
	<style type="text/css">
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
