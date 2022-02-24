<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Challenge|Materials and Manufacturing in Healthcare Network</title>
	<meta content="width=device-width" name="viewport">
	<meta content="" name="description" />
	<meta content="" name="author" />
	<script src="/assets_blog/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="/assets_blog/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="/assets_blog/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="/assets_blog/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets_blog/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/animate.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/theme/default.css" id="theme" rel="stylesheet" />
	<!-- ================== END BASE JS ================== -->
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
	
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
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li><a href="/clinicalneeds">CHALLENGES/NEEDS</a></li>
                            <li class="active">{{$p->title}}</li>
                        </ul>
                        <h2 class="post-title">
                            <a href="#">{{$p->title}}</a>
                        </h2>
						
                        <div class="post-by">
                            Posted By <a href="#">{{$p->posted_by_name}}</a> <span class="divider">Likes 50|</span> {{ date('D jS, M Y, h:i:s A', strtotime($p->updated_at)) }} |</span> 2 Comments <a href="#" title="click to like it" class="m-l-10 text-inverse"><button> Like  <i class="fa fa-thumbs-up text-success"></i> </button></a>
                        </div>
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
                       
                        
                       
                        <!-- end post-desc -->
                    </div>
                    <!-- end post-detail -->
                    
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="section-title"><span>All Comments (3)</span></h4>
                        <!-- begin comment-list -->
                        <ul class="comment-list">
                            <li>
                                <!-- begin comment-avatar -->
                                <div class="comment-avatar">
                                    <i class="fa fa-user"></i>
                                </div>
                                <!-- end comment-avatar -->
                                <!-- begin comment-container -->
                                <div class="comment-container">
                                    <div class="comment-author">
                                        Aquila Erik 
                                        <span class="comment-date">
                                            on <span class="underline">June 6, 2015</span> at <span class="underline">6:17 pm</span>
                                        </span>
                                    </div>
                                    <div class="comment-content">
                                        Good work can you please explain paragraph 1
                                    </div>
                                    <div class="comment-btn pull-left">
                                        <a href="javascript:;" onClick="reply({{$p->id}})" title="Click here to reply to the challenge"> <i class="fa fa-reply"></i> Reply</a>
                                    </div>
                                    <div class="comment-rating">
                                        Like or Dislike: 
                                        <a href="#" class="m-l-10 text-inverse"><i class="fa fa-thumbs-up text-success"></i> 154</a>
                                        <a href="#" class="m-l-10 text-inverse"><i class="fa fa-thumbs-down text-danger"></i> 112</a>
                                    </div>
                                    <!-- begin comment-list -->
                                    <ul class="comment-list">
                                        <li>
                                            <!-- begin comment-avatar -->
                                            <div class="comment-avatar">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <!-- end comment-avatar -->
                                            <!-- begin comment-container -->
                                            <div class="comment-container">
                                                <div class="comment-author">
                                                    Gevorg Silvester 
                                                    <span class="comment-date">
                                                        on <span class="underline">June 6, 2015</span> at <span class="underline">8:17 pm</span>
                                                    </span>
                                                </div>
                                                <div class="comment-content">
                                                   Yes I will, ....
                                                </div>
                                                <div class="comment-btn pull-left">
                                                    <a href="#"><i class="fa fa-reply"></i> Reply</a>
                                                </div>
                                                <div class="comment-rating">
                                                    Like or Dislike: 
                                                    <a href="#" class="m-l-10 text-inverse"><i class="fa fa-thumbs-up text-success"></i> 5</a> 
                                                    <a href="#" class="m-l-10 text-inverse"><i class="fa fa-thumbs-down text-danger"></i> 0</a>
                                                </div>
                                            </div>
                                            <!-- end comment-container -->
                                        </li>
                                    </ul>
                                    <!-- end comment-list -->
                                </div>
                                <!-- end comment-container -->
                            </li>
                            <li>
                                <!-- begin comment-avatar -->
                                <div class="comment-avatar">
                                    <img src="/assets_blog/img/user-1.jpg" alt="" />
                                </div>
                                <!-- end comment-avatar -->
                                <!-- begin comment-container -->
                                <div class="comment-container">
                                    <div class="comment-author">
                                        Isador Ennio 
                                        <span class="comment-date">
                                            on <span class="underline">June 6, 2015</span> at <span class="underline">11:23 pm</span>
                                        </span>
                                    </div>
                                    <div class="comment-content">
                                        That is great
                                    </div>
                                    <div class="comment-btn pull-left">
                                        <a href="#"><i class="fa fa-reply"></i> Reply</a>
                                    </div>
                                    <div class="comment-rating">
                                        Like or Dislike: 
                                        <a href="#" class="m-l-10 text-inverse"><i class="fa fa-thumbs-up text-success"></i> 2</a> 
                                        <a href="#" class="m-l-10 text-inverse"><i class="fa fa-thumbs-down text-danger"></i> 0</a>
                                    </div>
                                </div>
                                <!-- end comment-container -->
                            </li>
                        </ul>
                        <!-- end comment-list -->
                    </div>
                    <!-- end section-container -->
                    
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="section-title m-b-20"><span>Add a Comment</span></h4>
                        <!--
					    <div class="alert alert-warning f-s-12">
                          replies 
                        </div> -->
                        <form class="form-horizontal" enctype="multipart/form-data" action="/submitcomment" method="POST">
                            <div class="form-group">
                                <label class="control-label f-s-12 col-md-2">Your Name <span class="text-danger">*</span></label>
                                <div class="col-md-10">
								@if(Auth::check())
                                    <input type="text" name="name" class="form-control" value="{{Auth::user()->first_name ." ". Auth::user()->last_name }} " />
								@else
								 <input type="text" name="name" class="form-control" />
								@endif
									
									<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label f-s-12 col-md-2">Your Email <span class="text-danger">*</span></label>
                                <div class="col-md-10">
								@if(Auth::check())
                                    <input type="text" name="email" value="{{Auth::user()->email }}" class="form-control" />
								@else
								<input type="text" name="email" class="form-control" />
								@endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label f-s-12 col-md-2">Comment <span class="text-danger">*</span></label>
                                <div class="col-md-10">
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
	
	<!--[if lt IE 9]>
		<script src="/assets_blog/crossbrowserjs/html5shiv.js"></script>
		<script src="/assets_blog/crossbrowserjs/respond.min.js"></script>
		<script src="/assets_blog/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="/assets_blog/plugins/jquery-cookie/jquery.cookie.js"></script>
<!--	<script src="/assets_blog/js/apps.min.js"></script>
		<script src="/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="/assets/plugins/parsley/dist/parsley.js"></script>
	<script src="/assets/plugins/bootstrap-wizard/js/bwizard.js"></script>
	<script src="/assets/js/form-wizards-validation.demo.min.js"></script>
	<script src="/assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	<script src="/assets_blog/plugins/jquery-cookie/jquery.cookie.js"></script>
	<script src="/assets_blog/js/apps.min.js"></script>
	<script src="/assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="/assets/plugins/DataTables/extensions/KeyTable/js/dataTables.keyTable.min.js"></script>
	<script src="/assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="/assets/js/table-manage-keytable.demo.min.js"></script>
	<script src="/assets/js/bootbox.min.js"></script>
	<script>
	function reply(p_id){
	//alert(y);
	
			$('#yloader').show();
	
			frmstring = '<form action="/reply" method="POST" enctype="multipart/form-data"><div><input type="hidden" name="_token" value="{{ csrf_token() }}"/></div><div id="bc">Reply: <textarea class="form-control" name="message" /></textarea><br/><input type="hidden" value='+p_id+' name="pid"/><button class="btn btn-primary"> Submit Rejection</button></div></div></form/>';
			
			bootbox.dialog({
				title: 'Rejection Form',
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
	<script>
	    $(document).ready(function() {
	        App.init();
	    });
	</script>
</body>
</html>