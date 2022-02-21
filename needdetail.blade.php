<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Challenge Detail|Materials and Manufacturing in Healthcare Network</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0,  name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<script src="https://cdn.tiny.cloud/1/tja9n4a99gszjfhet7x3lm2p9drj9zzd9ucky3l3e61a8s81/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="/assets_blog/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets_blog/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/animate.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/theme/default.css" id="theme" rel="stylesheet" />
	
	@include("admin.analytics")
	<!-- ================== END BASE CSS STYLE ================== -->
     <script src="https://cdn.tiny.cloud/1/tja9n4a99gszjfhet7x3lm2p9drj9zzd9ucky3l3e61a8s81/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
       tinymce.init({
      selector: 'textarea',  // change this value according to your HTML
	 plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'table emoticons template paste help'
    ],
	paste_data_images: true,
	  a_plugin_option: true,
	  toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent',
	  a_configuration_option: 400,
  
  menu: {
    file: { title: 'File', items: 'newdocument restoredraft | preview | print ' },
    edit: { title: 'Edit', items: 'undo redo | cut copy paste | selectall | searchreplace' },
    view: { title: 'View', items: 'code | visualaid visualchars visualblocks | spellchecker | preview fullscreen' },
    insert: { title: 'Insert', items: 'image link media template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor toc | insertdatetime' },
    format: { title: 'Format', items: 'bold italic underline strikethrough superscript subscript codeformat | formats blockformats fontformats fontsizes align lineheight | forecolor backcolor | removeformat' },
    tools: { title: 'Tools', items: 'spellchecker spellcheckerlanguage | code wordcount' },
    table: { title: 'Table', items: 'inserttable | cell row column | tableprops deletetable' },
    help: { title: 'Help', items: 'help' }
  }
      });
    </script>
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets_blog/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<style type="text/css">
	.login a p {display:none;}
.login a:hover p {display:block;}
	</style>
	</head>
	@if(Session::has('mailed'))
			<script type="text/javascript">
			alert("Input recieved successfully");
			</script>
			@endif
			
		@if(Session::has('like'))
			<script type="text/javascript">
			alert("Like recorded successfully");
			</script>
			@endif
			
			@if(Session::has('dislike'))
			<script type="text/javascript">
			alert("Unlike recorded successfully");
			</script>
			@endif
			
			@if(Session::has('liked'))
			<script type="text/javascript">
			alert("You liked this already");
			</script>
			@endif
			
			@if(Session::has('unmatch'))
			<script type="text/javascript">
			alert("You successfully unmatched yourself from this challenge");
			</script>
			@endif
			
			@if(Session::has('disliked'))
			<script type="text/javascript">
			alert("You unliked this already");
			</script>
			@endif
			
<body>
@include("admin.cookiebanner")
    <!-- begin #header -->
   
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
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li><a href="/clinicalneeds">CHALLENGES</a></li>
                            <li class="active">{{$p->title}}</li>
                        </ul>
                        <h1>
                           {{$p->title}}
                        </h1>
						<?php 
						if(empty($p->likes) || $p->likes=="N;"){
						$p->likes = serialize(array());
						}
						
						
						?>
                        <div class="post-by">
                            Posted By <a href="/partner/{{$p->posted_by}}">{{$p->posted_by_name}}</a> &nbsp;&nbsp;  {{ date('D jS, M Y, h:i:s A', strtotime($p->updated_at)) }} |</span> {{$comct}} Comments @if(Auth::check())<a href="/likeneed/{{$p->id}}/{{Auth::user()->id}}" title="Click to like it" class="m-l-10 text-inverse"><button> Like:{{count(unserialize($p->likes))}}  <i class="fa fa-thumbs-up text-success"></i> </button></a> <!--<button> Unlike : <i class="fa fa-thumbs-down text-danger"></i> </button></a> -->@else
							<a href="/login" title="Click to sign in"/> Sign in to Like</a>
							@endif
                        </div>
						<div>
						<img src="/mmhn/public/uploads/{{$p->cover}}" align="post cover photo" height="150px" width="150px"/></div> <br/>
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
						
						<a href="/mmhn/public/uploads/{{$sp}}" title="Document{{$ct}}" target="_blank">Supporting Document <?php echo " ".$ct."<br/>"; $ct++;?></a>
						
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
                    
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="section-title"><span>Comments: ({{$comct}}) <!--and Replies: ({{$rect}}) --></span></h4>
                        <!-- begin comment-list -->
						@foreach($cm as $c)
						
                        <ul class="comment-list">
						
							
                            <li>
                                <!-- begin comment-avatar -->
                                <div class="comment-avatar">
								
								@foreach($us as $u)
								
								@if($u->email == $c->email)
							@if($u->picture=="empty")	
                                    <a href="/partner/{{$u->id}}"><img align="right"src="/uploads/empty.png" alt="Default Profile Photo"  height="100px" width="100px"  /></a>
									@else
									<a href="/partner/{{$u->id}}"><img align="right"src="/mmhn/public/uploads/{{$u->picture}}" alt="{{ucfirst($u->first_name )}} {{ucfirst($u->middle_name )}} {{ucfirst($u->last_name) }}" height="100px" width="100px" /></a>
									@endif									
								@endif
								@endforeach
                                </div>
                                <!-- end comment-avatar -->
                                <!-- begin comment-container -->
                                <div class="comment-container">
                                    <div class="comment-author">
                                        {{$c->name}}
                                        <span class="comment-date">
                                            on <span class="underline">{{ date('D jS, M Y, h:i:s A', strtotime($c->updated_at)) }}
                                        </span>
                                    </div>
                                    <div class="comment-content">
									 <?php 
									   $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
										$new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
										$txt = nl2br($c->comment);
										
										echo $txt;
							
							?>
                                       
                                    </div>
                                    <div class="comment-btn pull-left">
									@if(Auth::check())
                                        <a href="javascript:;" onClick="reply({{$p->id}},{{$c->id}})" title="Click here to reply to the challenge"> <i class="fa fa-reply"></i> Reply</a>
									@endif
                                    </div>
                                    <div class="comment-rating">
									@if(Auth::check())
									<?php  
									if(empty($c->likes) || $c->likes=="N;"){
									$c->likes = serialize(array());
									}
									?>
									<div class="login">
									
                                       <a href="/likecomment/{{$c->id}}/{{Auth::user()->id}}" title="Click to like this comment" class="m-l-10 text-inverse"> 
    Like
        
    </a>

                                        <a href="/likecomment/{{$c->id}}/{{Auth::user()->id}}" title="Click to like this comment" class="m-l-10 text-inverse"><i class="fa fa-thumbs-up text-success"></i> @if(is_array(unserialize($c->likes))) {{count(unserialize($c->likes))}} <p> <?php 
										$uls = unserialize($c->likes);
										foreach($us as $u){
										foreach($uls as $ul){
										
										if($u->id == $ul){
										echo $u->first_name." ".$u->last_name."<br/> ";
										}
										
										}
										}
										?></p> </a></div>  @else 0 @endif</a>
                                      
										@else
										<a href="/login" title="Click to login">Sign in to like
										@endif
                                    </div>
                                    <!-- begin comment-list -->
									<ul class="comment-list">
									
									@foreach($re as $rep)
									@if($c->id == $rep->comment_id)
                                        <li>
                                            <!-- begin comment-avatar -->
                                            <div class="comment-avatar">
                                                @foreach($us as $u)
								
								@if($u->email == $rep->replier_email)
												@if($u->picture=="empty")	
														<a href="/partner/{{$u->id}}"><img align="right"src="/uploads/empty.png" alt="Default Profile Photo"  height="100px" width="100px"  /></a>
														@else
														<a href="/partner/{{$u->id}}"><img align="right"src="/mmhn/public/uploads/{{$u->picture}}" alt="{{ucfirst($u->first_name )}} {{ucfirst($u->middle_name )}} {{ucfirst($u->last_name) }}" height="100px" width="100px" /></a>
														@endif									
													@endif
								@endforeach
                                            </div>
                                            <!-- end comment-avatar -->
                                            <!-- begin comment-container -->
											<?php  
									if(empty($rep->likes) || $rep->likes=="N;"){
									$rep->likes = serialize(array());
									}
									?>
                                            <div class="comment-container">
                                                <div class="comment-author">
                                                    {{$rep->name}}
                                                    <span class="comment-date">
                                                        on {{ date('D jS, M Y, h:i:s A', strtotime($rep->updated_at)) }}
                                                    </span>
                                                </div>
                                                <div class="comment-content">
                                                   {{$rep->reply}}
                                                </div>
												<!--
                                                <div class="comment-btn pull-left">
                                                    <a href="#"><i class="fa fa-reply"></i> Reply</a>
                                                </div>
												-->
                                                <div class="comment-rating">
												@if(Auth::check())
												<div class="login">
												
                                                   <a href="/likereply/{{$rep->id}}/{{Auth::user()->id}}" title="Like reply" class="m-l-10 text-inverse"> Like</a>  <!--or<a href="/dislikereply/{{$rep->id}}/{{Auth::user()->id}}" title="Dislike reply" class="m-l-10 text-inverse">Dislike</a>: --->
                                                    <a href="/likereply/{{$rep->id}}/{{Auth::user()->id}}" title="Like reply" class="m-l-10 text-inverse"><i class="fa fa-thumbs-up text-success"></i> {{count(unserialize($rep->likes))}} <p> <?php 
										$uls = unserialize($c->likes);
										foreach($us as $u){
										foreach($uls as $ul){
										
										if($u->id == $ul){
										echo $u->first_name." ".$u->last_name."<br/> ";
										}
										
										}
										}
										?></p> </a></div> </a> 
													
                                                 
												 @endif
                                                </div>
                                            </div>
                                            <!-- end comment-container -->
                                        </li>
										@endif
								@endforeach
                                    </ul>
                                    <!-- end comment-list -->
                                </div>
                                <!-- end comment-container -->
                            </li>
							
                        </ul>
						@endforeach
						
					
                        <!-- end comment-list -->
                    </div>
                    <!-- end section-container -->
                    
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="section-title m-b-20"><span>Add a Comment</span></h4>
                        
					    <div class="alert alert-warning f-s-12">
                         Heading1 will be changed to Heading2 automatically
                        </div> 
                        <form class="form-horizontal" enctype="multipart/form-data" action="/submitcomment" method="POST">
                            <div class="form-group">
                                <label class="control-label f-s-12 col-md-2" for="name">Your Name <span class="text-danger">*</span></label>
                                <div class="col-md-10">
								@if(Auth::check())
                                    <input type="text" name="name" id="name" class="form-control" value="{{Auth::user()->first_name ." ". Auth::user()->last_name }} " required/>
								@else
								 <input type="text" name="name" id="name" class="form-control" required/>
								@endif
									
									<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label f-s-12 col-md-2" for="email">Your Email <span class="text-danger">*</span></label>
                                <div class="col-md-10">
								@if(Auth::check())
                                    <input type="text" name="email" id="email" value="{{Auth::user()->email }}" class="form-control" required/>
								@else
								<input type="text" name="email" id="email" class="form-control" required/>
								@endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label f-s-12 col-md-2" for="mytextarea">Comment <span class="text-danger">*</span></label>
                                <div class="col-md-10">
								Images can be added by copy and paste(Ctrl+V)
                                    <textarea class="form-control"  name="message" id="mytextarea" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-2">
                                    <div class="checkbox f-s-12">
                                        <label>
											<input type="hidden" name="need_id" value="{{$p->id}}"/>
                                            <input type="checkbox" name="notification" value="1" />
                                            Notify me of follow-up comments by email.
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-2">
                                    <button type="submit" class="btn btn-inverse btn-lg">Submit Comment</button>
                                </div>
                            </div>
                        </form> 
                    </div>
                    <!-- end section-container -->
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
	<script>
	function reply(p_id,c_id){
	//alert(y);
	
			$('#yloader').show();
	
			frmstring = '<form action="/submitreply" method="POST" enctype="multipart/form-data"><div><input type="hidden" name="_token" value="{{ csrf_token() }}"/></div><div id="bc">Name: <input name="name" class="form-control" value="{{Auth::user()->first_name}} {{Auth::user()->middle_name}}  {{Auth::user()->last_name}}" rquired readonly> <br/>Email: <input name="email" type="email" value="{{Auth::user()->email}}"  class="form-control" required readonly/> <br/<input  name="email" type="hidden" value="1" class="form-control" required/> <br/>Reply: <textarea class="form-control" id="mytextarea" name="reply" /></textarea  ><br/><input type="hidden" value='+p_id+' name="pid"/><input type="hidden" value='+c_id+' name="c_id"/><br/><input type="checkbox" name="notification" value="1" />Notify me of follow-up comments/replies by email<br/><button class="btn btn-primary"> Reply</button></div></div></form/>';
			
			bootbox.dialog({
				title: 'Reply Form',
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