<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Challenges List| Materials and Manufacturing in Healthcare Innovation Network Challenges/Needs List <?php echo date('d/M/Y h:m');?></title>
	<meta content="width=device-width" name="viewport">
	<meta content="" name="description" />
	<meta content="" name="author" />
	@include("admin.cookiebanner")
	@include("admin.analytics")
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
	@include("admin.analytics")
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="/assets/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css" rel="stylesheet" />
	<link href="/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
@include("admin.cookiebanner")

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
			@if(Session::has('ptrequest'))
			<script type="text/javascript">
			alert("PartneriInvitation request sas been sent, you will be notified when the user accepted your invitation");
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
					
                      
						
                        
                    </div>
					
                      
                        <div class="panel-body">
                            <table id="data-table" class="table table-striped table-bordered display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
										<th>S/N</th>
										<th>Review/Approve</th>
										<th>Status</th>
                                        <th>Title</th>
                                        <th>Category</th>
										<th>Added by (ID)</th>
										<th>Date Submitted</th>
										
										
                                    </tr>
                                </thead>
                                <tbody>
								  <?php $ct = 1; ?>
								{{--pr($gra,true)--}}
								@foreach($gra as $g)
                                    <tr >
										<td>{{$ct}}</td>
										<td><a href="/review/{{$g->id}}" title="Review and approve">Review/Approve</a></td>
										<td>{{$g->status}}</td>
                                        <td>{{$g->title}}</td>
										<td>Challenge</td>
										<td>{{$g->	posted_by_name}}({{$g->	posted_by}})</td>
										<td>{{ date('D jS, M Y, h:i:s A', strtotime($g->created_at)) }}</td>
										
										
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
	
	function createConference(){
	//alert("Alhamdulillah");
	
			$('#yloader').show();
	
			frmstring = '<form action="/add/agency" method="POST"><div class="col-md-4"><input type="text" class="form-control" placeholder="Candidate/Staff Name" name="name" required/><input type="hidden" name="_token" value="{{ csrf_token() }}"/><br/><label class="control-label">Gender <span class="text-danger">*</span></label><br/><input  value="Male" name="gender" type="radio"/>Male <input type="radio" value="Male" name="gender" />Female<br/><label class="control-label">Staff Category <span class="text-danger">*</span></label><br/><input  value="Academic Staff" name="category" type="radio"/>Academic Staff <input type="radio" value="Non-Academic Staff" name="category" />Non-Academic Staff<br/><label class="control-label">First Appointment Date<span class="text-danger">*</span></label><br/><input type="date" class="form-control" placeholder="Date of First Appointment" name="name" required/><br/><input type="file" class="form-control" name="name" required/><br/><label class="control-label">Conference Details <span class="text-danger">*</span></label><input type="text" class="form-control" placeholder="Venue" name="name" required/><br/><input type="text" class="form-control" placeholder="Date" name="name" required/><br/><input type="text" class="form-control" placeholder="Contact" name="name" required/><br/><input type="text" class="form-control" placeholder="Email/Phone Number" name="name" required/></div><div class="col-md-4"><input type="text" class="form-control" placeholder="No. of Years in Institution" name="name" required/><br/><input type="text" class="form-control" placeholder="Duration of Entire Work Experience" name="name" required/><br/><label class="control-label">Bank Account Details <span class="text-danger">*</span></label><br/><input type="text" class="form-control" placeholder="Bank Name" name="name" required/><br/><input type="text" class="form-control" placeholder="Account Name" name="name" required/><br/><input type="text" class="form-control" placeholder="Account NO." name="name" required/><br/><input type="text" class="form-control" placeholder="Sort Code" name="name" required/><br/><input type="text" class="form-control" placeholder="Conference Cost" name="name" required/><br/><textarea type="text" class="form-control" placeholder="Cost Implication Breakdown" name="name" required></textarea><br/><input onChange="notapp()" value="Approved" name="status" type="radio"/>Approved <br/><input type="radio" value="Not Approved" name="status" onChange="app()"/>Not Approved<br/><input type="hidden" name="_token" value="{{ csrf_token() }}"/><br/></div><div class="col-md-4"><label class="control-label">Qualification Details<span class="text-danger">*</span></label><br/><select class="form-control"><option>Bachelor Degree</option></select><br/><input type="text" class="form-control" placeholder="date obtained MM/YYYY" name="name" /><br/><select class="form-control"><option>Masters Degree</option></select><br/><input type="text" class="form-control" placeholder="date obtained MM/YYYY" name="name" /><br/><input type="text" class="form-control" placeholder="Agency Name" name="name" required/><br/><select class="form-control"><option>Doctoral Degree</option></select><br/><input type="text" class="form-control" placeholder="date obtained MM/YYYY" name="name" /><br/><input type="text" class="form-control" placeholder="Batch No. of Nomination" name="name" required/><br/><input type="text" class="form-control" placeholder="Year of Intervention" name="name" required/><br/><input type="hidden" name="_token" value="{{ csrf_token() }}"/><br/></div><br/><button class="btn btn-info">Add Agency</button></form/>';
			
			bootbox.dialog({
				title: 'Tetfund Conference Attendance Nomination Form',
				size:'medium',
				message: frmstring
			 });
				
				
			
	} //	folder creation ends here...
	
	
	function createResearchGrant(){
	//alert("Alhamdulillah");
	
			$('#yloader').show();
	
			frmstring = '<form action="/add/grant" method="POST"><div class="col-md-12"><input type="text" class="form-control" placeholder="Name of Pricipal Researcher" name="name" required/><input type="hidden" name="_token" value="{{ csrf_token() }}"/><br/><br/><textarea name="co" placeholder="Co-researchers" class="form-control"></textarea><br/><label class="control-label">Faculty <span class="text-danger">*</span></label><select name="faculty" class="form-control"><option value="Science">Faculty of Science</option><option value="Arts and Social Sci.">Arts and Social Sciences</option><option value="Education">Faculty of Education</option><option value="Medical Sci.">College of Medical Sciences</option></select><br/><input type="text" name="dept" class="form-control" placeholder="Department" required/><br/><input type="text" class="form-control" name="topic" placeholder="Topic of Research"  required/><br/><input type="text" class="form-control" placeholder="Thematic Area" name="thematic" required/><br/><input type="number" class="form-control" placeholder="Total Budget in Naira" name="budget" required/><br/><input type="text" class="form-control" placeholder="Duration of Project" name="duration" required/><br/><input onChange="notapp()" value="Approved" name="status" type="radio"/>Approved <input type="radio" value="Not Approved" name="status" onChange="app()"/>Not Approved<br/><input id="approved" type="number" class="form-control" placeholder="Amount Approved" name="amount"  /><input id="notapproved"  type="text" class="form-control" placeholder="Reason for not Approval" name="reason"/><br/></div><br/><br/><button class="btn btn-info">Submit</button></form/>';

			
			bootbox.dialog({
				title: 'Register New TETFUND Institutional Based Research Grant.',
				size:'medium',
				message: frmstring
			 });
				
				
			
	} //
		$(document).ready(function() {
			App.init();
			TableManageButtons.init();
		});
		
		function app(){
			$('#notapproved').css('display','block');
			$('#approved').css('display','none');
		}
		function notapp(){
			$('#approved').css('display','block');
			$('#notapproved').css('display','none');
		}

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
