<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Challenge Detail Review|Materials and Manufacturing in Healthcare Network</title>
	<meta content="width=device-width" name="viewport">
	<meta content="" name="description" />
	<meta content="" name="author" />
	
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
	
	<!-- ================== END BASE JS ================== -->
	
  
  
	
	
	<style type="text/css">
	.login a p {display:none;}
.login a:hover p {display:block;}

img {
max-width: 80%;
}
	</style>
	
	
	<style>
	.img{
	height:80%;
	width:auto;
	}
	</style>
</head>
<body>

@if(Session::has('approve'))
			<script type="text/javascript">
			alert("Challenge approved");
			</script>
	@endif
	
	@if(Session::has('reject'))
			<script type="text/javascript">
			alert("Challenge rejected");
			</script>
	@endif
	
	@if(Session::has('revise'))
			<script type="text/javascript">
			alert("Challenge revision request sent successfully");
			</script>
	@endif
@include("admin.cookiebanner")
   
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
				<?php 
						
						if(empty($p->likes) || $p->likes="N;"){
						$p->likes = serialize(array());
						}
						
						
						?>
                    <!-- begin post-detail -->
                    <div class="post-detail section-container">
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li><a href="/clinicalneeds">CHALLENGES</a></li>
                            <li class="active">{{$p->title}}</li>
                        </ul>
                        <h1 >
                            {{$p->title}}
                        </h1>
						@if(Auth::check())
									@if(Auth::user()->id == $p->posted_by || Auth::user()->role=="admin")
									<a href="/showeditneed/{{$p->id}}" title="Edit" class="read-btn"><button >Edit</button> </a>
									@endif
									@endif
                        <div class="post-by">
                            Posted By <a href="/partner/{{$p->posted_by}}">{{$p->posted_by_name}}</a> &nbsp;&nbsp; {{ date('D jS, M Y, h:i:s A', strtotime($p->updated_at)) }}
                        </div>
						
						<img src="/mmhn/public/uploads/{{$p->cover}}" class="cpt" align="post cover photo" /> <br/>
                        <!-- begin post-image -->
						<!--
						 <blockquote>
                                    {{$p->summary}}
                                </blockquote>
						-->		
								
                        
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
                        <!-- begin post-image -->
                       
                        
                        <h2>Supporting Documents</h2>
					   @if($p->pic != 'emptyimage.png' && !empty($p->pic))
					   <?php $ct=1;
					   
					  $doc = unserialize($p->pic);
					 
					   ?>
					   	@foreach($doc as $sp)
						
						<a href="/mmhn/public/uploads/{{$sp}}" title="Document{{$ct}}" target="_blank">Supporting Document<?php echo " ".$ct."<br/>"; $ct++;?></a>
						
						@endforeach
					   
					   @endif
					   
					  
                        <!-- end post-desc -->
						
						<h2>Matched Partners</h2>
						
						  @if(!empty($p->partners))
								  @foreach($us as $u)
								  @foreach(unserialize($p->partners) as $pu)
								  
								  @if($u->id == $pu)
								  <a href="/partner/{{$pu}}" title="{{$u->first_name}}" target="_blank"><?php echo "@";?>{{$u->first_name}} {{$u->last_name}}</a> <br/> @if($u->id == Auth::user()->id && in_array(Auth::user()->id, unserialize($p->partners)))  <a href="/unmatchedpartner/{{$p->id}}" title="Unmatched yourself from this challenge"> Unmatch yourself</a> @endif
								  @endif
						   @endforeach
						   @endforeach
						  @endif
                    </div>
                    <!-- end post-detail -->
                    
                  <a href="/approve_need/{{$p->id}}" title="Click here to approve post"><button class="btn btn-primary">Approve</button></a>
				   <a href="javascript:;" onClick="reject({{$p->id}})" title="Click here to reject post"><button class="btn btn-primary">Reject</button></a>
				   <a href="javascript:;" onClick="revise({{$p->id}})" title="Click here to send a revision request"><button class="btn btn-primary">Request for Revision</button></a>
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
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets_blog/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="/assets_blog/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	
	
		<script src="/assets_blog/crossbrowserjs/html5shiv.js"></script>
		<script src="/assets_blog/crossbrowserjs/respond.min.js"></script>
		<script src="/assets_blog/crossbrowserjs/excanvas.min.js"></script>

	<script src="/assets_blog/plugins/jquery-cookie/jquery.cookie.js"></script>
	<script src="/assets_blog/plugins/masonry/masonry.min.js"></script>
	<script src="/assets_blog/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
		
	

	
	
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
	
	<script src="/assets_blog/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="/assets_blog/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="/assets_blog/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="/assets/js/bootbox.min.js"></script>
	
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