<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Partners Matching|Materials and Manufacturing in Healthcare Network</title>
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
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="/assets/plugins/bootstrap-wizard/css/bwizard.min.css" rel="stylesheet" />
	<link href="/assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	
	<link href="/assets_blog/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets_blog/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/animate.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/theme/default.css" id="theme" rel="stylesheet" />
	@include("admin.analytics")
	<link href="/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="/assets/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css" rel="stylesheet" />
	<link href="/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	
	<link href="/assets/datatableothercss.css" rel="stylesheet" />
</head>
<body>

@include("admin.cookiebanner")

	<!-- begin #page-loader -->
	 <div id="header" class="header navbar navbar-default navbar-fixed-top">
        <!-- begin container -->
        <div class="container">
            <!-- begin navbar-header -->
            
            <!-- end navbar-header -->
            <!-- begin navbar-collapse -->
            @include("admin.header")
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </div>
	
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		
		
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div align="left">
		<br/>
			<!-- begin breadcrumb -->
			
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			
			<!-- end page-header -->
			<br/>
			<br/>
			<!-- begin row -->
			<div class="row">
                <!-- begin col-12 -->
			    <div class="col-md-16">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            
                            <h4 class="panel-title">Match Making Form</h4>
                        </div>
                        <div class="panel-body panel-form">
                            <form  action="/submit/need" enctype="multipart/form-data" method="POST"class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form">
								
								<input type="hidden" name="name" value="{{$name}}"/>
								<input type="hidden" name="keywords" value="{{serialize($kw)}}"/>
								<input type="hidden" name="detail" value="{{$detail}}"/>
								<input type="hidden" name="oth[]" value="{{$others}}"/>
								<input type="hidden" name="sbm" value="1"/>
								<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="pic">Supporting data/schematics</label>
									<div class="col-md-6 col-sm-6">
										<input type="file" class="form-control" id="pic"   name="pic" />
										
										
									</div>
								</div>
								
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="partners">Academic partners</label>
									<div class="col-md-6 col-sm-6">
										<div class="panel-body">
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
										
										<th>Partner name</th>
										<th>Institution</th>
										<th>Designation</th>
										<th>Biography</th>
										<th>Current Interest</th>
										<th>Similarity Weight</th>
                                    </tr>
                                </thead>
                                <tbody>
								  <?php $ct = 1;
								  $s =0; ?>
								
								@foreach($ac as $u)
								
								<?php 
								if(in_array($u->id, $id) && in_array($u->id, $id2)){
											$s = ((0.8 * $sck[$u->id])/(count($kw)) *100) + ($sc[$u->id] *0.2);
										
										}
										else if(in_array($u->id, $id)){
											$s = ((0.8 * $sck[$u->id])/(count($kw)) *100);
											
										}
										else if(in_array($u->id, $id2)){
											$s = ($sc[$u->id] * 0.2);
									}
											
											
								?>
                                    <tr >
									
										
										<td><input type="checkbox" id="partners" name="partners[]" value="{{$u->id}}" <?php if($s>20 && ($s)){ echo "checked";} ?>/> <a href="javascript:;" onClick="detail('{{$u->first_name}}','{{$u->middle_name}}','{{$u->last_name}}', '{{$u->email}}','{{$u->institution}}', '{{$u->designation}}', '{{$u->bio}}','{{$u->current_interest}}', '{{$u->previous_interest}}','{{$u->picture}}')" title="{{$u->first_name}} {{$u->middle_name}} {{$u->last_name}} click for more details"> {{$u->first_name}} {{$u->middle_name}} {{$u->last_name}}</a></td>
										<td>{{$u->institution}}</td>
										<td>{{$u->designation}}</td>
										<td>{{$u->bio}}</td>
										<td><?php 
										
										
										foreach(unserialize($u->keywords) as $uk){
											foreach($kd as $k){
											
											  if($k->id == $uk){
											  echo $k->name."; ";
											  }
											  
											}
										
										}
										echo "<br/>";
										echo "Custom keyword: "; if(empty($u->other_keyword)){echo "Nil"; } else{
										foreach(unserialize($u->other_keyword) as $uk){
											foreach($kd as $k){
											
											  if($k->id == $uk){
											  echo $k."; ";
											  }
											  
											}
										
										}
										
										}
										?></td>
										
										<td><?php 
										if( (in_array($u->id, $id) && in_array($u->id, $id2))  ||  in_array($u->id, $id)   || in_array($u->id, $id2) ) {
										echo round($s,2)."%"; 
									}	
										?> </td>
                                    </tr>
									<?php $ct++; ?>
                                 @endforeach  
								 <?php $ct++; ?>
                                </tbody>
                            </table>
                        </div>
							
									</div>
								</div>
								
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="email">Industry partners</label>
									<div class="col-md-6 col-sm-6">
										<div class="panel-body">
                            <table id="example2" class="display" style="width:100%">
                                <thead>
                                    <tr>
										
										<th>Partner name</th>
										<th>Institution</th>
										<th>Designation</th>
										<th>Biography</th>
										<th>Current Interest</th>
										<th>Score</th>
                                    </tr>
                                </thead>
                                <tbody>
								  <?php $ct = 0;
								  
								  $s1 =0; ?>
								@foreach($in as $u)
								<?php 
								if(in_array($u->id, $id) && in_array($u->id, $id2)){
											$s1 = ((0.8 * $sck[$u->id])/(count($kw)) *100) + ($sc[$u->id] *0.2);
										
										}
										else if(in_array($u->id, $id)){
											$s1 = ((0.8 * $sck[$u->id])/(count($kw)) *100);
											
										}
										else if(in_array($u->id, $id2)){
											$s1 = ($sc[$u->id] * 0.2);
									}
											
											
								?>
                                    <tr >
									
										
										<td><input type="checkbox" id="partners" name="partners[]" value="{{$u->id}}" <?php if($s1>20){ echo "checked";} ?> /> <a href="javascript:;" onClick="detail('{{$u->first_name}}','{{$u->middle_name}}','{{$u->last_name}}', '{{$u->email}}','{{$u->institution}}', '{{$u->designation}}', '{{$u->bio}}','{{$u->current_interest}}', '{{$u->previous_interest}}','{{$u->picture}}')" title="{{$u->first_name}} {{$u->middle_name}} {{$u->last_name}} click for more details"> {{$u->first_name}} {{$u->middle_name}} {{$u->last_name}}</a></td>
										<td>{{$u->institution}}</td>
										<td>{{$u->designation}}</td>
										<td>{{$u->bio}}</td>
										<td><?php 
										
										$ctk = count(unserialize($u->keywords));
										
										
										if($ctk ==1){
										foreach(unserialize($u->keywords) as $uk){
											foreach($kd as $k){
											
											  if($k->id == $uk){
											  echo $k->name.", ";
											  }
											  
											}
										
										}
										
										
								}else{
								$kct =0;
									foreach(unserialize($u->keywords) as $uk){
											foreach($kd as $k){
											  
											  if($k->id == $uk){
											  $kct++;
											  echo $k->name."; ";
											  
											  }
											  
											}
										
										}
								}
										
										echo "Custom keyword: "; if(empty($u->other_keyword)){echo "Nil"; } else{echo $u->other_keyword;}
										?></td>
										
										<td><?php 
										
										if( (in_array($u->id, $id) && in_array($u->id, $id2))  ||  in_array($u->id, $id)   || in_array($u->id, $id2) ) {
										echo round($s,2)."%"; 
									}	
										?> </td>
                                    </tr>
									<?php $ct++; ?>
                                 @endforeach  
                                </tbody>
                            </table>
                        </div>
							
									</div>
								</div>
								
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="email">Clinical partners</label>
									<div class="col-md-6 col-sm-6">
										<div class="panel-body">
                            <table id="example3" class="display" style="width:100%">
                                <thead>
                                    <tr>
										
										<th>Partner name</th>
										<th>Institution</th>
										<th>Designation</th>
										<th>Biography</th>
										<th>Current Interest</th>
                                    </tr>
                                </thead>
                                <tbody>
								  <?php $ct = 1;
								  $s2 = 0; ?>
								@foreach($cl as $u)
								
								<?php 
								if(in_array($u->id, $id) && in_array($u->id, $id2)){
											$s2 = ((0.8 * $sck[$u->id])/(count($kw)) *100) + ($sc[$u->id] *0.2);
										
										}
										else if(in_array($u->id, $id)){
											$s2 = ((0.8 * $sck[$u->id])/(count($kw)) *100);
											
										}
										else if(in_array($u->id, $id2)){
											$s2 = ($sc[$u->id] * 0.2);
									}
											
											
								?>
								
								
                                    <tr >
									
										
										<td><input type="checkbox" id="partners" name="partners[]" value="{{$u->id}}" <?php if($s2>20){ echo "checked";} ?>/> <a href="javascript:;" onClick="detail('{{$u->first_name}}','{{$u->middle_name}}','{{$u->last_name}}', '{{$u->email}}','{{$u->institution}}', '{{$u->designation}}', '{{$u->bio}}','{{$u->current_interest}}', '{{$u->previous_interest}}','{{$u->picture}}')" title="{{$u->first_name}} {{$u->middle_name}} {{$u->last_name}} click for more details"> {{$u->first_name}} {{$u->middle_name}} {{$u->last_name}}</a></td>
										<td>{{$u->institution}}</td>
										<td>{{$u->designation}}</td>
										<td>{{$u->bio}}</td>
										<td><?php 
										
										foreach(unserialize($u->keywords) as $uk){
											foreach($kd as $k){
											
											  if($k->id == $uk){
											  echo $k->name.", ";
											  }
											  
											}
										
										}
										echo "and custom keyword: "; if(empty($u->other_keyword)){echo "Nil"; } else{echo $u->other_keyword;}
										?></td>
										
										<td><?php 
										if( (in_array($u->id, $id) && in_array($u->id, $id2))  ||  in_array($u->id, $id)   || in_array($u->id, $id2) ) {
										echo round($s,2)."%";  
									}	
										?> </td>
                                    </tr>
									<?php $ct++; ?>
                                 @endforeach  
								 <?php $ct++; ?>
                                </tbody>
								  </table>
                        </div>
							
								  
								  
								
									</div>
								</div>
								
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="email">Other partners</label>
									<div class="col-md-6 col-sm-6">
										<div class="panel-body">
                            <table id="example4" class="display" style="width:100%">
                                <thead>
                                    <tr>
										
										<th>Partner name</th>
										<th>Institution</th>
										<th>Designation</th>
										<th>Biography</th>
										<th>Current Interest</th>
										<th>Score</th>
                                    </tr>
                                </thead>
                                <tbody>
								  <?php $ct = 0;
								  $s3 =3; ?>
								@foreach($ot as $u)
								<?php 
								if(in_array($u->id, $id) && in_array($u->id, $id2)){
											$s3 = ((0.8 * $sck[$u->id])/(count($kw)) *100) + ($sc[$u->id] *0.2);
										
										}
										else if(in_array($u->id, $id)){
											$s3 = ((0.8 * $sck[$u->id])/(count($kw)) *100);
											
										}
										else if(in_array($u->id, $id2)){
											$s3 = ($sc[$u->id] * 0.2);
									}
											
											
								?>
                                    <tr >
									
										
										<td><input type="checkbox" id="partners" name="partners[]" value="{{$u->id}}" <?php if($s3>20){ echo "checked";} ?>/> <a href="javascript:;" onClick="detail('{{$u->first_name}}','{{$u->middle_name}}','{{$u->last_name}}', '{{$u->email}}','{{$u->institution}}', '{{$u->designation}}', '{{$u->bio}}','{{$u->current_interest}}', '{{$u->previous_interest}}','{{$u->picture}}')" title="{{$u->first_name}} {{$u->middle_name}} {{$u->last_name}} click for more details"> {{$u->first_name}} {{$u->middle_name}} {{$u->last_name}}</a></td>
										<td>{{$u->institution}}</td>
										<td>{{$u->designation}}</td>
										<td>{{$u->bio}}</td>
										<td><?php 
										
										foreach(unserialize($u->keywords) as $uk){
											foreach($kd as $k){
											
											  if($k->id == $uk){
											  echo $k->name.", ";
											  }
											  
											}
										
										}
										echo "and custom keyword: "; if(empty($u->other_keyword)){echo "Nil"; } else{echo $u->other_keyword;}
										?></td>
										
										<td><?php 
										if( (in_array($u->id, $id) && in_array($u->id, $id2))  ||  in_array($u->id, $id)   || in_array($u->id, $id2) ) {
										echo round($s,2)."%"; 
									}	
										?> </td>
                                    </tr>
									<?php $ct++; ?>
                                 @endforeach  
                                </tbody>
                            </table>
                        </div>
							
									</div>
								</div>
								
								
								
								
							
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"></label>
									<div class="col-md-6 col-sm-12">
										<!-- <a href="{{ url()->previous() }}" title="Back"><button type="submit" class="btn btn-primary"><< Back</button></a> | --><button type="submit" class="btn btn-primary">Submit challenge</button>
									</div>
									
								</div>
                            </form>
							
							 
								
								
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
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
	
	</body>
	</html>
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	
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
	<script src="/assets/plugins/bootstrap-wizard/js/bwizard.js"></script>
	<script src="/assets/js/form-wizards-validation.demo.min.js"></script>
	
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
	
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	
	<script src="/assets/datatableother.js"></script>
	<script src="/assets/datatableother2.js"></script>
	
	
	<script src="/assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
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
	<script src="/assets/js/bootbox.min.js"></script>
	
	
	<script>
	function detail(first_name,middle_name,last_name,email,institution,designation,bio,current_interest,previous_interest,picture){
	//alert(y);
	
			$('#yloader').show();
	
			frmstring = '<form action="/share/me/" method="POST" enctype="multipart/form-data"><div><input type="hidden" name="_token" value="{{ csrf_token() }}"/></div><div id="bc"><a href="#"><img align="right"src="/uploads/'+picture+'" alt="" height="150px" width="150px" /></a>Full name: '+first_name+' '+ middle_name+' '+ last_name+'<br/>Email: '+email+'<br/>Institution: '+institution+'<br/>Designation: '+designation+'<br/>Biography: '+bio+'<br/></div></div></form/>';
			
			bootbox.dialog({
				title: 'Partner\'s Information',
				size:'medium',
				message: frmstring
			 });
				
				
			
	} //
	</script>
	
	
	<script>
	   $(document).ready(function() {
    $('#example').DataTable({
        "order": [[ 5, "desc" ]]
    } );
	 $('#example2').DataTable({
        "order": [[ 5, "desc" ]]
    } );
	  $('#example3').DataTable({
        "order": [[ 5, "desc" ]]
    } );
	   $('#example4').DataTable({
        "order": [[ 5, "desc" ]]
    } );
	
	
} );
	</script>
	
	
</body>
</html>
