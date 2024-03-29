<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8" />
	<title>Match Making and Supporting Documents Edit |Materials and Manufacturing in Healthcare Network</title>
	<meta content="width=device-width" name="viewport">
	<meta content="" name="description" />
	<meta content="" name="author" />
<!-- ================== BEGIN BASE CSS STYLE ================== -->
		
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="/assets_blog/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets_blog/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/animate.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/theme/default.css" id="theme" rel="stylesheet" />
	<script src="https://kit.fontawesome.com/813c025c0f.js" crossorigin="anonymous"></script>
	
	
	
	<script src="/assets_blog/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="/assets_blog/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="/assets_blog/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="/assets/js/bootbox.min.js"></script>
	<!-- ================== END BASE CSS STYLE ================== -->
    <style>
	.overlay{
	
	background: url('/assets/plain.png');
	height:300px;
	width: 300px;
	opacity: 1;
	}
	.icon{
	font-size:3em;
	color: black;
	}
	
	
	</style>
	<!-- overlay 2-->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets_blog/plugins/pace/pace.min.js"></script>
	
	<!-- ================== END BASE JS ================== -->
	@include("admin.analytics")
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="padding:0px !important; min-height: 100%;
    font-family: sans-serif;
    margin: 0;">

@include("admin.cookiebanner")
	<!-- begin #page-loader -->
	 
            @include("admin.header")
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		@include("admin.cookiebanner")
		
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		
                           <div id="content" class="content">
        <!-- begin container -->
        <div class="container">
			<div class="row">
                <!-- begin col-12 -->
				 <h1 >Edit Match Making</h1>
			    <div class="col-md-16">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div >
						
                        <div class="panel-body panel-form">
                            <form  action="/submitedit/need" enctype="multipart/form-data" method="POST"class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form">
								
								<input type="hidden" name="name" value="{{$name}}"/>
								<input type="hidden" name="id" value="{{$pid}}"/>
								<input type="hidden" name="keywords" value="{{serialize($kw)}}"/>
								<input type="hidden" name="detail" value="{{$detail}}"/>
								<!--<input type="hidden" name="oth[]" value="{{$others}}"/>
								<input type="hidden" name="sbm" value="1"/>-->
								<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
	
<p></p>								
<p align="left" style="padding:1.5em;" > Part 2 of 2 - Here you can add a cover photo and any supporting documents to your post. You can also choose the Partners who you would like us to notify about your Challenge upon approval. Partners that you select will receive an email notification saying they have been “matched” to your Challenge and will be given options whether to accept or decline the match. Matches to Challenges will appear at the end of Challenge posts, if a Partner declines a match, their name will be removed from the given post. If they accept, we hope this matching helps to start the conversation and engagement on the virtual platform. </p>							
								

								
								
								
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="partners">Academic partners</label>
									<div class="col-md-6 col-sm-6">
										<div class="panel-body">
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
										
										<th width="150px">Partner name</th>
										<th width="200px">Institution</th>
										<th width="200px">Designation</th>
										<th width="200px">Biography</th>
										<th width="200px">Current Interest</th>
										<th width="200px">Similarity Weight</th>
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
									
										
										<td><input type="checkbox" id="partners" name="partners[]" value="{{$u->id}}" <?php if($s>=30 ){ echo "checked";} ?>/> <a href="javascript:;" onClick="detail('{{$u->first_name}}','{{$u->middle_name}}','{{$u->last_name}}', '{{$u->email}}','{{$u->institution}}', '{{$u->designation}}', '{{$u->bio}}','{{$u->current_interest}}', '{{$u->previous_interest}}','{{$u->picture}}')" title="{{$u->first_name}} {{$u->middle_name}} {{$u->last_name}} click for more details"> {{$u->first_name}} {{$u->middle_name}} {{$u->last_name}}</a></td>
										<td>{{$u->institution}}</td>
										<td>{{$u->designation}}</td>
										<td> <?php 
						   if(strlen($u->bio) > 200){
						   $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
							$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
							$txt = nl2br(substr($u->bio,0,200));
							
							echo $txt."...";
							}else{
							 $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
							$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
							$txt = nl2br($u->bio);
							
							
							}
							
							?>
									</td>
										<td><?php 
										$ski = $u->keywords;
										if(empty($ski)){
										$ski = array();
										}else{
										$ski = unserialize($ski);
										}
										if(is_array($ski)){
											$ki = unserialize($u->keywords);
											}else{
												$ki = array();
											}
										foreach($kd as $k){		
										foreach((array)$ki as $uk){
											
											
											  if($k->id == $uk){
											  echo $k->name."; ";
											  }
											  
											}
										
										}
										echo "<br/>";
										echo "Custom keyword: "; if(empty($u->other_keyword)){echo "Nil"; } else{
										echo $u->other_keyword;
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
										
										<th width="150px">Partner name</th>
										<th width="200px">Institution</th>
										<th width="200px">Designation</th>
										<th width="200px">Biography</th>
										<th width="200px">Current Interest</th>
										<th width="200px">Similarity Weight</th>
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
									
										
										<td><input type="checkbox" id="partners" name="partners[]" value="{{$u->id}}" <?php if($s1>=30){ echo "checked";} ?> /> <a href="javascript:;" onClick="detail('{{$u->first_name}}','{{$u->middle_name}}','{{$u->last_name}}', '{{$u->email}}','{{$u->institution}}', '{{$u->designation}}', '{{$u->bio}}','{{$u->current_interest}}', '{{$u->previous_interest}}','{{$u->picture}}')" title="{{$u->first_name}} {{$u->middle_name}} {{$u->last_name}} click for more details"> {{$u->first_name}} {{$u->middle_name}} {{$u->last_name}}</a></td>
										<td>{{$u->institution}}</td>
										<td>{{$u->designation}}</td>
										<td><?php 
						   if(strlen($u->bio) > 200){
						   $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
							$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
							$txt = nl2br(substr($u->bio,0,200));
							
							echo $txt."...";
							}else{
							 $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
							$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
							$txt = nl2br($u->bio);
							
							
							}
							
							?></td>
										<td><?php 
										if(!empty($u->keywords) && is_array(unserialize($u->keywords)) && !empty($u->keywords)){
											$ctk = count(unserialize($u->keywords));
										}else{
											$ctk =0;	
										}
										
										if($ctk ==1 && !empty($u->keywords)){
										foreach(unserialize($u->keywords) as $uk){
											foreach($kd as $k){
											
											  if($k->id == $uk){
											  echo $k->name.", ";
											  }
											  
											}
										
										}
										
										
								}else{
								$kct =0;
								if(!empty($u->keywords) && is_array(unserialize($u->keywords))){
									foreach(unserialize($u->keywords) as $uk){
											foreach($kd as $k){
											  
											  if($k->id == $uk){
											  $kct++;
											  echo $k->name."; ";
											  
											  }
											  
											}
										
										}
										}
								}
										
										echo "Custom keyword: "; if(empty($u->other_keyword)){echo "Nil"; } else{echo $u->other_keyword;}
										?></td>
										
										<td><?php 
										
										if( (in_array($u->id, $id) && in_array($u->id, $id2))  ||  in_array($u->id, $id)   || in_array($u->id, $id2) ) {
										echo round($s1,2)."%"; 
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
										
										<th width="150px">Partner name</th>
										<th width="200px">Institution</th>
										<th width="200px">Designation</th>
										<th width="200px">Biography</th>
										<th width="200px">Current Interest</th>
										<th width="200px">Similarity Weight</th>
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
									
										
										<td><input type="checkbox" id="partners" name="partners[]" value="{{$u->id}}" <?php if($s2>=30){ echo "checked";} ?>/> <a href="javascript:;" onClick="detail('{{$u->first_name}}','{{$u->middle_name}}','{{$u->last_name}}', '{{$u->email}}','{{$u->institution}}', '{{$u->designation}}', '{{$u->bio}}','{{$u->current_interest}}', '{{$u->previous_interest}}','{{$u->picture}}')" title="{{$u->first_name}} {{$u->middle_name}} {{$u->last_name}} click for more details"> {{$u->first_name}} {{$u->middle_name}} {{$u->last_name}}</a></td>
										<td>{{$u->institution}}</td>
										<td>{{$u->designation}}</td>
										<td><?php 
						   if(strlen($u->bio) > 200){
						   $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
							$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
							$txt = nl2br(substr($u->bio,0,200));
							
							echo $txt."...";
							}else{
							 $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
							$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
							$txt = nl2br($u->bio);
							
							
							}
							
							?></td>
										<td><?php 
										if(!empty($u->keywords) && is_array(unserialize($u->keywords))){
										foreach(unserialize($u->keywords) as $uk){
											foreach($kd as $k){
											
											  if($k->id == $uk){
											  echo $k->name.", ";
											  }
											  
											}
										
										}
										}
										echo "and custom keyword: "; if(empty($u->other_keyword)){echo "Nil"; } else{echo $u->other_keyword;}
										?></td>
										
										<td><?php 
										if( (in_array($u->id, $id) && in_array($u->id, $id2))  ||  in_array($u->id, $id)   || in_array($u->id, $id2) ) {
										echo round($s2,2)."%";  
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
										
										<th width="150px">Partner name</th>
										<th width="200px">Institution</th>
										<th width="200px">Designation</th>
										<th width="200px">Biography</th>
										<th width="200px">Current Interest</th>
										<th width="200px">Similarity Weight</th>
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
									
										
										<td><input type="checkbox" id="partners" name="partners[]" value="{{$u->id}}" <?php if($s3>=30){ echo "checked";} ?>/> <a href="javascript:;" onClick="detail('{{$u->first_name}}','{{$u->middle_name}}','{{$u->last_name}}', '{{$u->email}}','{{$u->institution}}', '{{$u->designation}}', '{{$u->bio}}','{{$u->current_interest}}', '{{$u->previous_interest}}','{{$u->picture}}')" title="{{$u->first_name}} {{$u->middle_name}} {{$u->last_name}} click for more details"> {{$u->first_name}} {{$u->middle_name}} {{$u->last_name}}</a></td>
										<td>{{$u->institution}}</td>
										<td>{{$u->designation}}</td>
										<td><?php 
						   if(strlen($u->bio) > 200){
						   $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
							$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
							$txt = nl2br(substr($u->bio,0,200));
							
							echo $txt."...";
							}else{
							 $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
							$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
							$txt = nl2br($u->bio);
							
							
							}
							
							?></td>
										<td><?php 
										if(!empty($u->keywords) && is_array(unserialize($u->keywords))){
										foreach(unserialize($u->keywords) as $uk){
											foreach($kd as $k){
											
											  if($k->id == $uk){
											  echo $k->name.", ";
											  }
											  
											}
										
										}
										
										}
										echo "and custom keyword: "; if(empty($u->other_keyword)){echo "Nil"; } else{echo $u->other_keyword;}
										?></td>
										
										<td><?php 
										if( (in_array($u->id, $id) && in_array($u->id, $id2))  ||  in_array($u->id, $id)   || in_array($u->id, $id2) ) {
										echo round($s3,2)."%"; 
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
									<label class="control-label col-md-4 col-sm-4" >&nbsp;&nbsp&nbsp&nbsp</label>
									<div class="col-md-6 col-sm-6">
										 <label for="tm"> <input type="checkbox" name="tm"  id="tm" required /> I confirm that I have not added any confidential information as per our privacy notice. <span class="text-danger">*</span></label>
										
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
        
        <!-- end theme-panel -->
		
		<!-- begin scroll to top btn -->
		
		<!-- end scroll to top btn -->
	</div>
	 @include("admin.homefooter")
	<!-- end page container -->
	
	
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
	
			frmstring = '<form action="/share/me/" method="POST" enctype="multipart/form-data"><div><input type="hidden" name="_token" value="{{ csrf_token() }}"/></div><div id="bc"><a href="#"><img align="right"src="/mmhn/public/uploads/'+picture+'" alt="" height="150px" width="150px" /></a>Full name: '+first_name+' '+ middle_name+' '+ last_name+'<br/>Email: '+email+'<br/>Institution: '+institution+'<br/>Designation: '+designation+'<br/>Biography: '+bio+'<br/></div></div></form/>';
			
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
	$('#example5').DataTable({
        "order": [[ 5, "desc" ]]
    } );
	
	
} );
	</script>
	
	
</body>
</html>
