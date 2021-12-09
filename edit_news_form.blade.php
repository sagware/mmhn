<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Edit News| Materials and Manufacturing in Healthcare Network</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

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
	
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
   <link href="http:/fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="/assets_blog/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets_blog/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/animate.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/theme/default.css" id="theme" rel="stylesheet" />
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    @include("admin.analytics")
    <!-- SummerNote Javascript Library -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
	
    <script>
        $(document).ready(function () {
            /** Initialize SummerNote Javscript For Textarea */
            $('#message').summernote({
               placeholder: 'Enter the post body',
                height: '300px',
				styleTags: [
    'p',
        { title: 'Blockquote', tag: 'blockquote', className: 'blockquote', value: 'blockquote' },
        'pre', 'h1', 'Heading2', 'Heading3', 'Heading4', 'Heading5', 'Heading6'
	],
  
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
				  ['insert', ['link', 'picture']],
				  ['view', ['codeview', 'help']],
				  ['somegroup', ['style.Heading2', 'style.Heading3','style.Heading4','style.Heading5','style.Heading6' ]]
                ]
           
            });
        });
    </script>

	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
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
	
	
	<link href="http:/fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="/assets_blog/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets_blog/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/animate.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/theme/default.css" id="theme" rel="stylesheet" />
</head>

<body>
@include("admin.cookiebanner")
@if(Session::has('ms1'))
			<script type="text/javascript">
			alert("Form Submitted Successfully");
			</script>
			@endif
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
                    
						
						<br/>We are keen to share success stories of collaboration, met challenges, and new innovations from within the Network. Please complete the following fields to submit a News Story for our website, which will be reviewed by the Materials and Manufacturing in Healthcare Network team and subsequently publicly visible.
                        <div class="panel-body panel-form">
                            <form  action="/addedit/public_stories" enctype="multipart/form-data" method="POST"class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="fullname">Post title <span class="text-danger">*</span> :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text"  name="title" value="{{$n->title}}" data-parsley-required="true" required/>
										<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
										<input type="hidden" name="id" value="{{$n->id}}"/>
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="email"> Post category <span class="text-danger">*</span></label>
									<div class="col-md-6 col-sm-6">
										<select  class="form-control"   name="category" >
											<option value="news" <?php if($n->category == "news"){echo "selected";}?>>News</option>
											<option value="event" <?php if($n->category == "event"){echo "selected";}?>>Events</option>
											<option value="grant" <?php if($n->category == "grant"){echo "selected";}?>>Grant</option>
											
										</select>
										
										
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="email">Cover picture</label> 
									<div class="col-md-6 col-sm-6">
										<input type="file" class="form-control" value="{{$n->pic}}" name="pic"/>
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="email">Post in summary (max. number of characters: 100) <span class="text-danger">*</span></label> 
									<div class="col-md-6 col-sm-6">
										<textarea name="summary" class="textarea form-control" maxlength="100" id="wysihtml5" placeholder="Enter text ..." rows="12" required>{{$n->title}}</textarea>
									</div>
								</div>
								
								
								
								
															
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="email">Post in detail <span class="text-danger">*</span></label> 
									<div class="col-md-6 col-sm-6">
										  
<textarea id="image-tools" name="message">{{$n->news_body}}
 
</textarea>



                   
									</div>
								</div>
								
								
								
								
							
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"></label>
									<div class="col-md-6 col-sm-6">
										<button type="submit" class="btn btn-primary">Submit public story</button>
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
	<script src="/assets/plugins/bootstrap-wizard/js/bwizard.js"></script>
	<script src="/assets/js/form-wizards-validation.demo.min.js"></script>
	<script src="/assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script>
        $(document).ready(function() {
            $('textarea#body').summernote({
                /** Default place holder for the WYSIWYG editor */
                placeholder: 'Enter your body',

                /** Height Settings */
                height: '300px',

                /** Toolbar settings */
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']]
                ]
            });
        });
    </script>
	
	<script>
		$(document).ready(function() {
			App.init();
			FormWizardValidation.init();
		});
		
		tinymce.init({
  selector: 'textarea#image-tools',
  height: 500,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste imagetools wordcount'
  ],
  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});

	</script>
	
	<script>
	function accepted(){
			$('#cook').css('display','none');
		}
	
	</script>
	
</body>
</html>
